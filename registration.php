<!DOCTYPE HTML>
<html>
<head>
 <title>Sign Up</title>
 <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script type="text/javascript" src="registration.js"></script>
 <link href="./bootstrap/css/registration.css" rel="stylesheet">
</head>
<body>

 <?php
echo "Hello!!";
 if(isset($_POST['submit'])){
    echo "SUBMITTED!!";
  if(($_POST['password'] == $_POST['password_confirmation'])){

   if(!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['password_confirmation'])) {

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $email;

    $con=mysql_connect('classroom.cs.unc.edu','kjmoon','tGmuBw7GZG7dTN67') or die(mysql_error());
    mysql_select_db('kjmoondb') or die("DB Selection Failed");

    $query=mysql_query("SELECT * FROM Users WHERE email='".$email."'");
    $numrows=mysql_num_rows($query);
    if($numrows==0)
    {
     $sql="INSERT INTO Users(email, username, password) VALUES ('$email', '$username','$password')";
     echo "Added the entry !";
     $result=mysql_query($sql);

     if($result){
      session_start();
      $_SESSION['sess_user']=$username;
      echo '<script>window.location="index.php";</script>';
    } else {
      echo "<center>Failure!</center>";
    }
  } else {
   echo "<center>You already have an account!</center>";
 }
} else {
  echo "<center>All fields are required!</center>";
}
} else {
 echo "<center>Passwords don't match. Please try again.</center>";
}
}
?>

<div class="container">
 <form method="post" action="">
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    
      <h2>Sign Up and Write!</h2>
      <hr class="colorgraph">
      <div class="form-group">
       <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
     </div>
     <div class="form-group">
       <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username" tabindex="4">
     </div>
     <div class="row">
       <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group">
         <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
       </div>
     </div>
     <div class="col-xs-12 col-sm-6 col-md-6">
      <div class="form-group">
       <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
     </div>
   </div>
 </div>
 <div class="row">
   <div class="col-xs-4 col-sm-3 col-md-3">
    <span class="button-checkbox">
     <button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
     <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
   </span>
 </div>
 <div class="col-xs-8 col-sm-9 col-md-9">
   By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
 </div>
</div>
<hr class="colorgraph">
<div class="row">
  <div class="col-xs-12 col-md-6">
    <input name="submit" type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7">
    </div>
  <div class="col-xs-12 col-md-6"><a href="login.php" class="btn btn-success btn-block btn-lg">Sign In</a>
  </div>
</div>

</div>
</form>
</div>
<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-lg">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title" id="myModalLabel">Terms and Conditions</h4>
  </div>
  <div class="modal-body">
   <p>We will have the right to hold onto your essays on our servers and comply with all law enforcement request.</p>
   <p>You will also not use this tool to violate any honor code at your educational institution</p>
 </div>
 <div class="modal-footer">
  <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>


</body>
</html>