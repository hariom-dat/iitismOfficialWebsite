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


<div id="cse">
	<div class="container">
		<p class="display-4">Postgraduate Programmes</p>
	</div>
</div>

<div class="academic">
	<div class="container">
		<h5>M.Tech. (Computer Science &amp; Engineering)</h5>
		<hr>
		<p>Name of Coordinator :&nbsp; Dr. Sachin Tripathi</p>
        <p style="text-align: justify;">The admission to the 2-year M. Tech. (Computer Science &amp; Engineering) is through GATE examination. This is a 4-semester program with two semesters devoted to Industrial Training/Minor Project Work, Seminars, Dissertation, Teaching Assignments, etc. Although the research is the main component of the programme due emphasis is also given to the course work.
        </p>

        <p style="text-align: justify;"><a href="https://www.iitism.ac.in/pdfs/departments/cse/M.-TechCSE-CS-Syllabus-2012.pdf" target="_blank"> Course Structure and Detailed Syllabus (Effective from 2012 Batch)</a></p>

        <p style="text-align: justify;"><a href="https://www.iitism.ac.in/pdfs/departments/cse/Course-Structure-n-Syllabus-2-year-m-tech-2015-onwards.pdf" target="_blank"> Course Structure and Detailed Syllabus (Effective from 2014 Batch)</a></p>
           
        <p style="text-align: justify;"><a href="https://www.iitism.ac.in/pdfs/departments/cse/CS-Syllabus-M.Tech-CSE-2017-onwards.pdf" target="_blank"> Course Structure and Detailed Syllabus (Effective from (2017-2018) Academic Sessions)</a> 
        </p>

        <h5 style="text-align: justify;">M.Tech. (Computer Science and Engineering with Specialization in Information Security)
        </h5>
        <hr>

        <p>Name of Coordinator : Dr. Hari Om</p>
        <p style="text-align: justify;">The admission to the 2-year M. Tech. (Computer Science and Engineering with Specialization in Information Security) is through GATE examination. This is a 4-semester program with two semesters devoted to Industrial Training/Minor Project Work, Seminars, Dissertation, Teaching Assignments etc. Although the research is the main component of the programme due emphasis is also given to the course work.</p>
        
        <a href="https://www.iitism.ac.in/pdfs/departments/cse/course_structure/DS-MT-CSE-IS.pdf" target="_blank"> Course Structure and Detailed Syllabus (Effective from 2014 Batch)</a></p>
           
        <p style="text-align: justify;"><a href="https://www.iitism.ac.in/pdfs/departments/cse/CS-Syllabus-M.Tech-CSE-IS-2017-onwards.pdf" target="_blank"> Course Structure and Detailed Syllabus (Effective from (2017-2018) Academic Sessions)</a> 
        </p>
		
        <h5 style="text-align: justify;">3 Years M.Tech (Computer Science and Engineering)
        </h5><hr>

        <p>Name of Coordinator : Dr.Chiranjeev Kumar</p>

        <p style="text-align: justify;">The 3-year M. Tech. (Computer Science and Engineering) programme will run at <strong id="yui_3_16_0_1_1452846755544_2633">ISM Industry Institute Interaction Facility Kolkata</strong>&nbsp;in&nbsp;for Working Executives / Academicians. The admission to this programme will be through written test and /or interview. The syllabus for the written test and /or interview is as per GATE Examination. This is essentially a self-financing programme and is distributed in six semesters where the first four semesters will focus on the course work and next two semesters are devoted to Industrial Training/Minor Project Work, Seminars, Dissertation, Teaching Assignments etc.
        </p>
        
        <a href="https://www.iitism.ac.in/pdfs/departments/cse/course_structure/Course-Structure-n-Syllabus-3-year-m-tech-2015-onwards.pdf" target="_blank">Course Structure and Detailed Syllabus (Effective from 2015 Batch)</a>
        </p>
		
        <p style="text-align: justify;"><a href="https://www.iitism.ac.in/pdfs/departments/cse/CS-Syllabus-3-year-M.Tech-CSE-2017-onwards.pdf" target="_blank"> Course Structure and Detailed Syllabus (Effective from (2017-2018) Academic Sessions)</a> 
        </p>
        <hr>
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