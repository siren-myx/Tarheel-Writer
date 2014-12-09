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
		
		<!-- third div starts-->
		<div id="content">
			<section id="introduce">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
	                        			<div id="title" class="text-center" >
	                        				<h1>   </h1>
	                        				<h1>Welcome to Tarheel Writer</h1></div><hr>
							<div id="quotes2">
								Tarheel Writer is a web application that targets to assist students how to write basic 3-part structured essay composed of an introduction, body(s), and conclusion. We do this by guiding the student each step of the way, teaching them what makes a great essay. In the end, we store this essay and combine their parts to create an essay they can revise and proudly show off!						
								<br>
						   </div>
						</div>
					</div>						
				</div>
			</section>
			<section id="start-writing">
				<div class="container">
                    <div class="row"><br><br>
						<div id="essay_guider" class="col-sm-3">
							<a href="styleguide.php"><img src="./home_files/paragraph.png" width="200" height="200"></a>
							<p>Essay Guider</p>
						</div>
						<div id="essay_writer" class="col-sm-3">
							<a href="essaywriter.php"><img src="./home_files/write_essay.png" width="200" height="200"></a>
							<p>Essay Writer</p>
						</div>	
						<div id="essay_searcher" class="col-sm-3">
							<a href="essaysearcher.php"><img src="./home_files/search.png" width="200" height="200"></a>
							<p>Essay Searcher</p>
						</div>	
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
		
		<!-- second div starts-->
		<div id="flash">
			<section class="full video" id="home" style="height:700px">
					<video id="player" class="vjs-tech" preload="auto" data-setup="{}" webkit-playsinline="" 
					style="position:absolute; width:100%;" autoplay="" src="./home_files/unc_ad.mp4" muted>
			</video>
			</section>
		</div>
		<!-- second div ends-->
		
		<!-- forth div starts-->
		<div id="footer" class="col-sm-12">
			<a class="navbar-brand" style="margin-left:40%; color:white; font-size: 1.2em;">
				<strong>© 2014 Tarheel Writer</strong>
			</a>
		</div>
		<!-- forth div starts-->	
	</body>
	</html>
