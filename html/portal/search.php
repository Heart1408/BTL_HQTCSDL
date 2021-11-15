<?php 
    session_start();
    include 'header.php';
    include("../db_connect.php");
?>
        <div id="title"></div>
            <div id="title2">
                <p>Tra cứu chứng nhận tiêm</p>
            </div>
        </div>

        <?php
            if (isset($_POST["submit"])) { 
                $fullname = $_POST['fullname'] ?? '';
                $phone = $_POST['phone'] ?? '';
                $cccdvalue = $_POST['cccd'] ?? '';

                
                $result = $con->query("SELECT * FROM citizen 
                    WHERE full_name = '$fullname' AND phone = $phone AND identity_number = $cccdvalue ");
                if ($fullname == "" || $phone =="" || $cccdvalue=="") {
                    echo'
                        <div class="error" id="er">
                            <button onclick="del(this)"><i class="fas fa-times-circle"></i></button>
                            <p>Họ và tên, số điện thoại và số CCCD/CMND không được để trống!</p>
                        </div>';
                } else {
                    if ($result !== false && $result->num_rows > 0) {
                        $_SESSION['cccd'] = $cccdvalue;
                        header('Location: form_cnt.php');
                    }else{
                        echo'
                        <div class="error" id="er">
                            <button onclick="del(this)"><i class="fas fa-times-circle"></i></button>
                            <p>Thông tin nhập chưa chính xác hoặc bạn chưa đăng ký!</p>
                        </div>';
                    }
                }
            }

        ?>
        <div class="content_search">
            <div class="box">
                <form action="" method="POST" class="search_cnt" id="form1">
                    <div class="">
                        <label for="fullname">Họ và tên <sup>(*)</sup></label>
                        <input type="text" id="fullname" name="fullname" value="" placeholder="Họ và tên">
                        <small></small>
                    </div>
                    <div class="">
                        <label for="phone">Số điện thoại <sup>(*)</sup></label>
                        <input type="number" id="phone" name="phone" value="" placeholder="Số điện thoại">
                        <small></small>
                    </div>
                    <div class="">
                        <label for="cccd">Số CMND/CCCD/HC <sup>(*)</sup></label>
                        <input type="number"  value="" id="cccd" name="cccd" placeholder="Số CMND/CCCD/HC">
                        <small></small>
                    </div>
                    <div class="">
                        <label for="">Ngày sinh</label>
                        <input type="date" id="ngaysinh" placeholder="Ngày sinh">
                    </div>
                    <div class="">
                        <label for="">Số thẻ BHYT</label>
                        <input type="number" placeholder="Số thẻ BHYT">
                    </div>
                    <div class="">
                        <label for="">Giới tính</label>
                        <select name="" id="">
                            <option value="">Giới tính</option>
                            <option value="">Nam</option>
                            <option value="">Nữ</option>
                        </select>
                    </div>
                    
                </form> 
                <div class="note">
                        <p> <span style="font-weight: bold;"> Chú ý: 
                        </span>Nếu bạn đã tiêm nhưng chưa được ghi nhận, bạn có thể chứng nhận tiêm hoặc phản ánh thông tin mũi tiêm <a href="register.php" style="color: red;">tại đây</a></p>
                    </div>
                    <div class="btn">
                        <div class="cancel_btn">
                            <button id="btn_cancel" type="reset"><i class="fas fa-sync-alt"></i> Nhập lại</button>
                        </div>
                        <div class="next_btn" >
                            <button type="submit" name="submit" form="form1"><i class="fas fa-search"></i>Tra cứu</button>
                        </div>
                    </div> 
            </div> 
            </div>

            <div class="footer">
                
            </div>
                
        </div>
        <script src="../../script/script.js"></script>
            
        <script>
            function del(self){
                self.parentNode.style.display="none";
            }
            $(document).ready(function() {
                $('#er').fadeOut(5000); 
            });
        </script>
    </body>
</html>