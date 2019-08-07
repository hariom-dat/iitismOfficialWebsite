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

<div class="about" style="background: url('https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80') center no-repeat; background-size: cover;">
	<div class="container">
		<span style="background: #277BAF; color: #ffffff; padding: 5px; font-size: 2.3em;font-weight: 600;">Festivals</span>
	</div>
</div>
<div class="colors">
	
</div>

<div class="fests">
	<div class="container">
		<h3><span style="border-bottom: 4px solid #277BAF;">Srijan</span></h3>
		<div class="row">
			<div class="col-md-10">
				<p>"SRIJAN" is the biggest socio-cultural festival of eastern India held in  IIT (ISM) DHANBAD which has been in the limelight since 1977. It attracts an annual footfall of over 30,000 from more than 200 colleges across the country every year and having prize money worth more than INR 7.5 lakhs. It offers a wonderful platform where participants from different parts of the country get a chance to interact, enhance and demonstrate their creativity, personality and talents. Srijan   is an avenue to be comforted from the routine life and to embrace the fun and frolic embedded with tantalizing professional performances from India and abroad along with an addressal to the social responsibility with its underlying social theme.</p>
			</div>
			<div class="col-md-2">
				<img src="img/srijan.jpg" class="img-fluid">
			</div>
		</div>
		<h3><span style="border-bottom: 4px solid #277BAF;">Concetto</span></h3>
		<div class="row">
			<div class="col-md-10">
				<p>Concetto, the Annual techno-management festival of IIT (ISM) DHANBAD, is the conjugation of some of the finest technical minds in the country with a platform for them to promulgate their skills and aim to reach the pinnacle of their talents. It strives to bridge the gap between the industry and the academia by providing them a common platform to discuss the future of technology in India. Our 3 day festival gives students  any guest an exhilarating experience, ranging from challenging competitions  to sit-back-and-relax entertainment shows.</p>
			</div>
			<div class="col-md-2">
				<img src="img/concetto.jpg" class="img-fluid">
			</div>
		</div>
		<h3><span style="border-bottom: 4px solid #277BAF;">Basant</span></h3>
		<div class="row">
			<div class="col-md-10">
				<p>Basant is the annual alumni re-union of ISM Dhanbad, Where the stars of the show were, at one time, the organizers of the show. The re-union is one of the most emotional times of the ISM calendar specially so for the Alumni of the ages past who come as close to re-living their summer of 69 as possible even if they are literally 69. The festival also infuses a sense of goodwill amongst a larger community comprising of students, teachers and alumni with their family members. The day usually starts with sports in the morning culminates with the grand dinner for more than 4000 heads sandwiched between the two are working lunch, assembly, fellowship, fete , entertainment programmes ...</p>
			</div>
			<div class="col-md-2">
				<img src="img/basant.png" class="img-fluid">
			</div>
		</div>
		<h3><span style="border-bottom: 4px solid #277BAF;">Parakram</span></h3>
		<div class="row">
			<div class="col-md-10">
				<p>Parakram is the annual games and sports fest of IIT (ISM) Dhanbad. Encouraging the spirit of sportsmanship amongst the students, we aim to provide the platform for all major games and sports. Our team puts their best effort to bring the rise in competition amongst students to embark you to the best experience of your lifetime. We believe a healthy mind resides in a healthy body, thus bringing you to the grand festival of sports. It brings out the sporting spirit of the brilliant minds of the country and provides an ideal platform for all the sports enthusiasts to compete with each other. Our  teams participate in each sport to exhibit their sports skill. </p>
			</div>
			<div class="col-md-2">
				<img src="img/parakram.jpg" class="img-fluid">
			</div>
		</div>
		<h3><span style="border-bottom: 4px solid #277BAF;">Pratibimb</span></h3>
		<div class="row">
			<div class="col-md-10">
				<p>Pratibimb the inter departmental cultural fest of IIT ISM  Dhanbad  is devoted in creating a customized and unforgettable experience for each and every visitor, simultaneously providing unique opportunities to the youth for showcasing their talents in front of extremely large and enthusiastic audience and top notch judges . An assortment of intriguing events held in venues across our campus, is something to cater to all tastes. Plethoras of events are hosted, accompanied by informal events like fashion show or antakshari  becoming the abode of this ambrosial combination. Pratibimb  promises to be an exhilarating experience from beginning to end.</p>
			</div>
			<div class="col-md-2">
				<img src="img/pratibimb.png" class="img-fluid">
			</div>
		</div>
	</div>
</div>

<a id="back2Top" title="Back to top" href="#">Top</a>

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