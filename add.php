<?php
    include 'koneksi.php';  
    
    // $id = $_POST['id'];
    $email = $_POST['client'];
    $service = $_POST['service'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $query = mysqli_query($connect, "INSERT INTO project (client, service, description, date) VALUES ('$email', '$service', '$description', '$date') ");
    if ($query) {
        header("location: index.php");
    } else {
        header("location: index.php");
    }
?>