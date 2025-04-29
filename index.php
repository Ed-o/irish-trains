<?php
include_once "header.php";

$sql =  "SELECT * FROM `stations` ORDER BY `desc` ASC;";
$result = $conn->query($sql);
$station = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
	$station[] = $row; 
   }
} else {
    echo "Error : no stations <br />\n";
}
?>
<form action="show.php" method="get">
<?php
$sql =  "SELECT * FROM `stations` ORDER BY `desc` ASC;"; 
$result = $conn->query($sql);

echo "From : <select name=\"from\">\n";
echo "  <option value=\"\">-Pick station-</option>\n";
foreach ($station as $row) { 
	echo "  <option value=\"". $row["code"] ."\">". $row["desc"] ."</option>\n";
}
echo "</select>\n";
echo "<br />\n";
echo "To :   <select name=\"to\">\n";
echo "  <option selected value=\"\">-Pick station-</option>\n";
foreach ($station as $row) {
        echo "  <option value=\"". $row["code"] ."\">". $row["desc"] ."</option>\n";
}
echo "</select>\n";
echo "<br />\n";
echo "Dir  : <select name=\"dir\">\n";
echo "  <option value=\"\">Any Direction</option>\n";
echo "  <option value=\"N\">Northbound only</option>\n";
echo "  <option value=\"S\">Southbound only</option>\n";
echo "</select>\n<br />\n";
echo "Within : <select name=\"min\">\n";
echo "  <option value=\"05\">05 mins</option>\n";
echo "  <option value=\"10\">10 mins</option>\n";
echo "  <option value=\"15\">15 mins</option>\n";
echo "  <option selected value=\"30\">30 mins</option>\n";
echo "  <option value=\"45\">45 mins</option>\n";
echo "  <option value=\"60\">60 mins</option>\n";
echo "  <option value=\"90\">90 mins</option>\n";
echo "</select>\n<br />\n";
?>
<br />
<input type="submit" name="submit" value="submit">
</form>
<br /><br /><br /><br /><br />
<?php
include_once "footer.php";
?>
