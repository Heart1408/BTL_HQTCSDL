        <?php 
            session_start();
            include 'header.php';
            include("../db_connect.php");
        ?>
                <div id="title"></div>
                <div id="title2">
                    <p>Tra cứu đăng ký tiêm</p>
                </div>
                <div class="content_search">
                    <div class="box">
                         <form action="" method="POST" class="search_dkt" id="form1">
                             <div class="flex">
                                <div>
                                    <label for="phone">Số điện thoại <sup>(*)</sup></label>
                                    <input type="number" name="phone" id="phone" placeholder="Số điện thoại">
                                    <small style="font-size: 13px"></small>
                                </div> 
                                <div>
                                    <label for="cccd">Số CMND/CCCD/HC <sup>(*)</sup></label>
                                    <input type="number" name="cccd" id="cccd" placeholder="Số CMND/CCCD/HC">
                                    <small style="font-size: 13px"></small>
                                </div>
                            </div>
                            <div class="note">
                                <p> <span style="font-weight: bold;"> Chú ý: </span>Nếu chưa tiêm chủng, bạn có thể đăng ký <a href="register.php" style="color: red;">tại đây</a></p>
                            </div>
                            <div class="btn">
                                <div class="cancel_btn">
                                    <button id="btn_cancel" type="reset"><i class="fas fa-sync-alt"></i> Nhập lại</button>
                                </div>
                                <div class="next_btn" >
                                    <button type="submit" name="submit" ><i class="fas fa-search"></i> Tra cứu</button>
                                </div>
                            </div>  
                        </form> 
                    </div>
                    
                    <?php
                        if(ISSET($_POST['submit'])){
                            $phonevalue = $_POST['phone'];
                            $cccdvalue = $_POST['cccd'];
                    
                            $result = $con->query("SELECT *, ward_name, district_name, province_name FROM citizen 
                                LEFT JOIN scheduledetail sd ON sd.citizen_id = citizen.citizen_id
                                LEFT JOIN ward ON ward.ward_id =  citizen.ward_id
                                JOIN district ON district.district_id = ward.district_id
                                JOIN province ON province.province_id = district.province_id
                                WHERE phone = $phonevalue AND identity_number = $cccdvalue AND sd.status = 'Đăng ký'");
                            $sql = $con->query("SELECT v.vaccine_name, s.date FROM citizen ci
                                LEFT JOIN scheduledetail sd ON sd.citizen_id = ci.citizen_id
                                JOIN schedule s ON s.schedule_id = sd.schedule_id
                                JOIN vaccine v ON sd.vaccine_id = v.vaccine_id
                                WHERE ci.phone = $phonevalue AND ci.identity_number = $cccdvalue AND sd.status = 'Hoàn thành'
                                ORDER BY s.date DESC LIMIT 3");
                            $sql2 = $con->query("SELECT s.date, s.start_time, s.end_time, i.injectionSite_name,
                                ward_name, district_name, province_name
                                FROM citizen ci
                                LEFT JOIN scheduledetail sd ON sd.citizen_id = ci.citizen_id
                                JOIN schedule s ON s.schedule_id = sd.schedule_id
                                JOIN injectionsite i ON i.injectionSite_id = s.injectionSite_id
                                LEFT JOIN ward ON ward.ward_id =  i.ward_id
                                JOIN district ON district.district_id = ward.district_id
                                JOIN province ON province.province_id = district.province_id
                                JOIN vaccine v ON sd.vaccine_id = v.vaccine_id
                                WHERE ci.phone = $phonevalue AND ci.identity_number = $cccdvalue AND sd.status = 'Đăng ký';");
                                

                        if ($phonevalue =="" || $cccdvalue=="") {
                            echo'
                                <div class="error" id="er">
                                    <button onclick="del(this)"><i class="fas fa-times-circle"></i></button>
                                    <p>Họ và tên, số điện thoại và số CCCD/CMND không được để trống!</p>
                                </div>';
                        } else {
                            if ( $result !== false && $result->num_rows > 0 ) {
                                $row = $result->fetch_array();
                                $injectionNumber = $row['number_injection'];
                                echo
                                '<div class="line">
                                </div>
                                <div class="box_dkt">
                                <form id="form_dkt">
                                    <h2>Kết quả đăng ký thông tin tiêm chủng</h2>
                                    <div>
                                        <h3>1.Thông tin đăng ký</h3>
                                        <div>
                                            <div class="row">
                                                <p>Họ và tên: '.$row['full_name'].'</p>
                                                <p>Ngày sinh: '.date("d-m-Y", strtotime($row['birth_date'])).'</p>
                                                <p>Giới tính: '.$row['gender'].'</p>
                                            </div>
                                            <div class="row">
                                                <p>Số điện thoại: '.$row['phone'].'</p>
                                                <p>Số CMND/CCCD/HC: '.$row['identity_number'].'</p>
                                                <p>Số thẻ BHYT: '.$row['insurance_number'].'</p> 
                                            </div>
                                            <p>Địa chỉ liên hệ: '.$row['ward_name'].', '.$row['district_name'].', '.$row['province_name'].'</p>
                                             
                                            <p>Lịch tiêm vắc xin COVID-19:
                                            
                                                <p style="padding-left: 15px;"> ';
                                                if ($injectionNumber < 1 ) echo ' &#10003;'; echo ' Chưa tiêm </p>
                                                <p style="padding-left: 15px;">';if ($injectionNumber >= 1 ) echo ' &#10003;'; echo 'Đã tiêm:';
                                                    
                                                    $injec = $sql->fetch_array();
                                                    if ($injectionNumber >= 1 )
                                                    echo '
                                                    <div class="row">
                                                        <p style="padding-left: 40px;">&bull; Loại vắc xin: '.$injec['vaccine_name'].'</p>
                                                        <p> Ngày tiêm: '.date("d-m-Y", strtotime($injec['date'])).'</P>
                                                    </div> ';
                                                    
                                                
                                                echo '</p>
                                               
                                            </p>
                                            <p>Tiền sử bệnh: </p>
                                        </div>
                                    </div>
                        
                                    <div id="update">
                                        <h3>2.Thông tin lịch tiêm</h3>
                                        <div>';
                                        while ($sche = $sql2->fetch_array()){
                                            echo '
                                            <p>Ngày tiêm:        '.date("d-m-Y", strtotime($sche['date'])).'</p>
                                            <p>Thời gian:       '.$sche['start_time'].' đến '.$sche['end_time'].' </p>
                                            <p>Cơ sở tiêm chủng:          '.$sche['injectionSite_name'].'</p>
                                            <p>Địa điểm:       '.$sche['ward_name'].', '.$sche['district_name'].', '.$sche['province_name'].'</p>';};
                                    echo '      
                                        </div>
                                    </div>
                                    <div style="height: 70px;">
                                    </div>
                                </form>
                                </div>
                                <div class="button">
                                    <a href="logout.php"><button><i class="fas fa-times" style="color: red"></i> Thoát</button></a>
                                    <button id="rep"><i class="fas fa-print" ></i> Print</button>
                                </div>';
                            } else {
                                echo'
                                <div class="error" id="er">
                                    <button onclick="del(this)"><i class="fas fa-times-circle"></i></button>
                                    <p>Thông tin nhập chưa chính xác hoặc bạn chưa đăng ký!</p>
                                </div>';
                            }
                        }
                        }
                    ?>
                </div>
                <div class="footer">
                </div>
                <!-- <div id="form2" style="height: 100px; width: 100px; background-color: red;">
                    <p>jsdfbsdnfbdsmfhikfsdfnkds</p>
                    <p>sdfhndskufjkds,fndsk</p>
                </div> -->
                <!-- <button id="rep"><i class="fas fa-print" ></i> Print</button> -->
            </div>
            <script>
                function del(self){
                    self.parentNode.style.display="none";
                }
                $(document).ready(function() {
                    $('#er').fadeOut(5000); 
                });
                $(document).ready(function($) 
                { 
                    $(document).on('click', '#rep', function(event) 
                    {
                        document.getElementById("form_dkt").style.display="block";
                        document.getElementById("form_dkt").classList.add('height');
                        event.preventDefault();
                        var element = document.getElementById('form_dkt'); 
                        var opt = 
                        {
                        margin:       0.7,
                        filename:     'pageRegister'+js.AutoCode()+'.pdf',
                        image:        { type: 'jpeg', quality: 0.98 },
                        html2canvas:  { scale: 2 },
                        jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
                        };
                        // New Promise-based usage:
                        html2pdf().set(opt).from(element).save();
                    });
            
                });
            </script>
                   <script src="../../script/script.js"></script>
        </body>
        </html>