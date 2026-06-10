<?php
echo "this is facebook signup page";
echo "<br>";    

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$dateofbirth = $_POST["dob-day"] . "/" . $_POST["dob-month"] . "/" . $_POST["dob-year"];
$gender = $_POST["gender"]; 
$mobileoremail = $_POST["mobileoremail"];
$password = $_POST["password"];

//Connect mysql
$connection = mysqli_connect("localhost","root","","login_system");

if($connection==true)
    {
        echo "Database connected successfully";

        $query = "INSERT INTO `facebookusers`(`First_name`, `Last_name`, `DateOfBirth`, `Gender`, `Mobileo_or_Email`, `PASSWORD`) VALUES ('$firstname', '$lastname', '$dateofbirth', '$gender', '$mobileoremail', '$password')";

        //to execute
        $result = mysqli_query($connection, $query);
        echo "<br>";
        echo "$result";
        //Navigate to login page
        header("Location:http://localhost/PhpPractice/index.html");
        
    }
else
    {
        echo "Database not connected";
    }
    ?>