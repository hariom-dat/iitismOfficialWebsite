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

<div id="mineral">
	<div class="container">
		<p class="display-4">Research Activities</p>
	</div>
</div>

<div class="academic">
	<div class="container">
		<p>The department over the years has carried out research in all the aspects of coal preparation. The major thrust was on development of fundamental understanding of processes such as heavy medium cyclones, froth flotation, oil agglomeration, flocculation, etc and their quantification and applicability studies. The research interest includes basic, applied and quantitative studies on water-only cyclones, Vorsyl-separator and comparison of their performance. Theoretical studies on coal crushing, performance analysis of coal crushing circuits, beneficiation of, LVMC coals, non-coking coals, and new flotation reagents development have been undertaken and are in progress. Carbonization of coal with inferior quality coals and additives along with studies on coal oil and coal-water mixtures for combustion of coal formed the initial research activities in Fuel Technology. Presently, spontaneous combustion, beneficiation of thermal coals to improve combustion and flowability are in progress. Current research interest in this area includes chlorination studies, Pelletisation, direct reduction of iron ores, direct leaching of complex sulphide ores and beneficiation and utilization of low-grade iron ores etc. Hybrid Pelletized Sinter, Underground Coal gasification.
           <strong id="arvcenter08"></strong>Important R&D Projects Completed/Ongoing in the Department in recent time:<br>
           <ul>

             <li>Characterization, bench scale and pilot plant studies for beneficiation of beach placer of Kerala-Karnataka coast: Rs. 26.01 Lakh by Planning Commision Through CMRI.</li>
             <li>Beneficiation and Utilisation of Non-coking coal (On going): Rs.43.50 Lakh UGC SAP</li>
             <li>Up gradation of low grade iron ore fines for production of Hybrid Pelletized Sinter (HPS) and Carbide: Rs. 15.00 Lakh-R&D MHRD </li>
             <li>Modernization and removal of Obsolescence of coal preparation laboratory: Rs. 24.00 Lakh MODROB,MHRD</li>
             <li>Modernization and removal of Obsolescence of Fuel Engineering laboratory: Rs. 20.00 Lakh MODROB, MHRD</li>
             <li>Beneficiation of Marginal grade ore for sustainable mineral development: Rs. 15.00 Lakh R & D MHRD</li>
             <li>Processing of lean grade sulphide ores for value addition: Rs. 14.00 Lakh R & D MHRD</li>
             <li>Development of user friendly models for design and operation of Jigs and HMS for treatment treatment of different coal (on going) : Rs. 14.22 Lakhs ,Coal S & T with RRL Bhopal</li>

           </ul>
<br><br>

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