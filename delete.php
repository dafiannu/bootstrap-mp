<?php
include 'koneksi.php';
$no = $_GET['no'];
$sql = $connect->query("SELECT * FROM project WHERE no ='$no'");
$project = $sql->fetch_assoc();
$query = $connect->query("DELETE FROM project WHERE no ='$no'");

if ($query) {
    header("location: index.php");
} else {
    header("location: index.php");
}