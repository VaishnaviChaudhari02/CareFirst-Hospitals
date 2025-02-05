<!Doctype html>
<html>
<head>
	<title>Blogs Page</title>
	<link rel="stylesheet" type="text/css" href="Blogs.css">
	<style type="text/css">
		.blogs{top:-100%;}
		.blogs p{
			text-align:center;
			font-size:50px;
		}
		.container{
			margin:0;
			padding:0;
			font-family:'Poppins',sans-serif;
			top:50px;
			display:flex;
			justify-content:center;
			align-items:center;
			background:linear-gradient(to right,#4CA9DF 0%,#A1FFB3 100%);
			position:relative;
			width:1310px;
			padding:30px;
			
		}
		.main{
			margin-top:20px;
			background-color:#04AA6D;
			width:100%;
			height:520px;

		}
		.heading{
			display:flex;
			justify-content:center;
			align-items:center;
		}
		 h1{
			margin-top:20px;
			text-align:center;
			font-size:40px;
			color:white;
		}
		.cards{
			/* width:300px; */
			display:flex;
			gap:20px;
			justify-content:center;
			margin-top:20px;
		}
		.blogs{
			width:250px;
			background-color:white;
			padding:20px;
			text-align:center;
			transition:
			top:2s
			
		}
		.blogs:hover{
			position:relative;
			top:-5px;
			box-shadow:0px 4px 8px white;
		}
		.blogs button{
			background-color:#04AA6D;
			color:white;
			padding:7px;
			border:none;
		}
		.blogs button:hover{
			box-shadow: -0px 2px 4px #04AA6D;
		}
		.blogs img{
			padding:2px;
			border:2px solid #04AA6D;
		}
		
	</style>



</head>
<body>

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
<div class="main">
	<div class="heading">
		<h1>Our Blogs</h1>
	</div>
	<div class="cards">
		<div class="blogs">
			<img src = "heath.jpg" alt = "post-headline" height = 150 width = "250">
			<h3>HeadLine</h3>
			<h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure nulla est quod non delectus! Magnam,odit</h4>
			<button>Read More</button>
		</div>
		<div class="blogs">
			<img src = "heartcare.jpg" alt = "post-headline" height = 150 width = "250">
			<h3>HeadLine</h3>
			<h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure nulla est quod non delectus! Magnam</h4>
			<button>Read More</button>
		</div>
		<div class="blogs">
			<img src = "icubed.png" alt = "post-headline" height = 150 width = "250" style = "object-fit:cover;">
			<h3>HeadLine</h3>

			<h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure nulla est quod non delectus! Magnam,odit</h4>
			<button>Read More</button>
		</div>
		<div class="blogs">
			<img src = "High-Risk-Pregnancy.webp" alt = "post-headline" height = 150 width = "250" style = "object-fit:cover;">
			<h3>HeadLine</h3>
			<h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure nulla est quod non delectus! Magnam,odit </h4>
			<button>Read More</button>
		</div>
</div>
	
</div>



</body>
</html>