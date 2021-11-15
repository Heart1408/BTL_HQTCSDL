<?php 
    include '../db_connect.php';
    $num_inject = $_POST['num_inject'] - 1;
    $fullname = $_POST['fullname'];
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $identity = $_POST['identity'];
    $bhyt = $_POST['bhyt'];
    $job = $_POST['job'];
    $company = $_POST['company'];
    $address = $_POST['address'];
    $ward = $_POST['ward'];
    $ethnic = $_POST['ethnic'];
    $nationality = $_POST['nationality'];
    $lichtiem = $_POST['lichtiem'];
    $phan_ve = $_POST['phan_ve'];
    $di_ung = $_POST['di_ung'];
    $covid = $_POST['covid'];
    $other_vaccine = $_POST['other_vaccine'];
    $other_vaccine_name = $_POST['other_vaccine_name'];
    $ung_thu = $_POST['ung_thu'];

    $sql = "INSERT INTO citizen(full_name, gender, birth_date, phone, identity_number, number_injection, ward_id, ethnic, nationality) 
            VALUES('$fullname', '$gender', '$birthdate', '$phone', '$identity', $num_inject, $ward, '$ethnic', '$nationality');";

    $res = mysqli_query($con, $sql);
    $zen_id = $con->insert_id;

    if ($email != "") {
        $sql = "UPDATE citizen SET email = '$email' WHERE identity_number = '$identity'";
        $res = mysqli_query($con, $sql);
    }

    if ($bhyt != "") {
        $sql = "UPDATE citizen SET insurance_number = '$bhyt' WHERE identity_number = '$identity';";
        $res = mysqli_query($con, $sql);
    }

    if ($job != "") {
        $sql = "UPDATE citizen SET job = '$job' WHERE identity_number = '$identity';";
        $res = mysqli_query($con, $sql);
    }

    if ($company != "") {
        $sql = "UPDATE citizen SET company = '$company' WHERE identity_number = '$identity';";
        $res = mysqli_query($con, $sql);
    }

    if ($address != "") {
        $sql = "UPDATE citizen SET address = '$address' WHERE identity_number = '$identity';";
        $res = mysqli_query($con, $sql);
    }


    $sql = "INSERT INTO medical_history(phan_ve, covid, other_vaccine, ung_thu) VALUES('$phan_ve', '$covid', '$other_vaccine', '$ung_thu');";
    $res = mysqli_query($con, $sql);

    $mh_id = $con->insert_id;

    if ($di_ung != "")
    {
        $sql = "UPDATE medical_history SET loai_di_ung = '$di_ung' WHERE medicalHistory_id = '$mh_id'";
        $res = mysqli_query($con, $sql);
    }

    if($other_vaccine_name !="")
    {
        $sql = "UPDATE medical_history SET other_vaccine_name = '$other_vaccine_name' WHERE medicalHistory_id = '$mh_id'";
        $res = mysqli_query($con, $sql);
    }

    $sql = "INSERT INTO scheduledetail(schedule_id, citizen_id, status, medicalHistory_id) VALUES('$lichtiem', '$zen_id', 'Đăng ký', '$mh_id');";
    $res = mysqli_query($con, $sql);
?>