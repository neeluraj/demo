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
?>

</center>
<form action="add_courses.php" method="POST">
<input type="text" name="c_name" >
<input type="button" name="add" value="Add">

<?php
include 'config.php';
if(isset($_POST['add'])){
    $cname =$_POST['c_name'];
      // Sql query to be executed
      if($cname !=''){
    //Insert Query of SQL
      $sql = "INSERT INTO courses (course_name) VALUES ('$cname')";
    echo "<br/><br/><span>Data Inserted successfully...!!</span>";
    }
    else{
    echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
    }
    }
    mysqli_close($conn); // Closing Connection with Server
    ?>




</form>
  </body>
</html>
