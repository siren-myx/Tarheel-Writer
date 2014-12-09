
<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:login.php");
    ("location:login.php");
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="writer.js"></script>
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
                        </span>
                    </div>

                    <span id="useraccount">Hello, <?php echo $_SESSION['sess_user']; ?></sapn>
                        <img src="./home_files/user.png" height="auto" width="50px">
                        <button type="button" class="btn btn-danger btn-sm" onclick="location.href='logout.php'">Log Out</button>
                    </div>
                </nav>
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
    
        <form method="post" action="" class="form col-md-12 center-block">
            <div id="body" class="jumbotron">
                <div id="outline" class="row col-lg-12 input-group">
                    <input id="out" type="text" class="form-control" placeholder="# body paragraphs, ex. 4.">
                    <span class="input-group-addon" onclick="outline()">Click</span>
                </div><br>

            <?php
                if (isset( $_POST['submit'] ) ) { 
                    $username = $_SESSION['sess_user'];
                    $con=mysql_connect('classroom.cs.unc.edu','kjmoon','tGmuBw7GZG7dTN67');
                    mysql_select_db('kjmoondb');

                    $uid = mysql_query("SELECT * FROM Users WHERE username= '$username' ");
                    $row = mysql_fetch_array($uid);

                    $uid = $row[uid];

                    $doc = mysql_real_escape_string($_POST['essaybox']);
                    
                    $sql = "INSERT INTO Essays(uid, doc) VALUES ('$uid', '$doc')";
                    $retval = mysql_query($sql);
                    if(!$retval ) {
                        die('Could not enter data: ' . mysql_error());
                    } else {
                        echo "Upload data successfully\n";
                    }

            }
        ?>

        </div>
    </form>
    </div>
   

</body>
</html>


