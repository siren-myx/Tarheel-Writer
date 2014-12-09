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

		<div  class="container">
			<div id="infoboard" class="jumbotron" id="password_modal">
                <div class="modal-header">
				<form method="post" action="" style="font-color:blakc; margin-top:5%" class="form col-md-12 center-block">
			    <h3 style="color:white">Change Password <span class="extra-title muted"></span></h3><hr>
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
								<input id="new_password" styple="font-color:black" type="password" name="new_password">
							</div>
						</div>
						<div class="control-group">
							<label for="confirm_password" class="control-label">Confirm Password</label>
							<div class="controls">
								<input id="confirm_password" type="password" name="confirm_password">
							</div>
						</div>      
		            </div>
                        <button type="submit" name="submit" href="#" class="btn btn-success" id="password_save">Save changes</button>
                <?php

                   if (isset($_POST["submit"])) {

                     if(!empty($_POST['current_password']) && !empty($_POST['new_password']) && !empty($_POST['confirm_password'])) {
                       $username = $_SESSION["sess_user"];
                       $current_password = $_POST['current_password'];
                       $new_password = $_POST['new_password'];
                       $confirm_password = $_POST['confirm_password'];

                       $con=mysql_connect('classroom.cs.unc.edu','kjmoon','tGmuBw7GZG7dTN67') or die(mysql_error());
                       mysql_select_db('kjmoondb') or die("DB Selection Failed");

                       $query = mysql_query("SELECT * FROM password WHERE username= '$username' ");
                       $numrows=mysql_num_rows($query);
                       if($numrows!=0) {
                           $row=mysql_fetch_assoc($query);
                           $dbemail=$row['email'];
                           $dbpassword=$row['password'];
                           
                           if($current_password == $dbpassword) {
                               if($new_password==$confirm_password) {

                                            $sql = "UPDATE Users SET password='$new_password' WHERE email='$dbemail' ";
                                            $retval = mysql_query($sql);
                                            if(!$retval ) {
                                                die('Could not enter data: ' . mysql_error());
                                            } else {
                                            echo "\nChange password successfully!\n";
                                        }

                           } else {
                            echo "\nConfirm password does not match new password!\n";
                       }

                           } }} }
           ?>
            </div>    
              </form>

        </div>
	</body>
</html>


