<option value="">Chọn Xã/ Phường</option>
<?php
    include("../db_connect.php");
    $sql = "SELECT * FROM ward WHERE district_id = ".$_POST["districtid"];
    $result = $con->query($sql); 

    while($row = $result->fetch_assoc()){
        echo "<option value=".$row['ward_id'].">".$row['ward_name']."</option>";
    } 
?>