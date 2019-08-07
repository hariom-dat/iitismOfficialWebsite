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

<div id="agl">
	<div class="container">
		<p class="display-4">Seminars</p>
	</div>
</div>
<br><br>
<div class="container">
	<p>To facilitate the interaction among the geo-scientists and professionals working in the field of earth sciences both from academia and industry, since its inception the department organizes seminars, symposia, workshops, etc. from time to time. With a purpose to dissipate knowledge and know-how and to develop proper manpower in the country the department plays an important role by organizing UGC, DST, and industry-sponsored executive development programmes/workshops in almost all branches of earth sciences. These are well attended by teachers and researchers from colleges and universities and professionals working in various industries.</p>
	<br><br>
	<h4 style="text-decoration: underline;font-weight: bold;">In recent years Department of Applied Geology organized following Seminars / Workshops:</h3>
	<p>
		National Conference cum workshop on “Geological and Technological Facets of CBM, Shale Gas, Energy Resources and CO2 Sequestration” (CSECS2010); 19-20 November, 2010.
Executive Development Course on “ Geostatistics in Mineral Industry”, April 2007. (Coordinators: Dr. B. C. Sarkar and Prof. T. Majumder).
DST sponsored Short Course on “Petroleum System: Geological and Geophysical Approach”, January 2007. (Coordinator: Dr. P. P. Chakraborty)
National Conference on “Frontier areas in Geological and Technological aspects of Fossil Fuel and Mineral Resources”, November 2006. (Coordinators: Dr. A. K. Varma and Dr. A. S. Venkatesh)
National Seminar on “Proterozoic System of India: Evolution and Economic Potential”, November 2005. (Coordinators: Dr. S. Mohanty and Dr. P. P. Chakraborty)
	</p>
</div><br><br>


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