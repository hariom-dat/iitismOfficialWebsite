<!DOCTYPE html>
<html lang="en">
<head>
  <title>IIT ISM Dhanbad | Computer Science and Engineering</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../../css/dept_styles.css">
  <link rel="stylesheet" type="text/css" href="slick/slick.css">
  <link rel="stylesheet" type="text/css" href="css/animations.css">
  <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="colors">
	
</div>

<?php

	include 'header.php';
?>

<div id="cse">
	<div class="container">
		<h1>Department of Computer Science and Engineering</h1>
		<!--<h3>IIT (ISM) Dhanbad</h3>-->
	</div>
</div>

<div class="about">
	<div class="container">
		 <div class="row">
			<div class="col-md-9">
				<h3>About Department</h3><hr>
				 <p>The Department of Computer Science and Engineering was set up in the year 1997, following the resounding success of ISM Alumni in the fields of Computer Science and Information Technology. The Department provides an outstanding research environment complemented by superior teaching for its students to flourish in. </p>
				 <p>The Department of Computer Science and Engineering conducts following academic programs:</p>
				 <table class="table table-hover">
		  			<thead>
						<tr>
							<th scope="col">Serial No.</th>
							<th scope="col">Courses</th>
							<th scope="col">Admission Route</th>
						</tr>		
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>B.Tech (Computer Science and Engineering)</td>
							<td>IIT-JEE (Advanced)</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>5-Year Dual Degree (B.Tech & M.Tech in Computer Science and Engineering)</td>
							<td>IIT-JEE (Advanced)</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>2-Year M. Tech. (Computer Science and Engineering)</td>
							<td>GATE/ ISM Entrance Exam/ Industry Sponsored</td>
						</tr>
						<tr>
							<th scope="row">4</th>
							<td>2-Year M. Tech. (Computer Science and Engineering with Specialization in Information Security)</td>
							<td>GATE/ ISM Entrance Exam/ Industry Sponsored</td>
						</tr>
						<tr>
							<th scope="row">5</th>
							<td>Ph. D (Computer Science and Engineering)</td>
							<td>ISM Evaluation</td>
						</tr>
					</tbody>
				</table>
				<p>The Department boasts of highly qualified faculty who are active members of reputed National and International societies. They are instrumental in the research publications and in reviewing papers in many leading journals. The major research areas include Parallel and Distributed Algorithms, Interconnection Networks, Cryptography & Network Security, Wireless Networks, Image & Video Processing, Soft Computing Applications and Information Retrieval.</p>
    			<p>In addition to regular academics, the department undertakes R&D and consultancy projects. Major R&D projects funded by various organizations (including Ministry of Information & Technology, UGS, and CSIR) are on-going/completed in the areas of Network & Information Security, Parallel & Distributed Computing, Ad Hoc Networks, and Data Mining.</p>
    			<p>We attract some of the brightest students and faculty members, and invite promising people to join our team.</p>
    			<p>For further details, please contact:</p>
    			<p>Head of the Department<br>
				Email: cse@iitism.ac.in<br>
				Phone: +91-326-223-5273<br>
				FAX: +91-326-2296563<br></p>

			</div>
			<div class="col-md-3">
				<div class="card">
					<div class="card-header">
						Important Information
					</div>
					<div class="card-body">
						<a href="https://www.iitism.ac.in/assets/department/cse/notice/CSE-Hack-2018.pdf" target="_blank" >Winner (1st Runner up) of Smart India Hackathon 2018</a><hr>
						<a href="#">2 teams won Smart India Hackathon 2019</a><hr>
						<a href="#">Winner at Flipkart Grid 2019</a><hr>
						<!-- <a href="#">Vision & Mission</a><hr>
						<a href="#">Vision & Mission</a> -->
					</div>
				</div>
			</div>
		 </div>
	</div>
</div>

<?php

	include 'footer.php';
?>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script type="text/javascript" src="js/css3-animate-it.js"></script>

<script type="text/javascript">



	$(document).ready(function(){
	  $('.slickcarousel').slick({
		  slidesToShow: 4,
		  slidesToScroll: 1,
		  autoplay: true,
		  autoplaySpeed: 2000,
		  arrow:true,
		  responsive: [
	{
	  breakpoint: 1024,
	  settings: {
		slidesToShow: 3,
		slidesToScroll: 3,
		infinite: true,
		dots: true
	  }
	},
	{
	  breakpoint: 600,
	  settings: {
		slidesToShow: 2,
		slidesToScroll: 2
	  }
	},
	{
	  breakpoint: 480,
	  settings: {
		slidesToShow: 1,
		slidesToScroll: 1
	  }
	}
	// You can unslick at a given breakpoint now by adding:
	// settings: "unslick"
	// instead of a settings object
  ]

		});
	});
	$(window).scroll(function() {
	var height = $(window).scrollTop();
	if (height > 300) {
		$('#back2Top').fadeIn();
	} else {
		$('#back2Top').fadeOut();
	}
	if(height>$(window).height()-100){
		$('#top_header').hide();
		$('#clg_name').addClass('clgnamefont');
		$('.navbar').addClass('fixedTop');
	}else{
		$('#top_header').show();
		$('#clg_name').removeClass('clgnamefont');
		$('.navbar').removeClass('fixedTop');
	}
});
	$(document).ready(function() {
		$("#back2Top").click(function(event) {
			event.preventDefault();
			$("html, body").animate({ scrollTop: 0 }, "slow");
			return false;
		});

	});


	function openSearch() {
		var myOverlay = document.getElementById("myOverlay");
		myOverlay.style.display = "block";
		window.addEventListener("click", function(e){
			if(e.target == myOverlay){
				myOverlay.style.display = "none";
			}
		});
	}

	function closeSearch() {
	  document.getElementById("myOverlay").style.display = "none";
	}

  </script>

</body>
</html>