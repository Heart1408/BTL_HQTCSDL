<option value="">Chọn Quận/Huyện</option>
<?php
    include("../db_connect.php");
    $sql = "SELECT * FROM district WHERE province_id = ".$_POST["provinceid"];
    $result = $con->query($sql); 

    while($row = $result->fetch_assoc()){
        echo "<option value=".$row['district_id'].">".$row['district_name']."</option>";
    } 
?>