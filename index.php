<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<h2>Justice League</h2>

<table>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Alter Ego</th>
  </tr>
  <tr>
    <td>Clark</td>
    <td>Kent</td>
    <td>Superman</td>
  </tr>
  <tr>
    <td>Bruce</td>
    <td>Wayne</td>
    <td>Batman</td>
  </tr>
  <tr>
    <td>Diana</td>
    <td>Prince</td>
    <td>Wonder Woman</td>
  </tr>
  <tr>
    <td>Barry</td>
    <td>Allen</td>
    <td>The Flash</td>
  </tr>
  <tr>
    <td>Hal</td>
    <td>Jordan</td>
    <td>Green Lantern</td>
  </tr>
  <tr>
    <td>Arthur</td>
    <td>Curry</td>
    <td>Aquaman</td>
  </tr>
</table>

</body>
</html>

<!--
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<?php
$servername = "172.17.0.3";
$username = "spuser";
$password = "1234";
$dbname = "spdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT firstname, lastname, age FROM staff";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>FirstName</th><th>LastName</th><th>Age</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td> " . $row["age"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
</body>
</html>
-->
