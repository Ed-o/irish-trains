<?php

#and train movement :

#http://api.irishrail.ie/realtime/realtime.asmx/getTrainMovementsXML?TrainId=e109&TrainDate=21%20dec%202011

#<ArrayOfObjTrainMovements xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns="http://api.irishrail.ie/realtime/">
#<objTrainMovements>
#<TrainCode>E109</TrainCode>
#<TrainDate>21 Dec 2011</TrainDate>
#<LocationCode>MHIDE</LocationCode>
#<LocationFullName>Malahide</LocationFullName>
#<LocationOrder>1</LocationOrder>
#<LocationType>O</LocationType>
#<TrainOrigin>Malahide</TrainOrigin>
#<TrainDestination>Greystones</TrainDestination>
#<ScheduledArrival>00:00:00</ScheduledArrival>
#<ScheduledDeparture>10:30:00</ScheduledDeparture>
#<ExpectedArrival>00:00:00</ExpectedArrival>
#<ExpectedDeparture>10:30:00</ExpectedDeparture>
#<Arrival>10:19:24</Arrival>
#<Departure>10:30:24</Departure>
#<AutoArrival>1</AutoArrival>
#<AutoDepart>1</AutoDepart>
#<StopType>-</StopType>
#</objTrainMovements>
#

include_once "header.php";

$trainid = $_GET["trainid"];
$trainid = filter_var($trainid, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
$trainid = filter_var($trainid, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

$traindate = $_GET["traindate"];
$traindate = filter_var($traindate, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
$traindate = filter_var($traindate, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

if ($traindate == "" ){
	$traindate="05%20dec%2014";
}

echo "Train info : <br />\n";

$url = 'http://api.irishrail.ie/realtime/realtime.asmx/getTrainMovementsXML?TrainId=' . $trainid . '&TrainDate=' . $traindate ;
#echo "train URL = $url<br />\n";
$train = simpleXML_load_file($url,"SimpleXMLElement",LIBXML_NOCDATA);
if($train ===  FALSE)
{
   echo "Error - train data not available";
}
else
{
    foreach ($train as $traininfo):
	# echo "found one<br />\n";
	$Traincode=$traininfo->Traincode;
	$TrainDate=$traininfo->TrainDate;
       $LocationCode=$traininfo->LocationCode;
       $LocationFullName=$traininfo->LocationFullName;
       $LocationOrder=$traininfo->LocationOrder;
       $LocationType=$traininfo->LocationType;
       $TrainOrigin=$traininfo->TrainOrigin;
       $TrainDestination=$traininfo->TrainDestination;
       $ScheduledArrival=$traininfo->ScheduledArrival;
       $ScheduledDeparture=$traininfo->ScheduledDeparture;
       $ExpectedArrival=$traininfo->ExpectedArrival;
       $ExpectedDeparture=$traininfo->ExpectedDeparture;
       $Arrival=$traininfo->Arrival;
       $Departure=$traininfo->Departure;
       $AutoArrival=$traininfo->AutoArrival;
       $AutoDepart=$traininfo->AutoDepart;
       $StopType=$traininfo->StopType;

	echo "<a href=\"show.php?from=$LocationCode\">$LocationFullName</a> : Scheduled at $ScheduledDeparture : Due at $ExpectedDeparture";
	echo "<br />\n";
    endforeach;
}
?>




<?php
include_once "footer.php";
?>
