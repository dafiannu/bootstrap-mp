<?php

include 'koneksi.php';
if(isset($_POST['update'])){
  $no = $_POST['no'];
  $email = $_POST['client'];
  $date = $_POST['date'];
  $description = $_POST['description'];
  $sql = "UPDATE project SET client ='$email', date ='$date', description ='$description' WHERE no ='$no'";
  $query = mysqli_query($connect, $sql);  
  if ($query) {
    header("location: index.php");
  } else {
    header("location: index.php");
  }
}

?>
