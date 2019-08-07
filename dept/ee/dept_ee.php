<!DOCTYPE html>
<html lang="en">
<head>
  <title>IIT ISM Dhanbad | Electrical Engineering</title>
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

<div id="ee">
	<div class="container">
		<h1>Department of Electrical Engineering</h1>
		<!--<h3>IIT (ISM) Dhanbad</h3>-->
	</div>
</div>

<div class="about">
	<div class="container">
		 <div class="row">
			<div class="col-md-9">
				<h3>About Department</h3><hr>
				<p>The Electrical Engineering department is one of the latest of the existing departments in the School and was formed in February 2005. The B.Tech. course in Electrical Engineering has been started in the academic session 2006-07.</p>

				<p>Though the Electrical Engineering department has been established only recently, the Electrical Engineering Section existed in the School for over last 35 years. As a part of Mining Machinery Engineering department, the Electrical Engineering Section was fully functional with teaching and R&D activities from 1975. The B.Tech. Mining Machinery Engineering programme of the School comprised about 30% of the Electrical Engineering input and subjects like Electrical Technology, Circuits & Measurements, Electrical Machines & Control, Electrical Drives, Power Systems, Power Electronics, Mining Electro-Technology had been taught to the B.Tech. Mining Machinery Engineering students from 1975 onwards by this Section. Beside this, the Electrical Engineering Section also catered to various other Electrical Engineering subjects like Utilization of Electrical Energy, Applied Electrical Engineering and Mining Electrical Engineering etc. to other departments. The Electrical Engineering department has a history of strong R&D base and it has produced a number of M.Tech. and Ph.D. students in Electrical & Electronics Engineering. It has also published a large number of research papers in foreign and Indian Journals and conferences.</p>

				<p style="text-align: justify;"><strong>Contact:</strong></p>
	            <br>Head of the Department
	            <br>Email: ee@iitism.ac.in
	            <br>Phone: +91-326-2235287, 2296623
	            <br>Central Fax of The School:+91-326-2296563
	        </div>
				
			<div class="col-md-3">
				<div class="card">
					<div class="card-header">
						Important Information
					</div>
					<div class="card-body">
						<!--<a href="#">Vision & Mission</a><hr>-->
						<!--<a href="#">Vision & Mission</a><hr>-->
						<!--<a href="#">Vision & Mission</a><hr>-->
						<!--<a href="#">Vision & Mission</a><hr>-->
						<!--<a href="#">Vision & Mission</a>-->
						<h>No information to show</h>
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