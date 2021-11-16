<?php 
    include '../db_connect.php';
?>
<div class="head-title">
    <div class="left">
        <h2>Cập nhật lịch tiêm chủng</h2>
        <ul class="breadcrumb">
            <li>
                <a href="#">Lịch tiêm</a>
            </li>
            <li><i class='bx bx-chevron-right' ></i></li>
            <li>
                <a class="active" href="#">Tạo lịch tiêm</a>
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
        <form method="post" action="">
            <div class="row">
                <label class="first_label" >Ngày:</label>
                <input type="date" name="date">
            </div>

            <div class="row">
                <label class="first_label" >Thời gian bắt đầu:</label>
                <input type="time" name="start">
            </div>

            <div class="row">
                <label class="first_label" >Thời gian kết thúc:</label>
                <input type="time" name="end">
            </div>

            <button type="submit" class="update" name="schedule_submit">Thêm</button>
        </form>
    </div>

    <div class="todo">
        <div class="head">
            <h3>Danh sách lịch tiêm</h3>

        </div>
        <table id="recently_list1">
            <thead>
                <tr>
                    <th>Ngày</th>
                    <th>Thời gian</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql1 = "SELECT * FROM schedule";
                    $res1 = mysqli_query($con, $sql1);

                    while ($row1 = mysqli_fetch_object($res1)) {
                        $items[] = $row1;
                    }
                    $items = array_reverse($items, true);

                    foreach($items as $item) {

                        ?>
                        <tr>
                            <td>
                                <?php 
                                    $d = date_create($item->date);
                                    echo date_format($d, "d/m/Y");
                            
                                ?>
                            </td>
                            <td>
                                <?php 
                                    $st = date_create("$item->start_time");
                                    $et = date_create("$item->end_time");
                                    echo date_format($st, "H:i")." - ".date_format($et, "H:i"); 
                                ?>
                            </td>
                            <td>
                                <a onclick="dele(this, <?php echo $item->schedule_id; ?>)">
                                    <span class="view">Xóa</span>
                                </a>
                            </td>
                        </tr>

                        <?php
                    }
                ?>
                
            </tbody>
        </table>
    </div>

</div>

<?php
    if (isset($_POST['schedule_submit']))
    {
        $date = $_POST['date'];
        $start = $_POST['start'];
        $end = $_POST['end'];

        $create_date = date_create($date);
        $create_start = date_create($start);
        $create_end = date_create($end);

        $sql = "INSERT INTO schedule(date, start_time, end_time, injectionSite_id) VALUES('$date','$start', '$end', 1)";
        $res = mysqli_query($con, $sql);
        if (!$res)
        {
            echo "Có lỗi";
        }
        else {
            unset($_POST['schedule_submit']);
        ?>
            <script>
                var row = document.createElement("tr");
                var col1 = document.createElement("td");
                col1.innerHTML = "<?php echo date_format($create_date, 'd/m/Y') ?>";
                var col2 = document.createElement("td");
                col2.innerHTML = "<?php echo date_format($create_start, 'H:i').' - '.date_format($create_end, 'H:i')?>";
                var col3 = document.createElement("td");
                col3.innerHTML = "<a><span class='view'>Xóa</span></a>";
                row.appendChild(col1);
                row.appendChild(col2);
                row.appendChild(col3);
                console.log(row);
                tb = document.querySelector("#recently_list1 tbody");
                tb.insertBefore(row, tb.childNodes[0]);

                
                view_list(4);
            </script>
        <?php
        }
    }
?>

<script>
    function dele(seft, row_id)
    {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                seft.parentNode.parentNode.remove();
            }
        }
        xhttp.open("GET", "delete_schedule.php?id="+row_id, true);
        xhttp.send();
    }
</script>