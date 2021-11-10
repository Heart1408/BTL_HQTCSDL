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
        <form>
            <?php 
                $sql2 = "SELECT vaccine_name, quantity, description FROM vaccine JOIN storage ON vaccine.vaccine_id = storage.vaccine_id WHERE injectionsite_id = 1";
                $res2 = mysqli_query($con, $sql2);
                $num = 0;
                while ($row2 = mysqli_fetch_object($res2))
                {

                    $des[] = $row2->description;
                    ?>
                    <div class="row" onclick="vaccine_des('<?php echo $row2->description ?>')">
                        <label class="first_label"><?php echo $row2->vaccine_name ?></label>
                        <input class="smaller" type="number" value="<?php echo $row2->quantity ?>">
                    </div>
                    <?php 
                    $num++;
                }
            ?>
            
            <button type="submit" class="update">Cập nhật</button>
        </form>
    </div>

    <div class="todo">
        <div class="head">
            <h3>Thông tin</h3>
        </div>
        <p id="vaccine_des">
            <?php echo $des[0]; ?>
        </p>
    </div>

</div>
