<?php  
    session_start();
    $uname = $_POST['uname'];
    $pwd = $_POST['pass'];
    // echo $username . " " . $password;
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
        $sql = "SELECT * FROM users WHERE firstname = '$uname' and password = '$pwd';";
        $result = $con->query($sql);
        if( $result->num_rows>0){
            while($rows = $result->fetch_assoc())
            {
                if($rows['firstname'] == $uname && $rows['password'] == $pwd)
                {
                    $_SESSION['usersname'] = $rows['firstname'];
                    $_SESSION['userid'] = $rows['id'];
                    
                }
                
        
            }
            header('Location:Dashboard.php');
        } 
       else{
        header('Location:login.php');
       }
    }

?>