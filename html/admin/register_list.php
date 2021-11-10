<?php 
    include '../db_connect.php';
?>
<div class="head-title">
    <div class="left">
        <h2>Đơn đăng kí tiêm chủng</h2>
        <ul class="breadcrumb">
            <li>
                <a href="#">Dữ liệu người dùng</a>
            </li>
            <li><i class='bx bx-chevron-right' ></i></li>
            <li>
                <a class="active" href="#">Đăng kí tiêm chủng</a>
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
        <div class="head">
            <label for="date">Thời gian: </label>
            <select id="date">
                <?php 
                    $sql = "SELECT date FROM schedule";
                    $res = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_object($res)) {
                        ?>
                        <option><?php echo $row->date ?></option>
                        <?php
                    }
                ?>
            </select>
            <i class='bx bx-search' ></i>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Họ tên</th>
                    <th>Số CMT/CCCD/HC</th>
                    <th>Thông tin khai báo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <p>Nguyễn Văn A</p>
                    </td>
                    <td>034301010789</td>
                    <td>
                        <a href="">
                            <span class="view"><i class="fas fa-paste"></i>Xem thông tin</span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Nguyễn Văn A</p>
                    </td>
                    <td>034301010789</td>
                    <td>
                        <a href="">
                            <span class="view"><i class="fas fa-paste"></i>Xem thông tin</span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Nguyễn Văn A</p>
                    </td>
                    <td>034301010789</td>
                    <td>
                        <a href="">
                            <span class="view"><i class="fas fa-paste"></i>Xem thông tin</span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Nguyễn Văn A</p>
                    </td>
                    <td>034301010789</td>
                    <td>
                        <a href="">
                            <span class="view"><i class="fas fa-paste"></i>Xem thông tin</span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Nguyễn Văn A</p>
                    </td>
                    <td>034301010789</td>
                    <td>
                        <a href="">
                            <span class="view"><i class="fas fa-paste"></i>Xem thông tin</span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Nguyễn Văn A</p>
                    </td>
                    <td>034301010789</td>
                    <td>
                        <a href="">
                            <span class="view"><i class="fas fa-paste"></i>Xem thông tin</span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Nguyễn Văn A</p>
                    </td>
                    <td>034301010789</td>
                    <td>
                        <a href="">
                            <span class="view"><i class="fas fa-paste"></i>Xem thông tin</span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Nguyễn Văn A</p>
                    </td>
                    <td>034301010789</td>
                    <td>
                        <a href="">
                            <span class="view"><i class="fas fa-paste"></i>Xem thông tin</span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Nguyễn Văn A</p>
                    </td>
                    <td>034301010789</td>
                    <td>
                        <a href="">
                            <span class="view"><i class="fas fa-paste"></i>Xem thông tin</span>
                        </a>
                    </td>
                </tr>
                
            </tbody>
        </table>
        <div id="total">
            <p>Tổng: </p>
        </div>
    </div>
    <div class="todo">
        <div class="head">
            <h3>Thông tin khai báo</h3>
        </div>
        <ul class="todo-list">
            <li class="completed">
                <p>Họ tên: Nguyễn Văn A</p>
            </li>
            <li class="completed">
                <p>Ngày sinh: </p>
            </li>
            <li class="not-completed">
                <p>Giới tính</p>
            </li>
            <li class="completed">
                <p>Số điện thoại</p>
            </li>
            <li class="not-completed">
                <p>Email</p>
            </li>
            <li class="completed">
                <p>Số CMND/CCCD/HC: </p>
            </li>
            <li class="not-completed">
                <p>Số thẻ BHYT: </p>
            </li>
            <li class="completed">
                <p>Nghề Nghiệp</p>
            </li>
            <li class="not-completed">
                <p>Đơn vị công tác: </p>
            </li>
            <li class="completed">
                <p>Địa chỉ hiện tại: fghjkl,fvdcxvhgfdc fjscnas ajsbd sadgasjd ashdgbhasd jasgdbad jagsdbjsa</p>
            </li>
            <li class="not-completed">
                <p>Tỉnh/TP:</p>
            </li>
            <li class="not-completed">
                <p>Quận/Huyện:</p>
            </li>
            <li class="completed">
                <p>Xã/Phường:</p>
            </li>
            <li class="not-completed">
                <p>Dân Tộc:</p>
            </li>
            <li class="not-completed">
                <p>Quốc tịch:</p>
            </li>
        </ul>
    </div>
</div>