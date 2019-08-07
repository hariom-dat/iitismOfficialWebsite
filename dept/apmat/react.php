
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


<?php

	include 'header.php';
?>

<div id="apmat">
	<div class="container">
		<p class="display-4">Research Activities</p>
	</div>
</div>
<br>

<div class="academic">
	<div class="container">

<div class="entry-content">
    
    <div class="department_content">
    <br><br>
    <p></p>
<div>
<div class="row well">
    
    <div class="row well">
    
  <!-- <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12"> -->

  <div class="entry-content">
      
  <div class="department_content">
    <h3 style="text-align:center;color:#922B21 ;" ><span class='label label-info chngebgcolor'>Department Facilities</span></h3>
    <p style="text-align: justify;"> <strong>The department has earned fame in the following research areas:</strong></p>
    <p>
    <br>Algebra
    <br>Celestial Mechanics, Astronomy & Astrophysics
    <br>Computational Fluid Dynamics
    <br>Elastodynamics
    <br>Estimation Techniques in Sample Surveys
    <br>Fuzzy Automata and Fuzzy Topology
    <br>Groundwater Contamination and Solute Transport Modelling
    <br>Heat and Mass Transfer
    <br>Magnetohydrodynamics
    <br>Non Linear Dynamics and Chaos
    <br>Optimization Techniques
    <br>Pseudo Differential Operator & Integral Transforms
    <br>Software Reliability
    <br>Theoretical Seismology
    <br><hr>
    Following are the summary of research projects currently completed or ongoing.
    </p>

    <div>   

    <table class="table table-condensed">
        <thead style='background-color:#5BC0DE;' class='chngebgcolor'>
            <tr style='color:#FFF;'>
                <th>Funding Agency</th>
                <th>No. of Projects</th>
                <th>Grant In Lacs</th>
            </tr>
        </thead>
        <tbody>
            <tr  >
                <td>UGC</td>
                <td>13</td>
                <td>80.48</td>
            </tr>
            <tr style='background-color:#E0E0E0;'>
                <td>CSIR</td>
                <td>01</td>
                <td>10.5</td>
                
            </tr>
            <tr>
                <td>DST</td>
                <td>3</td>
                <td>25.97</td>
                
            </tr>
             <tr style='background-color:#E0E0E0;'>
                <td>NBHM</td>
                <td>1</td>
                <td>10.07</td>
                
            </tr>
             <tr >
                <td>ISRO</td>
                <td>1</td>
                <td>16.97</td>
                
            </tr>
        </tbody>
    </table>

    </div>

  </div>
  </div>
  </div>
  
  
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