<!Doctype html>
<html>
<head><title>Services</title>
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
.ambulance
{
  margin:3%;
  position:relative;
}
 .ambulance .a1 img
 {
  object-fit:cover;
  height:40%;
  width:100%;
 }
 .firsttext{

  font-weight:800;
  font-size:66px;
  position: absolute;
top: 17px;
right:340px;
 }
 .sectext{
   position: absolute;
 bottom: 520px;
left: 10px;
padding:50px;
font-weight:1000;
background-color:lightgrey;

 }

.containerr
{
  position:relative;
  max-width:500px;
  margin:0 auto;
  padding:10px;
  z-index: -1;
}
.containerr img
{
   position:absolute;
   z-index:-1;
   object-fit:contain;
}


.containerr .content
{
  posuion:absolute;
  bottom:0;
  background:rgba(0,0,0);
  background:rgba(0,0,0,0.5);
  color:#f1f1f1;
  width:96%;
  padding:20px;
  z-index:1;
}
.containerr .content img
{
  top:200%;
  right:20px;
  height:200%;
  width:250%;
}
.containerr .content .img1
{
  top:180%;
  left:420px;
  height:200%;
  width:90%;
  margin:30px;
}
.containerr .content .img2
{
  top:430%;
  height:200%;
  width:95%;
  left:340px;
  margin:30px;

}
.containerr .content .img3
{
  top:430%;
  height:200%;
  width:95%;
  right:340px;
  margin:30px; 
}
.containerr .content .img4
{
  top:580%;
  height:200%;
  width:95%;
  center:340px;
  margin:30px; 
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

<div class="containerr">
  <img src="ambulancee.jpg" style="width:100%;"/>
  <div class="content">
    <h1>Ambulance Services</h1>
   <img src="am1.jpg"/>
   <img class="img1" src="am2.jpg" />
   <img class="img2" src="am3.jpg"/>
   <img class="img3" src="am4.jpg"/>
   <img class="img4" src="am5.jpg"/>
  </div>

  </div>

  
</body>
</html>