<?php 
	session_start();
	if(!isset($_SESSION["sess_user"])){
		header("location:login.php");
	} else {
	}
?>

<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
		<title>Tarheel Writer</title>
		<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./bootstrap/css/styles.css">	
	</head>
		
	<body>
		<!-- first div starts-->
		<div id="navigation">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">								
						<span class="navbar-barnd">
							<a href="index.php"><img src="./home_files/unc_icon.png" style="margin-top:0.6%; width:8%">
					        <strong>Tarheel Writer</strong>	
					        </a>
					        <a href="styleguide.php"><img src ="./home_files/paragraph.png" width="50px" height="auto"></a>     
					        <a href="essaywriter.php"><img src ="./home_files/write_essay.png" width="50px" height="auto"></a>
					        <a href="essaysearcher.php"><img src ="./home_files/search.png" width="50px" height="auto"></a>
					  	</span>
				    </div>

	                <span id="useraccount">Hello, <?php echo $_SESSION['sess_user']; ?></sapn>
	                <img src="./home_files/user.png" height="auto" width="50px">
				    <button type="button" class="btn btn-danger btn-sm" onclick="location.href='logout.php'">Log Out</button>
				</div>
			</nav>
		</div>
		<!-- first div ends-->
