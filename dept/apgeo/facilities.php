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
		<p class="display-4">Facilities</p>
	</div>
</div>
<div class="container">
     <div class="entry-content">
    
    <div class="department_content">
    <br><br>
    <p>The back up of infrastructure with the laboratories viz., Petrology Lab, Structural Geology Lab, Mining Geology Lab, Sedimentology Lab, Micropaleontology Lab, Engineering Geology Lab, Geotechnical Engineering Lab, Geocomputational Lab, Photogeology & Remote Sensing Lab, Coal Geology & Organic Petrology Lab, Geostatistics Lab enables the department to carry out state-of-the-art research and consultancy. The laboratories are equipped with instruments viz., X-ray Fluorescence, X- Diffractometer with Texture Goniometer, Franklin Direct Shear Test Machine, Linkam Fluid-Inclusion Apparatus (Geothermometry + Microscope), MPV Microscope, Polarising Petrological Microscope, Stereo binocular microscopes, Photomicrographic attachment with the microscopes, PT-600 Sartorius Electronic Top loading Balance, Ruska Universal Porosimeter, Vibrating Cup Mill, Universal Model Research Microscope, etc.</p>
<div>




<table id="t01" class="table table-condensed table-striped">
  <thead style="background-color: #5BC0DE;" class="chngebgcolor">
  <tr style="color: #FFF;">
  <th>SI. NO.</th>
    <th>Name of Equipment</th>
    <th>Use</th>
  </tr>
  </thead>
  <tr>
    <td>1</td>
    <td>  X-ray Flourescence (XRF)</td>
    <td>Geochemcial Analyses of Major and Trace Elements</td>
  </tr>
<tr>
    <td>2</td>
    <td>    X-ray Diffractometer with Texture Goniometer</td>
    <td>    Identification of Mineral Phases</td>
  </tr>
  <tr>
    <td>3</td>
    <td>  Franklin Direct Shear Test Machine</td>
    <td>Engineering Properties of rocks</td>
  </tr>
  <tr>
    <td>4</td>
    <td>  Linkam Fluid-Inclusion (Geothermometry ) Microscope </td>
    <td>Themometry of ores</td>
  </tr>
  <tr>
    <td>5</td>
    <td> Polarising Petrological Microscope (Transmitted light) </td>
    <td> Mineralogical Studies of Rocks and Minerals</td>
  </tr>
  <tr>
    <td>6</td>
    <td>PT-600 Sartorius Electronic Top loading Balance </td>
    <td>Weighing the samples</td>
  </tr>
  <tr>
    <td>7</td>
    <td>    Ruska Universal Porosimeter </td>
    <td>Engineering Properities of rocks and soils</td>
  </tr>
  <tr>
    <td>8</td>
    <td> Vibrating Cup Mill </td>
    <td>  Powdering the rock samples</td>
  </tr>
  <tr>
    <td>9</td>
    <td> Photoautomat </td>
    <td>Photomicrography of ores, rocks and minerals</td>
  </tr>
  <tr>
    <td>10</td>
    <td>    Universal Model Research Microscope </td>
    <td>  Mineralogical Study</td>
  </tr>
  <tr>
    <td>11</td>
    <td> Stereo binocular microscopes </td>
    <td>For micropaleontological studies</td>
  </tr>
  <tr>
    <td>12</td>
    <td>    Several Intel Pentium IV PC </td>
    <td>Computation work</td>
  </tr>

</table>


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