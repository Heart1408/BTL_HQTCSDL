<?php 
    include '../db_connect.php';

    $identity = $_POST['identity'];

    $sql = "SELECT * FROM citizen
            INNER JOIN ward ON ward.ward_id = citizen.ward_id
            INNER JOIN district ON district.district_id = ward.district_id
            INNER JOIN province ON province.province_id = district.province_id 
            WHERE identity_number = '$identity';";

    $res = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_object($res))
    {
        echo "<li class='completed'>
        <p>Họ tên: $row->full_name</p>
    </li>
    <li class='completed'>
        <p>Ngày sinh: $row->birth_date</p>
    </li>
    <li class='not-completed'>
        <p>Giới tính: $row->gender</p>
    </li>
    <li class='completed'>
        <p>Số điện thoại: $row->phone</p>
    </li>
    <li class='not-completed'>
        <p>Email: $row->email</p>
    </li>
    <li class='completed'>
        <p>Số CMND/CCCD/HC: $row->identity_number</p>
    </li>
    <li class='not-completed'>
        <p>Số thẻ BHYT: $row->insurance_number</p>
    </li>
    <li class='completed'>
        <p>Nghề Nghiệp: $row->job</p>
    </li>
    <li class='not-completed'>
        <p>Đơn vị công tác: $row->company</p>
    </li>
    <li class='completed'>
        <p>Địa chỉ hiện tại: $row->address</p>
    </li>
    <li class='not-completed'>
        <p>Tỉnh/TP: $row->province_name</p>
    </li>
    <li class='not-completed'>
        <p>Quận/Huyện: $row->district_name</p>
    </li>
    <li class='completed'>
        <p>Xã/Phường: $row->ward_name</p>
    </li>
    <li class='not-completed'>
        <p>Dân Tộc: $row->ethnic</p>
    </li>
    <li class='not-completed'>
        <p>Quốc tịch: $row->nationality</p>
    </li>";
    break;
    }
?>