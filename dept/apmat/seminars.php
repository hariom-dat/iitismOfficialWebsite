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

<div id="apmat">
	<div class="container">
		<p class="display-4">Seminars</p>
	</div>
</div>
<div class="container">
	<div class="row well">
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

    <div class="entry-content">
      <div class="department_content">

          <h3 style="text-align:center;color: #922B21  " ><span class='label label-info chngebgcolor'><br><br>Seminar and Conferences<br><br></span></h3>
          <p>
          3rd International Conference on Application of Fluid Dynamics (ICAFD-2016)  is scheduled to be organized at Department of Applied Mathematics, ISM Dhanbad in Association with Department of Mathematics, Fluid Mechanics Group, University of Botswana, Botswana and supported by International Academy of Fluid Mechanics, Botswana. ICAFD-2016 is being organized under the Chairmanship of Prof. G S Seth, President Elect. International Academy of Fluid Mechanics, Botswana. The Organizing Secretary’s of ICAFD-2016 has also been nominated as Prof. J Prakash from University of Botswana and Dr. M K Singh from ISM Dhanbad. Information Brochure for ICAFD-2016 has been uploaded. <a href="#">Click Here.</a></p>

          <br>Conference Date: December 19-21, 2016

          <br> Conference Venue: ISM Dhanbad<br><hr>

          <p style="text-align: justify;"><strong>The department has organized following National Seminars/Workshops/Training Programmes:</strong></p>

          <br> 1. 80th Annual Conference of Indian Mathematical Society, December 27-30, 2014.
          <br>2. National Conference on Recent Advances in Mathematics and its Applications (RAMA), February 14-16, 2013.
          <br>3. Workshop on Mathematical Methods and Astronomy (WMMA ), February 7-9, 2013.
          <br>4.Undergraduate Training Programme in Linear Algebra and Analysis, May 28, 2012- June 06, 2012.
          <br>5. One day Introductory Workshop on Astronomy and Astrophysics, April 2012.
          <br>6. SAP(UGC) Seminar on Recent Advances in Theoretical and Applied Seismology, March 27-28, 2009.
          <br>7. SAP(UGC) Seminar on Recent Advances in Theoretical and Applied Seismology, March 21-22, 2007
          <br>8. SAP(UGC) Seminar on Recent Advances in Theoretical and Applied Seismology, March 20-21, 2006.
          <br>9. SAP(UGC) Seminar on Recent Advances in Theoretical and Applied Seismology, March 03-04, 2005..
          <br>10. SAP(UGC) Seminar on Advances in Theoretical Seismology, October 29-30, 2003.
          <br>11. Advances of Mathematical, Statistical and Computational Methods in Science and Technology, November 29-30, 2001.
          <br>12. Recent Trends and Advances of Mathematics and Statistics in Engineering and Technology, November 29-30, 1997<br><br><br>

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