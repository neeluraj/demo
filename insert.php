  <?php
  include('config.php');
     // get values form input text and number

	 $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
	$dob = $_POST['dob'];
	$gender = $_POST['gen'];
	$address = $_POST['addr'];
	$country =$_POST['country'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$postal = $_POST['postal'];
	$email = $_POST['email'];
	$password =$_POST['password1'];
	$password2 = $_POST['password2'];
	$number = $_POST['number'];
	$colgnam = $_POST['colgnam'];
	$course = $_POST['course'];
	$postal = $_POST['postal_code'];
	$lang = $_POST['lang'];
	$dt1=date("Y-m-d H:i:s");
    // connect to mysql database using mysqli



    // mysql query to insert data
$query ="INSERT INTO `sign_up`(`fname`, `mname`, `lname`, `gender`, `password`, `email_id`, `dob`, `address`, `mobile_no`, `country`, `city`, `state`, `postal_code`, `native_lang`, `academy_name`, `course`, `update_date`, `deleted_date`, `deleted`) VALUES ('$fname','$mname','$lname','$gender','$password','$email','$dob','$address','$number','$country','$city','$state','$postal','$lang','$colgnam','$course','$dt1','','0')";


    $result = mysqli_query($conn,$query);

    // check if mysql query successful

    if($result)
    {
		if(!isset($_SESSION)) session_start();


    if(isset($_POST['userid'])){
         $userid = $_POST['userid']; 
         $_SESSION['userid']=$fname;
         echo "Welcome $_SESSION[userid]";
    }

    if (!isset($_SESSION['userid'])){
        echo "Please login";
        
		header('Location:login.php');
		exit;
    }
   
    }

    else{
        echo 'Data Not Inserted';
    }

 mysqli_close($conn);
 ?>
