<!DOCTYPE HTML>
<html>
<head>
   <title>Sign Up</title>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/styles.css" rel="stylesheet">
</head>
<body>

   <?php
   if(isset($_POST["submit"])){

      if(($_POST["password"] == $_POST["password_confirmation"])){

         if(!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['password_confirmation'])) {

            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $con=mysql_connect('classroom.cs.unc.edu','kjmoon','tGmuBw7GZG7dTN67') or die(mysql_error());
            mysql_select_db('kjmoondb') or die("DB Selection Failed");

            $query=mysql_query("SELECT * FROM Users WHERE email='".$email."'");
            $numrows=mysql_num_rows($query);
            if($numrows==0)
            {
               $sql="INSERT INTO Users(email,username,password) VALUES('$email', '$username','$password')";

               $result=mysql_query($sql);

               if($result){
                  echo "<center>Account Successfully Created</center>";
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

      <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
         <form role="form">
            <h2>Please Sign Up <small>It's free and always will be.</small></h2>
            <hr class="colorgraph">
            <div class="form-group">
               <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
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
            <div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
            <div class="col-xs-12 col-md-6"><a href="login.php" class="btn btn-success btn-block btn-lg">Sign In</a></div>
         </div>
      </form>
   </div>
</div>
<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
         </div>
         <div class="modal-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
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