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
		<p class="display-4">Post-Graduate Program</p>
	</div>
</div>
<br><br>
<div class="container">
<div class="row well">
<div class="col-md-12 form-group">
       <div class="row"> <h3 style="text-align:center;" ><span class='label label-info chngebgcolor'>Postgraduate Program</span></h3></div>
       
       <div>
       <p style="text-align: justify;color:#922B21  ;"><b> (i) 3-year M.Sc.Tech. Program in Applied Geophysics.</b></p>
       <br>
       <p style="text-align: justify;color:#922B21  ;"><b> (ii) Five years Integrated M. Sc. Tech. Programme in Applied Geophysics.</b></p>
       <br>
       <p style="text-align: justify;color:#922B21  ;"><b> (iii) 2-year M.Tech. Programme in Petroleum Exploration jointly with Deptt. of Applied Geology </b></p>
       <br>
       <p style="text-align: justify;color:#922B21  ;"><b> (iv) 2-year M.Tech. Programme in Earthquake Disaster, Hazards and Mitigation now known as Earthquake Science and Engineering w.e.f. 2017-18 Academic year and onward</b></p>
       <br>
       <p style="text-align: justify;color:#922B21  ;"><b> (v) Five years Integrated M.Tech in Applied Geophysics for IIT-JEE Admitted candidates from 2014-2015 session</b></p>
       <br>

        
       <p style="text-align: justify;">Students seeking admission to the 3-year course in M.Sc Tech. in Applied Geophysics programme have to qualify in the ISM entrance examination, which is held every year at different centers throughout the country. Students are admitted to the 5-year integrated M.Sc. Tech. course in Applied Geophysics through IIT entrance examination after standard 12th examination held every year.

      Admission to the two years M.Tech programme is made on the basis of GATE score and satisfactory performance in an interview, generally held in July every year. Candidates sponsored by Govt./Semi-Govt./Public Sector undertakings are also admitted to the M.Tech programme and such sponsored candidates are not required to produce GATE score and are not eligible for scholarship. Candidates seeking admission to M.Tech programme without GATE scores will have to qualify a written test conducted by the school followed by interview; however, they are not eligible for any scholarships.

      <br/><br/>The above courses aim at providing top quality education to the selected bright young students so that they may provide professional competence and effective leadership to the organizations they choose to serve.</p>
      
	  <p style="text-align: justify;"><strong><br/>Course Structure and Syllabus:</strong></p>
	  <p style="text-align: justify;"> <br/><br/> 3 Years M.Sc. Tech. & 5 Years (Integrated) M.Sc. Tech. (Applied Geophysics)  <a style="font-size:12px;" href="pdf/1.pdf" target="_blank"><span style="color:blue">Click Here</span></a> </p>
	  <p style="text-align: justify;"> <br/><br/> 2-year M.Tech. Programme in Petroleum Exploration  <a style="font-size:12px;" href="pdf/2.pdf" target="_blank"><span style="color:blue">Click Here</span></a> </p>
      <p style="text-align: justify;"> <br/><br/> 2-year M.Tech. Programme in Earthquake Disaster, Hazards and Mitigation now known as Earthquake Science and Engineering (w.e.f. 2017-18 Academic year and onward) <a style="font-size:12px;" href="pdf/3,pdf" target="_blank"><span style="color:blue">Click Here</span></a> </p>

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