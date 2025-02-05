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
				<li class="one"><a href="Docters.php">DOCTERS</a></li>
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