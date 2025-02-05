<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration.css">

    <title>Registration Page</title>
</head>
<body>

<?php if(isset($_SESSION['status']))
    {
        echo "<br>" . $_SESSION['status'];
        unset($_SESSION['status']);
    } 
        
?>   
    <div class="main">
    <div class="registration-form">
        <form action="registerdb.php" method = "post">
            <label>Firstname</label>
            <input type = "text" name = "fname" placeholder = "Enter your FirstName Here" required><br><br>
            <label>Lastname</label>
            <input type = "text" name = "lname" placeholder = "Enter your LastName Here" required><br><br>
            <label>Email address</label>
            <input type="text" name = "email" placeholder = "Enter your Email Address here" required><br><br>
            <label>Role</label>
            <input type="text" name = "role" placeholder = "Enter your role here" required><br><br>
            <label>Password</label>
            <input type="text" name = "password" placeholder = "Enter your password here" required><br><br>
            <label>Address</label>
            <input type="text" name = "address" placeholder = "Enter your Home Address Here" required><br><br>
            <label>Mobile No:</label>
            <input type="text" name = "mbno" placeholder = "Enter your mobile number here" required><br><br>
            <label>Country</label>
            <input type="text" name = "country" placeholder = "Enter your Country here" required><br><br>
           <button >Register</button>
 


        </form>
    
    </div>
    <div class="banner">
        <img src="register.jpg" alt="registration">
    </div>
    </div>
    <h2><a href = "login.php"> Back to login</a></h2>
</body>
</html>