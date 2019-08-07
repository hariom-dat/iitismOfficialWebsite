<!DOCTYPE html>
<html lang="en">
<head>
  <title>IIT ISM Dhanbad--applied geophysics dept</title>
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
		<h1>Department of Applied Geophysics</h1>
		<!--<h3>IIT (ISM) Dhanbad</h3>-->
	</div>
</div>
<div class="container">
<div class="row well">
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" style="text-align: justify;">
       
        <div class="entry-content">
        <br><br>
           <div class="department_content"> 
           <h3 style="text-align:center;" ><span class='label label-info chngebgcolor'>About Department</span></h3><br><br>
           <p style="text-align: justify;">The world of geophysics is enormous and fascinating. Many are attracted to geophysics because of their fascination with earthquakes, volcanic eruptions, and other natural hazards. Others are drawn by their interest in hot topics such as climate change, carbon management and geothermal energy. Still others love the process of discovery associated with exploration – petroleum exploration, mineral exploration, exploration for water, or planetary exploration.
The Department of Applied Geophysics offers the 3 Year M. Sc. Tech in Applied Geophysics, 5 year M. Sc. Tech Integrated in Applied Geophysics. The department also offers 5 Years Integrated M.Tech in Applied Geophysics for IIT-JEE Admitted candidates from 2014-2015 session , M. Tech in Petroleum Exploration jointly with Department of Applied Geology and Ph.D. in Applied Geophysics. Our academic programs encompass many interesting fields of study, including physics, mathematics, geology, computer science, signal processing, and much, much more. Students interested in engineering are hired by groundwater, environmental, and subsurface construction firms. Students who are more interested in applied science pursue academic positions or employment by government or private agencies
We invite you to come join us in the excitement of exploring our planet and beyond! Geophysics is seeing and sensing remotely beneath the surface of the earth, in the atmosphere, in the oceans, in our solar system.</p>

             <p style="text-align: justify;">The trained graduates of Applied Geology, by virtue of their high professional ability and skill, have always been in the mainstream of the nation’s oil and mineral development and exploration programmes, while several others have carried the name and fame of the institution far beyond the frontiers of the nation, even to the well-developed foreign countries.</p><hr>

  ISM’s Department of Geophysics<br>
                <p style="text-align: justify;"><b>International reputation for excellence in applied geophysics.<br>
                        · One of the oldest and broadest program of Applied Geophysics in the country.  </b>
                        </p>

                <p style="text-align: justify;">The department is supported by two flagship programs of the Government of India<br>
                      <b>  A. Fund for improvement of S&T infrastructure in higher education(FIST LEVEL-I))<br>
                        B. Centre of Advance Studies in Geoelectromagnetic, University Grants Commission</b>
                        <br>
                        <br>
                        Moreover the students have won laurels at national and international level.<br>
            

           
<hr>
<b>Contact:</b>
 Head of the Department<br>
 Email: agp@iitism.ac.in<br>
 Phone: +91-326-223-5272 (Off.)<br>
 FAX :+91-326-2296618 ,2296563<br>
</p>
 </div>             
</div>

</div>
<br>
<br>

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