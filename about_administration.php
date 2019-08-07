<!DOCTYPE html>
<html lang="en">
<head>
  <title>IIT ISM Dhanbad</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="slick/slick.css">
  <link rel="stylesheet" type="text/css" href="css/animations.css">
  <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

  <!--remodal-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />


  <style type="text/css">
  	.container{
  		font-size: 14.5px;
  	}
  	.flex-container{
  		display: flex;
  		flex-wrap: wrap;
  		flex-direction: row;
  		justify-content: center;
  	}
  	.card{
  		margin: 1em 1em;
  		border:none;
  	}

  	.modal{
  		height: auto; 
  	}
  </style>
</head>
<body>

<?php

	include 'header.php' ;

?>

<div class="administration">
	<div class="container">
		 <span style="background:#BF733B; color: #ffffff;text-align: left; padding: 5px; font-size: 2.3em; font-weight: 600;">Administration</span>
	</div>
</div>

<div class="colors">
	
</div>

<!-- 
<div id="admin_bodies">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<button class="btn btn-info btn-lg" style="width: 100%;">Governing Body</button>
			</div>
			<div class="col-md-3">
				<div class="content">
					<button class="btn btn-info btn-lg" style="width: 100%;" >Chairman</button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="content">
					<button class="btn btn-info btn-lg" style="width: 100%;">Director</button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="content">
					<button class="btn btn-info btn-lg" style="width: 100%;">Deputy Director</button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="content">
					<button class="btn btn-info btn-lg" style="width: 100%;">Academic Administration</button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="content">
					<button class="btn btn-info btn-lg" style="width: 100%;">General Administration</button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="content">
					<button class="btn btn-info btn-lg" style="width: 100%;">Hostel Administration</button>
				</div>
			</div>
		</div>
	</div>
</div> -->
<div class="container" style="padding: 40px 0;">
	<div class="flex-container">
		<div class="card shadow" style="width: 18rem;">
		  <div class="card-body">
		    <h5 class="card-title">Governing Body</h5>
		    <p class="card-text">Consists of Board of Governors and finance committee</p>
		    <p class="card-text">For more info click <a href="#ex67" rel="modal:open" class="card-link">here</a></p>
		    <div id="ex67" class="modal">
		    	<ul>
		    		<li><a href="https://www.iitism.ac.in/pdfs/bog.pdf" style="text-decoration: none">Board of Governors</a></li>
		    		<li><a href="https://www.iitism.ac.in/pdfs/fc.pdf" style="text-decoration: none">Finance Committe</a></li>
		    	</ul>
                <a href="#" rel="modal:close"> </a>
            </div>
		  </div>
		</div>
		<div class="card shadow" style="width: 18rem;">
		  <div class="card-body">
		    <h5 class="card-title">Chairman</h5>
		    <p class="card-text">Prof. D.D. Misra</p>
		    <p class="card-text">For more info click <a href="admin/chairman.html" class="card-link">here</a></p>
		  </div>
		</div>
		<div class="card shadow" style="width: 18rem;">
		  <div class="card-body">
		    <h5 class="card-title">Director</h5>
		    <p class="card-text">Prof. Rajeev Shekhar</p>
		    <p class="card-text">For more info click <a href="admin/director.html" class="card-link">here</a></p>
		  </div>
		</div>
		<div class="card shadow" style="width: 18rem;">
		  <div class="card-body">
		    <h5 class="card-title">Deputy Director</h5>
		    <p class="card-text">Prof. J.K. Pattanayak</p>
		    <p class="card-text">For more info click <a href="admin/dy_director.html" class="card-link">here</a></p>
		  </div>
		</div>
		<div class="card shadow" style="width: 18rem;">
		  <div class="card-body">
		    <h5 class="card-title">Academic Administration</h5>
		    <p class="card-text">Consists of the Senate, the Deans, the Associate Deans, the HODs, the Library incharge and the PCE</p>
		    <p class="card-text">For more info click <a href="#ex72" rel="modal:open" class="card-link">here</a></p>
		    <div id="ex72" class="modal">
		    	<ul>
		    		<li><a href="https://www.iitism.ac.in/pdfs/senate/List-Senate-Members.pdf" style="text-decoration: none">Senate Members</a></li>
		    		<li><a href="admin/deans.html" style="text-decoration: none">Deans</a></li>
		    		<li><a href="admin/pce.html" style="text-decoration: none">PCE</a></li>
		    		<li><a href="admin/associate_deans.html" style="text-decoration: none">Associate Deans</a></li>
		    		<li><a href="admin/hods.html" style="text-decoration: none">HODs</a></li>
		    		<li><a href="admin/library.html" style="text-decoration: none">Library In Charge</a></li>
		    	</ul>
                <a href="#" rel="modal:close"> </a>
            </div>
		  </div>
		  </div>
		<div class="card shadow" style="width: 18rem;">
		  <div class="card-body">
		    <h5 class="card-title">General Administration</h5>
		    <p class="card-text">Get info about the Registrar, the Academic and exam section, Sports section and so on</p>
		    <p class="card-text">For more info click <a href="admin/genadmin.html" class="card-link">here</a></p>
		    <div id="ex17" class="modal">
		    	<ul>
		    		<li><a href="https://www.iitism.ac.in/index.php/general_administration/registrar" style="text-decoration: none">Registrar</a></li>
		    		<li><a href="https://www.iitism.ac.in/index.php/general_administration/academic_section" style="text-decoration: none">Academic and Exam Section</a></li>
		    		<li><a href="https://www.iitism.ac.in/index.php/general_administration/finance" style="text-decoration: none">Finance and Account Section</a></li>
		    		<li><a href="https://www.iitism.ac.in/index.php/general_administration/establishment" style="text-decoration: none">Establishment Section</a></li>
		    		<li><a href="https://www.iitism.ac.in/index.php/general_administration/purchase_store" style="text-decoration: none">Assistant Registrar (Purchase and Store)</a></li>
		    		<li><a href="https://www.iitism.ac.in/index.php/general_administration/student_welfare" style="text-decoration: none">Assistant Registrar (Student Welfare)</a></li>
		    		<li><a href="https://www.iitism.ac.in/index.php/general_administration/campus_security" style="text-decoration: none">Security Officer</a></li>
		    		<li><a href="https://www.iitism.ac.in/index.php/general_administration/campus_horticulture" style="text-decoration: none">Horticulturist</a></li>
		    		<li><a href="https://www.iitism.ac.in/index.php/general_administration/campus_estate" style="text-decoration: none">Estate Officer</a></li>
		    		<li><a href="https://www.iitism.ac.in/index.php/general_administration/campus_maintenance" style="text-decoration: none">Campus Maintenance</a></li>
		    		<li><a href="https://www.iitism.ac.in/index.php/general_administration/workshop" style="text-decoration: none">Central Workshop</a></li>
		    		<li><a href="https://www.iitism.ac.in/index.php/general_administration/hindi_section" style="text-decoration: none">Hindi Officer</a></li>
		    	</ul>
                <a href="#" rel="modal:close"> </a>
            </div>
		  </div>
		</div>
		<div class="card shadow" style="width: 18rem;">
		  <div class="card-body">
		    <h5 class="card-title">Hostel Administration</h5>
		    <p class="card-text">Info about the Wardens of the hostels</p>
		    <p class="card-text">For more info click <a href="https://www.iitism.ac.in/pdfs/hostel/warden.pdf" class="card-link">here</a></p>
		  </div>
		</div>
	</div>
</div>

<?php

	include 'footer.php' ;

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