<!DOCTYPE html>
<html lang="en">
<head>
  <title>IIT ISM Dhanbad--applied mathematics</title>
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

<?php

	include 'header.php';
?>



<div id="apmat">
	<div class="container">
		<h1>Department of Applied Mathematics</h1>
		<!--<h3>IIT (ISM) Dhanbad</h3>-->
	</div>
</div>
<div class="container">
	  <div class="row well">
     
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      
        <div class="entry-content">
             
           <div class="department_content">
           <h3 style="text-align:center;" ><span class='label label-info chngebgcolor'><br><br>About Department<br><br></span></h3>
           <p style="text-align:justify;">Department of Physics and Mathematics was established since the inception of Indian School of Mines in 1926
		   and was given an independent status in 1989 as Department of Applied Mathematics. The Department provides an 
		   outstanding research environment complemented by excellent teaching for its students to flourish in different 
		   arena of academics and industry as well. The department offers academic programs leading to the award of M. Sc.
		   (Mathematics and Computing), Integrated M. Tech. (Mathematics and Computing), M. Phil. (Applied Mathematics) 
		   and Ph. D. degree. The Department is well equipped with highly qualified faculty members and supportive advanced
		   computational labs. Apart from this, department taking care of Mathematical input to all undergraduate and post 
		   graduate courses of Engineering and Science currently running in ISM. The department is also executing various 
		   sponsored projects received by UGC, CSIR, NBHM, ISRO, DST etc. The department has produced more than 71 nos. of 
		   Ph. D’s till now. The department is well recognized by the external funding agencies with SAP-DRS provided by UGC 
		   and FIST provided by DST. The Society of Applied Mathematics (SAM) was formed in 2009 to promote the academic and 
		   research activities especially among the young researchers and students.</p>

           <p>The faculty members are working in following thrust areas : </p><br>
           <p><a href="#"><img src="https://www.iitism.ac.in/assets/dept-image/math/Thrust-Area.jpg" class="img-responsive"></a></p><br>
           <p style="text-align:justify;">The students of the department are well placed in leading Academic Institutions, Research & Development organizations namely IIT’s, DRDO, ONGC etc. The students are also well placed in Software industries like IBM, WIPRO, SAMSUNG India Software, Mu Sigma, ARICENT GROUP, ITC InfoTech, TCS, Shell Technology etc. They are also exposed to get an Internship with other Indian and foreign institutions. The students have already received internship from Universities of California, Auckland, Calgary, Queensland, Florida, Newfoundland, Singapore and Braunschweig and ICT Australia Lab.</p><br><hr>

           <p><a href="#"><img src="https://www.iitism.ac.in/assets/dept-image/math/gpu.png" class="img-responsive" style="max-width: 50%"></a></p><br>

           <p style="text-align: justify;"><strong>GPU EDUCATION CENTRE (Awarded: 2014)</strong>     <a href="#"> Click Here for details</a></p>

           <p style="text-align: justify;"><strong>Job Prospects and Major Recruiters</strong>     <a href="#"> Click Here for Details</a></p>

           <p style="text-align: justify;"><strong>Contact:</strong></p>

          
          <br>Head of the Department
          <br>Email: am@iitism.ac.in
          <br>Phone: +91-326-223-5283(O)
          <br>Fax : +91-326-2296563

          </div>
      </div>
    </div>

   

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