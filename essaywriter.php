
<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:login.php");
} else {
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./bootstrap/css/styles.css">
    </head>
    <body>
	<!-- first div starts-->
	<div id="navigation">
    <!-- first div starts-->
    <div id="navigation">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">                             
                    <span class="navbar-barnd">
                        <img src="./home_files/unc_icon.png" style="margin-top:0.6%; width:8%">
                        <strong>Tarheel Writer</strong> 
                        
                        <a href="styleguide.php"><img src ="./home_files/paragraph.png" width="50px" height="auto"></a>     
                        <a href="essaywriter.php"><img src ="./home_files/write_essay.png" width="50px" height="auto"></a>   
                    </span>
                </div>

                <span id="useraccount">Hello, <?php echo $_SESSION['sess_user']; ?></sapn>
                <img src="./home_files/user.png" height="auto" width="50px">
                <button type="button" class="btn btn-danger btn-sm" onclick="location.href='logout.php'">Log Out</button>
            </div>
        </nav>
    </div>
    <!-- first div ends-->


    <div class="container"><br>
        <div id="infoboard" class="jumbotron">
                <h1 style="text-align: center" id="header">Getting Started</h1><hr>
                <p style="text-align: center" id="description">Select the essay type and number of body paragraphs you will use</p>
        </div>
        <div id="title_name" class="jumbotron">
            <div class="row input-group">
                <span class="input-group-addon">Essay Title</span>
                <input type="text" class="form-control" placeholder="">
            </div>
        </div>

        <div id="body" class="jumbotron">
            <div id="outline" class="row col-lg-12 input-group">
                <input id="out" type="text" class="form-control" placeholder="# body paragraphs, ex. 4.">
                <span class="input-group-addon" onclick="outline()">Click</span>
            </div><br>
        </div>
    </div>
   
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="writer.js"></script>

    </body>
</html>