<?php
$host = "localhost";
$username = "root";
$password = "root";
$database = "verou_test";

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
echo 'Connected successfully';

// execute query
$sql = "UPDATE groups SET status = 'Nothing wrong here. And no of course we didn`t release a crocodile.' WHERE id = 3";

if ($conn->query($sql) === TRUE) 
{
    echo "Update executed successfully";
} 
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// close connection
mysqli_close($conn);