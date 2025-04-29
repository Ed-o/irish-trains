# Get station list :
http://api.irishrail.ie/realtime/realtime.asmx/getAllStationsXML

format :
<ArrayOfObjStation xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns="http://api.irishrail.ie/realtime/">
<objStation>
<StationDesc>Belfast Central</StationDesc>
<StationAlias/>                 or   <StationAlias>Phoenix Park</StationAlias>
<StationLatitude>54.6123</StationLatitude>
<StationLongitude>-5.91744</StationLongitude>
<StationCode>BFSTC</StationCode>
<StationId>228</StationId>
</objStation>
 

# All current trains :
http://api.irishrail.ie/realtime/realtime.asmx/getCurrentTrainsXML

format :
<ArrayOfObjTrainPositions xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns="http://api.irishrail.ie/realtime/">
<objTrainPositions>
<TrainStatus>N</TrainStatus>
<TrainLatitude>51.9018</TrainLatitude>
<TrainLongitude>-8.4582</TrainLongitude>
<TrainCode>A225</TrainCode>
<TrainDate>25 Nov 2014</TrainDate>
<PublicMessage>
A225\nCork to Dublin Heuston\nExpected Departure 17:20
</PublicMessage>
<Direction>To Dublin Heuston</Direction>
</objTrainPositions>


# Trains for a station :
http://api.irishrail.ie/realtime/realtime.asmx/getStationDataByNameXML?StationDesc=Bayside


# Station Data by code :

http://api.irishrail.ie/realtime/realtime.asmx/getStationDataByCodeXML_WithNumMins?StationCode=mhide&NumMins=20

format :

<ArrayOfObjStationData xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns="http://api.irishrail.ie/realtime/">
<objStationData>
<Servertime>2014-11-25T17:19:58.773</Servertime>
<Traincode>E821</Traincode>
<Stationfullname>Malahide</Stationfullname>
<Stationcode>MHIDE</Stationcode>
<Querytime>17:19:58</Querytime>
<Traindate>25 Nov 2014</Traindate>
<Origin>Greystones</Origin>
<Destination>Malahide</Destination>
<Origintime>16:00</Origintime>
<Destinationtime>17:20</Destinationtime>
<Status/>
<Lastlocation>Arrived Malahide</Lastlocation>
<Duein>2</Duein>
<Late>1</Late>
<Exparrival>17:21</Exparrival>
<Expdepart>00:00</Expdepart>
<Scharrival>17:20</Scharrival>
<Schdepart>00:00</Schdepart>
<Direction>Northbound</Direction>
<Traintype>DART</Traintype>
<Locationtype>D</Locationtype>
</objStationData>


# Details of a single train :
http://api.irishrail.ie/realtime/realtime.asmx/getTrainMovementsXML?TrainId=e109&TrainDate=21%20dec%202011

format :

<ArrayOfObjTrainMovements xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns="http://api.irishrail.ie/realtime/">
<objTrainMovements>
<TrainCode>E109</TrainCode>
<TrainDate>21 Dec 2011</TrainDate>
<LocationCode>MHIDE</LocationCode>
<LocationFullName>Malahide</LocationFullName>
<LocationOrder>1</LocationOrder>
<LocationType>O</LocationType>
<TrainOrigin>Malahide</TrainOrigin>
<TrainDestination>Greystones</TrainDestination>
<ScheduledArrival>00:00:00</ScheduledArrival>
<ScheduledDeparture>10:30:00</ScheduledDeparture>
<ExpectedArrival>00:00:00</ExpectedArrival>
<ExpectedDeparture>10:30:00</ExpectedDeparture>
<Arrival>10:19:24</Arrival>
<Departure>10:30:24</Departure>
<AutoArrival>1</AutoArrival>
<AutoDepart>1</AutoDepart>
<StopType>-</StopType>
</objTrainMovements>


