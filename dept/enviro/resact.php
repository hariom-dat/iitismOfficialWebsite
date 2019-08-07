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
		<p class="display-4">Research Activities</p>
	</div>
</div>

<div class="academic">
	<div class="container">
		<p style="text-align:justify;color:;">
		<h4 style = color:blue;">Completed Research Projects (a selective list)</h4>
          1. Investigations into the Air Quality Status and its Impacts on Social Spectrum of some Coal Mining Areas of Korba Industrial belt of Chhattisgarh.<br>
          2. Impact of Mining on the Pattern of Land Use Change in Mines and their neighbourhood in selected Mining Areas of Jharkhand.<br>
          3. Investigation into the Noise Status of some selected Non-Coal Mining Complexes with a view to Developing Abatement & Control Measures.<br>
          4. Studies on Green Belt Regarding its Noise Attenuation & Dust Arresting Capacity in Coal Mining Areas.<br>
          5. Development of an Expert System Prototype for Environment Impact Assessment of Opencast Coal Mining Projects.<br>
          6. Carrying Capacity of Damodar River Basin (in association with CMRI, NEERI, Univ. of Delhi, etc).<br>
          7. Environmental Evaluation of Coal Combustion Residues.<br>
          8. Socio-economic Aspects, vis-a-vis, Quality of Life of Mining Complexes.<br>
          9. Land Reclamation around Raniganj, Raniganj Coalfield, Eastern India, with Special Stress on Its Water Potentialities and its Management.<br>
          10. Investigation on Air Quality Assessment in Some Coal Mining Areas of Raniganj, Jharia and Korba Coalfields.<br>
          11. Studies on Characterization and Abatement af Coke-Oven Liquid Effluents.<br>
          12. Studies on Water Quality Deterioration in Coal Mining Areas of Some Indian Coalfields.<br>
          13. Some Experimental Studies on Ecological Aspects of Reclamation in Jharia Coalfield.<br>
          14. Characterization and Control of Haul Road Dust in Opencast Mines.<br>
          15. Studies on the Environmental Impacts of Limestone Mining and Slope Instability using Remotely Sensed and Ancillary Data: Case Studies from Southern Himachal Pradesh.<br>
          16. Characterization and Treatment of Spent Pot liner for Environmental Compliance<br>
          17. Characterization and Clarification of Coal Washery Liquid Effluents through Coagulation/ Flocculation.<br>
          18. Vegetational Succession on Coal Mining Overburden Dumps for Sustainable Ecological Development.<br>
          19. Integrated Strategy for Development and Exploitation of Natural Mineral Resources of the Ecologically Fragile Area.<br>
          20. Environmental Impact Assessment Studies of Tailings from Iron Ore Mines and their Management.<br>
          21. Microbial and Biotechnological Approaches for Bio-sorption and Bioaccumulation of Heavy Metal Contaminants.<br>
          22. An Assessment of Overburden Dump Rehabilitation Technologies Adopted in CCL, NCL, MCL and SECL Mines.<br>
<br><br>
<h4 style = color:blue;"> ON-GOING R&D PROJECTS :</h4>
          • Environmental baseline studies of Bagjata and Banduhurang sites of UCIL. BRNS, Dept. of Atomic Energy, GOI.<br>
          • Water Quality Assessment from various Coal Mines and Industries and its Impact on River Water System in Talcher-Angul Region of Orissa, India.<br>
          • Biodegradation of Chlorinated Ethanes in Anaerobic Hybrid Reactor.<br>
          • Assessment of Air Quality Status and its Impacts on Social Spectrum of Angul-Talcher Area in Orissa, India.<br>
          • Development of a Cost Effective Integrated Package for the Treatment of Coke Plant Effluents.<br>
          • Studies of Impact of Mining and Urbanization on Land-Use and Vegetation Diversity in Angul-Talcher Region, Orissa.<br>
          • Investigation into Backfill Design of Opencast Mines with reference to Jharia Coalfield, Eastern India.<br>
          • Restoration of Soil Fertility through Biological Processes in Mined Out Areas of Angul-Talcher Region, Orissa.<br>
          • Environmental Impact Assessment with respect to Water, Soil and Dietary Components in Bandhuhurang and Bagjata Mining Projects of UCIL, East Singhbhum, Jharkhand.<br>
          • Environmental Information System (ENVIS) on Environmental problems of Mining of Ministry of Environment & Forests, Govt. of India (continuing since 1993).<br>
          </p>

        <div class="row"> <h3 style="text-align:center;" ><span class='label label-info chngebgcolor'><a href="https://www.iitism.ac.in/assets/department/ese/data/research-activites.pdf" target="_blank">R&D Projects ( Click Here)</a></span></h3></div>


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