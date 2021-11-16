<?php 
    include '../db_connect.php';

    $identity = $_POST['identity'];

    $sql = "SELECT phan_ve, loai_di_ung, covid, other_vaccine, other_vaccine_name, ung_thu FROM medical_history
            INNER JOIN scheduledetail ON medical_history.medicalHistory_id = scheduledetail.medicalHistory_id
            INNER JOIN citizen ON scheduledetail.citizen_id = citizen.citizen_id
            WHERE identity_number = '$identity';";
    $res = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_object($res))
    {
        echo "
            <p>&bull;  Tiền sử phản vệ từ 2 độ trở lên: $row->phan_ve</p>
            <br>
            <p>&bull;  Các loại tác nhân dị ứng: $row->loai_di_ung</p>
            <br>
            <p>&bull;  Tiền sử bị Covid-19 trong vòng 6 tháng qua: $row->covid</p>
            <br>
            <p>&bull;  Tiền sử tiêm vắc xin khác trong vòng 14 ngày qua: $row->other_vaccine</p>
            <br>
            <p>&bull;  Loại vắc xin: $row->other_vaccine_name</p>
            <br>
            <p>&bull;  Tiền sử suy giảm miễn dịch, ung thư giai đoạn cuối, cắt lách, xơ gan mất bù: $row->ung_thu</p>
    
            ";
        break;
    }
?>