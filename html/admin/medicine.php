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
        <form method="POST">
            <?php 
                $sql2 = "SELECT vaccine.vaccine_id, vaccine_name, quantity, description FROM vaccine JOIN storage ON vaccine.vaccine_id = storage.vaccine_id WHERE injectionsite_id = 1";
                $res2 = mysqli_query($con, $sql2);
                $num = 0;
                while ($row2 = mysqli_fetch_object($res2))
                {

                    $des[] = $row2;
                    ?>
                    <div class="row" onclick="vaccine_des('<?php echo $row2->description ?>')">
                        <label class="first_label"><?php echo $row2->vaccine_name ?></label>
                        <input class="smaller" type="number" value="<?php echo $row2->quantity ?>" name="vaccine<?php echo $row2->vaccine_id; ?>">
                    </div>
                    <?php 
                    $num++;
                }
            ?>
            
            <button type="submit" class="update" name="medicine_update">Cập nhật</button>
        </form>
    </div>

    <div class="todo">
        <div class="head">
            <h3>Thông tin</h3>
        </div>
        <p id="vaccine_des">
            <?php echo $des[0]->description; ?>
        </p>
    </div>

</div>

<?php 
    if (isset($_POST['medicine_update']))
    {
        for ($i = 0; $i < count($des); $i++)
        {
            $id = $des[$i]->vaccine_id;
            $vaccine_id = (string)$des[$i]->vaccine_id;
            $name = "vaccine".$vaccine_id; 
            $value = $_POST[$name];

            if ($des[$i]->quantity != $value)
            {
                $sql = "UPDATE storage SET quantity = $value WHERE vaccine_id = $id AND injectionsite_id = 1";
                $res = mysqli_query($con, $sql);

                if ($res)
                {
                    ?>
                        <script>
                            document.querySelector("[name = <?php echo $name; ?>]").value = <?php echo $value ?>;
                        </script>
                    <?php 
                }

            }
            
        }
        ?>
            <script>
                view_list(5);
            </script>
        <?php 
    }
?>
