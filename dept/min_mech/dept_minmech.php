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

<div id="minmech">
	<div class="container">
		<h1>Department of Mining Machinery Engineering</h1>
		<!--<h3>IIT (ISM) Dhanbad</h3>-->
	</div>
</div>

<div class="about">
	<div class="container">
		 <div class="row">
		 	<div class="col-md-9">
		 		<h3>About Department</h3><hr>
			<p>
				The Department of Mining Machinery Engineering was the Department of Engineering at Indian School of Mines, Dhanbad since its inception in the year of 1926. The roll of the department was to train the students of Mining Engineering and later Petroleum Engineering in the core subjects of Engineering till the year of 1973. Later the department had imparted 13 weeks of extensive training in the area of coal mining machineries to the Graduate Trainees in Electrical and Mechanical cadres of Bharat Coking Coal Limited, Dhanbad. In recognition of the expanding activities of the department, the school re-named the department as Department of Engineering and Mining Machinery (EMM) in the year of 1973. In pursuance of the Human Resource Development activity in the field of mining machinery, the department launched M.Tech. programme in Mining Machinery in the year of 1975 and Drilling Engineering in the year of 1978. The B.Tech programme in the Mining Machinery Engineering was started in the year of 1977. It is the first and only one of its kind in the country. This programme covers Mechanical and Electrical Engineering aspects’ of various mining and construction machineries deployed at the underground and opencast mines Coal and Non-coal sectors. Further the department was allowed to run a Post graduate programme in Maintenance Engineering and Tribology started in the year of 1988. With the availability of basic infrastructure and expertise, the institute recognise and felt the necessity to start the B.Tech course in Mechanical Engineering in the year of 1999. Subsequently name of the Department was changed to the Department of Mechanical Engineering and Mining Machinery Engineering (ME & MME). In the year of July, 2013 from the Department of ME & MME two separate departments were created namely Department of Mining Machinery Engineering and Department of Mechanical Engineering. Presently the Department of Mining Machinery Engineering is offering undergraduate and post-graduate programmes on Mining Machinery Engineering.
			</p>
			<p>
					All students of the department of undergraduate and post-graduate courses are recruited in reputed public and private sectors companies. Many of the graduate engineers of this have found opportunities to pursue higher studies from various universities of repute abroad and IIMs.The department has equipped its laboratories with modern state of the art equipment and software along with potential research man power to enhance the academic and research activities of the department. It is also rendering its services for the doctoral students in various areas of Mining Machinery Engineering. Moreover, the department is active in imparting training to the practicing Engineers through Refresher Courses and a large number of such programmes have already been organised for the executives of various industries. The department established linkages with the following University department of abroad:
<br><br>
					Imperial College of Science & Technology, U.K.<br>
					Department of Mechanical Engineering and Energy studies/Cardiff University, UK<br>
					RWTH, Aachel University, Germany.<br>
			</p>
			<P>
					<strong>Contact:</strong><br>
					Head of the Department<br>
					Email: mme@iitism.ac.in<br>
					Phone: +91-326-223-5275<br>
					Central Fax:+91-326-2296563<br>
			</P>
			</div>
		 	<div class="col-md-3">
		 		<div class="card">
		 			<div class="card-header">
		 				Important Information
		 			</div>
		 			<div class="card-body">
		 				<a href="https://www.iitism.ac.in/assets/department/mme/notice/Reseach-scholar-EMM.pdf" target="_blank" >Research Scholars Department of Mining Machinery Engineering </a>
		 				<!--<a href="#">Vision & Mission</a><hr>-->
		 				<!--<a href="#">Vision & Mission</a><hr>-->
		 				<!--<a href="#">Vision & Mission</a><hr>-->
		 				<!--<a href="#">Vision & Mission</a>-->
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