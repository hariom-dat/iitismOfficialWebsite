<!DOCTYPE html>
<html lang="en">
<head>
  <title>IIT ISM Dhanbad</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="slick/slick.css">
  <link rel="stylesheet" type="text/css" href="css/animations.css">
  <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php

	include 'header.php' ;

?>

<div class="about" style="background: url('img/side.jpg') center top no-repeat; background-size: cover;">
  <div class="container">
    <span class="display">Faculties</span>
  </div>
</div>

<div class="colors">
	
</div>

<div class="faculty">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p><a href="dept/apchm/faculties.php">Applied Chemistry</a></p>
				<p><a href="dept/apgeo/faculties.php">Applied Geology</a></p>
				<p><a href="dept/app/faculties.php">Applied Geophysics</a></p>
				<p><a href="dept/apmat/faculties.php">Applied Mathematics</a></p>
				<p><a href="dept/app_physics/faculties.php">Applied Physics</a></p>
				<p><a href="dept/chem/faculties.php">Chemical Engineering</a></p>
				<p><a href="dept/civil/faculties.php">Civil Engineering</a></p>
				<p><a href="dept/cse/faculties.php">Computer Science & Engineering</a></p>
				<p><a href="dept/ee/faculties.php">Electrical Engineering</a></p>
			</div>
			<div class="col-md-6" style="text-align: right;">
				<p><a href="dept/electronics/faculties.php">Electronics Engineering</a></p>
				<p><a href="dept/enviro/faculties.php">Environmental Science and Engineering</a></p>
				<p><a href="dept/mineral/faculties.php">Fuel & Mineral Engineering</a></p>
				<p><a href="dept/huma/faculties.php">Humanities and Social Science</a></p>
				<p><a href="dept/MS/faculties.php">Management Studies</a></p>
				<p><a href="dept/mech/faculties.php">Mechanical Engineering</a></p>
				<p><a href="dept/min_mech/faculties.php">Mining Machinery Engineering</a></p>
				<p><a href="dept/mining/faculties.php">Mining Engineering</a></p>
				<p><a href="dept/petro/faculties.php">Petroleum Engineering</a></p>
			</div>
		</div>
	</div>
</div>

<?php

	include 'footer.php' ;

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