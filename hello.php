<?php

$host = "db";
$user = "sneha";
$password = "devpass";
$db = "test_db";

if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We don\'t have mysqli!!!';
} else {
    echo 'Phew we have it!';
}

$conn = mysqli_connect($host, $user,$password,$db);
if($conn === false)
{ die("connection failed ". mysqli_connect_error());}


$sql = "CREATE TABLE user(id INT(6), firstName VARCHART(15), lastName VARCHAR(15))";
if($conn->query($sql) === true)
{ echo " table created"; }
 
?>


