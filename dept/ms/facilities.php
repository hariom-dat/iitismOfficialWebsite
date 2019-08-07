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
  <style>
  .typewriter {
    font-family: Courier, monospace;
  display: inline-block;
}
  .typewriter-text {
    display: inline-block;
    overflow: hidden;
    letter-spacing: 3px;
  animation: typing 3.5s steps(30, end), blink .75s step-end infinite;
    white-space: nowrap;
    font-size: 70px;
    font-weight: 700;
    border-right: 4px solid white;
    box-sizing: border-box;
    color: white;
    text-align: center;
}
@keyframes typing {
    from { 
        width: 0% 
    }
    to { 
        width: 100% 
    }
}

@keyframes blink {
    from, to { 
        border-color: transparent 
    }
    50% { 
        border-color: black; 
    }
}
  </style>
</head>
<body>

<div class="colors">
	
</div>

<?php

	include 'header.php';
?>
<!-- Coded by Vinuthna J -->
<div id="mba">
  <div class="container">
    	<div><h2>Department of Management Studies</h2></div>
  </div>
</div>

<div class="academic">
	<div class="container">
		<p class="lead font-weight-bold">The Department has four laboratories:</p>
              <p><span style="text-decoration: underline;"><strong>Human Engineering Laboratory </strong></span><br>
               Instruments like Treadmill, Ergometer, ECG Machine, Biomonitor, BP Measuring Instruments, Oxylog, Audiometer, Anthropometer, Skinfold Caliper, Goniometer, Hand Dynamometer, Reaction Time Apparatus, Workplace Environmental Monitoring Instruments etc. are available to facilitate Reaction Time Analysis, Stress Testing, Physical Fitness Test, Antropometric Database generation for design of machine and workplace..<br>
               <span style="text-decoration: underline;"><strong>Work Study Laboratory </strong></span><br>
                AInstruments like Work Sampling Simulator, Anemometer, Clinometer, Inclinometer, Dry and Wet Bulb Thermometer, Digital Time Study Board, Digital Stopwatch, 16mm Projector etc. for carrying out Time and Method study for System improvement.</p>
               
               <p><span style="text-decoration: underline;"><strong>Systems Laboratory</strong></span><br>
               The laboratory contains 38 number of computer terminals with LAN/WAN facility. Internet accessibility in 1 Mbps for 24 hours is available. The laboratory is equipped with softwares like AutoCAD, MATLAB, System Dynamics Software (IGRASP), MS Project, MINITAB, LINDO & LINGO. Financial Databases like Capital Line Corporate Database, Economic Intelligence Unit and Cygnus Portal Database are also available.</p>

               <p style="text-align: justify;"><span style="text-decoration: underline;"><strong>Psychology Laboratory</strong></span><br>
               Instruments like Ring Toss, Tower Building/Cube Construction, Ergograph, Tachistoscope, Card sorting Tray with Cards, Human Maze Learning T-shape, Koh’s Block Design Test, etc. are available for Intelligence Testing, Aptitude Measurement, Personality Assessment, Managerial Aptitude Testing, Stress Profile and Employee Behaviour Analysis.</p>

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