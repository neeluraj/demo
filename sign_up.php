
<?php
include('config.php'); 

 ?>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
<?php
include 'html/menu.html';

?>
</head>
<body>
<div style="text-align:center;">

<form action="insert.php" method="post">

    <h1>Sign Up Form</h1>
<table align="center">
    <tr><td>First name:</td><td><input type="text" name="fname" placeholder="Enter First Name here.."></td></tr>
    <tr><td>Middle name:</td><td><input type="text" name="mname" placeholder="Enter Middle Name here.."></td></tr>
    <tr><td>Last name:</td><td><input type="text" name="lname" placeholder="Enter Last Name here.."></td></tr>
    <tr><td>Date of Birth:</td><td><input type="date" name="dob" ></td></tr>
    <tr><td>Gender</td><td><input type="radio" name="gen" value="female">Female<input type="radio" name="gen" value="male">Male</td></tr>

    <tr><td>Address:</td><td><textarea name="addr"></textarea></td></tr>
    <tr>
      <td>Country
        <input type="text" placeholder="country" name="country"></td>
      <td>State:<input type="text" placeholder="state" name="state">City:<input type="text" placeholder="city name" name="city"></td></tr>
       <tr><td>Postal code:</td><td><input type="text" name="postal_code"></td></tr>
    <tr><td>Email Id:</td><td><input type="email" name="email"></td></tr>
     <tr><td>Password:</td><td><input type="password" name="password1"></td></tr>
      <tr><td>Re-password:</td><td><input type="password" name="password2"></td></tr>
    <tr><td>Mobile no:</td><td><input type="text" name="number" ></td></tr>
      <tr><td>Academy/College Name:</td><td><input type="text" name="colgnam"></td></tr>
        <tr><td>
        Course:</td><td><select name="course">
          <option value="">Select course</option>
          <option value="general">General IELTS</option>
          <option value="student">Students IELTS</option>

        </select></td></tr>
         <tr><td>
         Native Language:</td><td><select name="lang">
          <option value="">Select language</option>
          <option value="english">English</option>
          <option value="gujarati">Gujarati</option>
          <option value="hindi">Hindi</option>

        </select></td></tr>
        <tr></tr>
        <tr><td></td><td ><input type="button" name="Signup" value="Sign Up"><input type="button" value="Cancle" name="cancle"></td>
https://www.javatpoint.com/form-validation-in-php


<br>
https://www.allphptricks.com/simple-user-registration-login-script-in-php-and-mysqli/
  </table>

</div>
</form>
</div>
</body>
</html>
