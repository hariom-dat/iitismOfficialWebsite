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

<div id="agp">
	<div class="container">
		<p class="display-4">Seminars</p>
	</div>
</div>
<div class="container">
	<div class="row well">
<div class="col-md-12 form-group">
                <div class="row"> <h3 style="text-align:center;" ><span class='label label-info chngebgcolor'><br>Seminars and Conferences</span></h3></div>
      
          <div style="text-align: justify;"><br>
          <p style="text-align: justify;color:">Prof. J. Singh memorial  lecture is a regular feature of the Department where eminent GEOPHYSICIST both from academy and industry are invited to deliver this special lecture on modern geophysical techniques. This is dedicated to Prof. J. Singh, who is founder Head of the Department.<br><hr>

           <p style="text-align: justify;color:#922B21  "><b>SEMINAR ORGANIZED BY THE DEPARTMENT</b></p>
                a) International Seminar on Recent Advances In GEOSCIENCES –          JANUARY 11-13, 2011<br>
<br>
                b)National Seminar on “Modern Trends in Geophysical Sciences and Techniques” Nov 12-14, 2007 at ISM, Dhanbad to commemorate the Golden Jubilee celebration of the Department of Applied Geophysics -
                Nov 12-14, 2007<br><br>
				c) National Seminar on “Recent Developments in Geoelectromagnetism for Crustal         Investigation” under Department of Applied Geophysics, UGC CAS(Centre of Advance Study) program during March 30, 2015.
<br><br>        d) All India Students Meet, "Geoconfluence – 2015", held during January 24-27, 2015<br><br> 
				e) All India Students Meet, "Geoconfluence – 2016", held during  January 22-24, 2016<br><br>
				f) All India Students Meet, "Geoconfluence – 2017", held during  January 27-29, 2017<br><br><hr>
                <p style="text-align: justify;color:#922B21  "><b>SOCIETY OF EXPLORATION GEOPHYSICIST (SEG) STUDENT SECTION, ISM, DHANBAD ORGANIZED:</b></p>
                a) Student Interaction programme on August 16th and a Workshop on “Emerging Trends in Deep water Exploration and Exploitation” on August 17th, 2008 under the banner of SEG Student Section, ISM.<br>
<br>
                b) Student Interaction programme on September 4 to 5, 2009 and a Workshop on “Exploration and Exploitation of CBM Resources” on September 6, 2009 under the banner of SEG Student Section, ISM.<br>
<br>
                c) All India Student Interaction programme on August 6 to 8, 2010 and a Workshop on “Conventional vs. Non-conventional Energy Resources” on August 8, 2010 under the banner of SEG Student Section, ISM.<br>

                
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