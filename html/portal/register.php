<?php 
    include '../db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="../../css/home.css">
    <title>Đăng ký tiêm</title>
</head>
<body>
    <div id="container">
       <div class="wrapper">
            <nav>
                <input type="checkbox" id="show-search">
                <input type="checkbox" id="show-menu">
                <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
                <div class="content">
                    <div class="logo"><a href="#">Tiêm chủng Covid 19</a></div>
                    <ul class="links">
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#">Đăng ký tiêm</a></li>
                        <li>
                            <a href="#" class="desktop-link">Tra cứu</a>
                            <input type="checkbox" id="show-tc">
                            <label for="show-tc">Tra cứu</label>
                            <ul>
                                <li><a href="#">Tra cứu chứng nhận tiêm</a></li>
                                <li><a href="#">Tra cứu kết quả đăng ký</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="desktop-link">Tài liệu</a>
                            <input type="checkbox" id="show-tl">
                            <label for="show-tl">Tài liệu</label>
                            <ul>
                                <li><a href="#">Drop Menu 1</a></li>
                                <li><a href="#">Drop Menu 2</a></li>
                                <li>
                                    <a href="#" class="desktop-link">More Items</a>
                                    <input type="checkbox" id="show-items">
                                    <label for="show-items">More Items</label>
                                    <ul>
                                        <li><a href="#">Sub Menu 1</a></li>
                                        <li><a href="#">Sub Menu 2</a></li>
                                        </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Đăng nhập</a></li>
                    </ul>
                </div>
                <!-- <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
                <form action="#" class="search-box">
                    <input type="text" placeholder="Type Something to Search..." required>
                    <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
                </form> -->
            </nav>
        </div>
        
        <div class="content">
            <div id="title"></div>
            <div id="title2">
                <p>Đăng ký tiêm cá nhân</p>
            </div>
            <div class="step_body">
                <div id="steps">
                    <div class="step1 step_form">
                        <p>Bước 1</p>
                        <h3>Thông tin cá nhân</h3>
                    </div>
                    <div class="step2">
                        <p>Bước 2</p>
                        <h3>Tiền sử bệnh</h3>
                    </div>
                    <div class="step3">
                        <p>Bước 3</p>
                        <h3>Phiếu đồng ý tiêm</h3>
                    </div>
                    <div class="step4">
                        <p>Bước 4</p>
                        <h3>Hoàn thành</h3>
                    </div>
                </div>
            </div>
            <form method="POST" action="" id="form">
            <div class="personal_information" id="form1">
                
                <div id="somuitiem" style="margin-top: 30px">
                    <label for="">Mũi tiêm số: </label>
                    <select name="number_injection" id="number_injection">
                        <option value=1>Mũi thứ nhất</option>
                        <option value=2>Mũi thứ hai</option>
                    </select>
                </div>
                <br>
                <div id="dkthongtin">
               
                    <label class="title" for="">1. Thông tin người tiêm <br></label>
                     <!-- <br> -->
                    <div class="ttkhaibao col-4">
                        <label for="fullname">Họ và tên <sup>(*)</sup></label>
                        <input type="text" id="fullname" placeholder="Họ và tên" name="fullname">
                        <small></small>
                    </div>
                    <div class="ttkhaibao col-4">
                        <label for="ngaysinh">Ngày sinh <sup>(*)</sup></label>
                        <input id="ngaysinh" type="date" name="birth_date">
                        <small></small>
                    </div>
                    <div class="ttkhaibao col-4">
                        <label for="gioitinh">Giới tính <sup>(*)</sup></label>
                        <select name="" id="gioitinh" name="gender">
                            <option value="">Giới tính</option>
                            <option value="Nam">Nam</option>
                            <option value="Nu">Nữ</option>
                        </select>
                        <small></small>
                    </div>
                    <div class="ttkhaibao col-4">
                        <label for="phone">Số điện thoại <sup>(*)</sup></label>
                        <input id="phone" name="phone" type="number" placeholder="Số điện thoại">
                        <small></small>
                    </div>
                    <div class="ttkhaibao col-4">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="text" placeholder="Email">
                        <small></small>
                    </div>
                    <div class="ttkhaibao col-4">
                        <label for="cccd">Số CMND/CCCD/HC <sup>(*)</sup></label>
                        <input id="cccd" name="identity_number" type="number" placeholder="Số CMND/CCCD/HC">
                        <small></small>
                    </div>
                    <div class="ttkhaibao col-4">
                        <label for="">Số thẻ BHYT</label>
                        <input id="bhyt" type="number" placeholder="Số thẻ BHYT" name="insurance_number">
                    </div>
                    <div class="ttkhaibao col-4">
                        <label for="">Nghề nghiệp</label>
                        <input id="job" type="text" placeholder="Nghề nghiệp" name="job">
                    </div>
                    <div class="ttkhaibao col-4">
                        <label for="">Đơn vị công tác</label>
                        <input id="company" name="company" type="text" placeholder="Đơn vị công tác">
                    </div>
                    <div class="ttkhaibao col-3">
                        <label for="">Địa chỉ hiện tại</label>
                        <input id = "address" type="text" placeholder="Địa chỉ hiện tại" name="address">
                    </div>
                    <?php 
                        $sql = "SELECT province_name, district_name, ward_name, ward_id FROM province
                                INNER JOIN district ON province.province_id = district.province_id
                                INNER JOIN ward ON district.district_id = ward.district_id;";
                        $res = mysqli_query($con, $sql);

                        $arr = array();

                        while ($row = mysqli_fetch_object($res))
                        {
                            $arr[$row->province_name][$row->district_name][$row->ward_id] = $row->ward_name;
                        }
                        
                    ?>
                    <div class="ttkhaibao col-4">
                        <label for="tinh">Tỉnh/Thành phố <sup>(*)</sup></label>
                        <select name="tinh" id="tinh" onchange="selectprovince(1)">
                            <option value="">Tỉnh/Thành phố</option>
                            <?php 
                                $arr_key = array_keys($arr);
                                foreach ($arr_key as $province) {
                                    ?>
                                    <option value="<?php echo $province; ?>"><?php echo $province ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                        <small></small>
                    </div>
                    <div class="ttkhaibao col-4">
                        <label for="quanhuyen">Quận/Huyện <sup>(*)</sup></label>
                        <select name="quanhuyen" id="quanhuyen" onchange="selectdistrict(1)">
                            <option value="">Quận/Huyện</option>
                        </select>
                        <small></small>
                    </div>
                    <div class="ttkhaibao col-2">
                        <label for="xaphuong">Xã/Phường <sup>(*)</sup></label>
                        <select name="xaphuong" id="xaphuong">
                            <option value="">Xã/Phường</option>
                        </select>
                        <small></small>
                    </div>
                    <div class="ttkhaibao col-4">
                        <label for="">Dân tộc</label>
                        <select name="ethnic" id="ethnic">
                            <option>Kinh</option>
                        </select>
                    </div>
                    <div class="ttkhaibao col-4">
                        <label for="">Quốc tịch</label>
                        <select name="nationality" id="nationality">
                            <option value="">Việt Nam</option>
                        </select>
                    </div>
                    
                    <div style="display: inline-block; width: 100%; margin-top: 20px;">
                        <label class="title" for="">2.Đăng ký thông tin tiêm chủng <br></label> 
                    </div>
                    <div class="ttkhaibao col-4">
                        <label for="tinh_tiem">Tỉnh/Thành phố <sup>(*)</sup></label>
                        <select name="tinh_tiem" id="tinh_tiem" onchange="selectprovince(2)">
                            <option value="">Tỉnh/Thành phố</option>
                            <?php 
                                $arr_key = array_keys($arr);
                                foreach ($arr_key as $province) {
                                    ?>
                                    <option value="<?php echo $province; ?>"><?php echo $province ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                        <small></small>
                    </div>
                    <div class="ttkhaibao col-4">
                        <label for="quanhuyen_tiem">Quận/Huyện <sup>(*)</sup></label>
                        <select name="quanhuyen_tiem" id="quanhuyen_tiem" onchange="selectdistrict(2)">
                            <option value="">Quận/Huyện</option>
                        </select>
                        <small></small>
                    </div>
                    <div class="ttkhaibao col-2">
                        <label for="xaphuong_tiem">Xã/Phường <sup>(*)</sup></label>
                        <select name="xaphuong_tiem" id="xaphuong_tiem" onchange="selectward()">
                            <option value="">Xã/Phường</option>
                        </select>
                        <small></small>
                    </div>
                    <br>
                    <br>
                    <div class="ttkhaibao col-4">
                        <label for="">Cơ sở tiêm chủng<sup>(*)</sup></label>
                        <select name="cosotiem" id="cosotiem" onchange="selectsite()">
                            <option value="">Cơ sở tiêm chủng</option>
                        </select>
                    </div> 

                    <div class="ttkhaibao col-4">
                        <label for="lichtiem">Lịch tiêm mong muốn<sup>(*)</sup></label>
                        <select name="lichtiem" id="lichtiem" onchange="">
                            <option value="">Lịch tiêm</option>
                        </select>
                        <small></small>
                    </div>
                </div>
                <div class="note">
                    <p >Lưu ý:</p>
                    <ul>
                        <li>Việc đăng ký thông tin hoàn toàn bảo mật và phục vụ cho chiến dịch tiêm chủng Vắc xin COVID - 19</li>
                        <li>Xin vui lòng kiểm tra kỹ các thông tin bắt buộc(VD: Họ và tên, Ngày tháng năm sinh, Số điện thoại, Số CMND/CCCD/HC ...)</li>
                        <li>Bằng việc nhấn nút "Xác nhận", bạn hoàn toàn hiểu và đồng ý chịu trách nhiệm với các thông tin đã cung cấp.</li>
                        <li>Cá nhân/Tổ chức đăng ký thành công trên hệ thống sẽ được đưa vào danh sách đặt tiêm. 
                            Cơ sở y tế sẽ thông báo lịch tiêm khi có vắc xin và kế hoạch tiêm được phê duyệt. Trân trọng cảm ơn!</li>
                    </ul>
                </div> 
                <div class="btn btn1" id="btn1">
                    <div class="cancel_btn">
                        <button id="btn_cancel">Hủy bỏ</button>
                    </div>
                    <div class="next_btn" id="moveto_medical_history">
                        <button type="button" id="btn1_submit" onclick="next()">Tiếp tục  <span>&#8250;</span></button>
                   
                    </div> 
                </div>  
            </div> 

            <div class="medical_history" id="form2">
                <table>
                    <thead>
                        <tr>
                            <th style="text-align: left;">Tiền sử</th>
                            <th style="text-align: left;">Triệu chứng</th>
                            <th>Có</th>
                            <th>Không</th>
                            <th>Không rõ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.Tiền sử phản vệ từ 2 độ trở nên</td>
                            <td>
                                <input type="text" placeholder="Nếu có, ghi rõ các loại tác nhân dị ứng" name="di_ung">
                            </td>
                            <td><input type="radio" name="phan_ve" value="Co"></td>
                            <td><input type="radio" name="phan_ve" checked="checked" value="Khong"></td>
                            <td><input type="radio" name="phan_ve" value="Khong ro"></td>
                        </tr>
                        <tr>
                            <td>2. Tiền sử bị COVID-19 trong vòng 6 tháng</td>
                            <td></td>
                            <td><input type="radio" name="covid" value="Co"></td>
                            <td><input type="radio" checked="checked" name="covid" value="Khong"></td>
                            <td><input type="radio" name="covid" value="Khong ro"></td>
                        </tr>
                        <tr>
                            <td>3. Tiền sử tiêm vắc xin khác trong 14 ngày qua</td>
                            <td><input type="text" placeholder="Nếu có, ghi rõ loại vắc xin" name="other_vaccine_name"></td>
                            <td><input type="radio" value="Co" name="other_vaccine"></td>
                            <td><input type="radio" checked="checked" name="other_vaccine" value="Khong"></td>
                            <td><input type="radio" name="other_vaccine" value="Khong ro"></td>
                        </tr>
                        <tr>
                            <td>4. Tiền sử suy giảm miễn dịch, ung thư giai đoạn cuối, cắt lách, xơ gan mất bù ...</td>
                            <td></td>
                            <td><input type="radio" name="ung_thu" value="Co"></td>
                            <td><input type="radio" checked="checked" name="ung_thu" value="Khong"></td>
                            <td><input type="radio" name="ung_thu" value="Khong ro"></td>
                        </tr>
                    </tbody>
                </table>

                <div class="btn btn2">
                <div class="cancel_btn">
                    <button onclick="cancel1(this)">Quay lại</button>
                </div>
                <div class="next_btn ">
                    <input name="submit2" id="next1" type="button" value="Tiếp tục">
                </div>
                </div>
            </div>
            

            <div class="confirm_consent" id="form3">
                <table>
                    <tr>
                        <td><i class="fas fa-check"></i></td>
                        <td>
                           <p>    
                            1. Tiêm chủng vắc xin là biện pháp phòng chống dịch hiệu quả, tuy nhiên vắc xin phòng COVID-19 có thể không phòng được bệnh hoàn toàn. 
                            Người được tiêm chủng vắc xin phòng COVID-19 có thể phòng được bệnh hoặc giảm mức độ nặng nếu mắc bệnh. Tuy nhiên, sau khi tiêm chủng vẫn phải tiếp tục thực hiện nghiêm các biện pháp phòng chống dịch theo quy định.
                            </p> 
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-check"></i></td>
                        <td>
                            <p>
                            2. Tiêm chủng vắc xin phòng COVID-19 có thể gây ra một số biểu hiện tại chỗ tiêm hoặc toàn thân như sưng, đau chỗ tiêm, nhức đầu, buồn nôn, sốt, đau cơ…hoặc tai biến nặng sau tiêm chủng. 
                            Tiêm vắc xin mũi 2 do Pfizer sản xuất ở người đã tiêm mũi 1 bằng vắc xin AstraZeneca có thể tăng khả năng xảy ra phản ứng thông thường sau tiêm chủng.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-check"></i></td>
                        <td>
                            <p>
                            3. Khi có triệu chứng bất thường về sức khỏe, người được tiêm chủng cần đến ngay cơ sở y tế gần nhất để được tư vấn, thăm khám và điều trị kịp thời.
                            </p>
                        </td>
                    </tr>
                </table>
                <div class="confirm">
                    <p>
                        Sau khi đã đọc các thông tin nêu trên, tôi đã hiểu về các nguy cơ và:
                        <input type="checkbox" id="checkbox">Đồng ý tiêm chủng
                    </p>  
                </div>

                <div class="btn btn3">
                <div class="cancel_btn">
                    <button onclick="cancel2(this)">Quay lại</button>
                </div>
                <div class="next_btn ">
                    <input type="button" name="submit_dangky" id="next2" value="Xác nhận">
                </div>
            </div>
            </div>

            
            
            
            <div class="popup" id="popup">
                <div class="popup-content">
                    <div class="title">
                        <!-- <span class="close-btn">&times;</span> -->
                        <p>Xác nhận bằng mã xác thực</p>
                    </div>
                    <div class="content">

                    </div>
                    <div class="btn">
                        <div class="cancel_btn">
                            <button type="reset" onclick="closePopup()">Hủy bỏ</button>
                        </div>
                        <div class="next_btn">
                            <button type="submit" id="next3">Xác nhận</button>
                        </div>
                    </div>
                </div>
            </div>

            </form>
            <div id="form4">
                <div>
                    <p>Xác thực thành công</p>
                    <p>Chờ thông tin đăng ký tiêm được cập nhật</p>
                </div>
                <div class="btn next_btn">
                    <button>Trang chủ</button>
                </div>
                
            </div>

                            
        </div>
        <div class="footer">
        </div>
    </div>

    <script src="../../script/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
    <script>

        Validator({
            form: '#form1',
            errorSelector: 'small',
            rules: [
                Validator.isRequired("#fullname"),
                Validator.isRequired("#tinh"),
                Validator.isDate("#ngaysinh"),
                Validator.isRequired("#gioitinh"),
                Validator.isRequired("#quanhuyen"),
                Validator.isRequired("#xaphuong"),
                Validator.isPhone("#phone", 10, 11),
                Validator.isCCCD("#cccd",10, 12),
            ],
            onSubmit: function(data) {
                //console.log(data);
            }
        });
        
        Validator2({
            form: '#form2',
            onSubmit: function(data) {
                // console.log(data);
            }
        })
        Validator3({
            form: '#form3',
            onSubmit: function(data) {
                // console.log(data);
            }
        })
        Validator4({
            form: '#popup',
            onSubmit: function(data) {
                // console.log(data);
            }
        })
            
        

        
    </script>

    <script>
        jQuery(document).ready(function() {
            $('#form').submit(function(event) {
                event.preventDefault();
                num_inject = $("#number_injection").val();
                fullname = $("#fullname").val();
                birthdate = $("#ngaysinh").val();
                gender = $("#gioitinh").val();
                phone = $("#phone").val();
                email = "";
                if ($("#email").val())
                {
                    email = $("#email").val();
                }

                console.log(email);

                identity = $("#cccd").val();

                bhyt = "";
                if ($("#bhyt").val())
                {
                    bhyt = $("#bhyt").val();
                }

                job = "";
                if ($("#job").val())
                {
                    job = $("#job").val();
                }

                company = "";
                if ($("#company").val())
                {
                    company = $("#company").val();
                }

                address = "";
                if ($("#address").val())
                {
                    address = $("#address").val();
                }

                ward = $("#xaphuong").val();
                ethnic = $('#ethnic').val();
                nationality = $('#nationality').val();

                lichtiem = $('#lichtiem').val();

                phan_ve = $("input[name = 'phan_ve']:checked").val();
                di_ung = "";
                if ($("input[name='di_ung']").val())
                {
                    di_ung = $("input[name='di_ung']").val();
                }

                covid = $("input[name = 'covid']:checked").val();
                other_vaccine = $("input[name = 'other_vaccine']:checked").val();
                other_vaccine_name = "";
                if ($("input[name = 'other_vaccine_name']").val())
                {
                    other_vaccine_name = $("input[name = 'other_vaccine_name']").val();
                }
                ung_thu = $("input[name = 'ung_thu']:checked").val();

                console.log(ward);
                $.post('add_citizen.php', {
                    "num_inject": num_inject,
                    "fullname" : fullname,
                    "birthdate": birthdate,
                    "gender": gender,
                    "phone": phone,
                    "email": email,
                    "identity": identity,
                    "bhyt": bhyt,
                    "job": job,
                    "company": company,
                    "address": address,
                    "ward": ward,
                    "ethnic": ethnic,
                    "nationality": nationality,
                    "lichtiem" : lichtiem,
                    "phan_ve": phan_ve,
                    "di_ung": di_ung,
                    "covid": covid,
                    "other_vaccine": other_vaccine,
                    "other_vaccine_name": other_vaccine_name,
                    "ung_thu": ung_thu
                }, function(data) {})
    
            })
        })
    </script>
    
    <?php 
        $today = date("Y-m-d");
        $sql = "SELECT ward_name, injectionSite_name, date, start_time, end_time, schedule_id FROM ward
                INNER JOIN injectionSite ON ward.ward_id = injectionSite.ward_id
                INNER JOIN schedule ON injectionSite.injectionSite_id = schedule.injectionSite_id
                WHERE date > '$today'";
        $res = mysqli_query($con, $sql);

        $arra = array();

        while ($row = mysqli_fetch_object($res))
        {
            $date = date_format(date_create($row->date), "d/m/Y");
            $start = date_format(date_create($row->start_time), "H:i");
            $end = date_format(date_create($row->end_time), "H:i");
            $time = $date." (".$start." - ".$end.")";

            $arra[$row->ward_name][$row->injectionSite_name][$row->schedule_id] = $time;

        }
        
    ?>
    <script>
        
        let arr = <?php echo json_encode($arr); ?>;
        let x = "";


        function selectprovince(num)
        {
            let sel = document.getElementById("quanhuyen_tiem");
        
            if (num == 1) {
                sel = document.getElementById("quanhuyen");
            }
            while (sel.lastElementChild)
            {
                if (sel.lastElementChild.value != "") {
                    sel.removeChild(sel.lastElementChild);
                }
                else 
                {
                    break;
                }
            }

            x = document.getElementById("tinh_tiem").value;
            if (num ==1) {
                x = document.getElementById("tinh").value;
            }
            
            let district = Object.keys(arr[x]);
            for (var i = 0; i<district.length; i++)
            {
                let op = document.createElement("option");
                op.innerHTML = district[i];
                op.value = district[i];
                sel.appendChild(op);
            }
            
        }


        function selectdistrict(num)
        {
            let sel = document.getElementById("xaphuong_tiem");
            if (num == 1 )
            {
                sel = document.getElementById("xaphuong");
            }
            
            while (sel.lastElementChild)
            {
                if (sel.lastElementChild.value != "") {
                    sel.removeChild(sel.lastElementChild);
                }
                else 
                {
                    break;
                }
            }

            let t = document.getElementById("quanhuyen_tiem").value;
            if (num ==1)
            {
                t = document.getElementById("quanhuyen").value;
            }
            let ward_id = Object.keys(arr[x][t]);
            for (var i = 0; i<ward_id.length; i++)
            {
                let op = document.createElement("option");
                op.innerHTML = arr[x][t][ward_id[i]];
                if (num == 1)
                {
                    op.value = ward_id[i];
                }
                else 
                {
                    op.value = op.innerHTML;
                }
                sel.appendChild(op);
            }


        }

    </script>

    <script>

        let w = "";
        let arra = <?php echo json_encode($arra); ?>;
        function selectward()
        {
            let sel = document.getElementById("cosotiem");

            w = document.getElementById("xaphuong_tiem").value;
            
            while (sel.lastElementChild)
            {
                if (sel.lastElementChild.value != "") {
                    sel.removeChild(sel.lastElementChild);
                }
                else 
                {
                    break;
                }
            }

            let coso = Object.keys(arra[w]);
            for (var i=0; i<coso.length; i++)
            {
                let op = document.createElement("option");
                op.innerHTML = coso[i];
                op.value = coso[i];
                sel.appendChild(op);
            }

        }

        function selectsite()
        {
            let sel = document.getElementById("lichtiem");
            
            while (sel.lastElementChild)
            {
                if (sel.lastElementChild.value != "") {
                    sel.removeChild(sel.lastElementChild);
                }
                else 
                {
                    break;
                }
            }

            let coso = document.getElementById("cosotiem").value;
        
            let lich_id = Object.keys(arra[w][coso]);
            for (var i = 0; i<lich_id.length; i++)
            {
                let op = document.createElement("option");
                op.innerHTML = arra[w][coso][lich_id[i]];
                op.value = lich_id[i];
                sel.appendChild(op);
            }


        }

    </script>

    

    
</body>
</html>