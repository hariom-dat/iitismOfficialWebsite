<!DOCTYPE html>
<html lang="en">
<head>
  <title>IIT ISM Dhanbad | Civil Engineering</title>
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

<div id="civil">
  <div class="container">
    <h1>Facilities</h1>
  </div>
</div>

<div class="about">
  <div class="container">
     <div class="row">
      <div class="col-md-9">
        <!-- <h3>Facilities</h3><hr> --><br><br>
         <p>The Department will soon be located in New Academic Block consisting of necessary equipments and infrastructure for all modern laboratories of Civil Engineering. The institute has taken-up the initiative to purchase all necessary equipments required for the Civil Engineering Department for conducting experimental studies at both UG and PG levels. To mention a few, the major equipments include:</p>
 
         <ul>
            <li>Universal Testing Machine.
            </li><li>Compression Testing Machine.
            </li><li>Flexural Testing Machine.
            </li><li>Torsional Testing machine.
            </li><li>Triaxial Shear Test Apparatus.
            </li><li>Direct Shear Test Apparatus.
            </li><li>Consolidation Test Apparatus.
            </li><li>SPT, CPT, Plate Load Test Apparatus.
            </li><li>Pipe Friction Apparatus.
            </li><li>Bernoulli’s Apparatus
            </li><li>Hydraulic Jump Apparatus.
            </li><li>Venturi Meter and Orifice Meter Apparatus.
            </li><li>Flash Point and Fire Point Test Apparatus.
            </li><li>Penetration Testing Equipment.
            </li><li>Softening Point Testing Apparatus.
            </li><li>Viscosity Testing Apparatus.
            </li><li>Digital Marshall Test Apparatus etc.
            </li></ul>
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