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
<div id="mech">
	<div class="container">
		<p class="display-4">Industrial Interaction</p>
	</div>
</div>

<div class="academic">
	<div class="container">
             <p>

								Number of short term courses have been organised collaboratively with other departments of ISM mainly for the executives working in industries. Department also has significant contribution in the consultancy project for Industry.<br><br><br>



								<strong>Consultancy work</strong><br><br>
								
								 
								
								“Sandvik Indian Pvt Ltd has provided project works for M. Tech students of 2013-15. Coordinator : Dr. Vinayak Ranjan<br><br><br>
								
								
								<strong>Short Term Courses (in campus)</strong><br><br>
								
								 
								
								‘Maintenance of Mining Equipment’, PI – Prof. A. K. Mukhopadhyay (Mining Machinery Engg.), Co-PI – Somnath Chattopadhyay, Funding Agency: Govt. of Afghanistan, 08 September- 23 September, 2013, Fund Allocated:42.0 Lakhs.<br><br>
								‘Elements of Mining Equipment’, PI – Prof. K. Dasgupta (Mining Machinery Engg.), Co-PI – A. R. Dixit, 24th August – 9th September,2013, Funding Agency: Govt. of Afghanistan, Fund Allocated: 42.0 Lakhs.<br><br>
								‘Drills & drilling for mineral resources’, PI – Prof. A. K. Mukhopadhyay (Mining Machinery Engg.), Co-PI – Somnath Chattopadhyay, Start : 12th November – 23rd November, 2012, Funding Agency: Atomic Minerals Directorate, Fund Allocated: 8.0 Lakhs<br><br>
								Measurement, Control and Simulation through LabVIEW Software” Coordinator- Dr. A. K. Das (Mechanical Engineering), Co-ordinator- Dr. J. Das (Mining Machinery Engineering), 25th August – 29th August, 2014.<br><br>
								Power hydraulics in HEMM”. PI – Prof. K. Dasgupta (Mining Machinery Engg.), Co-PI – A. R. Dixit, 26th – 30th, April 2010, Funding Agency: NMDC, ECL, MCL, BCCL, SECL, SAIL and BCL, Fund Allocated: 4.14 Lakhs<br><br>
								Hydraulics in Mining Equipments” PI – Prof. K. Dasgupta (Mining Machinery Engg.), Co-PI – A. R. Dixit, 22nd – 30th, November 2010, Funding Agency: NMDC, ECL, MCL, BCCL, ECL and Shree Cement Ltd., Fund Allocated: 3.77 Lakhs.<br><br>
								Advances in Mine Workshop Practice” PI – Prof. A K. Mukhopadhyay (Mining Machinery Engg.), Co-PI – A. R. Dixit, 21st – 25th, February 2010, Funding Agency: ECL, NCL, MCL, CCL and BCCL, Fund Allocated: 3.29 Lakhs.<br><br>
								Trackless Mining Equipment-Loaders and Transporters used in Underground Mines”. PI – Prof. K. Dasgupta (Mining Machinery Engg.), Co-PI – A. R. Dixit, 12th – 30th, November 2010, Funding Agency: NMDC, ECL, MCL, BCCL, ECL and Shree Cement Ltd., Fund Allocated: 3.77 Lakhs<br><br>
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