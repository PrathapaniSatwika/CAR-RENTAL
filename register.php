<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "carrental_db";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
echo "Connection is successful<br>";
}
// Variables to be inserted into the table
$doc->loadHTMLFile("Login.html");
$F_name=$doc->getElementById("full name");
$u_name=$doc->getElementById("suname");
$p_name=$doc->getElementById("spsw");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{

$fn = $F_name;
$un = $u_name;
$pwd = $p_name;

// Sql query to be executed
$s = "INSERT INTO customer(Fname,Uname,Password) VALUES
('$fn', '$un','$pwd')";
$result = mysqli_query($conn, $s);
if($result){
echo "The record has been inserted successfully!<br>";
}
else{
echo "The record was not inserted successfully because of this error ---> ".
mysqli_error($conn);
}
}
?>
