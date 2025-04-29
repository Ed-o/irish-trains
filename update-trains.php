<?php

# Get Current Trains - usage http://api.irishrail.ie/realtime/realtime.asmx/getCurrentTrainsXML 

# format :
#	<ArrayOfObjTrainPositions xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns="http://api.irishrail.ie/realtime/">
#	<objTrainPositions>
#	<TrainStatus>N</TrainStatus>
#	<TrainLatitude>51.9018</TrainLatitude>
#	<TrainLongitude>-8.4582</TrainLongitude>
#	<TrainCode>A225</TrainCode>
#	<TrainDate>25 Nov 2014</TrainDate>
#	<PublicMessage>
#	A225\nCork to Dublin Heuston\nExpected Departure 17:20
#	</PublicMessage>
#	<Direction>To Dublin Heuston</Direction>
#	</objTrainPositions>
# ...


include_once "header.php";

$url = 'http://api.irishrail.ie/realtime/realtime.asmx/getCurrentTrainsXML';
$trains = simpleXML_load_file($url,"SimpleXMLElement",LIBXML_NOCDATA);
if($trains ===  FALSE)
{
   echo "Error - train data not available";
}
else
{
    $sql =  "TRUNCATE TABLE `trains`;";
    if ($conn->query($sql) === TRUE) {
            echo "*** Dropped records *** <br />\n";
    } else {
            echo "Error: " . $sql . "<br />\n" . $conn->error;
    }

    foreach ($trains as $train):
        $status=$train->TrainStatus;
        $latitude=$train->TrainLatitude;
        $longitude=$train->TrainLongitude;
        $code=$train->TrainCode;
        $trdate=$train->TrainDate;
        $message=$train->PublicMessage;
        $direction=$train->Direction;

        # echo "$desc<br>\n";

        $sql =  "INSERT INTO `trains` (`id`, `status`, `latitude`, `longitude`, `code`, `trdate`, `message`, `direction`) " .
                "VALUES (NULL, '$status', '$latitude', '$longitude', '$code', '$trdate', '$message', '$direction');" ;
        if ($conn->query($sql) === TRUE) {
                echo "Added : $code <br />\n";
        } else {
                echo "Error: " . $sql . "<br />\n" . $conn->error;
        }


    endforeach;
}
include_once "footer.php";
?>


