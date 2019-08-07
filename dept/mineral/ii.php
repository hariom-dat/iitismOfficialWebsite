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

<div id="mineral">
	<div class="container">
		<p class="display-4">Industrial Interaction</p>
	</div>
</div>

<div class="academic">
	<div class="container">
              <h5>
           <strong id="arvcenter08">Consultancy</strong><br>

           </h5>
           <br>The Department offers its expertise in identifying suitable beneficiation strategies and solving industrial problems of the coal and mineral industries, through its consultancy and testing services. Such consultancy work has contributed to substantial technological and economic gains to the industry, e.g. Improved recovery of clean coal from Kathara, Sudamdih, Monidih, Mohuda Chasnalla, Patherdih, Dugda, Jamadoba, and West Bokaro Coal Washeries. Performance improvement of the grinding classification and flotation circuits of copper concentrators. Developments of computer package to optimize the schedule of transport of raw coal to different washeries, enabling blending of different raw coals in certain proportions. Application of column flotation for recovery of carbonaceous materials from flyash, Coal and mineral fines including Iron ore fines. Development of beneficiation and Pelletisation/ sintering technologies for low grade Indian Iron and Manganese Ores has been one of the major achievements in which design of technology for CRP pellets has been the novel approach. Melting of aluminium alloys for casting having strength comparable to EN8. Application of column flotation for recovery of carbonaceous materials from fly ash, coal and mineral fines including iron ore fines. Flowsheet development for the processing of overburden rocks Grading of coal slurry and washery rejects.
           Improved recovery of clean coal from Kathara, Sudamdih, Monidih, Mohuda Chasnalla, Patherdih, Dugda, Jamadoba, and West Bokaro Coal Washeries.<br>

           Performance improvement of the grinding classification and flotation circuits of copper concentrators.<br>

           Developments of computer package to optimize the schedule of transport of raw coal to different washeries, enabling blending of different raw coals in certain proportions.
           Application of column flotation for recovery of carbonaceous materials from flyash, Coal and mineral fines including Iron ore fines.<br>

           Development of beneficiation and Pelletisation/ sintering technologies for low grade Indian Iron and Manganese Ores has been one of the major achievements in which design of technology for CRP pellets has been the novel approach.<br><br>

           Some of our clients are CIL and its subsidiaries,<strong id="arvcenter08"> TISCO, SCCL, HGML, NTPC, NHPC, MOIL, IISCO, Macnally Bharat, Century Cement.</strong>

          <br><br>

          <h5><strong id="arvcenter08">Testing :</strong><br></h5>

          The testing facilities available in the department are characterization instruments, grindability apparatus, sink – float test benches etc., have been utilized to identify the constituents, the response of coal/mineral samples to specific concentration processes, the design parameters such as grindability index, work index, of coal/mineral samples for various organizations.<br><br>

          Testing of coal and coke for proximate analysis, ultimate analysis, calorific value, FSI, Caking Index, LTGK assay, Micum index, shatter index, drum index, CRI/CSR etc. and is done on a regular basis in the laboratories of the Department. The laboratories have facilities for the determination of almost all properties that are required by coal producing and coal consuming sectors and these facilities are used extensively by these industry.<br><br>

          <h5><strong id="arvcenter08">Continuing Education Programmes</strong><br></h5>

          Continuing Education Programmes of the Department are designed with careful planning and research support. Most of the programmes are conducted in-campus, but occasionally off-campus programmes in specific subject areas, are also organized at the request of the client organizations. The Department has been playing an important role in updating the knowledge of practicing mineral engineers of the country and has conducted off-campus Mineral Engineering courses for HCL, IBM, HZL, Tega (India) Ltd, M/s Fomento-Goa, VSL Mining Company-Sandur, IREL, BCCL, NLC and the working engineers of TATA STEEL & ESSAR STEEL.<br><br>

          The Department has been offering short course in coal preparation on coking and non-coking coals time to time, for imparting fundamental aspects along with practical implications of coal preparation to the serving coal preparation engineers. Besides this the other fields in which the department has been offering manpower trainings are:
          <ul>
            <li>Simulation, optimization and control of coal/mineral beneficiation processes</li>
            <li>Iron ore beneficiation and agglomeration</li>
            <li>Mineral Beneficiation Principles, Developments and Plant Practices</li>
            <li>Processing of Beach Placer Minerals     
            </li>
          </ul>

	</div>
</div>

<?php

	include 'header.php';
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