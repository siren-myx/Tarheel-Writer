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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>	
	<script src="myaccounts.js"></script>
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
						<a href="myessays.php"><img src ="./home_files/1.png" width="50px" height="auto"></a>
					</span>
				</div>

				<span id="useraccount">Hello, <?php echo $_SESSION['sess_user']; ?></sapn>
					<a href="myaccounts.php"><img src="./home_files/user.png" height="auto" width="50px"></a>
					<button type="button" class="btn btn-danger btn-sm" onclick="location.href='logout.php'">Log Out</button>
				</div>
			</nav>
		</div>
		<!-- first div ends-->

		<div class="modal" id="password_modal">
			<div class="modal-header">
				<h3>Change Password <span class="extra-title muted"></span></h3>
			</div>
			<div class="modal-body form-horizontal">
				<div class="control-group">
					<label for="current_password" class="control-label">Current Password</label>
					<div class="controls">
						<input type="password" name="current_password">
					</div>
				</div>
				<div class="control-group">
					<label for="new_password" class="control-label">New Password</label>
					<div class="controls">
						<input type="password" name="new_password">
					</div>
				</div>
				<div class="control-group">
					<label for="confirm_password" class="control-label">Confirm Password</label>
					<div class="controls">
						<input type="password" name="confirm_password">
					</div>
				</div>      
			</div>
			<div class="modal-footer">
				<button href="#" class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				<button href="#" class="btn btn-primary" id="password_modal_save">Save changes</button>
			</div>
		</div>
	</body>
	</html>