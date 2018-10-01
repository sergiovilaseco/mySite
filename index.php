<?php
error_reporting ( E_ALL & ~ E_NOTICE );
include ("geoiploc.php");
if (empty ( $_POST ['checkip'] )) {
	$ip = $_SERVER ["REMOTE_ADDR"];
} else {
	$ip = $_POST ['checkip'];
}

$country = getCountryFromIP ( $ip, "code" );

if ($country == "ES") {
	
	$data = file ( 'ES_es.txt' );
} else {
	$data = file ( 'EN_en.txt' );
}

$myArray = Array ();

foreach ( $data as $line ) {
	
	parse_str ( $line, $outcome );
	
	$myArray += $outcome;
}

// echo "<pre>";
// print_r($myArray);
// echo "</pre>";

?>

<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.scrollzer.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.circliful.js"></script>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css">
<link rel="stylesheet"
	href="assets/css/material-design-iconic-font.min.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/jquery.circliful.css">

<script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'http://localhost/cv/');
        });
    </script>
<script>

	function writeChart(circle, skillValue){
	
	        $("#"+circle).circliful({
	            animationStep: 5,
	            foregroundBorderWidth: 5,
	            backgroundBorderWidth: 10,
	            percent: skillValue,            
	            icon: 'none',
	            iconPosition: 'middle',            
	            textBelow: true
	        });
	}

</script>
<title>Sergio Vilaseco-Romero | Software Engineer</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
<link rel="stylesheet" href="assets/css/main.css" />
<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->


