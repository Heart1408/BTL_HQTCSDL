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
            <form action="" class="personal_information" id="form1">
                <div id="selection">
                </div>
                <div id="somuitiem">
                    <label for="">Số mũi tiêm</label>
                    <input type="number" placeholder="Số mũi tiêm">
                </div>
                <br>
                <div id="dkthongtin">
               
                    <label class="title" for="">1. Thông tin người tiêm <br></label>
                     <!-- <br> -->
                    <div class="ttkhaibao col-4">
                        <label for="fullname">Họ và tên <sup>(*)</sup></label>
                        <input type="text" id="fullname" placeholder="Họ và tên">
                        <small></small>
                    </div>
                    <div class="ttkhaibao col-4">
                        <label for="ngaysinh">Ngày sinh <sup>(*)</sup></label>
                        <input id="ngaysinh" type="date">
                        <small></small>
                    </div>
                    <div class="ttkhaibao col-4">
                        <label for="gioitinh">Giới tính <sup>(*)</sup></label>
                        <select name="" id="gioitinh">
                            <option value="">Giới tính</option>
                            <option value="1">Nam</option>
                            <option value="2">Nữ</option>
                        </select>
                        <small></small>
                    </div>
                    <div class="ttkhaibao col-4">
                        <label for="phone">Số điện thoại <sup>(*)</sup></label>
                        <input id="phone" name="" type="number" placeholder="Số điện thoại">
                        <small></small>
                    </div>
                    <div class="ttkhaibao col-4">
                        <label for="email">Email</label>
                        <input id="email" name="" type="text" placeholder="Email">
                        <small></small>
                    </div>
                    <div class="ttkhaibao col-4">
                        <label for="cccd">Số CMND/CCCD/HC <sup>(*)</sup></label>
                        <input id="cccd" name="" type="number" placeholder="Số CMND/CCCD/HC">
                        <small></small>
                    </div>
                    <div class="ttkhaibao col-4">
                        <label for="">Số thẻ BHYT</label>
                        <input type="number" placeholder="Số thẻ BHYT">
                    </div>
                    <div class="ttkhaibao col-4">
                        <label for="">Nghề nghiệp</label>
                        <input type="text" placeholder="Nghề nghiệp">
                    </div>
                    <div class="ttkhaibao col-4">
                        <label for="">Đơn vị công tác</label>
                        <input name="" type="text" placeholder="Đơn vị công tác">
                    </div>
                    <div class="ttkhaibao col-3">
                        <label for="">Địa chỉ hiện tại</label>
                        <input type="text" placeholder="Địa chỉ hiện tại">
                    </div>
                    <div class="ttkhaibao col-4">
                        <label for="tinh">Tỉnh/Thành phố <sup>(*)</sup></label>
                        <select name="" id="tinh">
                            <option value="">Tỉnh/Thành phố</option>
                            <option value="1">Thái Bình</option>
                        </select>
                        <small></small>
                    </div>
                    <div class="ttkhaibao col-4">
                        <label for="quanhuyen">Quận/Huyện <sup>(*)</sup></label>
                        <select name="" id="quanhuyen">
                            <option value="">Quận/Huyện</option>
                            <option value="1">Quỳnh Phụ</option>
                        </select>
                        <small></small>
                    </div>
                    <div class="ttkhaibao col-2">
                        <label for="xaphuong">Xã/Phường <sup>(*)</sup></label>
                        <select name="" id="xaphuong">
                            <option value="">Xã/Phường</option>
                            <option value="1">Quỳnh Hải</option>
                        </select>
                        <small></small>
                    </div>
                    <div class="ttkhaibao col-4">
                        <label for="">Dân tộc</label>
                        <select name="" id="">
                            <option>Kinh</option>
                        </select>
                    </div>
                    <div class="ttkhaibao col-4">
                        <label for="">Quốc tịch</label>
                        <select name="" id="">
                            <option value="">Việt Nam</option>
                        </select>
                    </div>
                    <div class="ttkhaibao col-2">
                        <label for="nhomuutien">Nhóm ưu tiên <sup>(*)</sup></label>
                        <select name="" id="nhomuutien">
                            <option value="">Nhóm ưu tiên</option>
                            <option value="1">1.....</option>
                        </select>
                        <small></small>
                    </div> 
                    <div style="display: inline-block; width: 100%; margin-top: 20px;">
                        <label class="title" for="">2.Đăng ký thông tin tiêm chủng <br></label> 
                    </div>
                    <div class="ttkhaibao col-1">
                        <label for="" style="margin-bottom: 11px;">Ngày muốn được tiêm (dự kiến)</label>
                        <input type="date">
                    </div>
                    <br>
                    <div class="ttkhaibao col-1" style="margin-top: 5px!important;">
                        <label for="" style="margin-bottom: 11px;">Buổi tiêm mong muốn</label>
                        <select name="" id="">
                            <option value="">Buổi tiêm mong muốn</option>
                        </select>
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
                <div class="btn btn1" >
                    <div class="cancel_btn">
                        <button id="btn_cancel">Hủy bỏ</button>
                    </div>
                    <div class="next_btn" id="moveto_medical_history">
                        <button id="btn1_submit" type="submit">Tiếp tục  <span>&#8250;</span></button>
                   
                    </div> 
                </div>  
            </form> 

            <form action="" class="medical_history" id="form2">
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
                            <td>1.Tiền sử phản vệ từ độ  trở nên</td>
                            <td>
                                <input type="text" placeholder="Nếu có, ghi rõ các loại tác nhân dị ứng">
                            </td>
                            <td><input type="radio" name="check"></td>
                            <td><input type="radio" name="check" checked="checked"></td>
                            <td><input type="radio" name="check"></td>
                        </tr>
                        <tr>
                            <td>2. Tiền sử bị COVID-19 trong vòng 6 tháng</td>
                            <td></td>
                            <td><input type="radio"></td>
                            <td><input type="radio" checked="checked"></td>
                            <td><input type="radio"></td>
                        </tr>
                        <tr>
                            <td>3. Tiền sử tiêm vắc xin khác trong 14 ngày qua</td>
                            <td><input type="text" placeholder="Nếu có, ghi rõ loại vắc xin"></td>
                            <td><input type="radio" value=""></td>
                            <td><input type="radio" checked="checked"></td>
                            <td><input type="radio"></td>
                        </tr>
                        <tr>
                            <td>4. Tiền sử suy giảm miễn dịch, ung thư giai đoạn cuối, cắt lách, xơ gan mất bù ...</td>
                            <td></td>
                            <td><input type="radio"></td>
                            <td><input type="radio" checked="checked"></td>
                            <td><input type="radio"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <div class="btn btn2">
                <div class="cancel_btn">
                    <button onclick="cancel1(this)">Quay lại</button>
                </div>
                <div class="next_btn ">
                    <button type="submit" form="form2">Tiếp tục  <span>&#8250;</span></button>
                </div>
            </div>

            <form action="" class="confirm_consent" id="form3">
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
            </form>
            <div class="btn btn3">
                <div class="cancel_btn">
                    <button onclick="cancel2(this)">Quay lại</button>
                </div>
                <div class="next_btn ">
                    <button type="submit" onclick="popup()" form="form3">Xác nhận</button>
                </div>
            </div>
            <form action="" class="popup" id="popup">
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
                            <button type="submit">Xác nhận</button>
                        </div>
                    </div>
                </div>
            </form>
            <form action="" id="form4">
                <div>
                    <p>Xác thực thành công</p>
                    <p>Chờ thông tin đăng ký tiêm được cập nhật</p>
                </div>
                <div class="btn next_btn">
                    <button>Trang chủ</button>
                </div>
                
            </form>
        </div>
        <div class="footer">
        </div>
    </div>
    <script src="../../script/script.js"></script>
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
                Validator.isRequired("#nhomuutien"),
                Validator.isEmail("#email"),
                Validator.isPhone("#phone", 10, 11),
                Validator.isCCCD("#cccd",10, 12),
            ],
            onSubmit: function(data) {
                // console.log(data);
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
</body>
</html>