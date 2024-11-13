<?php
include 'koneksi.php';
include 'update.php';
?>

<doctype html>
<html>
    <body>
        <h1>EDIT DATA</h1>
        <?php
        include 'koneksi.php';
        $query = mysqli_query($connect, "SELECT * FROM project ");
        while ($project = mysqli_fetch_array($query)) { 
            ?>
            <form action="update.php" method="POST">
                <input type="hidden" name='no' value="<?php echo $project['no']; ?>">
                <input type="text" name='client' value="<?php echo $project['client']; ?>">
                <input type="text" name='description' value="<?php echo $project['description']; ?>">
                <input type="date" name='date' value="<?php echo $project['date']; ?>">
            <button type = "submit" name = "update">update</button>
            </form> <?php } ?>
    </body>
</html>