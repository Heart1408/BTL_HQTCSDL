<?php
        include '../db_connect.php';
                    

                    $query = mysqli_query($con, "SELECT *, ward_name, district_name, province_name
                    FROM injectionsite i
                    JOIN ward w ON i.ward_id = w.ward_id
                    JOIN district di ON w.district_id = di.district_id
                    JOIN province pr ON di.province_id = pr.province_id ");

                    if(ISSET($_POST['submit'])){
                        $provincevalue = $_POST['province'];
                        if ($provincevalue!=0) {
                            $keyword = $_POST['ward'];
                        
                            $count = mysqli_query($con, 'SELECT COUNT(injectionSite_id) as total from injectionsite WHERE ward_id ='.$keyword);
                            
                            $result = mysqli_query($con, "SELECT * , ward_name, district_name, province_name
                            FROM injectionsite i
                            JOIN ward w ON i.ward_id = w.ward_id
                            JOIN district di ON w.district_id = di.district_id
                            JOIN province pr ON di.province_id = pr.province_id 
                            WHERE i.ward_id = $keyword");
                        } else {
                            $count = mysqli_query($con, 'SELECT COUNT(injectionSite_id) as total from injectionsite');
                            $result = $query;
                        }
                    } else {
                        $count = mysqli_query($con, 'SELECT COUNT(injectionSite_id) as total from injectionsite');
                        $result = $query;
                    }
                    $rows = mysqli_fetch_assoc($count);
                    
                    
                    $stt = 1;
                    while ($row = $result->fetch_assoc()) {
                    echo '
                    <tr> 
                        <td>'.$stt++.'</td>      
                        <td>'.$row['injectionSite_name'].'</td>
                        <td></td>
                        <td>'.$row['ward_name'].'</td>
                        <td>'.$row['district_name'].'</td>
                        <td>'.$row['province_name'].'</td>
                        <td>1</td>
                    </tr>';
                    } 
                ?>