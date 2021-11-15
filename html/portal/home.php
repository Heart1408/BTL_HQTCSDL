<?php 
    include 'header.php';
?>
        <div class="content">
            <div id="title"></div>
        </div>
        <div class="statistic">
            <div>
                <div><i class="fas fa-user-check"></i></div>
                <div>
                    <h3>Số đối tượng đăng ký tiêm</h3>
                    <h1>11,257,967 <span>(lượt)</span></h1>
                </div>
            </div>
            <div>
                <div><i class="fas fa-syringe"></i></div>
                <div>
                    <h3>Lượt tiêm trong ngày</h3>
                    <h1>1,031,760 <span>(mũi)</span></h1>
                </div>
            </div>
            <div>
                <div><i class="fas fa-user-shield"></i></div>
                <div>
                    <h3>Tổng số mũi tiêm toàn quốc</h3>
                    <h1>73,260,064 <span>(mũi)</span></h1>
                </div>
            </div>
        </div>
        
        <div class="lineChart">
            <p>Dữ liệu tiêm theo ngày</p>
            <canvas id="linechart"></canvas>
        </div>
        <div class="barChart">
            <div class="">
                <h3>10 địa phương có tỉ lệ tiêm cao nhất</h3>
                <span>(Tính theo số mũi tiêm/ số vắc xin phân bổ theo quyết định)</span>
                <canvas id="barchartTop"></canvas>
                <p><span style="font-weight: bold;">Ghi chú:</span> Số mũi tiêm thực tế có thể nhiều hơn số liều vắc xin phân bổ</p>
            </div>
            <div class="">
                <h3>10 địa phương có tỉ lệ tiêm thấp nhất</h3>
                <span>(Tính theo số mũi tiêm/ số vắc xin phân bổ theo quyết định)</span>
                <canvas id="barchartLow"></canvas>
                <p><span style="font-weight: bold;">Ghi chú:</span> Tỷ lệ tiêm tại một số tỉnh có thể thấp do chưa nhận đủ vắc xin theo quyết định phân bổ</p>
            
            </div>
        </div>
        <div class="search_loca">
            <h3>Tra cứu điểm tiêm theo địa bàn</h3>
            <form class="select" action="" method="POST" id="form">
                
                <select type="input" name="province" id="province">
                    <option value="0">Chọn Tỉnh/ TP</option>
                    <?php
                        $sql = "SELECT * FROM province";
                        $result = $con->query($sql); 
                
                        while($row = $result->fetch_assoc()){
                          echo "<option value=".$row['province_id'].">".$row['province_name']."</option>";
                     } ?>
                </select>
                
                <select type="input" name="" id="district">
                    <option value="">Chọn Quận/Huyện</option>
                </select>
                <select type="input" name="ward" id="ward">
                    <option value="0">Chọn Xã/ Phường</option>
                </select>
                <div class="btn next_btn">
                    <button type="submit" name="submit"><i class="fas fa-search"></i> Tìm kiếm</button>
                </div>
                
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên điểm tiêm</th>
                        <th>Số nhà, tên đường</th>
                        <th>Xã/Phường</th>
                        <th>Quận/Huyện</th>
                        <th>Tỉnh/TP</th>
                        <th>Số bàn tiêm</th>
                    </tr>
                </thead>
                <tbody id="ans">
                <?php 
                    $limit = !empty($_GET['per_page'])?$_GET['per_page']:8;
                    $current_page = !empty($_GET['page'])?$_GET['page']:1;
                    $offset = ($current_page-1) * $limit;
                ?>
                
                </tbody>
            </table>
            
            
        </div>
        <div class="footer"></div>
    </div>
 <script src="../../script/script.js"></script>
</body>
<script>

    jQuery(document).ready(function($){
        $("#province").change(function(event){
            provinceid = $("#province").val();
            $.post('district.php', {"provinceid": provinceid}, function(data){
                $("#district").html(data);
            });
        });

        $("#district").change(function(event){
            districtid = $("#district").val();
            $.post('ward.php', {"districtid": districtid}, function(data){
                $("#ward").html(data);
            
            });
        });

        $('#form').submit(function(event){
            event.preventDefault();
            provinceid = $("#province").val();
            wardid = $("#ward").val();
            $.post('search_site.php', {"submit" : "OK", "province": provinceid, "ward" : wardid}, function(data) {
                $("#ans").html(data);
            });
        })
    })

    
</script>
<script>
    var bienx = ['24/9','25/9','26/9','27/9','28/9','30/9','1/10','2/10','3/10','4/10','5/10','6/10','7/10','8/10','9/10','10/10','11/10','12/10','13/10','14/10','15/10','16/10','17/10','18/10','19/10','20/10','21/10'];
    var bieny = [50,80,10,10,79,100,34,23,45,78,45,67,30,10,78,56,54,12,34,56,120,150];
    var CHART = document.getElementById('linechart').getContext('2d');
    
    var lineChart = new Chart(CHART, {
        type: 'line',
        data:{
            labels: bienx,
            datasets:[{
                label: 'Đã tiêm',
                backgroundColor: '#3333cc',
                borderColor: '#3333cc',
                borderWidth: 2,
                pointBorderWidth: 1,
                pointBackgroundColor: '#b30000',
                pointBorderColor: '#b30000',
                pointHoverBorderWidth: 3,
                data: bieny
            }]
        }
    }) 
        
    const labelTop = ['Phú Thọ','Hà Tĩnh','Bình Phước','Cao Bằng','Sơn La','Bạc Liêu','Thái Bình','Điện Biên','Nghệ An','Hà Nội'];
    const data = {
        labels: labelTop,
        datasets: [{
            label: 'My First Dataset',
            data: [65, 59, 80, 81, 56, 55, 40],
            backgroundColor: '#2929a3',
            borderColor: '#2929a3',
            categoryPercentage: 0.6,
        }]
    };
    const configTop = {
        type: 'bar',
        data: data,
        options: {
            indexAxis: 'y',
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    }
    const chartTop = new Chart(document.getElementById('barchartTop'), configTop);

    const labelLow = ['Phú Thọ','Hà Tĩnh','Bình Phước','Cao Bằng','Sơn La','Bạc Liêu','Thái Bình','Điện Biên','Nghệ An','Hà Nội'];
    const dataLow = {
        labels: labelLow,
        datasets: [{
            label: 'My First Dataset',
            data: [65, 59, 52, 61, 56, 55, 53, 55, 56, 50],
            backgroundColor: '#008ae6',
            borderColor: '#008ae6',
            categoryPercentage: 0.6,
        }]
    };
    const configLow = {
        type: 'bar',
        data: dataLow,
        options: {
            indexAxis: 'y',
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    }
    const chartLow = new Chart(document.getElementById('barchartLow'), configLow);

</script>
</html>