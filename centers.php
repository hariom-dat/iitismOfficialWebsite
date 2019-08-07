<!DOCTYPE html>
<html lang="en">
<head>
  <title>Centers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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

<div class="about" style="background: url('img/mission.jpg') center top no-repeat; background-size: cover;">
	<div class="container">
		<span class="py-2 px-4 bg-white text-danger shadow" style="font-size: 2.3em; font-weight: 600;">Centers</span>
	</div>
</div>

<div class="colors">
	
</div>

<div class="dept">
	
<div class="container">
	<div class="row">
		 <div class="col-md-3">
		 	<a href="https://www.iitism.ac.in/pdfs/ccas/ccas.pdf">
		 		<img src="https://singularityhub.com/wp-content/uploads/2018/02/climate-change-co2-emissions-evening-view-industrial-landscape-city-smoke-586646627-1068x601.jpg" class="img-fluid">
		 		<p>Centre for Climate Change and Atmospheric Studies (CCAS)</p>
		 	</a>
		 </div>
		 <div class="col-md-3">
		 	<a href="https://www.iitism.ac.in/pdfs/cemt/cemt.pdf">
		 		<img src="https://blog.schneider-electric.com/wp-content/uploads/2016/01/Four-keys-to-mining-operational-excellence.jpg" class="img-fluid">
		 	<p>Centre of Excellence in Mining Technology (CEMT)</p>
		 	</a>
		 </div>
		 <div class="col-md-3">
		 	<a href="https://www.iitism.ac.in/pdfs/cre/cre.pdf">
		 		<img src="https://www.newsclick.in/sites/default/files/2019-03/sorepanel12.png" class="img-fluid">
		 		<p>Centre of Excellence in Renewable Energy (CERE)</p>
		 	</a>
		 </div>
		 <div class="col-md-3">
		 	<a href="https://www.iitism.ac.in/pdfs/cesohdm/cesohdm.pdf">
		 		<img src="https://mindlercareerlibrarynew.imgix.net/8D-Disaster_Management.png" class="img-fluid">
		 		<p>Centre of Safety Occupational Health and Disaster Management (CESOHDM)</p>
		 	</a>
		 </div>
		 <div class="col-md-3">
		 	<a href="https://www.iitism.ac.in/pdfs/ciie/ciie.pdf">
		 		<img src="https://stvp-static-prod.s3.amazonaws.com/uploads/sites/2/2016/07/eCorner_Education2-960x540.jpg" class="img-fluid">
		 		<p>Centre for Innovation, Incubation and Entrepreneurship (CIIE)</p>
		 	</a>
		 </div>
		 <div class="col-md-3">
		 	<a href="https://www.iitism.ac.in/pdfs/cesohdm/cesohdm.pdf">
		 		<img src="https://3.bp.blogspot.com/-ob4YAaH7mmk/WraDM_ZB2zI/AAAAAAAAPZI/wrGQe-FwY4MUzegsP266ewYIPYPWLCbtACLcBGAs/s1600/Formation%2Bof%2BMinerals.jpg" class="img-fluid">
		 		<p>Centre of Mineral Exploration (CME)</p>
		 	</a>
		 </div>
		 <div class="col-md-3">
		 	<a href="https://www.iitism.ac.in/pdfs/cree/cree.pdf">
		 		<img src="http://www.aggbusiness.com/_resources/assets/inline/custom/12/89005.jpg" class="img-fluid">
		 		<p>Centre of Rock Excavation Engineering (CREE)</p>
		 	</a>
		 </div>
		 <div class="col-md-3">
		 	<a href="https://www.iitism.ac.in/pdfs/csm/csm.pdf">
		 		<img src="img/society.jpg" class="img-fluid">
		 		<p>Center of Societal Mission (CSM)</p>
		 	</a>
		 </div>
		 <div class="col-md-3">
		 	<a href="https://www.iitism.ac.in/pdfs/FDC/FDC-Details.pdf">
		 		<img src="https://fdpict2017.files.wordpress.com/2017/09/cropped-banner1.jpg" class="img-fluid">
		 		<p>Faculty Development Centre (FDC)</p>
		 	</a>
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