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
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/essaysearch.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="essaysearcher.js"></script>
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
		<div class="container">
			<div class="row">    
				<div class="col-xs-8 col-xs-offset-2">
					<form method="post" action="">
						<div class="input-group">
							<div class="input-group-btn search-panel">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									<span id="search_concept">Filter by</span> <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#users">Users</a></li>
									<li><a href="#topic">Topic</a></li>
									<li class="divider"></li>
									<li><a href="#all">Anything</a></li>
								</ul>
							</div>
							<input type="hidden" name="wtf" value="all" id="search_param">         
							<input type="text" class="form-control" name="search_param" placeholder="Search term...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit" name="submit"><span class="glyphicon glyphicon-search"></span></button>
							</span>
						</div>
					</form>
				</div>
			</div>
		</div>

		<?php

		if(isset($_POST['submit'])) {

			if(!empty($_POST['search_param'])) {


				$con=mysql_connect('classroom.cs.unc.edu','kjmoon','tGmuBw7GZG7dTN67') or die(mysql_error());
				mysql_select_db('kjmoondb') or die("DB Selection Failed");

				$search_param = $_POST['search_param'];

				$sql = "SELECT doc FROM Essays E, Users U WHERE U.username = '$search_param' AND U.uid = E.uid";
				$query = mysql_query($sql);


				$numrows = mysql_num_rows($query);

				if($numrows > 0) {
					echo "<table id='ResultTable' class='table table-hover'>
					<tr>
						<th><center>Essay</center></th>
					</tr>";

					while($row = mysql_fetch_assoc($query))
					{

						echo "<tr>";
						echo "<td>" . $row['doc'] . "</td>";
						echo "</tr>";

					}
					echo "</table>";
				} else {
					echo "";
				}
			} else {
			//Do nothing if no search parameters
			}

		}


		?>


	</body>
	</html>