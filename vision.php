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

<div class="about" style="background: url('img/mission.jpg') center no-repeat; background-size: cover;">
	<div class="container">
		<span style="background:#BF733B; color: #ffffff;padding: 5px; font-size: 2.3em; font-weight: 600;">Vision & Mission</span>
	</div>
</div>

<div class="colors">
	
</div>

<div class="vision">
	<div class="container">
		<h3>Vision</h3><hr>
		<p>To be a nationally and internationally acclaimed premier institution of higher technical and scientific education with social commitment having an ethos for intellectual excellence, where initiative is nurtured, where new ideas, research and scholarship flourish, where intellectual honesty is the norm and from which will emerge the leaders and innovators of tomorrow in the realm of technology. While serving as a catalyst in a developing society, its goal as one of the premier technology education institution in the country would be to intimately involve itself not just in the technological development of the Nation but indeed in its overall development.</p>
		<p>The Indian School of Mines was formally opened on 9th December 1926, by Lord Irwin, the then Viceroy of India to address the need for trained manpower related to mining activities in the country with disciplines of Mining and Applied Geology. In 1967 it was granted the status of a deemed to be university under Section 3 of UGC Act, 1956. Since its establishment, IIT(ISM) has undergone considerable expansion of its activities, and presently it can be considered as a total technology education institute.</p>
		<h3 style="margin-top: 40px;">Mission</h3><hr>
		<div class="row">
			<div class="col-md-3">
				<div class="card" style="background: #2D8C81;">
					<div class="card-body">
						<p>To educate and train manpower in various disciplines of engineering and technology, management, applied sciences and applied arts at the graduate, postgraduate and research levels</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card" style="background: #277BAF;">
					<div class="card-body" >
						<p>To foster the creation of new and relevant technologies in the areas of its core competency and to transfer them to industry for effective utilization.</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card" style="background: #BF733B;">
					<div class="card-body">
						<p>To participate directly in the planning and solving of engineering and managerial problems of relevance to Indian industry and to society at large.</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card" style="background: #794C72;">
					<div class="card-body">
						<p>To develop and conduct continuing education programmes for practicing engineers and managers.</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card" style="background: #2D8C81;">
					<div class="card-body">
						<p>To develop strong collaborative and cooperative links with private and public sector industries and government user departments.</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card" style="background: #277BAF;">
					<div class="card-body">
						<p>To develop comprehensive and intimate interaction with premier academic and research institutions within the country and abroad for mutual benefit.</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card" style="background: #BF733B;">
					<div class="card-body">
						<p>To develop programmes for faculty growth and development.</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card" style="background: #794C72;">
					<div class="card-body">
						<p>To anticipate the technological needs of the nation, and to plan and prepare to cater to them.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

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