<?php 
    include '../db_connect.php';
    $schedule = $_POST['schedule'];

    $sql = "SELECT citizen.citizen_id, full_name, identity_number FROM scheduledetail
            INNER JOIN citizen ON scheduledetail.citizen_id = citizen.citizen_id
            WHERE schedule_id = '$schedule';";
    $res = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_object($res))
    {
        echo "<tr onclick='click_citizen(this)'>
        <td>
            <p>$row->full_name</p>
        </td>
        <td class='identity_number'>$row->identity_number</td>
        <td>
            <a onclick='history_show(this)'>
                <span class='view'><i class='fas fa-paste'></i>Xem thông tin</span>
            </a>
        </td>
    </tr>";
    }
?>