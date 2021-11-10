<?php 
    include 'db_connect.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM schedule WHERE schedule_id = $id";

    $res = mysqli_query($con, $sql);
?>