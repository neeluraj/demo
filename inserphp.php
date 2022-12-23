<?php

// php code to Insert data into mysql database from input text
if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "insert_data";
    $conn= mysqli_connect($hostname, $username, $password, $databaseName);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    else {
      echo "connection successful";
    }

    // get values form input text and number

    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];

    // connect to mysql database using mysqli


    // mysql query to insert data

    $query = "INSERT INTO `demo_insert`(`name`, `surname`, `father_name`) VALUES ('$name','$sname','$fname')";

    $result = mysqli_query($conn,$query);

    // check if mysql query successful

    if($result)
    {
        echo 'Data Inserted';
    }

    else{
        echo 'Data Not Inserted';
    }


    mysqli_close($conn);
}

?>
