<!DOCTYPE HTML>
<html>
<head>
   <title>Sign Up</title>
</head>
<body>

   <?php
   if(isset($_POST["submit"])){

      if(($_POST["password"] == $_POST["cpassword"])){

         if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['cpassword'])) {

            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $con=mysql_connect('classroom.cs.unc.edu','kjmoon','tGmuBw7GZG7dTN67') or die(mysql_error());
            mysql_select_db('kjmoondb') or die("DB Selection Failed");

            $query=mysql_query("SELECT * FROM Users WHERE username='".$username."'");
            $numrows=mysql_num_rows($query);
            if($numrows==0)
            {
               $sql="INSERT INTO Users(firstname, lastname,email,username,password) VALUES('$firstname', '$lastname', '$email', '$username','$password')";

               $result=mysql_query($sql);

               if($result){
                  echo "<center>Account Successfully Created</center>";
               } else {
                  echo "<center>Failure!</center>";
               }
            } else {
               echo "<center>That username already exists!</center>";
            }
         } else {
            echo "<center>All fields are required!</center>";
         }
      } else {
         echo "<center>Passwords don't match. Please try again.</center>";
      }
   }
   ?>
   
   <div>


</body>
</html>