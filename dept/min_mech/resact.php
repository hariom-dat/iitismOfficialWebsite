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
		<p class="display-4">Research Activities</p>
	</div>
</div>

<div class="academic">
	<div class="container">
		<p>
				The department has completed many research projects like FIST project, Fast Track project funded by government agencies like DST, UGC, AICTE etc. At present the department has several regular and part-time research students. The faculty members keep focus on good research publication in peer reviewed Journals and conference proceedings. The department has carried out a number of School funded and sponsored research projects in different areas. Many research scholars are registered under the department for their doctoral research degrees. A good number of such degrees have already been awarded. Some of the major research projects completed by the department are as follows:<br><br><br>

				<strong>Completed:</strong><br><br>
				
				Computer aided design of an electro-hydraulically controlled hydro-static transmission system for mining equipment, Year: 2000-2003, R & D project, Funding Agency: UGC<br><br>
				Computer controlled energy efficient LSHT output hydrostatic drive for mining equipment using proportional solenoid valve technology, Year: 2003-2006, R & D project, Funding Agency: MHRD<br><br>
				Energy Efficient Hydrostatic Transmission System using two motor summation drive has been developed, Year: 2009-2012, R & D project, Funding Agency: UGC<br><br>
				Condition Based Maintenance of Mining Equipment, R & D project, Funding Agency: AICTE<br><br>
				Condition Based Maintenance & Safety Instruments for Mining & Allied Machineries & Fluid Power system in Mining & Allied Machineries, R & D project, Funding Agency: UGC Under special assistance programme (SAP)<br><br>
				Modal Approach of the Dynamic Behaviour of Material Handling Equipment Components in Mining Industry, R & D project, Funding Agency: MHRD<br><br>
				Investigation into Noise Status of Some Selected Non Coal Mining Complexes with a view to Developing Abatement & Control Measures, R & D project, Funding Agency: Coal (S&T)<br><br>
				Development of Integrated Sensor Technology for Mobile Robotic Application, R & D project, Funding Agency: MHRD<br><br>
				Energy system and management (in collaboration with the Department of Industrial Engg. & Management) funded by the MHRD / Govt. of India<br><br>
				Development of fiber reinforced shtcrete for supporting underground openings against failure due to rock discontinuity and induced stresses (in collaboration with Dept. of Mining Engg.), funded by DST / Govt. of India.<br><br>

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