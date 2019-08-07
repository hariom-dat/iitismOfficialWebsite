<!DOCTYPE html>
<html lang="en">
<head>
  <title>IIT ISM Dhanbad | Civil Engineering</title>
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


<div id="civil">
	<div class="container">
		<h1>Department of Civil Engineering</h1>
		<!--<h3>IIT (ISM) Dhanbad</h3>-->
	</div>
</div>

<div class="about">
	<div class="container">
		 <div class="row">
			<div class="col-md-9">
				<h3>About Department</h3><hr>
				 <p>Department of Civil Engineering started its first batch of 4-year B. Tech course in Civil Engineering from July 2013. The Department currently offers 4-year B. Tech programme in Civil Engineering and Ph.D programme. Admission for the 4-year B. Tech Civil Engineering is through IIT-JEE with an intake capacity of 40 students. The Department will be starting soon the M. Tech programmes in various disciplines, viz. Structural Engineering, Water Resources Engineering, Environmental Engineering, Geotechnical Engineering and Transportation Engineering. The Department consists of a team of talented faculty members who contribute to the development of the young minds. The Department aims to be one of the pioneering centres of teaching, training and advanced research in Civil Engineering.</p>

            <p>The fundamental objective of the Department of Civil Engineering is to provide state-of-the-art teaching and research facilities for the students to inculcate innovative and new ideas and contribute significantly in the field of construction and infrastructure development. Students are provided with in-depth understanding of fundamental principles and trained to efficiently utilize their knowledge and skills to handle the challenges of Civil Engineering. In addition to the academic excellence, the Department encourages its students to engage in extra-curricular and co-curricular activities, nurturing of team spirit and leadership qualities, and developing organizational skills. The principal long-range goal of the Department is to establish itself as a centre of excellence in Civil Engineering with special reference to Structural Engineering, Water Resources Engineering, Environmental Engineering, Geotechnical Engineering, and Transportation Engineering.</p>

            <p style="text-align: justify;"><strong>Contact:</strong></p>
        
            <br>Head of The Department
            <br>Email: civ@iitism.ac.in
            <br>Phone: +91-326-2235289 (O)
            <br><br>
        </div>
				
			<div class="col-md-3">
				<div class="card">
					<div class="card-header">
						Important Information
					</div>
					<div class="card-body">
						No content to display
						<!-- <a href="#">Vision & Mission</a><hr>
						<a href="#">Vision & Mission</a><hr>
						<a href="#">Vision & Mission</a><hr>
						<a href="#">Vision & Mission</a><hr>
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