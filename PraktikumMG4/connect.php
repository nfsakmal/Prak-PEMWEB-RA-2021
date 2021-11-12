<?php
$password = "";
$db= "prakpemwebmg4";

$conn= mysqli_connect("localhost", "root", $password, $db);

if (!$conn){
    die('Failed to connect!');
}
?>