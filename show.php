<?php

# http://api.irishrail.ie/realtime/realtime.asmx/getStationDataByCodeXML_WithNumMins?StationCode=mhide&NumMins=20

# format :

#<ArrayOfObjStationData xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns="http://api.irishrail.ie/realtime/">
#<objStationData>
#<Servertime>2014-11-25T17:19:58.773</Servertime>
#<Traincode>E821</Traincode>
#<Stationfullname>Malahide</Stationfullname>
#<Stationcode>MHIDE</Stationcode>
#<Querytime>17:19:58</Querytime>
#<Traindate>25 Nov 2014</Traindate>
#<Origin>Greystones</Origin>
#<Destination>Malahide</Destination>
#<Origintime>16:00</Origintime>
#<Destinationtime>17:20</Destinationtime>
#<Status/>
#<Lastlocation>Arrived Malahide</Lastlocation>
#<Duein>2</Duein>
#<Late>1</Late>
#<Exparrival>17:21</Exparrival>
#<Expdepart>00:00</Expdepart>
#<Scharrival>17:20</Scharrival>
#<Schdepart>00:00</Schdepart>
#<Direction>Northbound</Direction>
#<Traintype>DART</Traintype>
#<Locationtype>D</Locationtype>
#</objStationData>

include_once "header.php";

$stnid = $_GET["from"];
$stnid = filter_var($stnid, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
$stnid = filter_var($stnid, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

$stnto = $_GET["to"];
$stnto = filter_var($stnto, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
$stnto = filter_var($stnto, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

$dir = $_GET["dir"];
$dir = filter_var($dir, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
$dir = filter_var($dir, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

$min = $_GET["min"];
$min = filter_var($min, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
$min = filter_var($min, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo "Seraching for trains :";
if ($stnid != "") { echo " from Station : $stnid";}
if ($stnto != "") { echo " going to Station : $stnto";}
echo "<br />\n";

if (($stnid == "") and ($stnto != "")) { // we need to swap the trains round
	$stnid = $stnto;
	$stnto = "";
}


if ($min== "") { $min="30"; }

if ($stnid != "") {
	$fromurl = 'http://api.irishrail.ie/realtime/realtime.asmx/getStationDataByCodeXML_WithNumMins?StationCode=' . $stnid . '&NumMins=' .$min;
	$fromstations = simpleXML_load_file($fromurl,"SimpleXMLElement",LIBXML_NOCDATA);
	$min=90; // so we get as many trains if there is a destination station
}
if ($stnto != "") {
	$tourl = 'http://api.irishrail.ie/realtime/realtime.asmx/getStationDataByCodeXML_WithNumMins?StationCode=' . $stnto . '&NumMins=' .$min;
	$tostations = simpleXML_load_file($tourl,"SimpleXMLElement",LIBXML_NOCDATA);
} 

if (($fromstations ===  FALSE) and ($tostations ===  FALSE))
{
   echo "Error - station data not available";
}
else
{
    if ($fromstations !==  FALSE) {
    $numfound = 0;
    foreach ($fromstations as $stationinfo) {
        $desc=$stationinfo->StationDesc;
	$Traincode=$stationinfo->Traincode;
	$Stationfullname=$stationinfo->Stationfullname;
	$Stationcode=$stationinfo->Stationcode;
	$Querytime=$stationinfo->Querytime;
	$Traindate=$stationinfo->Traindate;
	$Origin=$stationinfo->Origin;
	$Destination=$stationinfo->Destination;
	$Origintime=$stationinfo->Origintime;
	$Destinationtime=$stationinfo->Destinationtime;
	$Status=$stationinfo->Status;
	$Lastlocation=$stationinfo->Lastlocation;
	$Duein=$stationinfo->Duein;
	$Late=$stationinfo->Late;
	$Exparrival=$stationinfo->Exparrival;
	$Expdepart=$stationinfo->Expdepart;
	$Scharrival=$stationinfo->Scharrival;
	$Schdepart=$stationinfo->Schdepart;
	$Direction=$stationinfo->Direction;
	$Traintype=$stationinfo->Traintype;
	$Locationtype=$stationinfo->Locationtype;

	$valid = 1;

	if ($dir != "") { 
		if (($dir == "N") and ($Direction == "Southbound")) { $valid = 0; }
		if (($dir == "S") and ($Direction == "Northbound")) { $valid = 0; }
	}

	if ( $Direction == "") { $Direction="<none>"; }

	if ($Lastlocation != "" ) { $Lastlocation = " : Last location - $Lastlocation"; }

	if ( $Late != "" ) { $Late = "[+$Late]"; }

	# Lets check if the train goes where we want :
	if (($stnid != "") and ($stnto != "")) {
		$goestorightplace = 0;
		foreach ($tostations as $deststationinfo) {
			$DestTraincode=$deststationinfo->Traincode;
				if ("$Traincode" == "$DestTraincode") {
					$goestorightplace = 1;
				}
				// echo "Checking [$Traincode] == [$DestTraincode]";
				// echo " found : $goestorightplace <br />";
		}
		
		if ($goestorightplace == 0) { $valid = 0; }
	}

	if ($valid == 1) {
		$numfound = $numfound +1 ;
		echo "$Expdepart : <a href=\"train.php?trainid=$Traincode&traindate=$Traindate\">$Destination</a> : Due in $Duein $Late $Lastlocation : Direction - $Direction";
		echo "<br />\n";
	}
    }
    if ($numfound == 0) {
	echo "Sorry - no trains found !<br />\n";
    }  
  }
}

?>




<?php
include_once "footer.php";
?>
