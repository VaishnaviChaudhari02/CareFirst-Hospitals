<?php 
session_start();
$firstname = $_POST['fname'];
// echo $firstname;
$lastname = $_POST['lname'];
// echo $lastname;
$email = $_POST['email'];
// echo $email;
$role = $_POST['role'];
// echo $role;
$pwd = $_POST['password'];
// echo $password;
$address = $_POST['address'];
// echo $address;
$mobileno = $_POST['mbno'];
    // echo $mobileno;
$country = $_POST['country'];
// echo $country;
$servername = "localhost";
$username = "root";
$password = "";
$database = "hospitaldb";
$con = new mysqli($servername,$username,$password,$database);
if($con->connect_error)
{
    die("connection failed" . $con->connect_error);
}
else{
    $sql = "INSERT INTO users(firstname,lastname,email,role,password,address,mobilno,country) VALUES('$firstname','$lastname','$email','$role','$pwd','$address','$mobileno','$country'); ";
    // $result = $con->query($sql);
    if($con->query($sql) === TRUE)
    {
        $_SESSION['status'] = "<p style = 'text-align:center;color:#04AA6D;font-size:20px;margin-top:-20px;margin-bottom:10px;'>Registered successfully</p>";
        header('Location:registration.php');

    }else{
        echo "not registered, Please try again";
    }

    }

?>
