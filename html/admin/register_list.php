<?php 
    include '../db_connect.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="head-title">
    <div class="left">
        <h2>Đơn đăng kí tiêm chủng</h2>
        <ul class="breadcrumb">
            <li>
                <a href="#">Dữ liệu người dùng</a>
            </li>
            <li><i class='bx bx-chevron-right' ></i></li>
            <li>
                <a class="active" href="#">Đăng kí tiêm chủng</a>
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
        <div class="head">
            <label for="date">Thời gian: </label>
            <select id="date_time">
                <option></option>
                <?php 
                    $siteId = $_GET['site'];
                    $today = date("Y-m-d");
                    $sql = "SELECT schedule_id, date, start_time, end_time FROM schedule WHERE injectionSite_id = '$siteId' AND date > '$today'";
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
            <i class='bx bx-search' ></i>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Họ tên</th>
                    <th>Số CMT/CCCD/HC</th>
                    <th>Thông tin khai báo</th>
                </tr>
            </thead>
            <tbody id="registerList">

                
                
            </tbody>
        </table>
        <div id="total">
            <p>Tổng: </p>
        </div>
    </div>
    <div class="todo">
        <div class="head">
            <h3>Thông tin khai báo</h3>
        </div>
        <ul class="todo-list" id="todo-list">
            <li class="completed">
                <p>Họ tên: Nguyễn Văn A</p>
            </li>
            <li class="completed">
                <p>Ngày sinh: </p>
            </li>
            <li class="not-completed">
                <p>Giới tính</p>
            </li>
            <li class="completed">
                <p>Số điện thoại</p>
            </li>
            <li class="not-completed">
                <p>Email</p>
            </li>
            <li class="completed">
                <p>Số CMND/CCCD/HC: </p>
            </li>
            <li class="not-completed">
                <p>Số thẻ BHYT: </p>
            </li>
            <li class="completed">
                <p>Nghề Nghiệp</p>
            </li>
            <li class="not-completed">
                <p>Đơn vị công tác: </p>
            </li>
            <li class="completed">
                <p>Địa chỉ hiện tại:</p>
            </li>
            <li class="not-completed">
                <p>Tỉnh/TP:</p>
            </li>
            <li class="not-completed">
                <p>Quận/Huyện:</p>
            </li>
            <li class="completed">
                <p>Xã/Phường:</p>
            </li>
            <li class="not-completed">
                <p>Dân Tộc:</p>
            </li>
            <li class="not-completed">
                <p>Quốc tịch:</p>
            </li>
        </ul>
    </div>

    <div class="popup" id="popup">
                <div class="popup-content">
                    <div class="title">
                        <!-- <span class="close-btn">&times;</span> -->
                        <p>Tiền sử bệnh</p>
                    </div>
                    <div class="content" id="popup-content">

                    </div>
                    <div class="btn">
                        <div class="cancel_btn">
                            <button type="reset" onclick="closePopup()">Đóng</button>
                        </div>
                    </div>
                </div>
    </div>

    <script>
        jQuery(document).ready(function($) {
            $("#date_time").change(function(e) {
                schedule = $("#date_time").val();
                $.post("register_show.php", {"schedule" : schedule}, function(data) {
                    $("#registerList").html(data);
                })
            })



        })
    </script>

    <script>

        function click_citizen(self)
        {
            let identity = self.childNodes[3].innerHTML;
            $.post("information.php", {"identity": identity}, function(data) {
                $("#todo-list").html(data);
            })
        }

        function history_show(self)
        {
            let identity = self.parentNode.parentNode.childNodes[3].innerHTML;
            $.post("history_show.php", {"identity": identity}, function(data) {
                $("#popup-content").html(data);
            })
            document.getElementById("popup").style.display = "block";
        }

        function closePopup()
        {
            document.getElementById("popup").style.display = "none";
        }
    </script>

</div>