</head>
<body>

	<!-- Header -->
	<div id="header">

		<div class="top">

			<!-- Logo -->
			<div id="logo">
				<span class="image avatar48"><img src="images/cv-photo.png" alt=""
					class=" img-rounded" /></span>
				<h1 id="title">Sergio Vilaseco</h1>
				<p>Software Engineer</p>
			</div>

			<!-- Nav -->
			<nav id="nav">
				<!--

								Prologue's nav expects links in one of two formats:

								1. Hash link (scrolls to a different section within the page)

								   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

								2. Standard link (sends the user to another page/site)

								   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>

							-->
				<ul>
					<li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span
							class="icon fa-home"><?php echo $myArray['menu-intro']?></span></a></li>
					<li><a href="#skills" id="skills-link"
						class="skel-layers-ignoreHref"><span class="icon fa-th"><?php echo $myArray['menu-skills']?></span></a></li>
					<li><a href="#experience" id="about-link"
						class="skel-layers-ignoreHref"><span class="icon fa-user"><?php echo $myArray['menu-experience']?></span></a></li>
					<li><a href="#qulifications" id="about-link"
						class="skel-layers-ignoreHref"><span class="icon fa-book"><?php echo $myArray['menu-qualifications']?></span></a></li>
					<li><a href="#languages" id="about-link"
						class="skel-layers-ignoreHref"><span class="icon fa-flag"><?php echo $myArray['menu-languages']?></span></a></li>
					<li><a href="#contact" id="contact-link"
						class="skel-layers-ignoreHref"><span class="icon fa-envelope"><?php echo $myArray['menu-contact']?></span></a></li>
				</ul>
			</nav>

		</div>

		<div class="bottom">

			<!-- Social Icons -->
			<ul class="icons">
				<li><a href="https://twitter.com/SVilaseco" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="https://www.facebook.com/Kroquetaman" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="https://www.linkedin.com/in/sergio-vilaseco-romero-541881106/" class="icon fa-linkedin"><span class="label">Github</span></a></li>
				<li><a href="mailto:sergio.vilaseco@outlook.com?subject=Contact%20from%20the%20online%20CV" class="icon fa-envelope"><span class="label">Email</span></a></li>
			</ul>

		</div>

	</div>

	<!-- Main -->
	<div id="main">

		<!-- Intro -->
		<section id="top" class="one dark cover" style="height: 100%">
			<div class="container">
				<div style="float: left; width: 50%">
					<img src="images/cv-photo.png" alt=""
						class="img-responsive img-thumbnail" style="max-width: 75%;" />

				</div>
				<div style="float: right; width: 50%">
					<header>
							<?php
							echo $myArray ['aboutMe'];
							?>
							</header>
					<footer>
						<a href="#skills" class="button scrolly"><?php echo $myArray['menu-skills']?></a>
					</footer>
				</div>
			</div>



		</section>

		<!-- skills -->
		<section id="skills" class="two">
			<div class="container">

				<header>
					<h2><?php echo $myArray['menu-skills']?></h2>
				</header>

				<div class="row">
					<div class="3u 10u$(mobile)">
						<article class="item">


							<div id="circle1">
								<script type="text/javascript">
						            	<?php echo "var skill =".$myArray['skill1']?>
						            	<?php echo "var skillValue =".$myArray['skill1Value']?>
						            	var circle = "circle1";
						            	writeChart(circle, skillValue);
				            	</script>
							</div>
							<header>
								<h3>
									<script type="text/javascript">document.write(skill)</script>
								</h3>
							</header>


						</article>

						<article class="item">
							<div id="circle5">


								<script type="text/javascript">
						            	<?php echo "var skill =".$myArray['skill5']?>
						            	<?php echo "var skillValue =".$myArray['skill5Value']?>
						            	var circle = "circle5";
						            	writeChart(circle, skillValue);
					            	</script>
							</div>
							<header>
								<h3>
									<script type="text/javascript">document.write(skill)</script>
								</h3>
							</header>

						</article>

					</div>
					<div class="3u 10u$(mobile)">
						<article class="item">
							<div id="circle2">


								<script type="text/javascript">
						            	<?php echo "var skill =".$myArray['skill2']?>
						            	<?php echo "var skillValue =".$myArray['skill2Value']?>
						            	var circle = "circle2";
						            	writeChart(circle, skillValue);
					            	</script>
							</div>
							<header>
								<h3>
									<script type="text/javascript">document.write(skill)</script>
								</h3>
							</header>

						</article>
						<article class="item">
							<div id="circle6">


								<script type="text/javascript">
						            	<?php echo "var skill =".$myArray['skill6']?>
						            	<?php echo "var skillValue =".$myArray['skill6Value']?>
						            	var circle = "circle6";
						            	writeChart(circle, skillValue);
					            	</script>
							</div>
							<header>
								<h3>
									<script type="text/javascript">document.write(skill)</script>
								</h3>
							</header>

						</article>
					</div>
					<div class="3u 10u$(mobile)">
						<article class="item">
							<div id="circle3">


								<script type="text/javascript">
						            	<?php echo "var skill =".$myArray['skill3']?>
						            	<?php echo "var skillValue =".$myArray['skill3Value']?>
						            	var circle = "circle3";
						            	writeChart(circle, skillValue);
					            	</script>
							</div>
							<header>
								<h3>
									<script type="text/javascript">document.write(skill)</script>
								</h3>
							</header>

						</article>
						<article class="item">
							<div id="circle7">


								<script type="text/javascript">
						            	<?php echo "var skill =".$myArray['skill7']?>
						            	<?php echo "var skillValue =".$myArray['skill7Value']?>
						            	var circle = "circle7";
						            	writeChart(circle, skillValue);
					            	</script>
							</div>
							<header>
								<h3>
									<script type="text/javascript">document.write(skill)</script>
								</h3>
							</header>

						</article>
					</div>
					<div class="3u 10u$(mobile)">
						<article class="item">
							<div id="circle4">


								<script type="text/javascript">
						            	<?php echo "var skill =".$myArray['skill4']?>
						            	<?php echo "var skillValue =".$myArray['skill4Value']?>
						            	var circle = "circle4";
						            	writeChart(circle, skillValue);
					            	</script>
							</div>
							<header>
								<h3>
									<script type="text/javascript">document.write(skill)</script>
								</h3>
							</header>

						</article>
						<article class="item">
							<div id="circle8">


								<script type="text/javascript">
						            	<?php echo "var skill =".$myArray['skill8']?>
						            	<?php echo "var skillValue =".$myArray['skill8Value']?>
						            	var circle = "circle8";
						            	writeChart(circle, skillValue);
					            	</script>
							</div>
							<header>
								<h3>
									<script type="text/javascript">document.write(skill)</script>
								</h3>
							</header>

						</article>
					</div>
				</div>

			</div>
		</section>

		<!-- About Me -->
		<section id="experience" class="three">
			<div class="container">

				<header>
					<h2><?php echo $myArray['menu-experience']?></h2>
				</header>


				<section class="timeline">
					<ul>
						<li>
							<div>
								<time><?php echo $myArray['experienceDate7']?></time>
								<b><?php echo $myArray['experiencePossition7']?></b><br> <br> <span
									class='small lb-sm'><?php echo $myArray['experienceDescription7']?></span>
							</div>
						</li>
						<li>
							<div>
								<time><?php echo $myArray['experienceDate6']?></time>
								<b><?php echo $myArray['experiencePossition6']?></b><br> <br> <span
									class='small lb-sm'><?php echo $myArray['experienceDescription6']?></span>
							</div>
						</li>
						<li>
							<div>
								<time><?php echo $myArray['experienceDate5']?></time>
								<b><?php echo $myArray['experiencePossition5']?></b><br> <br> <span
									class='small lb-sm'><?php echo $myArray['experienceDescription5']?></span>
							</div>
						</li>
						<li>
							<div>
								<time><?php echo $myArray['experienceDate4']?></time>
								<b><?php echo $myArray['experiencePossition4']?></b><br> <br> <span
									class='small lb-sm'><?php echo $myArray['experienceDescription4']?></span>
							</div>
						</li>
						<li>
							<div>
								<time><?php echo $myArray['experienceDate3']?></time>
								<b><?php echo $myArray['experiencePossition3']?></b><br> <br> <span
									class='small lb-sm'><?php echo $myArray['experienceDescription3']?></span>
							</div>
						</li>
						<li>
							<div>
								<time><?php echo $myArray['experienceDate2']?></time>
								<b><?php echo $myArray['experiencePossition2']?></b><br> <br> <span
									class='small lb-sm'><?php echo $myArray['experienceDescription2']?></span>
							</div>
						</li>
						<li>
							<div>
								<time><?php echo $myArray['experienceDate1']?></time>
								<b><?php echo $myArray['experiencePossition1']?></b><br> <br> <span
									class='small lb-sm'><?php echo $myArray['experienceDescription1']?></span>
							</div>
						</li>
					</ul>
				</section>


			</div>
		</section>

		<!-- Education/Qualifications -->

		<section id="qulifications" class="four">
			<div class="container">

				<header>
					<h2><?php echo $myArray['menu-qualifications']?></h2>
				</header>

				<ul class="list-group">
					<li class="list-group-item"><span class="label label-default"><?php echo $myArray['educationYear1']?></span>
						<h4 class="list-group-item-heading">
							<br><?php echo $myArray['educationTitle1']?></h4>
						<p><?php echo $myArray['educationMajor1']."- ".$myArray['educationCentre1']?><br><?php echo $myArray['educationCountry1']?>
						</p></li>
					<li class="list-group-item"><span class="label label-default"><?php echo $myArray['educationYear2']?></span>
						<h4 class="list-group-item-heading">
							<br><?php echo $myArray['educationTitle2']?></h4>
						<p><?php echo $myArray['educationMajor2']."- ".$myArray['educationCentre2']?><br><?php echo $myArray['educationCountry2']?>
						</p></li>
					<li class="list-group-item"><span class="label label-default"><?php echo $myArray['educationYear3']?></span>
						<h4 class="list-group-item-heading">
							<br><?php echo $myArray['educationTitle3']?></h4>
						<p><?php echo $myArray['educationMajor3']."- ".$myArray['educationCentre3']?><br><?php echo $myArray['educationCountry3']?>
						</p></li>
					<li class="list-group-item"><span class="label label-default"><?php echo $myArray['educationYear4']?></span>
						<h4 class="list-group-item-heading">
							<br><?php echo $myArray['educationTitle4']?></h4>
						<p><?php echo $myArray['educationMajor4']."- ".$myArray['educationCentre4']?><br><?php echo $myArray['educationCountry4']?>
						</p></li>

				</ul
			
			</div>
		</section>

		<!-- Languages -->

		<section id="languages" class="four">
			<div class="container">

				<header>
					<h2><?php echo $myArray['menu-languages']?></h2>
				</header>

				<ul class="list-group">
					<li class="list-group-item"><img alt="English"
						src="images/uk-flag1.png">
						<h4 class="list-group-item-heading"><?php echo $myArray['languageEnglish']?></h4>

					</li>
					<li class="list-group-item"><img alt="English"
						src="images/SP-flag.png">
						<h4 class="list-group-item-heading"><?php echo $myArray['languageSpanish']?></h4>
					</li>

				</ul
			
			</div>
		</section>

		<!-- Contact -->
		<section id="contact" class="five">
			<div class="container">

				<header>
					<h2>Contact</h2>
				</header>

				<p><?php echo $myArray['contactInformation']?></p>
				<div id="postForm">
					<form id="formdata" method="post">
						<input type="hidden" name="subject" value="Contact from the online CV"/>
						<div class="row">
							<div class="6u 12u$(mobile)">
								<input type="text" name="name" placeholder="Name" />
							</div>
							<div class="6u$ 12u$(mobile)">
								<input type="text" name="email" placeholder="Email" />
							</div>
							<div class="12u$">
								<textarea name="message" placeholder="Message"></textarea>
							</div>
							<div class="12u$">
								<input type="button" id="submit" value="Send Message">
							</div>
						</div>
					</form>
				</div>
				<div id="success" style="display: none"><?php echo $myArray['successMail']?></div>
				<div id="fail" style="display: none"><?php echo $myArray['failMail']?></div>
			</div>
		</section>

	</div>

	<!-- Footer -->
	<div id="footer">

		<!-- Copyright -->
		<ul class="copyright">
			<li>&copy; Untitled. All rights reserved.</li>
		</ul>

	</div>


