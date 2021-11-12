<?php include "connect.php"; 

$conn->query("delete from mahasiswa where nim='".$_GET['nim']."'");

?>