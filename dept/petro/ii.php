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

<div id="mining">
	<div class="container">
		<p class="display-4">Industrial Interaction</p>
	</div>
</div>

<div class="academic">
	<div class="container">
             <p>
								The Students of the Dept. with their efficient knowledge in Petroleum Engineering always attract most of the leading oil companies. The students are also getting their first exposure to the oil and gas industries during their six-week summer training for two years during their UG course itself. Moreover, conducting in-campus and off-campus courses for oil & gas executives every year is making the interaction more fruitful. Schlumberger has started a Schlumberger Indian University Handshake (SIUH) programme to promote industry-institute interaction. In this some UG students in the final year are selected to undertake collaborative and innovative research programme for which special awards are given. These facts strengthen the interaction between the industries and the Department. The students of the Dept. positioned in different companies are also incessantly proving their capabilities by exposing them to newer technologies and engineering methodologies. The department has been constantly extending their expertise and services to the industries over various problems/issues through a number of consultancies.
			 
			 </p>
             
             <p id="arvcenter08"><strong>To promote Industry- Institute Interaction following schemes are being undertaken:</strong></p>
             <p>
								• Encouraging engineers from industry to visit the Dept. to deliver lectures.<br>

								• Participation in Seminar/ Workshop on topics pertaining to Industry-Institute Interaction.<br>
								
								• Arranging visits of staff members to oil industries<br>
								
								• Establishment of Industry-Institute Partnership /interaction Cell.<br>
								
								• Every year since 1975 the department organizes minimum three to four Executive Development Programme (Short Course) of 2 to 12 weeks duration for the executives of ONGC, OIL etc.<br>
								
								Following testing facilities are available in the department on payment basis:-<br>
								
								•Specific Gravity/Density<br>
								•Kinematic Viscosity<br>
								•Viscosity Index<br>
								•Ash Content ( by Wt )<br>
								•Carbon Residue<br>
								•Sulphur Content<br>
								•Flash Point<br>
								•Water Content<br>
								•Pour Point<br>
								•Oxidation Test<br>
								•Foaming Characterstic<br>
								•Acidity<br>
								•Reid Vapour Pressure<br>
								•Evaporation Loss<br>
								•Asphaltene Content<br>
								•Trace Metal ( V,Ni,Cu etc in ppm )<br>
								•Gross Calorific Value (in K. cal/Kg)<br>
								•Ring sticking Wire & Accumulation of Deposit<br>
								•Oxidation and Bearing<br>
								•Porosity<br>
								•Permeability<br>
						 </p>
						 <p id="arvcenter08"><strong>Department has recently completed following tests of various samples belonging to different organizations :</strong></p>
            <p>
								• Porosity and permeability test for CMRI Dhanbad.<br>

								• Thixotropic test BCCL Dhanbad.<br>
								
								• Acidity test of transformer oil for BCCL Dhanbad.<br>
								
								• Studies in long core apparatus in connection with the S.S.T. Project.<br>
								
								• Well Test Analysis for Hardy Exploration and Production Inc.<br>
								
								• Determination of Country Methane Emission Factor- funded by CIMFR<br>
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