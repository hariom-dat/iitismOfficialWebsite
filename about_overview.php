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

<div class="about" style="background: url('img/side.jpg') center top no-repeat; background-size: cover;">
	<div class="container">
		<span class="display">About IIT ISM</span>
	</div>
</div>

<div class="colors">
	
</div>

<div class="about_background">
	<div class="container">
		<h3>The Background</h3><hr>
		<p>The Indian National Congress at its XVII Session of December 1901 passed a resolution stating that “in view of the fact that the tendency of recent legislation namely, The Indian Mines Act VII of 1901, is that all Indian mines must be kept under the supervision of mining experts, the Congress is of opinion that a Government College of Mining Engineering be established in some suitable place in India on the models of the Royal School of Mines in England, Mining Colleges of Japan and at other places in the continent”. The McPherson Committee formed by Govt. of India, recommended the establishment of an institution for imparting education in the fields of Mining and Geology, whose report, submitted in 1920, formed the main basis for establishment of the Indian School of Mines, Dhanbad.</p>
		<p>The Indian School of Mines was formally opened on 9th December 1926, by Lord Irwin, the then Viceroy of India to address the need for trained manpower related to mining activities in the country with disciplines of Mining and Applied Geology. In 1967 it was granted the status of a deemed to be university under Section 3 of UGC Act, 1956. Since its establishment, IIT(ISM) has undergone considerable expansion of its activities, and presently it can be considered as a total technology education institute.</p>
		<!-- <div class="row">
			<div class="col-md-3">
				<img src="img/img.jpg" class="img-fluid">
			</div>
			<div class="col-md-3">
				<img src="img/img.jpg" class="img-fluid">
			</div>
			<div class="col-md-3">
				<img src="img/img.jpg" class="img-fluid">
			</div>
			<div class="col-md-3">
				<img src="img/img.jpg" class="img-fluid">
			</div>
		</div> -->
		<h3 style="margin-top: 50px;">Overview</h3><hr>
	<table>
    <tr>
        <td><img src="img/adminis.jpg" style="padding:30px" width="300px" ></td>
        <td>
        	<a href="about_administration.php"><h3>Administration</h3></a>
        	<p>The Indian Institute of Technology (Indian School of Mines) constituted under Institute of Technology Act, 1961 is administered through IIT Council-the apex body, Government of India under the Chairmanship of Honourable Minister, MoHRD for uniform and smooth governance of Pan-IIT in our country. </p>
        </td>
    </tr>
    <tr>
        <td><img src="img/vision.jpg" style="padding:30px" width="300px" ></td>
        <td>
        	<a href="vision.php"><h3>Our Vision</h3></a>
        	<p>To be a nationally and internationally acclaimed premier institution of higher technical and scientific education with social commitment having an ethos for intellectual excellence, where initiative is nurtured, where new ideas, research and scholarship flourish, where intellectual honesty is the norm and from which will emerge the leaders and innovators of tomorrow in the realm of technology. </p>
        </td>
    </tr>
    <tr>
        <td><img src="img/clg.jpeg" style="padding:30px" width="300px" ></td>
        <td>
        	<a href="about_history.html"><h3>History and Discovery</h3></a>
        	<p>Situated in the heart of the country’s prime coking coal belt, 260 kms from Kolkata with a campus spread over an area of 393 acres, (with 218 acres of existing campus and 175 acres under acquisition and development) the fully residential IIT(ISM) has all the facilities of world class academic institute. What started as an institution to impart mining education has graduated into a full-fledged technical institution of international acclaim offering a host of programmes like B. Tech., M. Tech., M. Sc. Tech., and MBA. </p>
        </td>
    </tr>
    <tr>
        <td><img src="img/facts.jpg" style="padding:30px" width="300px" ></td>
        <td>
        	<a href="about_factsfigure.php"><h3>Facts and Figures</h3></a>
        	<p>From faculty awards to the number of books in our libraries, see IIT(ISM) through its facts and figures. </p>
        </td>
    </tr>
    <tr>
        <td><img src="img/exp.jpg" style="padding:30px" width="300px" ></td>
        <td>
        	<a href="https://www.youtube.com/watch?v=2PjoLe6yics&t=47s"><h3>Experience IIT(ISM)</h3></a>
        	<p>Right here, right now. Get a sense for what's happening on the ground at IIT(ISM).</p>
        </td>
    </tr>
   </table>
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