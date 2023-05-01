<?php
$servername = "redlock-db";
$username = "user";
$password = "pass";
$dbname = "Redlock";

// Start Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Display users table
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Address</th><th>Position</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["ID"]."</td><td>".$row["Nama"]."</td><td>".$row["Alamat"]."</td><td>".$row["Jabatan"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "There is no users data!";
}

$conn->close();
?>