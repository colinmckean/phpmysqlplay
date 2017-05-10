<?php
$server = getenv('IP');
$username = getenv('C9_USER');
$password = "";
$database = "my_first_database";
$dbport = 3306;

//creating a connection
$db = new mysqli($servername, $username, $password, $database, $dbport);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
echo "Connected successfully (".$db->host_info.")";
?>