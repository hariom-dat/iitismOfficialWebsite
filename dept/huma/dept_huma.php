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
		<h1>Department of Humanities and Social Sciences</h1>
		<!--<h3>IIT (ISM) Dhanbad</h3>-->
	</div>
</div>

<div class="about">
	<div class="container">
		 <div class="row">
		 	<div class="col-md-9">
		 		<h3>About Department</h3><hr>
		 		<p>Welcome to the Department of Humanities and Social Sciences</p>
				 <p>The Department of Humanities and Social Sciences is one of the first departments of IIT (ISM) Dhanbad started in 1926. 
		   This interdisciplinary department seeks to make technologists linguistically, socially and ethically conscious individuals. 
		   Over the years, various subjects of humanities and social sciences have been introduced to widen the intellectual horizon 
		   of the technical students. Today, the Department functions at the intersections of communication, literature, philosophy, 
		   sociology, IPR and allied areas. The UG courses of the Department equip the graduates with linguistic skills for communicating
		   across cultures and borders with clarity, sensitivity and success, and help them to focus on their inner character so that they
		   contribute in building up a value based society.<br><br>
		   The Department is highly oriented towards research and knowledge production. Our research programmes are characterized by 
		   inter-disciplinarity which ranges from Literary Studies, Linguistics, Western Philosophy, Indian Philosophy, Ethics & Applied 
		   Ethics, Sociology, Gender studies, Ecological Humanities through Cultural Studies to Human Values. 

         <br><br>
		   <h5 id="arvcenter08"><b>Strengths:</b></h5>
		   The department provides training packages to executives in Communication Skills and Ethics and Values.
           <br><br>
           <h5 id="arvcenter08"><b>Vision & Mission</b></h5>

           To create and disseminate knowledge and to sensitize the students to humane values so that they employ 
		   their intrinsic talent in the service of man-kind.
           <br><br>
               
            <strong id="arvcenter08">Contact:</strong> <br><br>
            
            Head of the Department<br>
            Email: hss@iitism.ac.in<br>
            Phone: +91-326-2235277 (O)  
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