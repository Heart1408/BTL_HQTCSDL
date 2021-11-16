<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="../../css/style.css">
	<title>Admin</title>
</head>
<body>

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class="fas fa-user-shield"></i>
			<span class="text">Admin</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a onclick="view_list(1)">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dữ liệu tiêm chủng</span>
				</a>
			</li>
			<li>
				<input type="checkbox" id="show-tc">
				<label for="show-tc">
					<i class='bx bxs-group' ></i>
					<span class="text">Dữ liệu người dùng</span>
				</label>
				<ul>
					<li>
						<a onclick="view_list(2)">
							<i class="fas fa-clipboard"></i>
							<span>Đăng kí tiêm chủng</span>
						</a>
					</li>
					<li>
						<a onclick="view_list(3)">
							<i class="fas fa-notes-medical"></i>
							<span>Chứng nhận tiêm chủng</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a onclick="view_list(4)">
					<i class='fas'>&#xf073;</i>
					<span class="text">Lịch tiêm</span>
				</a>
			</li>
			<li>
				<a onclick="view_list(5)">
					<i class='fas'>&#xf46b;</i>
					<span class="text">Thuốc</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Cài đặt</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Đăng xuất</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link"></a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<!-- <img src="" alt=""> -->
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div id="overdata" class="view_op">
			<div class="head-title">
				<div class="left">
					<h2>Dashboard</h2>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>Tổng người đăng ký tiêm</p>
					</span>
				</li>
				<li>
					<i class="fas fa-syringe"></i>
					<span class="text">
						<h3>2834</h3>
						<p>Tổng số mũi đã tiêm</p>
					</span>
				</li>
				<li>
					<i class="fas fa-syringe"></i>
					<span class="text">
						<h3>2543</h3>
						<p></p>
					</span>
				</li>
				<li>
					<i class="fas fa-syringe"></i>
					<span class="text">
						<h3>2543</h3>
						<p>...</p>
					</span>
				</li>
			</ul>

			</div>

			<div id="register_list" class="view_op">
				<?php include 'register_list.php' ?>
			</div>

			<div id="certificate" class="view_op">
				<?php include 'certificate.php' ?>
			</div>

			<div id="schedule" class="view_op">
				<?php include 'schedule.php' ?>
			</div>

			<div id="medicine" class="view_op">
				<?php include 'medicine.php' ?>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script src="../../script/script_ad.js"></script>
</body>


</html>