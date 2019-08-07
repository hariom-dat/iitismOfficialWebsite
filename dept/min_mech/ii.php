<!DOCTYPE html>
<html lang="en">
<head>
  <title>IIT ISM Dhanbad</title>
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

<div id="minmech">
	<div class="container">
		<p class="display-4">Industrial Interaction</p>
	</div>
</div>

<div class="academic">
	<div class="container">
             <p>

								The department has conducted number of short term courses mainly for the executives working in mining and allied industries. It has also done some consultancy projects through off-campus short term courses.<br><br>

								A. Fourteen Weeks training programme on underground and open cast mining machineries was conducted in the year 2007 by the department for the supervisors of the TATA Steel.<br><br>
								
								B. Through five week intensive training programme since April 2012 to March 2013 department has trained about 240 graduate engineers of E&M and Excavation cadres of Coal India Limited.<br><br>
								
								Some of the Short term courses of duration one/two weeks conducted by the department are given below.<br><br>
								
								Short Term Courses (in campus):<br><br>
								
								Power Hydraulics in HEMM<br>
								Hydraulics in Mining Equipment<br>
								Trackless mining equipment<br>
								Condition Monitoring of Mining Equipment<br>
								Failure Analysis of Equipment Components<br>
								Crushers & Crushing – An Update<br>
								Machine Vibration & Diagnostic Maintenance<br>
								Drills & Drilling – An Update,<br>
								Advances in Mine Workshop Practices,<br>
								Mine Winders<br>
								Hydraulics and Pneumatics in mining.<br>
								Opencast mining machinery for the Executives of NTPC<br>
								Material Handling system<br>
								Reliability analysis of mining equipment<br>
								Computer aided maintenance of mining equipment<br>
								Maintenance Engineering<br>
								Failure Analysis of Equipment Components<br>
								Condition Monitoring of HEMM<br>
								Quarrying & Crushing Technology<br>
								Underground mining machinery<br>
								Opencast mining machinery<br><br><br>
								
								
								Short Term Courses (off campus)<br>
								Condition monitoring and Hydraulics in Mining Equipment at Grasim Cement<br>
								Condition monitoring of mining equipment at Madras Cement<br><br>
								<strong>Apart from above mentioned short term courses following consultancy work has been for the industries. <br>
								Consultancy work<br></strong>
								1.Design of a flow sheet for processing of overburden rock to produce stowing quality sand (Consulting firm – CMRI, Dhanbad).
								<br>


							</p>
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