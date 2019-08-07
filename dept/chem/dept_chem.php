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
<?php

	include 'header.php';
?>
<div class="colors">
	
</div>

<div id="chem">
	<div class="container">
		<h1>Department of Chemical Engineering</h1>
		<!--<h3>IIT (ISM) Dhanbad</h3>-->
	</div>
</div>

<div class="about">
	<div class="container">
		 <div class="row">
		 	<div class="col-md-9">
		 		<h3>About Department</h3><hr>
			<p>Welcome to the Chemical Engineering Department at the Indian School of Mines (ISM), Dhanbad.			</p>
			<p>Chemical engineering is the profession in which a knowledge of mathematics, chemistry, and other natural sciences gained by study, experience, and practice is applied with judgment to develop economic ways of using materials and energy for the benefit of mankind. (AIChE)</p>	 
		<p>
			ISM has always been a pioneer for delivering well qualified and able hands for the growth of energy sector, not only nationally but also worldwide. The Department of Chemical Engineering of Indian School of Mines was established in November 2010. The Department of Chemical Engineering aims to provide advanced teaching and research facilities to the students to enable them to create and apply innovative technologies in chemical, process and energy based industries as well as efficiently utilize their knowledge and skills to find solutions of problems related to such industries.
		</p>	
		<p>The Department of Chemical Engineering started offering IV Year Bachelor of Technology (BTech) program from the academic year 2011 – 2012. It also offers post-graduate and research programs such as Master of Technology (MTech) and PhD in Chemical Engineering; MTech being commenced from July 2014. Though the Department of Chemical Engineering has been established recently, many courses and activities related to Chemical Engineering field have been going on since last 35 years. Active research work is going on in different fields of Chemical Engineering since many years.</p>
		<p>
			The board of course studies (BOCS) of the Department of Chemical Engineering includes eminent professors from IIT Delhi, IIT Kharagpur, IIT (BHU) Varanasi, Jadavpur University, Aligargh Muslim University, and senior executives from Coal India Ltd., Tata Steel Ltd., and Indian Oil Corporation Ltd.
		</p>
<p><strong>You will find the various aspects of the department in these pages. Should you seek any further information, please do not hesitate to contact us. Suggestions on improving the contents of the site are welcomed.</strong></p>
<p>
	Contact:<br>
	<br>


Head of the Department <br>
Email: che@iitism.ac.in <br>
Phone: +91-326-223-5288 (O)
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