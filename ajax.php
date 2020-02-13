<?php
$mysqli = new mysqli("localhost", "root", "", "region");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT branch, address, contact, IFSC
FROM bank WHERE branch = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($branch, $address, $contact, $IFSC);
$stmt->fetch();
$stmt->close();
echo "<table>";
echo "<tr>";
echo "<th>branch</th>";
echo "<td>" . $branch . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>address</th>";
echo "<td>" . $address . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Contact</th>";
echo "<td>" . $contact . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>IFSC code</th>";
echo "<td>" . $IFSC . "</td>";
echo "</tr>";
echo "</table>";

?>