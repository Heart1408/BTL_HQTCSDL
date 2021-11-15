<?php 

    
    include '../db_connect.php';

    $vaccine = $_POST['vaccine'];
    $doctor = $_POST['doctor'];
    $schedule = $_POST['schedule'];
    $citizen = $_POST['citizen'];

    $sql = "UPDATE scheduledetail SET vaccine_id = '$vaccine', doctor_id = '$doctor', status = 'Hoàn thành' 
            WHERE citizen_id = '$citizen' AND schedule_id = '$schedule';";

    $res = mysqli_query($con, $sql);
    
?>