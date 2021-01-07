<?php
session_start();
if(empty($_SESSION)){
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login System</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style>
		body {
			background-color:#eee;
		}
		.row {
			margin:100px auto;
			width:300px;
			text-align:center;
		}
		.login {
			background-color:#fff;
			padding:20px;
			margin-top:20px;
		}
	</style>
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<div class="container">
		<div class="row">
			<h2>Login Berhasil</h2>
			<div class="login">

				<p>Anda berhasil login dengan detail sebagai berikut:</p>
				<p>Username: <?php echo $_SESSION['username']; ?><br>
				Level: <?php echo $_SESSION['level']; ?><br>
				
				<!-- Menampilkan nama-->
				<?php
				$uname = $_SESSION['username'];
				include("koneksi.php");
				
				$query = $query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$uname'");
				while($data = mysqli_fetch_array($query)){
                  
                  echo "Hello: " . $data['nama'];
                  }
				?>
				<p><a href="logout.php" class="btn btn-primary" onclick="return confirm('Yakin ingin Logout?')">Log out</a></p>
			</div>
			Copyright &copy; 2020 Eprayogia
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>