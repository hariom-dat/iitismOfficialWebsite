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
		<p class="display-4">Undergraduate Programmes</p>
		<p class="lead">Admission to the 4 -year B.Tech and 5 -year Dual – Degree Programmes are made through IIT- JEE.</p>
	</div>
</div>

<div class="academic">
	<div class="container">
		<h5>4-year B. Tech. Programme in Mining Engineering.</h5><hr>
		<p><a href="#">Course Structure and Detailed Syllabus (Effective from 2013-2014 Academic Sessions)</a></p>
		<p><a href="#">Course Structure and Detailed Syllabus (Effective from 2015-2016 Academic Sessions)</a></p>
		<h5>5-year Dual-Degree Programmes:</h5><hr>
		<ul>
			<li>
				B. Tech. (Mining Engineering) & M Tech (Mining Engineering)
			</li>
			<p><a href="#">Course Structure and Detailed Syllabus (Effective from 2013-2014 Academic Sessions)</a></p>
			<p><a href="#">Course Structure and Detailed Syllabus (Effective from 2015-2016 Academic Sessions)</a></p>
			<li>
				B. Tech. (Mining Engineering) & MBA
			</li>
			<p><a href="#">Course Structure and Detailed Syllabus (Effective from 2013-2014 Academic Sessions)</a></p>
			<p><a href="#">Course Structure and Detailed Syllabus (Effective from 2015-2016 Academic Sessions)</a></p>
		</ul>
		<h5>4-year B. E. Programme in Mining Engineering</h5><hr>
		<p><a href="#">Course Structure and Detailed Syllabus</a></p>
		<h5>Courses offered to other Depatments & Minors</h5><hr>
		<p><a href="#">Course Structure and Detailed Syllabus (Effective from 2015-2016 Academic Sessions)</a></p>
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