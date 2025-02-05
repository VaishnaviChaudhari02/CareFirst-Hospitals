<?php session_start(); ?>

<!Doctype html>
<html>
<head>
	<title>Login Page</title>
	<style type="text/css">
*{
	margin:0;
	padding:0;
	box-sizing:border-box;
	font-family:'Poppins',sans-serif;
	
}
section{
	position:relative;
	width:100%;
	height:100vh;
    display:flex;
}
section .imgbx{
	position:relative;
	width:50%;
	height:100%;
}
section .imgbx:before{
	content:'';
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:100%;
	background:linear-gradient(200deg,#4CA9DF,#A1FFB3);
	z-index:1;
	mix-blend-mode:screen;
}
section .imgbx img{
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:100%;
	object-fit:cover;
}
section .contentbx{
	display:flex;
	justify-content:center;
	align-items:center;
	width:50%;
	height:100%;

}
section .contentbx .form-box{
	width:50%;
}
section .contentbx .form-box h2{
	color:darkolivegreen;
	font-weight:600;
	font-size:1.5rem;
	text-transform:uppercase;
	margin-bottom:20px;
	border-bottom: 4px solid greenyellow;
	display:inline-block;
	letter-spacing:1px;
}
section .contentbx .form-box .inputbx{
	margin-bottom:20px;
}
section .contentbx .form-box .inputbx span{
	font-size: 16px;
	margin-bottom:5px;
	display:inline-block;
	color:seagreen;
	font-weight: 300;
	letter-spacing:1px;
}
section .contentbx .form-box .inputbx input{
	width:100%;
	padding:10px 20px;
	outline:none;
	font-weight:400;
	border:1px solid seagreen;
	font-size: 16px;
	letter-spacing:1px;
	color:seagreen;
	background:transparent;
	border-radius:30px;
}
section .contentbx .form-box .inputbx input[type="submit"]
{
	background:limegreen;
	color:#fff;
	outline:none;
	border:none;
	font-weight: 500;
	cursor:pointer;
}
section .contentbx .form-box .inputbx input[type="submit"]:hover
{
	background:forestgreen;
}
section .contentbx .form-box .remember
{
	margin-bottom:10px;
	color:seagreen;
	font-weight:400;
	font-size:14px;
}
section .contentbx .form-box .inputbx p
{
	color:seagreen;
}
section .contentbx .form-box .inputbx p a
{
	color:limegreen;
}
section .contentbx .form-box h3{
	color:limegreen;
	text-align: center;
	margin:8px 0 28px;
	font-weight:500;

}
section .contentbx .form-box .sci{
	display:flex;
	justify-content:center;
	align-items:center;

}
section .contentbx .form-box .sci li{
	list-style:none;
	width:50px;
	height:50px;
	display:flex;
	justify-content:center;
	align-items:center;
	margin-left: 30px;
	border-radius:60%;
	margin:0 7px;
	cursor:pointer;

}
section .contentbx .form-box .sci li:hover{
   background:limegreen;
}
section .contentbx .form-box .sci li img{
	transform:scale(1);
}
@media(max-width:768px)
{
	section .imgbx{
	position:absolute;
	width:100%;
	height:100%;
	top:0;
	left:0;
}
section .contentbx{
	display:flex;
	justify-content:center;
	align-items:center;
	width:100%;
	height:100%;
	z-index:1;
}
section .contentbx .formbx
{
    width:100%;
    padding:40px;
    background:rgb(255 ,255 ,255,0.9);
    margin:50px;
}
section .contentbx .formbx h3{
	color:limegreen;
	text-align:center;
	margin:30px 0 10px;
	font-weight:500;
}
}
.back{
	padding:12px 24px;

}
.back a{
	text-decoration:none;
	color:seagreen;
	font-weight:700;
	font-size:20px;

}
.back a:hover{
	transition:.3s ease-in-out;
background:linear-gradient(to right,#4CA9DF 0%,#A1FFB3 100%);
border-radius:20px;
padding:8px;
color:white;
}




	</style>
	</head>
	<body>
		<section>
			<div class="imgbx">
				<img src="login.jpeg"/>
			</div>
			<div class="contentbx">
				<div class="form-box">
					<h2>Login</h2>
					<form action = "loginverify.php" method = "post">
						<div class="inputbx">
							<span>Username</span>
							<input type="text" name="uname"/>
						</div>
						<div class="inputbx">
							<span>Password</span>
							<input type="password" name="pass"/>
						</div>
						<!-- <div class="remember">
							<label><input type="checkbox" name="">Remember me</label>
						</div> -->
						<div class="inputbx">
							<input type="submit" value="Sign in"/>
						</div>
						<div class="inputbx">
							<p>Don't have an account?<a href="registration.php">Register</a></p>
						</div>
					</form>
					<h3>Login with social media</h3>
					<ul class="sci">
						<li><img src="facebook.jpeg" height=40 width=40 style="border-radius:50%;"/></li>
						<li><img src="instagram.jpeg" height=40 width=40 style="border-radius:30%;"/></li>
						<li><img src="twitter.jpeg"  height=40 width=40 style="border-radius:50%;"/></li>
					</ul>
				</div>
				
			</div>
		</section>
		
	</body>
</html>