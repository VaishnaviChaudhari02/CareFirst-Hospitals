<?php session_start(); ?>
<!Doctype html>
<html>
<head>
	<title>Appointment Page</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
</head>
<body>
    <div class="navbar1">
    <div class="logo"><img src="logo.jpg" height=60 width=60 align="left"/></div>
    <h2 class="logo2">CareFirst Hospitals</h2>
<br><br>
        <div class="menu">
            <ul type="none" class="navbar">
                <li class="one"><a href="Dashboard.php">HOME</a></li>
                <li class="one"><a href="Services.php">SERVICES</a></li>
                <li class="one"><a href="Aboutus.php">ABOUT US</a></li>
                <li class="one"><a href="Docters.php">DOCTERS</a></li>
                <li class="one"><a href="Review.php">REVIEWS</a></li>
                <li class="one"><a href="Blogs.php">BLOGS</a></li>
            </ul>
</div>
</div>
</div>


<div class="bg-image"></div>
<div class="form">
    <?php  if(isset($_SESSION['appstatus']))
    {
        echo $_SESSION['appstatus'];
        unset($_SESSION['appstatus']);
    } ?>
    <form class="container" action = "appointmentdb.php" method = "post">
        <h2>Book An Appointment</h2>
          <label>First Name:</label>
            <br>
            <input type="text" name="fname" id="name" placeholder="Enter Your First Name">
            <br><br>
            <label>Last name:</label>
            <br>
             <input type="text" name="lname" id="name" placeholder="Enter Your Last Name">
             <br><br>
             <label>Enter Email Address:</label>
             <br>
             <input type="email" name="emailid" id="name" placeholder="Enter Your Email Address">
             <br><br>
             <label>Mobile Number:</label>
             <br>
             <input type="number" name="mobileno" id="name" placeholder="Enter Your Mobile No.">
             <br><br>
             <label>Age:</label>
             <br>
             <input type="number" name="age" id="name" placeholder="Enter Your Age">
             <br>
             <br>
             <label>Gender:</label>
             <br>
             <input type="radio" name="gender" value = "male"  id="male">
             <span id="male">Male</span>
             <input type="radio"name="gender" value = "female" id="female">
             <span id="female">Female</span>
             <br><br>
             <label>Appointment Date:</label>
             <br>
             <input type="date" name="appdate" id="date">
             <br><br>

             <button  id="submit" >Make An Appointment
             </button>
    </form>
</div>
</body>
</html>