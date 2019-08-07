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

<div id="physics">
	<div class="container">
		<p class="display-4">Facilities</p>
	</div>
</div>

<div class="academic">
	<div class="container">
	<p>
      <strong>General Laboratory-</strong> It has latest laboratory equipments for all courses such as Michelson Interferometer, ESR spectrometer, Kerr Effect, Zeeman effect, Hall effect, Multivibrators, Optical fibre based experiments, etc. In addition, it has a dark room for conducting optics based experiments.<br><br>

    <strong>Laser Laboratory –</strong> It has one vibration free holographic table, Two He-Ne Lasers (each of 10 mW) and Holographic Accessories.<br><br>
      
  <strong>Luminescence Laboratory-</strong> PC based Thermoluminescence Analyser system for recording and analyzing thermoluminescence glow curves, FTIR spectrophotometer, High temperature furnace, etc.<br><br>
      
<strong>Solid State Laboratory – </strong>PC based Thermoluminescence Analyser system for recording and analyzing thermoluminescence glow curves.Instruments for Hall effect, Four-Probe method of energy band gap studies, dielectric studies etc.<br><br>
      
<strong> X-Ray Laoratory –</strong> Radon House X-ray Generator and x-ray accessories.<br><br>
      
<strong>Dielectric Laboratory –</strong> Hioki LCR meter, High temperature furnace, etc.<br><br>
      
<strong>Biomedical Laboratory-</strong> CCD camera, Bread board, IR viewer and card, Interferometer Flats, Hot and cold mirrors, etc<br><br>
      
<strong>Thin film Laboratory- </strong>Two thin film labs with latest equipment for synthesis and characterization of thin films, UV-VIS spectrophotometer, Langmuir-Blodgett film deposition apparatus, spin coater, etc.<br><br>
      
<strong>Spectroscopy Laboratory –</strong> Constant deviation Spectrograph, Quartz Spectrograph, Ultrasonic Interferometer etc.<br><br>
      
<strong>Photonics Laboratory –</strong> Finite element method software, Optical fibers, Power meter, LED source, Er doped Fiber, Fiber Bragg grating, etc.<br><br>
      
<strong>Computer Laboratory – </strong>Ten PCs, Scanner, Laser Printer, etc with wi-fi internet facility.<br><br>
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