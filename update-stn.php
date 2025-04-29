<?php
include_once "header.php";

$url = 'http://api.irishrail.ie/realtime/realtime.asmx/getAllStationsXML'; 
$stations = simpleXML_load_file($url,"SimpleXMLElement",LIBXML_NOCDATA); 
if($stations ===  FALSE) 
{ 
   echo "Error - station data not available";
} 
else 
{
    foreach ($stations as $stationinfo):
        $desc=$stationinfo->StationDesc;
        $alias=$stationinfo->StationAlias;
        $latitude=$stationinfo->StationLatitude;
        $longitude=$stationinfo->StationLongitude;
        $code=$stationinfo->StationCode;
	
        # echo "$desc<br>\n";

	$sql =  "INSERT INTO `stations` (`id`, `desc`, `alias`, `latitude`, `longitude`, `code`) " .
		"VALUES (NULL, '$desc', '$alias', '$latitude', '$longitude', '$code');" ;
	if ($conn->query($sql) === TRUE) {
    		echo "Added : $desc<br />\n";
	} else {
    		echo "Error: " . $sql . "<br />\n" . $conn->error;
	}


    endforeach;
}
include_once "footer.php";
?>

