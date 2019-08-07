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

<div id="apchm">
	<div class="container">
		<h1>Department of Applied Chemistry</h1>
		<!--<h3>IIT (ISM) Dhanbad</h3>-->
	</div>
</div>

<div class="about">
	<div class="container">
		 <div class="row">
		 	<div class="col-md-9">
		 		<h3>About Department</h3><hr>
				 <p>The Department of Applied Chemistry was established as a separate department in 1989. The Chemistry section was as a part of the Department of Chemistry Fuel & Metallurgy since 1926.The department offers 3 academic programmes. 5 year integrated M.Sc in Chemistry(started in 2006) admission for which is through IIT JEE, 2 year M.Sc in Chemistry(started in 2006) admission for which is through ISM Entrance Examination, M.Phil in Applied Chemistry (started in 1982) admission for which is through NET/GATE or an all India level test conducted by ISM. The department also offers Ph. D programme, for which candidates are selected through NET/GATE or ISM Entrance Test, also offers a number of courses in various B. Tech and M. Tech programmes.</p>
				 <p>It is actively involved in R & D programmes in the frontier areas of Applied Research on:</p>
				<ul>
					<li>Fly ash characterization and utilization</li>
					<li>Clay catalysis</li>
					<li>Ceramics Materials</li>
					<li>Surface coatings/surface modification</li>
					<li>Prevention of scale formation in oil wells</li>
					<li>Corrosion science and technology</li>
					<li>Tribology</li>
					<li>Synthetic Inorganic / Organometallic Chemistry and Catalysis.</li>
					<li>Arsenic Contamination</li>
					<li>Environmental Pollution</li>
					<li>Heterogeneous Catalysis and Nano materials synthesis</li>
					<li>Supramolecular Chemistry</li>
					<li>Supramolecular/Host-guest chemistry</li>
					<li>Molecular Recognition</li>
					<li>Heterocyclic Chemistry, Organic Synthesis and Organic Methodology</li>
					<li>Polymer Chemistry, Biomaterials, Nano composites</li>
					<li>Organic Synthesis, Organic Photochemistry</li>
				</ul>
				<p>Students obtaining M. Phil / Ph. D from the Department are almost 100% absorbed in industry or academic institution.<br></p>
				<p style="font-weight: bold;">For further details, please contact:</p><p>
					Head of the Department<br>
					Email: ach@iitism.ac.in<br>
					Phone: 0326-223-5281 (O)<br>
					Fax: 0326-2296563<br>
				</p>
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