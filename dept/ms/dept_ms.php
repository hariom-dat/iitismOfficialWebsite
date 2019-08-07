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
<style>
  .typewriter {
    font-family: Courier, monospace;
  display: inline-block;
}
  .typewriter-text {
    display: inline-block;
    overflow: hidden;
    letter-spacing: 3px;
  animation: typing 3.5s steps(30, end), blink .75s step-end infinite;
    white-space: nowrap;
    font-size: 70px;
    font-weight: 700;
    border-right: 4px solid white;
    box-sizing: border-box;
    color: white;
    text-align: center;
}
@keyframes typing {
    from { 
        width: 0% 
    }
    to { 
        width: 100% 
    }
}

@keyframes blink {
    from, to { 
        border-color: transparent 
    }
    50% { 
        border-color: black; 
    }
}
  </style>
</head>
<body>

<div class="colors">
	
</div>

<?php

	include 'header.php';
?>
<!-- Coded by Vinuthna J -->
<div id="mba">
	<div class="container">
		<div><h2>Department of Management Studies</h2></div>
		<!--<h3><b>IIT(ISM) Dhanbad</b></h3>-->
	</div>
</div>

<div class="about">
	<div class="container">
		 <div class="row">
		 	<div class="col-md-9">
		 		<h3>About Department</h3><hr>
				 <p>Indian School of Mines (ISM), Dhanbad is a premier educational institute of this country engaged in imparting technical education since 1926. Its students have made their name in various industries globally and in the core sector industries we have a stronger presence. The Department of Industrial Engineering and Management was established in 1977 offering M. Tech programme in Industrial Engineering and Management (IE&M). Having run the M. Tech. programme in IE&M for two full decades, the department gained requisite experience as well as expertise for running the MBA program. Keeping pace with the changing times, the erstwhile Department of Industrial Engineering and Management (IE&M) was restructured and re-christened as Department of Management Studies and launched its MBA programme in 1997. The department has been able to make a mark in the industry, with the alumni making their presence felt across all the leading industries of the country. With the introduction of dual degree programme in the areas of Mining, Mineral and Petroleum Management, the department has taken a lead in emphasizing the effective management of core sector as well. </p>
				 <p>Since its inception, the department has been moving ahead, continuously in tandem with the growth and diversification in the business field maintaining constant interaction with various industries. To its credit the department has successfully completed several consultancy assignments, in-house and off-campus executive development programmes and specific research projects supported by AICTE, UGC, ICSSR, MHRD, DGMS, CMPFO, NHPC, Power Grid, CIMFR, CIL, World Bank etc. </p>
				 <p>The department has been constantly rated as A/A+ institute by the various rating agencies including AIMA-Business Standard, Business World, Business India, Outlook/C-fore etc. in their B-School surveys conducted from time to time. We have crossed these milestones in a period of just ten years. The Department has a Training and Placement cell headed by a placement advisor working under the overall supervision of the Head of Department. The cell is instrumental in organizing Training and Placement for the students of MBA and M. Tech. programmes.</p>
				 <p>Apart from routine classroom teaching the students of Department of Management Studies have to actively take part in presentations, seminars, workshops etc. The students are required to work rigorously and the class room hours extend well beyond the 9 to 5 schedule. The concept is to train them in all aspects of the managerial practice. The faculty and the students of the department have also won laurels for the School by their all-round activities.</p>






		 	</div>
		 	<div class="col-md-3">
		 		<div class="card">
		 			<div class="card-header">
		 				Important Information
		 			</div>
		 			<div class="card-body">
		 				<!--<a href="#">Vision & Mission</a><hr>-->
		 				<!--<a href="#">Vision & Mission</a><hr>-->
		 				<!--<a href="#">Vision & Mission</a><hr>-->
		 				<!--<a href="#">Vision & Mission</a><hr>-->
		 				<!--<a href="#">Vision & Mission</a>-->
		 				No information to show
		 			</div>
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