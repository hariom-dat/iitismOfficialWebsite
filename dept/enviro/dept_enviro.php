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

<div id="enviro">
	<div class="container">
		<h1>Department of Environmental Engineering</h1>
		<!--<h3>IIT (ISM) Dhanbad</h3>-->
	</div>
</div>

<div class="about">
	<div class="container">
		 <div class="row">
		 	<div class="col-md-9">
		 		<h3>About Department</h3><hr>
		 		<p>Welcome to the Department of Environmental Engineering</p>
				 <p>IThe Department of Environmental Engineering was created out of existing Centre of Mining Environment (established in 1987) at Institute in June 2007 with the commencement of a regular B.Tech. Degree in Environmental Engineering under IIT-JEE (first of its kind offered by any national institute). The graduates are well accepted by Industries and research organizations. This department is also accredited with <strong>ISO 9001 and OHSAS 18001 Certificate.</strong></p>
				 <p>Apart from B.Tech. Environmental Engineering, the Department is also offering regular M.Tech. Program in Environmental Science and Engineering (since 1990) and Ph.D. programs in Environmental Science, as well as in Environmental Science and Engineering disciplines. The Department also offers course on Environmental Studies to Undergraduate Students of various other Departments of the Institute. The students are also well accepted by the Industry.</p>
				 <table id="t01" class="table table-condensed table-striped">
          <thead style="background: #5BC0DE; color: #FFF;" class="chngebgcolor">
          <tr>
            <th>Courses</th>
            <th>Admission Route</th>
            <th>Since</th>
          </tr>
          </thead>
          <tr>
            <td>B.Tech. (Environmental Engineering)</td>
            <td>IIT-JEE (Advanced)</td>
            <td>2006</td>
          </tr>
          <tr>
            <td>M. Tech. (Environmental Science and Engineering</td>
            <td>GATE/ Entrance Exam/ Industry Sponsored</td>
            <td>1990</td>
          </tr>
          <tr>
            <td>Ph. D (Environmental Science and Engineering)</td>
            <td>GATE/ Entrance Exam/ Industry Sponsored</td>
            <td>1987</td>
          </tr>
          <tr>
            
            <td>Ph. D (Environmental Science)</td>
            <td>GATE/ Entrance Exam/ Industry Sponsored</td>
            <td>1987</td>
          </tr>
          </table>

            <br/><br/>  <b> CENTRE OF MINING ENVIRONMENT</b><br/><br/>
		
			Centre of Mining Environment (CME) was established as one of the Centre of excellence by the MoEF in 1987 with the following objectives.
		<ul>
		<li>To impart training to in-service field personnel Environmental Science and Technology with particular reference to Environmental Management in Mining Areas.</li>
		<li>To carry out Research in the field of Mining Environment.</li>
		<li>Initiation of Regular Academic Programs in Environmental Science and Engineering.</li>
		<li>To Undertake Consultancy and Testing work to help mining and Mineral Industries in solving environmental pollution problems.
		 </li><br></ul> 
		<br/><br/>  <b>ENVIS CENTRE</b><br/><br/>
The Environmental Information System (ENVIS) at Centre of Mining Environment (CME), IIT(ISM) was established in 1991 by the Ministry of Environment, Forest and Climate Change (MOEF&CC), Government of India,<br/>
 for collection, storage, retrieval and dissemination of information in the area of mining environment (www.ismenvis.nic.in).<br/><br/>
          
		  
		  <b>Contact:</b><br>
          <br>
          
          Head of the Department<br>
          Email: ese@iitism.ac.in<br>
          Phone: 0326-229-6624<br>
          Fax: 0326-2296624, 2296563<br></p>

		 	</div>
		 	<div class="col-md-3">
		 		<div class="card">
		 			<div class="card-header">
		 				Important Information
		 			</div>
		 			<div class="card-body">
		 				<a href="#">No information to show</a><hr>
		 				
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