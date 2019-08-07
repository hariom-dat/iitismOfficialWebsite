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

<div id="agl">
	<div class="container">
		<p class="display-4">Post-Graduate Program</p>
	</div>
</div>
<br><br>
<div class="container">      
<div class="row well">

    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" style="text-align: justify;">
         <p>&nbsp;</p>
         <p style="text-align: justify;"><strong>Post-Graduate Studies : </strong></p>
<p style="text-align: justify;"><strong>(i) Two-year M. Tech. in Mineral Exploration since 1976</strong></p>
<p style="text-align: justify;"><strong>(ii) Two-year M. Tech. in Engineering Geology since 1978</strong></p>
<p style="text-align: justify;"><strong>(iii) Two-year M. Tech. in Petroleum Exploration since 1980</strong></p>
<p style="text-align: justify;"><strong>(iv) Three year M. Sc. Tech. in Applied Geology since 1967</strong></p>
<p style="text-align: justify;"><strong>(v) Five year Integrated M. Sc. Tech. in Applied Geology since 2006.</strong></p>

<p style="text-align: justify;"><strong>Course Structure and Syllabus:</strong></p>

   <p style="text-align: justify;"><a href= "https://www.iitism.ac.in/pdfs/departments/geology/2-Year M. Tech. (Mineral Exploration) 2012-13 onwards.pdf"target="_blank">  2-Year M. Tech (Mineral Exploration) </a></p>
  <p style="text-align: justify;"><a href= "https://www.iitism.ac.in/pdfs/departments/geology/2-Year M.Tech. (Engineering Geology 2012-13 onwards.pdf"target="_blank">  2-Year M. Tech (Engineering Geology)</a></p>
    <p style="text-align: justify;"><a href= "https://www.iitism.ac.in/pdfs/departments/geology/pex-agl.pdf" target="_blank"> 2-Year M. Tech (Petroleum Exploration)</a></p>
<p style="text-align: justify;"><a href= "https://www.iitism.ac.in/pdfs/departments/geology/5-Year Integrated & 3-Year M.Sc.Tech (AGL) 2012-13 onwards.pdf" target="_blank"> 5-year Integrated & 3-Year M. Sc. Tech (AGL) 2012-13 onwards (New Syllabus)</a></p>
<p style="text-align: justify;"><a href= "https://www.iitism.ac.in/pdfs/departments/geology/5 Year Integrated & 3-Year M. Sc. Tech (AGL) w.e.f. 2008.pdf" target="_blank"> 5-year Integrated & 3-Year M. Sc. Tech (AGL) w.e.f. 2008 (Old Syllabus) </a></p>

<p>These  M. Tech. courses are unique in the country because of highly specialized nature.</p>
</div>

</div>
</div>
<br><br>
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