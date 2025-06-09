<?php
$koneksi = new mysqli("localhost", "root", "", "db_izul");
$id = $_GET['id'];
$koneksi->query("DELETE FROM portofolio WHERE id=$id");
header("Location: index.php");
?>
