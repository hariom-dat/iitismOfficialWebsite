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

<div id="apchm">
	<div class="container">
		<p class="display-4">Post-Graduate Program</p>
	</div>
</div>
<br><br>
<div class="container"><p>
	The Department offers Ph. D degree courses in Applied Chemistry, apart from teaching at UG/PG level for B.Tech/ M.Tech students. Department also offers 2 years M.Sc in chemistry (started in 2006).</p>
	<ul>
		<li><strong style="text-decoration: underline;">B.Tech. Minor (Chemistry)</strong><br></li>
		 <ul>
		 <li><strong>Course coordinator :</strong> Dr.S. K. Sahu</li>
		 <li>	<a href="https://www.iitism.ac.in/index.php/chemistry/chemistry_post_graduate">Course Structure & Detail Syllabus (B.Tech. Minor (Chemistry))</a></li></ul>
		 <li><strong style="text-decoration: underline;">2-years M.Sc (Chemistry)</strong><br></li>
		 <ul>
		 <li><strong>Course coordinator :</strong>  Dr.S. K. Padhi</li>
		 <li>	<a href="https://www.iitism.ac.in/pdfs/departments/chemistry/MSc-Chemistry-Syllabus-2015.pdf">Course Structure & Detail Syllabus (2-years M.Sc (Chemistry)) effective from 2015.</a></li></ul>
		 <li><strong style="text-decoration: underline;">JRF (Applied Chemistry)</strong><br></li>
		 <ul>
		 <li><strong>Course coordinator :</strong> Dr. M. Yadav</li>
		 <li>	<a href="https://www.iitism.ac.in/pdfs/departments/chemistry/CSS-MPhil-2008.pdf">Course Structure & Detail Syllabus</a></li></ul>
		</ul>
		

	</ul>
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