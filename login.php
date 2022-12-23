
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body>
  <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<?php
  
include 'html/menu.html';

include('config.php');

if($_SERVER["REQUEST_METHOD"]=="post"){
  //user name and password set from html form
  $myusername=mysqli_real_escape_string($dbname,$_POST['uname']);
  $mypass=mysqli_real_escape_string($dbname,$_POST['password']);
  //select user name and password from demo_database
    $sql = "SELECT signup_id FROM sign_up WHERE email_id = '$myusername' and password = '$mypass'";
    $result = mysqli_query($dbname,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];
        $count = mysqli_num_rows($result);

     // If result matched $myusername and $mypassword, table row must be 1 row
     if($count == 1) {
    
          header("location: index.php");
       }else {
          $error = "Your Login Name or Password is invalid";
       }
	   
          session_start();
$_SESSION["session1"]=$myusername;
echo "session start";
    }

?>
https://www.geeksforgeeks.org/how-to-display-logged-in-user-information-in-php/
<form action="index.php" method="post">
<table align="center"><tr align="center"><td colspan="2">  <h2>Login</h2></td></tr>
  <tr><td>User Name:</td><td><input type="text" name="uname" value="" placeholder="Enter user name"></td></tr>
  <tr><td>Password:</td><td><input type="password" name="password" value="" ></td></tr>
<tr><td></td><td>  <input type="submit" value="Login" name="sign_up"></td></tr>
<tr><td colspan="2"><a href="sign_up.php">click here for new user</a></td></tr>
</table>

</form>
<?php include 'html/footer.html';
?>
</body>
</html>
