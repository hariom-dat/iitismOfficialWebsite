<!DOCTYPE html>
<html lang="en">
<head>
  <title>IIT ISM Dhanbad--applied geophysics dept</title>
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

<div id="agp">
	<div class="container">
		<p class="display-4">Facilities</p>
	</div>
</div>
<div class="container">
     <div class="entry-content">
    
    <div class="department_content">
    <br><br>
    <p></p>
<div>
<div class="row well">
    
        <div class="col-md-12 form-group" style="text-align: justify;">
        
          
          <div class="row"> <h3 style="text-align:center;" ><span class='label label-info chngebgcolor'>Facilities</span></h3></div>
          
          <div style="text-align: justify;margin-bottom:10px;"><p style="text-align: justify;color:#922B21  "><b>I. Seismological Observatory</b></p>Department of Applied Geophysics is running a seismological observatory, partially funded by Department of Science and Technology, Government of India, New Delhi. The observatory is well equipped with both short-period and broadband digital seismic instruments, continuously recording local as well as regional earthquake events. The department routinely analyses the seismic data for preparing preliminary earthquake bulletin quarterly.<br>
          <p style="text-align: justify;color:#922B21  "><b>II. Laboratories</b></p>
          Geophysical Instrumentation Laboratory.<br><ul>
          <li>Seismic Data Processing Laboratory.</li>
          <li>Potential Field Data Processing Laboratory.</li>
          <li>Remote Sensing and Image Processing Laboratory.</li>
          <li>Geophysical Signal Processing Laboratory (UGC SAP sponsored).</li>
          <li>Digital Mapping and Analysis System Laboratory .</li>
          <li>Gravity Magnetic data processing & Modelling Lab.</li></ul>
          <br>

          <p style="text-align: justify;color:#922B21  "><b>III. The Deptt. has a sectional library equipped with basic text books, bound geophysical journals for regular use, Ph. D thesis in Geophysics, survey of India Topographic Maps etc.</b></p>
          <p style="text-align: justify;color:#922B21  "><b>IV. The Deptt. maintains 60 seated air conditioned Seminar Hall with LCD projection facility.</b></p>
          <p style="text-align: justify;color:">Major Geophysical Equipments, Computational facility and softwares available with the Department</p>
          <p style="text-align: justify;color:#922B21  "><b>a. Equipments </b></p>GPS-GeoXT receiver(Trimble make),GPS ProXR(Trimble make),GPS1200 (Leica make) ,24 Channel StrataVisor NZ Seismic Unit, 12 Channel Seismic Unit, Seismic Source : Accelerated Weight Drop, MT Unit, TDIP, FDEM, VLF, Worden Gravimeters (Master & Prospector), ISM Gravity Base and Bench Mark facility, Triaxial Digital Short-period seismic system with analog back-up in ISM Seismological Observatory, Proton Precession Magnetometer, Flux Gate Magnetometer, Magnetic Susceptibility meter, Conductivity meter, DC Resistivity Meter.Standard Proton Gradiometer (Model No. GSM-19TG;V7.0)<br>
          <br>
          <p style="text-align: justify;color:#922B21  "><b>b. Computational Facility </b></p>Student’s Geophysical signal processing laboratory with eight node parallel computation cluster facility has been set up.<br>

          PCs with Internet facility are available with every faculty and Researchers. PCs are also available with Seismic data processing laboratory, Seismological Observatory, Remote Sensing and Digital Image processing Laboratory. The Deptt. maintains separate computer room for exclusive use by students.<br>
          <br>
          <p style="text-align: justify;color:#922B21  "><b>c. Softwares </b></p>SPIDER GPS processing, GPS path finder & Terra Sync, Hampson Russel, SEISAN, FORTRAN, RESPEC.<br>
          Seismic Unix software, GeoSoft , Geotools, PCI SPANS, ANSYS, WinSeis, MAX MIN PRO, EMIXVLF, MATLAB, MODFLOW, IASPEI Seismologial softwares, GEOMATICA , ERDAS and ARCGIS.<br>

          <p style="text-align: justify;"><strong><br></strong><strong></strong></p>
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