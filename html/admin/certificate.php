<div class="head-title">
    <div class="left">
        <h2>Cập nhật chứng nhận tiêm chủng</h2>
        <ul class="breadcrumb">
            <li>
                <a href="#">Dữ liệu người dùng</a>
            </li>
            <li><i class='bx bx-chevron-right' ></i></li>
            <li>
                <a class="active" href="#">Chứng nhận tiêm chủng</a>
            </li>
        </ul>
    </div>
    <a href="#" class="btn-download">
        <i class="fas fa-file-export"></i>
        <span class="text">Export to Excel</span>
    </a>
</div>

<div class="table-data">
    <div class="user_data">
        <form action="" method="POST">
            <div class="row">
                <label class="first_label">Số CMND/CCCD/HC: </label>
                <input type="text" id="citizen_number" name="citizen_number">
            </div>

            <div class="row">
                <label class="first_label">Họ và tên: </label>
                <input type="text" id="citizen_name">
            </div>

            <div class="row">
                <label class="first_label">Ngày sinh: </label>
                    <input type="date" id="citizen_birthdate">
            </div>
            
            <div class="row">
                <label class="first_label">Số thẻ BHYT: </label>
                <input type="text">
            </div>
            
            <div class="row">
            <label class="first_label">Loại vắc xin: </label>
                <?php 
                    $siteID = $_GET['site'];

                    $sql = "SELECT vaccine.vaccine_id, vaccine_name FROM vaccine
                            INNER JOIN storage ON vaccine.vaccine_id = storage.vaccine_id
                            WHERE injectionSite_id = '$siteID';";

                    $res = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_object($res))
                    {
                        ?>
                        <span>
                            <input type="radio" id="citizen_vaccine" name="vaccine" value="<?php echo $row->vaccine_id; ?>">
                            <label for=""><?php echo $row->vaccine_name; ?></label>
                        </span>

                        <?php
                    }
                ?>
                
                
                
            </div>
            
            <div class="row">
                <label class="first_label">Mũi tiêm: </label>
                <span>
                    <input type="radio" id="first_dose" name="dose" value="1">
                    <label for="first_dose">1</label>
                </span>
                
                <span>
                    <input type="radio" id="second_dose" name="dose" value="2">
                    <label for="second_dose">2</label>
                </span>
            
            </div>
            
            <div class="row">
                <label class="first_label">Ngày tiêm: </label>
                <select id="citizen_lich" name="citizen_lich">
                    <?php 
                        $today = date("Y-m-d");
                        $sql = "SELECT schedule_id, date, start_time, end_time FROM schedule WHERE injectionSite_id = '$siteId' AND date <= '$today'";
                        $res = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_object($res)) {
                            $date = date_create("$row->date");
                            $date = date_format($date, "d/m/Y");
                            $start = date_create("$row->start_time");
                            $start = date_format($start, "H:i");
                            $end = date_create("$row->end_time");
                            $end = date_format($end, "H:i");
                            $time = $date." (".$start." - ".$end.")";
                            ?>
                            <option value="<?php echo $row->schedule_id; ?>"><?php echo $time; ?></option>
                            <?php
                        }
                    ?>
                </select>
            </div>

            <div class="row">
                <label class="first_label">Bác sĩ: </label>
                <select id="doctor" name="doctor">
                    <?php 
                        $sql = "SELECT doctor_id, doctor_name FROM doctor WHERE injectionSite_id = '$siteID';";
                        $res = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_object($res))
                        {
                            ?>
                                <option value="<?php echo $row->doctor_id; ?>"><?php echo $row->doctor_name; ?></option>
                            <?php 
                        }
                    ?>
                </select> 
            </div>
            

            <button type="submit" class="update" onclick="update_citizen()" id="update_citizen">Cập nhật</button>
        </form>
    </div>

    <div class="todo">
        <div class="head">
            <h3>Danh sách đăng kí tiêm chủng gần đây</h3>

        </div>
        <table id="recently_list">
            <thead>
                <tr>
                    <th>Họ tên</th>
                    <th>Số CMT/CCCD/HC</th>
                    <th>Ngày sinh</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $today = date('Y-m-d');
                    $sql = "SELECT citizen.citizen_id, identity_number, full_name, birth_date, schedule.schedule_id FROM citizen
                            INNER JOIN scheduledetail ON citizen.citizen_id = scheduledetail.citizen_id
                            INNER JOIN schedule ON schedule.schedule_id = scheduledetail.schedule_id
                            WHERE injectionSite_id = '$siteID' AND date <= '$today'
                            LIMIT 20;";
                    $res = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_object($res))
                    {
                        $birth = date_create("$row->birth_date");
                        $birth = date_format($birth, "d/m/Y");
                        ?>
                        <tr onclick="input_infor(this)" data-value = "<?php echo $row->schedule_id; ?>">
                        <td>
                            <p><?php echo $row->full_name; ?></p>
                        </td>
                        <td><?php echo $row->identity_number; ?></td>
                        <td>
                            <?php echo $birth; ?>
                        </td>
                        <td style = "display: none"><?php echo $row->birth_date; ?></td>
                        <td style = "display: none"><?php echo $row->schedule_id; ?></td>
                        <td style = "display: none"><?php echo $row->citizen_id; ?></td>
                        </tr>
                        <?php
                    }
                ?>
                
            </tbody>
        </table>
    </div>

    
</div>

<script>
    let citizen = "";
    function input_infor(self)
    {
        console.log(self.childNodes);
        document.getElementById("citizen_number").value = self.childNodes[3].innerHTML;
        document.getElementById("citizen_name").value = self.childNodes[1].innerText;
        document.getElementById("citizen_birthdate").value = self.childNodes[7].innerText;
        let schedule_id = self.childNodes[9].innerText;
        citizen = self.childNodes[11].innerText;
        let op = document.querySelectorAll("#citizen_lich option");
        for (var i=0; i<op.length; i++)
        {
            if (op[i].value == schedule_id) {
                op[i].selected = true;
                break;
            }
        }
    }
</script>

<?php 
    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $vaccine = $_POST['vaccine'];
    $doctor = $_POST['doctor'];
    $schedule = $_POST['citizen_lich'];
    $citizen = $_POST['citizen_number'];

    $sql = "UPDATE scheduledetail SET vaccine_id = '$vaccine', doctor_id = '$doctor', status = 'Hoàn thành' 
            WHERE citizen_id IN (SELECT citizen_id FROM citizen WHERE identity_number = '$citizen') AND schedule_id = '$schedule';";
        
    $res = mysqli_query($con, $sql);

    ?>
    <script>
        view_list(3);
    </script>
    <?php 
    }
?>