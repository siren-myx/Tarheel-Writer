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

		<div class="container">
			<div class="row">


				<div class="col-md-12">
					<h4>Bootstrap Snipp for Datatable</h4>
					<div class="table-responsive">


						<table id="mytable" class="table table-bordred table-striped">

							<thead>

								<th><input type="checkbox" id="checkall" /></th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Address</th>
								<th>Edit</th>
								<th>Delete</th>
							</thead>
							<tbody>

								<tr>
									<td><input type="checkbox" class="checkthis" /></td>
									<td>Mohsin</td>
									<td>Irshad</td>
									<td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
									<td><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
									<td><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
								</tr>

								<tr>
									<td><input type="checkbox" class="checkthis" /></td>
									<td>Mohsin</td>
									<td>Irshad</td>
									<td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
									<td><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
									<td><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
								</tr>


								<tr>
									<td><input type="checkbox" class="checkthis" /></td>
									<td>Mohsin</td>
									<td>Irshad</td>
									<td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
									<td><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
									<td><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p></td>
								</tr>



								<tr>
									<td><input type="checkbox" class="checkthis" /></td>
									<td>Mohsin</td>
									<td>Irshad</td>
									<td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
									<td><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
									<td><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p></td>
								</tr>



								<tr>
									<td><input type="checkbox" class="checkthis" /></td>
									<td>Mohsin</td>
									<td>Irshad</td>
									<td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
									<td><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
									<td><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p></td>
								</tr>






							</tbody>

						</table>

						<div class="clearfix"></div>
						<ul class="pagination pull-right">
							<li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
						</ul>

					</div>

				</div>
			</div>
		</div>


		<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<input class="form-control " type="text" placeholder="Mohsin">
						</div>
						<div class="form-group">

							<input class="form-control " type="text" placeholder="Irshad">
						</div>
						<div class="form-group">
							<textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>


						</div>
					</div>
					<div class="modal-footer ">
						<button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
					</div>
				</div>
				<!-- /.modal-content --> 
			</div>
			<!-- /.modal-dialog --> 
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
						<button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
						<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
					</div>
				</div>
				<!-- /.modal-content --> 
			</div>
			<!-- /.modal-dialog --> 
		</div>

	</body>
	</html>