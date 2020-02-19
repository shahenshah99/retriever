<?php
$servername = "localhost";
$username = "slade";
$password = "E11!0tJain";
$dbname = "mysql";
$name = $_GET["USN"];
$pass = $_GET["password"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "INSERT INTO detail (detail_pass, detail_usn) VALUES ('".$pass."','".$name."')";
$result = mysqli_query($conn, $query);
     if ($result) {
	     //SUCCESS
        echo "SUCCESS";
	} else {
            //FAILURE
            die("Database query failed. " . mysqli_error($connection));
            //last bit is for me, delete when done
        }

mysqli_close($connection);
?>
