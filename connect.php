<?php
// Connecting to the Database
$servername = "127.0.0.1";
$username = "Varshini";
$password = "1234";
 
// Create a connection
$conn = mysqli_connect($servername, $username, $password);
 
// Die if connection was not successful
if (!$conn){
 die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
 echo "Connection was successful<br>";
}
 
// Create a db
$sql = "CREATE DATABASE car_rental";
 
$result = mysqli_query($conn, $sql);
 
// Check for the database creation success
if($result){
 echo "The database is successfully created!<br>";
}
else{
 echo "The db creation failed because of this error ---> ". mysqli_error($conn);
}

// Create a table in the db

 
?>