<?php 

session_start();
$firstname = $_POST['fname'];
// echo $firstname;
$lastname = $_POST['lname'];
// echo $lastname;
$email = $_POST['emailid'];
// echo $email;
$mbno = $_POST['mobileno'];
// echo $mbno;
$age = $_POST['age'];
// echo $mbno;
$gender = $_POST['gender'];
// echo $gender;
$date = $_POST['appdate'];
// echo $date;

$servername = "localhost";
$username = "root";
$password = "";
$database  = "hospitaldb";
$con = new mysqli($servername,$username,$password,$database);
if($con->connect_error)
{
    die("connection failed" . $con->connect_error);
}
else{
    $sql = "INSERT INTO appointments(firstname,lastname,email,mobileno,age,gender,appdate) VALUES('$firstname','$lastname','$email','$mbno','$age','$gender','$date');";
    if($con->query($sql) == TRUE)
    {
        $_SESSION['appstatus'] = "<p style ='text-align:center;font-size:18px;color:white;'>Appointment booked successfully</p>";
        header('Location:Appointment.php');
    }
}
?>