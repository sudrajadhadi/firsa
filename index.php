<!DOCTYPE html>
<html lang="en">
  <head>
    <title>For You My Love</title>
	
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"
	integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
	crossorigin="anonymous"></script>
    
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
		
		<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" href="css/nouislider.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
  <div class="main-section">

  	<section class="hero-wrap" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
  		<div class="overlay"></div>
  		<div class="container">
  			<div class="row description align-items-center justify-content-center">
  				<div class="col-md-8 text-center">
  					<div class="text">
  						<h2 id="timestamp">
						  	<script>
								//Function ini dijalankan ketika Halaman ini dibuka pada browser
								$(function(){
									setInterval(timestamp, 1000); //fungsi yang dijalan setiap detik, 1000 = 1 detik
								});
								
								//Fungi ajax untuk Menampilkan Jam dengan mengakses File ajax_timestamp.php
								function timestamp() {
									$.ajax({
										url: 'ajax_timestamp.php',
										success: function(data) {
											$('#timestamp').html(data);
										},
									});
								}
							</script>
						  	<?php
								date_default_timezone_set('Asia/Jakarta');
								$jam=date("H:i:s");
								$a = date ("H");
							?>
						</h2>

  						<h4>
						  	<?php
								if (($a>=6) && ($a<=11)){
									echo "<b>Selamat Pagi";
								}
								else if(($a>11) && ($a<=15)){
									echo "Selamat Siang";
								}
								else if (($a>15) && ($a<=18)){
									echo "Selamat Sore";
								}
								else{
									echo "<b>Selamat Malam";
								}
							?>
						</h4>

						<h3>Firsa Wastikawati</h3>
						<br>
  					</div>
					  
					<div class="col-md-12" id="buttons">
					<audio id="myAudio">
						<source src="audio/make-you-mine.mp3" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>
						<button onclick="playAudio()" type="button" class="btn btn-primary btn-round">Play Music</button>
						<button onclick="pauseAudio()" type="button" class="btn btn-danger btn-round">Pause Music</button>
						<script>
							var x = document.getElementById("myAudio"); 
							function playAudio() { 
								x.play(); 
							}
							function pauseAudio() { 
								x.pause(); 
							}
						</script>
					</div>
  				</div>
  			</div>
  		</div>
  		<!-- <div class="mouse">
				<a href="#" class="mouse-icon">
					<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
				</a>
			</div> -->
  	</section>

  </div>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/nouislider.min.js"></script>
  <script src="js/moment-with-locales.min.js"></script>
  <script src="js/bootstrap-datetimepicker.min.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
