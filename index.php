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
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/styles.css">	
 </head>
	
<body>
	<!-- first div starts-->
	<div id="navigation">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">								
					<span class="navbar-barnd">
						<img src="./home_files/unc_icon.png" style="margin-top:0.6%; width:8%">
				        <strong>Tarheel Writer</strong>	
				        
				        <a href="styleguide.html"><img src ="./home_files/paragraph.png" width="50px" height="auto"></a>     
				        <a href="writer.html"><img src ="./home_files/write_essay.png" width="50px" height="auto"></a>   
				  	</span>
			    </div>
			    <h4>Welcome <?php echo $_SESSION['sess_user']; ?> <a href="logout.php">Logout</a></h4>
				<form class="navbar-form navbar-right" role="enter">
			      	<button type="button" class="btn btn-success" onclick="location.href='login.php'">Sign in</button>
			        <button type="button" class="btn btn-danger" onclick="location.href='login.php'">Sign up</button>
	      		</form>
			</div>
		</nav>
	</div>
	<!-- first div ends-->

	<!-- second div starts-->
	<div id="flash">
		<section class="full video" id="home" style="height:700px">
				<video id="player" class="vjs-tech" preload="auto" data-setup="{}" webkit-playsinline="" 
				style="position:absolute; width:100%;" autoplay="" src="./home_files/unc_ad.mp4" muted>
		</video>
		</section>
	</div>
	<!-- second div ends-->
	
	<!-- third div starts-->
	<div id="content">
		<section id="introduce">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div id="title" class="text-center" ><h1>Welcome to Tarheel Writer</h1></div><hr>
						<div id="intro">
						<p>Tarheel Writer is a web application that targets to assist students how to write basic 3-part structured essay composed of an introduction, body(s), and conclusion. We do this by guiding the student each step of the way, teaching them what makes a great essay. In the end, we store this essay and combine their parts to create an essay they can revise and proudly show off!</p>
					</div>
					</div>
				</div>						
			</div>
		</section>
		<section id="start-writing">
			<div class="container">
				<div class="row"><br><br><br>
					<div class="col-sm-2"></div>
					<div id="essay_guider" class="col-sm-5">
						<a id="guider" href="styleguide.html"><img src="./home_files/paragraph.png" width="200" height="200"></a>
						<p>Essay Guider</p>
					</div>
					<div id="essay_writer" class="col-sm-5">
						<a id="writer" href="http://wwwp.cs.unc.edu/Courses/comp426-f14/kjmoon/a5/start.html"><img src="./home_files/write_essay.png" width="200" height="200"></a>
						<p>Essay Writer</p>
					</div>	
					<div class="col-sm-2"></div>
				</div>						
			</div>
		</section>
		<section id="snapshot-layout">
			<div class="container">			
				<div class="row">
					<div class="col-sm-12">
						<div id="quotes">
							<hr>&ldquo;Adding manpower to a late software project makes it later.&rdquo;  
							&mdash; Fred Brooks<hr>
						<br>
					</div>
				</div>
			</div>
		</section>		
	</div>
	<!-- third div starts-->
	
	<!-- forth div starts-->
	<div id="footer" class="col-sm-12">
		<a class="navbar-brand" style="margin-left:40%; color:white; font-size: 1.2em;">
			<strong>© 2014 Tarheel Writer</strong>
		</a>
	</div>
	<!-- forth div starts-->	
</body>
</html>
