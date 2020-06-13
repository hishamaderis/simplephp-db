<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<h1>Avengers<h1>
<?php
$servername = "172.17.0.2";
$username = "spuser";
$password = "1234";
$dbname = "spdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT firstname, lastname, alterego FROM avengers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>FirstName</th><th>LastName</th><th>Alter Ego</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td> " . $row["alterego"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
</body>
</html>
