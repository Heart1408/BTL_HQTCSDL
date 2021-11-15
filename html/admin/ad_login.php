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
    <link rel="stylesheet" href="../../css/ad_login.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
         <form action="" method="POST">
            <h1>Đăng nhập</h1>
            <div class="form-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="form-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <button type="submit"  name="submit">
                Đăng nhập
            </button>

            <br><br>
            <p id="error"></p>
        </form>
    </div>

    <?php 
        if (isset($_POST['submit']))
        {
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            $sql = "SELECT injectionSite_id FROM admin WHERE admin_name = '$username' AND password = '$password';";
            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) > 0)
            {
                $row = mysqli_fetch_object($result);
                header("location:index.php?site=$row->injectionSite_id");
            }
            else
            {
                ?>
                <script>
                    let p = document.getElementById('error');
                    if (p.innerHTML == "")
                    {
                        p.innerHTML =  "Tên đăng nhập và mật khẩu không chính xác";
                    }
                </script>
                <?php
            }
        }
    ?>
   
</body>
</html>