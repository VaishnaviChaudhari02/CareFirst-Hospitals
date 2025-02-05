<!Doctype html>
<html>
<head><title>Doctors Page</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
	 integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" 
	 referrerpolicy="no-referrer" />
	<style type="text/css">

		.navbar1{display:flex;
padding-left:0px;
box-shadow:0px 2px 4px black;
}
.menu{
	background-color: white;
	display:flex;
  padding:10px;
  margin-top:3px;

}
.navbar li{
	float:left;
	padding-left: 40px;
	text-decoration: none;

 }
 .navbar li a{
 	color:#03C04A;

  padding:10px;
 
 	text-decoration: none;
 	font-family:Arial;
 	font-weight:bolder;
 	 position:relative;
	border:none;
	border-radius:50px;
 }
 .navbar li a:hover{
color:white;
transition:.3s ease-in-out;
background:linear-gradient(to right,#4CA9DF 0%,#A1FFB3 100%);
 }
 
 .one:hover~a{
  margin-left:25%;
 }
 .two:hover~a{
  margin-left:50%;
 }
 .three:hover~a{
  margin-left:75%;
 }
 .four:hover~a{
  margin-left:100%;
 }
 .five:hover~a{
  margin-left:125%;
 }
 .logo img{
  border-radius:50%;
  box-shadow:0px 2px 3px black;

margin-bottom:2px;

 }
.logo{
  margin:8px;
  padding-left:10px;
 
}
 .logo2 {padding:4px;}
 .container{
	position:relative;
	width:1280px;
	display:flex;
	justify-content:center;
	align-items:center;
	flex-wrap:wrap;
	min-height:100vh;
 }

 .container .cards{
	position:relative;
	width:300px;
	height:400px;
	background:linear-gradient(#A1FFB3 50%,#4CA9DF 50%);
	margin:10px;
	border-radius:20px;
	overflow:hidden;
 }

 .container .cards .imgbx
 {
	position:absolute;
	
	top:0;
	left:0;
	width:100%;
	height:100%;
	transition:0.5s;
	z-index:100000;
	overflow:hidden;
	
	transform-origin:top;
 }
 .container .cards:hover .imgbx
 {
   transform:translateY(30px) scale(0.5);
 }
 .container .cards .imgbx img{
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:100%;
	object-fit:cover;
	border-radius:20px;
 }
 .container .cards .content
 {
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:100%;
	display:flex;
	justify-content:center;
	align-items:flex-end;
	padding-bottom: 30px;
	transform:translateY(100%);
	transition:0.5s;
}
 .container .cards:hover .content
 {
 	transform:translateY(0);
 }
 .container .cards .content .details
 {
	display:flex;
justify-content:center;
align-items:center;
flex-direction:column;
text-align:center;
 }
 .container .cards .content .details h2{
	color:#fff;
	
	font-size:1.5em;
	font-weight:500;
 }
 .container .cards .content .details h2 span{
	font-size:1.2em;
	font-weight:400;
	display:flex;
	color:#A1FFB3;
 }
.social_icons
 {
   position:relative;
   display:flex;
   margin-top:5px;
   padding:4px;
 }
 .social_icons li{
	list-style:none;
	margin:4px;
    flex-direction:column;

 }
 .social_icons li a{
	width:45px;
	height:45px;
	
	display:flex;
	align-items:center;
	justify-content:center;
	background:#a1ffe0;
	border-radius:50%;
	font-size:1.5em;
	text-align:center;
	color:#4CA9DF;
	text-decoration:none;
	transition:0.5s;
 }
 .social_icons li a:hover{
  transform:rotate(360deg);
 }
	</style>
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

<div class="container">
	<div class="cards">
    <div class="imgbx">
		<img src="doc.jpg"/>
	</div>
	<div class="content">
		<div class="details">
			<h2>Rahul Mahajan<span>Heart Speacialist</span></h2>
			<ul class="social_icons">
             <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
			 <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			 <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
			 <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	</div>

	<div class="cards">
    <div class="imgbx">
		<img src="doc3.jpg"/>
	</div>
	<div class="content">
		<div class="details">
			<h2>Sachin Mahajan<span>Neurologist</span></h2>
			<ul class="social_icons">
             <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
			 <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			 <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
			 <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	</div>

	<div class="cards">
    <div class="imgbx">
		<img src="doc4.jpeg" width=70/>
	</div>
	<div class="content">
		<div class="details">
			<h2>Nitin Phale<span>Orthopaedist</span></h2>
			<ul class="social_icons">
             <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
			 <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			 <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
			 <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	</div>

	<div class="cards">
    <div class="imgbx">
		<img src="doc5.jpg"/>
	</div>
	<div class="content">
		<div class="details">
			<h2>Pradeep Alhat<span>Psychiatrist</span></h2>
			<ul class="social_icons">
             <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
			 <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			 <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
			 <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	</div>
</div>
</body>
</html>