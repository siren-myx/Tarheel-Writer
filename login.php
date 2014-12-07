  <!DOCTYPE html>
  <html>
  <head>
    <title>Tarheel Writer</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/styles.css" rel="stylesheet">
  </head>
  <body>
    <!--login modal-->

  <?php
  if(isset($_POST["submit"])){

   if(!empty($_POST['username']) && !empty($_POST['password'])) {
     $username = $_POST['username'];
     $password = $_POST['password'];

     $con=mysql_connect('classroom.cs.unc.edu','kjmoon','tGmuBw7GZG7dTN67') or die(mysql_error());
     mysql_select_db('kjmoondb') or die("DB Selection Failed");

     $query=mysql_query("SELECT * FROM Users WHERE username='".$username."' AND password='".$password."'");
     $numrows=mysql_num_rows($query);
     if($numrows!=0)
     {
       while($row=mysql_fetch_assoc($query))
       {
         $dbusername=$row['username'];
         $dbpassword=$row['password'];
       }

       if($username == $dbusername && $password == $dbpassword)
       {
         session_start();
         $_SESSION['sess_user']=$username;
         echo '<script>window.location="index.php";</script>';
       }
     } else {
       echo "Please check your username or password!";
     }
   } else {
     echo "Please check your username or password";
   }
 }
 ?>

     <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h1 class="text-center">Tarheel Writer</h1>
          </div>
          <div class="modal-body">
            <form method="post" action="" class="form col-md-12 center-block">
              <div class="form-group">
                <input type="text" class="form-control input-lg" name="username" placeholder="username">
              </div>
              <div class="form-group">
                <input type="password" class="form-control input-lg" name="password" placeholder="Password">
              </div>
              <div class="form-group">
                <input class="btn btn-primary btn-lg btn-block" type="submit" name="submit">
                <a href="registration.php">
                  <button class="btn btn-success btn-lg btn-block">Sign Up</button>
                </a>
                <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Forgot your password?</a>
              </div>
            </form>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>
    </div>

    <!-- script references -->
  </body>
  </html>
