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
		<h1>Department of Applied Geology</h1>
		<!--<h3>IIT (ISM) Dhanbad</h3>-->
	</div>
</div><br><br>
<h3 style="text-align:center; text-decoration: underline;" ><span class='label label-info chngebgcolor'>About Department</span></h3><br><br>
<div class="container">
        <br>
           <div class="department_content"> 
           
           <p style="text-align: center;">The Department of Applied Geology, established in 1926, the year of inception of the Indian School of Mines, is the pioneering centre of teaching, training and advanced research in Applied Geology in India. The Department offers 5-year Integrated M.Sc. Tech. Applied Geology, 3-year M.Sc. Tech. Applied Geology, 2-year M.Tech in Mineral Exploration, Engineering Geology and Petroleum Exploration, and Ph.D. programmes. Besides, the department organises conferences, seminars and workshops and provides training programmes, consultancy and testing services, both at international and national levels. The department has developed a very strong Industry-Institution relationship which is unique in the country. The department consists of a team of highly talented faculty members and technical staff who contribute to the development of the young minds. The fundamental objective of this department is to educate young men and women for professional careers in the fields of Applied Geology, Petroleum, Mining and Mineral Sciences. The principal long-range goal of the department is to establish itself as a centre of excellence in Applied Geology with special reference to Mineral Exploration, Engineering Geology, Coal Geology, Hydrogeology and Petroleum Geology. It is this specialized purpose to which this department has addressed itself since its very inception, and to which it still adheres. It imparts training to students not only from all over India, but also from abroad. The department houses an excellent treasure trove Geological museum, which is one of the oldest and richest in terms of collections, exhibits, models and displays in the country.</p>

             <p style="text-align: justify;">The trained graduates of Applied Geology, by virtue of their high professional ability and skill, have always been in the mainstream of the nation’s oil and mineral development and exploration programmes, while several others have carried the name and fame of the institution far beyond the frontiers of the nation, even to the well-developed foreign countries.</p>

            <p style="text-align: justify;">The students of the department are sent to reputed oil and mineral sector organizations for summer training. Apart from recruitment through all-India competitive Geologists’ examination, conducted be UPSC, ONGC, and other public sector organization the graduates of this department are currently getting jobs through campus placement. They are getting hired faster with high pay package. In the current session and in the recent past, the students of this department have been recruited by various organizations, viz., Coal India Ltd., Steel Authority of India Ltd., Indian Oil Corporation, Oil and Natural Gas Corporation (ONGC), Adhunik Group of Industries, Neyveli Lignite Corporation, Shell India Pvt. Ltd., British Gas India Pvt. Ltd., Reliance Industries Ltd, Cairn Energy India Pvt. Ltd., Essar Oil Ltd., Gas Authority of India Ltd., Hindustan Oil Exploration Company, National Thermal Power Corporation (NTPC), Gujarat State Petroleum Corporation (GSPC), Oil India Ltd., Schlumberger Services India Ltd, Tata Steel (TISCO), Gammon India Ltd., Afcons Infrastructure Ltd., Hindustan Zinc Ltd. (HZL), Manganese Ore India Ltd. (MOIL), Tata Consultancy Services, Hindustan Aluminium Company (Hindalco), Elcome Technologies Pvt. Ltd., De Beers, NCB and others through campus interviews.</p>

<p>Contact:</p>

Head of the Department<br>
Email: agl@iitism.ac.in <br>
Phone & Fax : +91-326-223-5271, <br>
Fax: +91-326-2296563 (PBAX) <br></p>  
     </div>             
</div>

</div>
<br>
<br>
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