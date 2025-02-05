<!Doctype html>
<html>
<head>
<title>Review page</title>
<link rel="stylesheet" type="text/css" href="Review.css">

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
				<li class="one"><a href="Appointment.php">APPOINTMENT</a></li>
				<li class="one"><a href="Review.php">REVIEWS</a></li>
				<li class="one"><a href="Blogs.php">BLOGS</a></li>
			</ul>
</div>
</div>
</div>
  

	<div class="hero">
		<h1>Client's Review</h1>
		<div class="review-box">
			<div id="slide">
				<div class="card">
					<div class="profile">
					<img src="client2.jpeg" alt="client1"/>
					<div>
							<h3>John Doe</h3>
							<p>Web designer</p>
					</div>
				
					</div>
					
					<p>Recently visited health check up department of Apollo Hospital for a whole body check up. The entire process from check in to the end was seamless. The staff at the health check department was courteous, helpful and very attentive. I would highly recommend this hospital to anyone looking for something similar services</p>
			</div>
			<div class="card">
					<div class="profile">
					<img src="client1.jpg" alt="client2"/>
					<div>
							<h3>Jenny Richard</h3>
							<p>Architecture</p>
					</div>
				
					</div>
					
					<p>We met Dr Vijay Chennamchetty last month with severe cough and sputum for my father Dr Varaprasad. His way of handling patients is excellent and so soothing that the patient feels immensely confident about recovery. Thanks to Dr. Vijay, within 2 weeks, he is completely normal.</p>
			</div>
			<div class="card">
					<div class="profile">
					<img src="client3.jpg" alt="client3"/>
					<div>
							<h3>Olivia</h3>
							<p>Artist</p>
					</div>
				
					</div>
					
					<p>In Apollo hospital Dr.Radha Shah at reception people Mr.Venkat helping to patients excelent way of speaking Guidense.. I felt very Happy with this people.. I strongly recommend to my Friends n Relatives to this Apollo Hospital</p>
			</div>
			<div class="card">
					<div class="profile">
					<img src="client4.jpg" alt="client4"/>
					<div>
							<h3>George</h3>
							<p>Politician</p>
					</div>
				
					</div>
					
					<p>Dr.Sujeeth Kumar listens to you very patiently & gives you sufficient time to say your problems. He diagnosed in no time & i was able to recover quickly, not just diagnosing correctly ,he helped me in changing my lifestyle habits. One of the best doctors I visited</p>
			</div>
			<div class="card">
					<div class="profile">
					<img src="client5.jpg" alt="client5"/>
					<div>
							<h3>William</h3>
							<p>Engineer</p>
							<p>Very good doctor and kind at heart.Gives maximum time to hear patient views.His clinical diagnosis is very sharp.Most of the times he avoids surgery and does not do unnecessary surgeries.And, after treatment,he himself calls the patients and follow up their condition, which is a rare quality we see in doctors nowadays.</p>
					</div>
				</div>
					
					
			</div>
			<div class="card">
					<div class="profile">
					<img src="client6.jpeg" alt="client6"/>
					<div>
							<h3>Jessica</h3>
							<p>Housewife</p>
					</div>
				
					</div>
					<p>Good doctor. He is very simple and gentle in his behavior. He will give sufficient time to each patient. He studies the patient and disease meticulously. We can freely interact with the doctor. He prefers surgery when it is very much required only. I never found commercial nature in him.</p>
			</div>

		</div>
		<div class="slidebar">
			<img src="upimg.jpg" height=40 width=40 id="uparrow"/>
			<img src="downimg.jpg" height=40 width=40 id="downarrow"/>

		</div>
	</div>
</div>
<script>
var slide=document.getElementById("slide");
var uparrow=document.getElementById("uparrow");
var downarrow=document.getElementById("downarrow");
let x=0;
uparrow.onclick=function()
{
	if(x>"-900")
	{
	x=x-300;
	slide.style.top=x+"px";
}
}
downarrow.onclick=function()
{
	if(x<0)
	{
	x=x+300;
	slide.style.top=x+"px";
}
}



</script>
</body>
</html>

css file

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


.hero{
	width:100%;
	height:90vh;
	background:#f6fbff;
	display:flex;
	flex-direction:column;
	align-items:center;
	justify-content:center;
 
}
h1{
	font-size:40px;
	position:relative;

}
h1::after{
	content: '';
	width:150px;
	height:3px;
	background:linear-gradient(to left,#4CA9DF 0%,#A1FFB3 100%);
	position:absolute;
	bottom:-20px;
	left:50%;
	top:110%;
	transform:translateX(-50%);
}

.review-box{
width:90%;
max-width:700px;
height:300px;
border-radius:10px;
box-shadow:-10px 10px 40px rgba(0,0,0,0.25);
position:relative;
padding:20px;
overflow:hidden;
background-color:#fff;
}
.review-box::before{
	content: '';
	width:170px;
	height:150px;
	border-bottom-right-radius:100%;
	background:linear-gradient(to bottom,#4CA9DF 0%,#A1FFB3 100%);
	position: absolute;
  left: 0px;
  top: 0px;
  z-index: 0;
}
.card{
	height:300px;
	padding:40px;
	color:#777;
	line-height:22px;
	box-sizing:border-box;
	background:relative;
  
}
.card::before{
	content: '';
	width:170px;
	height:150px;
	border-bottom-right-radius:100%;
	background:linear-gradient(to bottom,#4CA9DF 0%,#A1FFB3 100%);
	position: absolute;
  left: 0px;
  top: 0px;
  z-index: 0;
	}


.profile{
	display:flex;
	align-items:center;
	margin-bottom:40px;
}
.profile img{
	width:170px;
	height:125px;
	border-radius:50%;
	margin-right:20px;
	z-index:1;
}
.profile h3{
	font-size:26px;
	color:#04AA6D;
	margin-bottom:8px;
}
#slide{
	width:100%;
	padding-right:60px;
	box-sizing:border-box;
	position:absolute;
	top:0px;
	left:0px;
	transition:0.5s;
}
.slidebar{
	width:60px;
	height:100%;
	padding:15px 0px;
	box-sizing:border-box;
	background:linear-gradient(to bottom,#4CA9DF 0%,#A1FFB3 100%);
	position:absolute;
	right:0px;
	top:0px;
	display:flex;
	flex-direction:column;
	justify-content:space-between;
	align-items:center;
}
.slidebar img{
	width:38px;
	padding:6px;
	background:#fff;
	border-radius:50%;
	cursor:pointer;
	

}