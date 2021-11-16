<?php
    session_start();
    include 'header.php';
    include("../db_connect.php");
    if (!isset($_SESSION['cccd'])) {
        header("location:search.php");
    } 
    // else {
    //     echo "wellcome " . $_SESSION['cccd'];
    // }
    $cccd = $_SESSION['cccd'];
    $result = $con->query("SELECT *, ward_name, district_name, province_name FROM citizen
        LEFT JOIN ward ON ward.ward_id =  citizen.ward_id
        JOIN district ON district.district_id = ward.district_id
        JOIN province ON province.province_id = district.province_id
        WHERE identity_number = $cccd");
    $sql = $con->query("SELECT ci.citizen_id, v.vaccine_name, s.date FROM citizen ci
        LEFT JOIN scheduledetail sd ON sd.citizen_id = ci.citizen_id
        JOIN schedule s ON s.schedule_id = sd.schedule_id
        JOIN vaccine v ON sd.vaccine_id = v.vaccine_id
        WHERE ci.identity_number = $cccd AND sd.status = 'Hoàn thành'
        ORDER BY s.date DESC LIMIT 2;");

    $row = $result->fetch_assoc();
    $injectionNumber = $row['number_injection'];
?>
 
        <div id="title"></div>
            <div id="title2">
                <p>Tra cứu chứng nhận tiêm</p>
            </div>
        </div>
        
        <div class="logout">
            <?php echo'<p>'.$row['full_name'].'</p>' ?>
            <a href="logout.php"><button><i class="fas fa-times-circle"></i></button></a>
        </div>
        <form action="" id="form_cnt">
            <div class="left_form" id="left_form">
                <h3>Chứng nhận tiêm chủng</h3>
            <?php 
            if ($injectionNumber > 0)
                echo'<img src="../../img/shield.png" alt="">
                    <div class="cn" id="cn">
                        <p>ĐÃ TIÊM 0'.$injectionNumber.' MŨI VẮC XIN</p>
                    </div>';
            else echo '<img src="../../img/delete-shield.png" alt="">
                    <div class="cn" id="cn">
                        <p>CHƯA TIÊM MŨI VẮC XIN NÀO</p>
                    </div>'; ?>
                <div style="height: 65px;">

                </div>
                <p>Thông tin cá nhân</p>
                <div class="person_form">
                <?php
                    echo'
                    <label for=""><i class="fas fa-user-alt"></i>Họ và tên:   '.$row['full_name'].'</label>
                    <label for=""><i class="far fa-calendar-alt"></i>Ngày sinh: '.date("d-m-Y", strtotime($row['birth_date'])).'</label>
                    <label for=""><i class="fas fa-venus-mars"></i>Giới tính: '.$row['gender'].'</label>
                    <label for=""><i class="far fa-address-card"></i>Số CCCD/CMCN/HC: '.$cccd.'</label>';
                ?>
                </div>
            </div>
            <div class="right_box">
                <div class="btn_export" >
                    <button id="rep"><i class="fas fa-print"></i> Print</button>
                </div>
                <div class="right_form" id="formconfirm">
                    <h2>PHIẾU XÁC NHẬN ĐÃ TIÊM VẮC XIN COVID-19 <br>
                        (CERTIFICATE OF COVID-19 VACCINATION)</h2>
                <?php
                echo'
                    <p>Họ và tên/Fullname:   '.$row['full_name'].'</p>
                    <p>Ngày sinh/Date of birth (day/month/year):   '.date("d-m-Y", strtotime($row['birth_date'])).'</p>
                    <p>Số CCCD/CMT/HC: '.$cccd.'</p>
                    <P>Số điện thoại/Tel:   '.$row['phone'].'</P>
                    <p>Địa chỉ/Address:  '.$row['ward_name'].', '.$row['district_name'].', '.$row['province_name'].'</p>
                    <p>Đã được tiêm vắc xin phòng bệnh COVID-19/Has been vaccinated width <br> COVID-19 vaccine:</p>';
                ?>
                    <table>
                        <tr>
                        <?php
                        // $injec = $sql->fetch_array();
                        // if ( $result !== false && $result->num_rows > 0 ){};
                        
                        // if ($injec!==false)
                        //    {$num_row = $result->num_rows;} ;
                        $i=1;
                        while ($injec = $sql->fetch_array()){
                            if ($i == 1) $th = 'Mũi gần nhất';
                            else $th = 'Mũi tiêm';
                            echo '
                            <td>
                                '.$th.'<br> 
                                Ngày/date: '.$injec['date'].'<br>
                                Loại vắc xin/Vaccine: '.$injec['vaccine_name'].'
                            </td>';
                            $i++;
                        }
                        ?>
                            <!-- <td>
                                Mũi 2/Second dose <br>
                                Ngày/date: <br>
                                Loại vắc xin/Vaccine:
                            </td> -->
                        </tr>
                        <tr>
                            <td style="text-align: center; line-height: 20px;">
                                Cơ sở tiêm chủng/Immunization unit <br>
                                Ký tên, đóng dấu<br>
                                (Sign and Stemp)
                                <p style="height: 70px;"></p>
                            </td>
                            <td style="text-align: center; line-height: 20px">
                                Cơ sở tiêm chủng/Immunization unit<br>
                                Ký tên, đóng dấu <br>
                                (Sign and Stemp)
                                <p style="height: 80px;"></p>
                            </td>
                        </tr>
                    </table>
                    <div class="lass"></div>
                </div>
            </div>
        </form>

        <div class="footer">
        </div>
        <script>
            $(document).ready(function($) 
            { 
                $(document).on('click', '#rep', function(event) 
                {
                    event.preventDefault();
                    var element = document.getElementById('formconfirm'); 
                    var opt = 
                    {
                    margin:       1,
                    filename:     'pageConfirm_'+js.AutoCode()+'.pdf',
                    image:        { type: 'jpeg', quality: 0.98 },
                    html2canvas:  { scale: 2 },
                    jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
                    };
                    // New Promise-based usage:
                    html2pdf().set(opt).from(element).save();
                });
        
            });

            var injectionNumber = "<?php echo $injectionNumber; ?>";
            let left_form = document.getElementById('left_form');
            let cn = document.getElementById('cn');
            if (injectionNumber==1) {
                left_form.classList.add('yellow');
                cn.classList.add('yellowborder'); 
            } else if (injectionNumber > 1) {
                left_form.classList.add('green');
                cn.classList.add('greenborder');
            } else {
                left_form.classList.add('nocolor');
                cn.classList.add('yellowborder');
            }
            
        </script>
 