</body>

<script type="text/javascript">
(function() {

	  'use strict';

	  // define variables
	  var items = document.querySelectorAll(".timeline li");

	  // check if an element is in viewport
	  // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
	  function isElementInViewport(el) {
	    var rect = el.getBoundingClientRect();
	    return (
	      rect.top >= 0 &&
	      rect.left >= 0 &&
	      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
	      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
	    );
	  }

	  function callbackFunc() {
	    for (var i = 0; i < items.length; i++) {
	      if (isElementInViewport(items[i])) {
	        items[i].classList.add("in-view");
	      }
	    }
	  }

	  // listen for events
	  window.addEventListener("load", callbackFunc);
	  window.addEventListener("resize", callbackFunc);
	  window.addEventListener("scroll", callbackFunc);

	})();
	</script>
<script>
function validaForm(){
    // Campos de texto
    if($("#name").val() == ""){
        $("#name").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
        return false;
    }
    if($("#email").val() == ""){
        $("#email").focus();
        return false;
    }
    if($("#message").val() == ""){
        $("#message").focus();
        return false;
    }
 
    return true; // Si todo está correcto
}

$(document).ready( function() {   // Esta parte del código se ejecutará automáticamente cuando la página esté lista.
    $("#submit").click( function() {     // Con esto establecemos la acción por defecto de nuestro botón de enviar.
        if(validaForm()){                               // Primero validará el formulario.
            $.post("contact.php",$("#formdata").serialize(),function(res){
                $("#postForm").fadeOut("slow");   // Hacemos desaparecer el div "formulario" con un efecto fadeOut lento.
                alert(res);
                if(res == 1){
                    $("#success").delay(500).fadeIn("slow");      // Si hemos tenido éxito, hacemos aparecer el div "exito" con un efecto fadeIn lento tras un delay de 0,5 segundos.
                } else {
                    $("#fail").delay(500).fadeIn("slow");    // Si no, lo mismo, pero haremos aparecer el div "fracaso"
                }
            });
        }
    });    
});
</script>

</html>