<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:login.php");
} else {
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Tarheel Writer</title>
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>	
	<script src="myessays.js"></script>
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
					<img src="./home_files/user.png" height="auto" width="50px">
					<button type="button" class="btn btn-danger btn-sm" onclick="location.href='logout.php'">Log Out</button>
				</div>
			</nav>
		</div>
		<!-- first div ends-->
		<br>
		<br>
		<br>
		<br>
		<div class="container">
			<div class="row">


				<div class="col-md-12">
					<h4>My Essays</h4>
					<div class="table-responsive">


						<table id="mytable" class="table table-bordred table-striped">

							<thead>
								<th>Essay ID</th>
								<th>Essay</th>
								<th>Edit</th>
								<th>Delete</th>
							</thead>
							<tbody>

								<?php
								$con=mysql_connect('classroom.cs.unc.edu','kjmoon','tGmuBw7GZG7dTN67') or die(mysql_error());
								mysql_select_db('kjmoondb') or die("DB Selection Failed");


								$username = $_SESSION['sess_user'];
								$uidquery = mysql_query("SELECT * FROM Users WHERE username= '$username'");
								$uidrow = mysql_fetch_assoc($uidquery);

								$uid = $uidrow[uid];


								$sql = "SELECT eid, doc FROM Essays E, Users U WHERE U.uid = '$uid' AND U.uid = E.uid";		

								$query = mysql_query($sql);

								$numrows = mysql_num_rows($query);

								if($numrows > 0) {
									while($row = mysql_fetch_assoc($query))
									{

										/* PROBLEM: We need to figure out how to have the red delete button delete the RIGHT essay ID */
										echo "<td>".$row['eid']."</td>";
										echo "<td>".$row['doc']."</td>";
										echo "<form action='' method='post'>";
                                //EDIT
										echo"<td><p><button class='btn btn-primary btn-xs' data-title='Edit' type='submit' name='edit".$row['eid']."'>
										<span class='glyphicon glyphicon-pencil'></span></button></p></td>";
                                //DELETE
										echo "<td><p><button class='btn btn-danger btn-xs' data-title='Delete' type='submit' name='delete".$row['eid']."' >
										<span class='glyphicon glyphicon-trash'></span></button></p></td>
									</tr></form>";
								}
							} else {
								echo "";
							}

							?>

						</tbody>

					</table>

				</div>

			</div>
		</div>
	</div>

	<!--
		<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<textarea rows="2" class="form-control" placeholder="Your Essay"></textarea>


						</div>
					</div>
					<div class="modal-footer ">
						<button type="submit" class="btn btn-warning btn-lg" style="width: 100%;" name="update"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
					</div>
				</div>
			</div>
		</div>


	
		<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
					</div>
					<div class="modal-body">

						<div class="alert alert-warning"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

					</div>
					<div class="modal-footer ">
						<button type="submit" name="delete" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
						<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
					</div>
				</div>
			</div>
		</div>
	-->

</body>
</html>
