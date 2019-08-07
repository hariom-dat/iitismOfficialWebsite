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
		<p class="display-4">Seminars</p>
	</div>
</div>
<div class="container">
	<br>
	<ul>
		<li>National seminar on “Instrumental techniques in chemical analysis”, Sept 15 – 16., 2001(Coordinator: Dr. A. Sarkar).</li>
		<li>Workshop on “Characterization and utilization of ash- WCUF-2005”, April 18,2005(Coordinator: Dr. A. Sarkar).</li>
	</ul>
	<p style="text-decoration: underline; font-weight: bold;">Lecture-cum-interaction session</p>
	<ul>
		<li>Lecture-cum-interaction session on “High carbon-ash: Future perspectives” Feb. 2, 2006 ( Coordinators: Dr. G Udayabhanu and Dr. A Sarkar); Guest speaker was Dr. Gulab Singh, Advisor, TIFAC (FUAP), Dept. of S&T, GOI. Many dignitaries attended it from India and abroad. Other speakers were Dr. A. Sarkar (AC), Dr. A. K. Verma (AGL) and Dr. A. K. Paul (CME)</li>
	</ul>
	<p style="text-decoration: underline; font-weight: bold;">Executive Development Programme</p>
	<ul>
		<li>One course on “Use of sophisticated instruments on chemical analysis”, Nov 6 to 11, 1995 (Coordinator: Dr. A. Sarkar).</li>
		<li>One course on “ Application of Fourier transform infrared spectroscopic analysis”, Aprial 30 to May 4, 2001 ( Coordinator: Dr. A. Sarkar, Co-coordinator: Dr. D. D. Pathak).</li>
		<li>One course on “FTIR spectroscopic Analysis of Coal,Minerals and Free silica” for executives of NIMH, Nagpur ,Dec 01-05,2006. ( Coordinator: Dr. A.Sarkar, Co-coordinator: Dr. G.Udaybhanu).</li>

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