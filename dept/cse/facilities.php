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
		<p class="display-4">Facilities</p>
	</div>
</div>

<div class="academic">
	<div class="container">
		<h5>Laboratories</h5>
               
               <p style="text-align: justify;">The Department of Computer Science and Engineering has two Software Laboratories and a Hardware Laboratory that are equipped with all necessary resources and software. The laboratories are fully equipped with electronic surveillance system.
               </p>

               <p style="text-align: justify;">Software laboratories consist of Sun Sparc Servers, IBM Servers, HP P4 Servers, HP Tower Server, Pentium 4 Workstations, Thin Clients and high end PCs. The laboratories are fully equipped with software for basic and advanced programming like C/C++, PERL, LISP, Microsoft Visual Studio 6.0, Microsoft Visual Studio .NET, Java Platform Enterprise Edition, IBM Rational Software Architect, Qualnet Simulator, MATLAB SIMULINK, and various toolboxes like Image Processing, Statistics, Optimization, Neural Network, Fuzzy Logic, Wavelet, Bioinformatics, Signal Processing, DSP System and Communication System.
               </p>
               
               <p style="text-align: justify;">Hardware laboratory is also well equipped with the necessary resources for conducting hands on sessions on fundamental subjects like Digital Circuits, Computer Organization and Architecture, VLSI and Microprocessor Based Systems.
               </p>
               
               <h5>Departmental Library</h5>

               <p style="text-align: justify;">The department has its own library with a collection of essential text and reference books, computer magazines and periodicals. Video CDs of various subjects are also available. The library is equipped with electronic surveillance system. The department has the access to online journals and articles published under IEEE, ACM, Elsevier &amp; others, catered by the Central Library of the institute.
               </p>

               <h5>Internet Access</h5>
               
               <p style="text-align: justify;">The department has its own LAN connected to the backbone network of ISM. Email and Internet access facilities to the 500 Mbps dedicated 1:1 bandwidth and 1 Gbps NKN line are made at ISM. The department is also facilitated with secured Wi Fi Access.
               </p>
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