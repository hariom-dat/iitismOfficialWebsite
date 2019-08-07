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
<div id="electronics">
	<div class="container">
		<h1>Department of Electronics Engineering</h1>
		<!--<h3>IIT (ISM) Dhanbad</h3>-->
	</div>
</div>

<div class="about">
	<div class="container">
		 <div class="row">
		 	<div class="col-md-9">
		 		<h3>About Department</h3><hr>
		 		<p>Welcome to the Department of Electronics Engineering</p>
				 <p>Initiated as a supporting department to ISM Dhanbad in 1976, the Department of Electronics Engineering incepted into a separate faculty department since 1998, offering B. Tech in Electronics and Communication Engineering to students admitted through IIT JEE. Strengthened with highly qualified faculty experts and in-housed with well-equipped state-of-the-art laboratories, ample computing resources and several research and development projects, the department has established itself in significantly contributing towards academics, research and building of brilliant careers for students. With a well-designed and constantly reviewed syllabus, it currently offers the following courses: </p>
				 <ul>
				 	<li>B. Tech (Electronics and Communication Engineering.)</li>
				 	<li> B. Tech (Electronics and Instrumentation Engineering)</li>
				 	<li>M. Tech (Electronics and Communication Engineering)</li>
				 	<li>3-Year M. Tech (Electronics and Communication Engineering) (Week-end mode at IIIF, New Town, Rajarhat,Kolkata</li>
				 </ul>
				 <p>Our research groups specialize in diverse areas such as Microwave, Photonics, VLSI, Nanoelectronics, Fibre-Optics technology, Wireless Communication, Signal Processing Instrumentation, and play a significant role at national and international levels collaborating with relevant industries and reputed institutes. A large number of PhDs have been awarded by the Department till date and there is a regular intake of PhD scholars (full-time and part-time) throughout the year. The Department has successfully completed many sponsored research projects funded by various agencies such as DIT, DST, MHRD, UGC, DRDO, ISRO and some are ongoing. The research and academic infrastructure of the Department has been further strengthened by assistance programs under SAP(2011) and FIST (2012) enabling us to successfully guide the young generation in new directions of technology. A Society of Electronics Engineering has active student and faculty members organizing events for industry-institute interaction, alumni networking, and fosters to the professional and soft skill development of students.</p>
				 <p><strong>Contact</strong></p>
				 <p>Head of the Department<br>
				 Email: ece@iitism.ac.in <br>
                 Phone: +91-326-223 5274<br>
                 Fax : +91-326-2296563<br></p>
		 	</div>
		 	<div class="col-md-3">
		 		<div class="card">
		 			<div class="card-header">
		 				Important Information
		 			</div>
		 			<div class="card-body">
		 				<a href="#">No information to show</a><hr>
		 				
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
