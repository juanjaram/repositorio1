<?php 
include ("./PHP/Conecta.php"); 

include ("./PHP/mostrarhome.php"); 

?>
<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>


<meta charset="utf-8"/>
<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width"/>
<title>Home - Bienvenido a Osteochile</title>
<!-- CSS Files-->
<link rel='stylesheet' type='text/css' href='slider/css-slider.css'/>
<link rel="stylesheet" href="stylesheets/style.css">
<link rel="stylesheet" href="stylesheets/homepage.css"><!-- homepage stylesheet -->
<link rel="stylesheet" href="stylesheets/skins/teal.css"><!-- skin color -->
<link rel="stylesheet" href="stylesheets/responsive.css">
<!-- IE Fix for HTML5 Tags -->
<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->  






   

</head>
<body>



<!-- HIDDEN PANEL 
================================================== -->

<p class="slide">
	
</p>
<!-- HEADER
================================================== -->
<div class="row">	
		<div class="four columns">
			<div class="logo">
                            <a href="index.html"><img width="235px" src="images/logo-transp-menu.png"></a>
			</div>
		</div>
		<div class="eight columns noleftmarg">		
			<nav id="nav-wrap">
				<ul class="nav-bar sf-menu">
				
					<li class="current">
					<a href="index.html">HOME</a>
						<ul>
												
						<li><a href="index2.html">Without slider</a></li>						
						</ul>
					</li>
					
					<li>
					<a href="#">ESCUELA</a>
						<ul>
						<li><a href="portofolio2.html">2 Columns</a></li>
						<li><a href="portofolio3.html">3 Columns</a></li>
						<li><a href="portofolio4.html">4 Columns</a></li>						
						<li><a href="portofoliodetail.html">Project Details</a></li>
						</ul>
					</li>
					
					<li>
					<a href="#">CLINICA</a>
						<ul>
						<li><a href="blogpage1.html">Blog page style 1</a></li>
						<li><a href="blogpage2.html">Blog page style 2</a></li>
						<li><a href="blogpage3.html">Blog page style 3</a></li>
						<li><a href="blogsinglepost.html">Single post</a></li>
						</ul>
					</li>
					
					<li>
					<a href="#">EMPRESAS</a>
						<ul>
						<li><a href="about.html">About us</a></li>
						<li><a href="services.html">Services</a></li>						
						</ul>
					</li>
					
					

					<li>
					<a href="#">DEPORTES</a>
						<ul>
						<li><a href="about.html">About us</a></li>
						<li><a href="services.html">Services</a></li>						
						</ul>
					</li>
					
					<li>
					<a href="contact.html">CONTACTO</a>
					</li>
					
				</ul>
				</nav>
		</div>	
</div>
<div class="clear">
</div>



<!-- SLIDER 
================================================== -->
<div id="ei-slider" class="ei-slider">
	<ul class="ei-slider-large">
		<li>
                    <img src="images/imagen-rotator2.jpg" alt="image01" class="responsiveslide">
		<div class="ei-title">
			<h2>PRIMERA JORNADA / TALLER NACIONAL</h2>
			<h3>de Osteopatía en Concepción</h3>
                        <p>28 de marzo del 2015 - Hotel Radisson</p>
                        <a href=""> INSCRÍBETE AQUÍ</a>
		</div>
		</li>
		<li>
		<img src="http://placehold.it/1400x500/222" alt="image02" class="responsiveslide">
		<div class="ei-title">
			<h2>Dare to</h2>
			<h3>Hope</h3>
		</div>
		</li>
		<li>
		<img src="http://placehold.it/1400x500/222" alt="image03" class="responsiveslide">
		<div class="ei-title">
			<h2>Dare to</h2>
			<h3>Smile</h3>
		</div>
		</li>
		<li>
		<img src="http://placehold.it/1400x500/222" alt="image04" class="responsiveslide">
		<div class="ei-title">
			<h2>Dare to</h2>
			<h3>ask</h3>
		</div>
		</li>
		<li>
		<img src="http://placehold.it/1400x500/222" alt="image05" class="responsiveslide">
		<div class="ei-title">
			<h2>Dare to</h2>
			<h3>refuse</h3>
		</div>
		</li>
		<li>
		<img src="http://placehold.it/1400x500/222" alt="image06" class="responsiveslide">
		<div class="ei-title">
			<h2>Dare to</h2>
			<h3>give</h3>
		</div>
		</li>
		<li>
		<img src="http://placehold.it/1400x500/222" alt="image07" class="responsiveslide">
		<div class="ei-title">
			<h2>Dare to</h2>
			<h3>receive</h3>
		</div>
		</li>
		<li>
		<img src="http://placehold.it/1400x500/222" alt="image08" class="responsiveslide">
		<div class="ei-title">
			<h2>Dare to </h2>
			<h3>Love</h3>
		</div>
		</li>
		<li>
		<img src="http://placehold.it/1400x500/222" alt="image09" class="responsiveslide">
		<div class="ei-title">
			<h2>Dare to</h2>
			<h3>Forgive</h3>
		</div>
		</li>
		<li>
		<img src="http://placehold.it/1400x500/222" alt="image10" class="responsiveslide">
		<div class="ei-title">
			<h2>Stand up & </h2>
			<h3>Live</h3>
		</div>
		</li>
	</ul>
	<!-- slider-thumbs -->
	<ul class="ei-slider-thumbs">
		<li class="ei-slider-element">Current</li>
                <li><a href="#">Slide 1</a><img src="images/imagen-rotator2.jpg" class="slideshowthumb" alt="thumb01" width="150"/></li>
		<li><a href="#">Slide 2</a><img src="http://placehold.it/150x59/444" class="slideshowthumb" alt="thumb02"/></li>
		<li><a href="#">Slide 3</a><img src="http://placehold.it/150x59/444" class="slideshowthumb" alt="thumb03"/></li>
		<li><a href="#">Slide 4</a><img src="http://placehold.it/150x59/444" class="slideshowthumb" alt="thumb04"/></li>
		<li><a href="#">Slide 5</a><img src="http://placehold.it/150x59/444" class="slideshowthumb" alt="thumb05"/></li>
		<li><a href="#">Slide 6</a><img src="http://placehold.it/150x59/444" class="slideshowthumb" alt="thumb06"/></li>
		<li><a href="#">Slide 7</a><img src="http://placehold.it/150x59/444" class="slideshowthumb" alt="thumb07"/></li>
		<li><a href="#">Slide 8</a><img src="http://placehold.it/150x59/444" class="slideshowthumb" alt="thumb08"/></li>		
		<li><a href="#">Slide 9</a><img src="http://placehold.it/150x59/444" class="slideshowthumb" alt="thumb09"/></li>
		<li><a href="#">Slide 10</a><img src="http://placehold.it/150x59/444" class="slideshowthumb" alt="thumb10"/></li>
	</ul>	
</div>
<div class="minipause">
</div>
<!-- SUBHEADER
================================================== -->

<!-- ANIMATED COLUMNS 
================================================== -->

<!-- CONTENT 
================================================== -->
<div class="row">
	
    <br/><div class="four columns">
	
<!-- Start WOWSlider.com -->
<iframe src="videos/index.php" style="width:325px;height:245px;max-width:100%;overflow:hidden;border:none;padding:0;margin:0 auto;display:block;" marginheight="0" marginwidth="0"></iframe>
<!-- End WOWSlider.com -->
            <br/>
       </div>
    <div class="four columns">
		
		<?php
                    while ($rnoticias=  mysql_fetch_array($sqlnoticias)){
                        $idnoticia=$rnoticias['idnot'];
                        $titulonoticia=$rnoticias['titulo_not'];
                        $epigrafenoticia=$rnoticias['epigrafe_not'];
                        $bajadanoticia=$rnoticias['bajada_not'];
                        $fotonoticia=$rnoticias['img_not'];
                    
                    ?>
			<h5><?php echo($epigrafenoticia); ?></h5>
                        <h4><?php echo($titulonoticia); ?></h4>
                            <p><?php echo($bajadanoticia); ?></p>
		<p>
			<a href="#" class="readmore">Leer Mas</a>
		</p>
			
                    
	</div>
	
	<div class="four columns">
            <img src="images/Noticias/<?php echo($fotonoticia); ?>" width="95%" style="box-shadow: 0 0 1px #000;"/>
		
	</div>
    <?php } ?>
</div>


<!-- que es la Osteopatia 
================================================== -->
<div style="background: #065248; margin: 0 0 -32px 0;">
<div class="row">
	<div class="twelve columns">
            <h4 style="text-align: Center;">¿Que es la Osteopatia?</h4>
            <p style="text-align: justify;">La osteopatía o medicina osteopática es una medicina alternativa desarrollada por Andrew Taylor Still, 
                a partir de un sistema de diagnosis y tratamiento donde se pone una atención especial en la estructura y 
                los problemas mecánicos del cuerpo. Se basa en la creencia que los huesos, los músculos, 
                las articulaciones y el tejido conectivo no solo tienen la función evidente de formar parte de nuestro 
                cuerpo, sino que desempeñan un papel central en el mantenimiento de la salud.</p>
	</div>
</div></div>
<!-- FOOOTER 
================================================== -->
<div id="footer">
	<footer class="row">
	<p class="back-top floatright">
		<a href="#top"><span></span></a>
	</p>

	<div  class="four columns">
		<h1><img src="images/logo-transp-footer.png"></h1>
		 <h1 color="white">CONTACTANOS!</h1></br>
		 Osteochile</br>
		 Camino a Santa Juana, Kilometro 0,8. Concepciòn</br>
		 +56 9 795 746 90</br>
		 contacto@osteochile.cl
	</div>

<div class="four columns">
		<h1 class="newsmargin">NEWSLETTER</h1>
		<div class="row collapse newsletter floatright">
			<div class="ten mobile-three columns">
				<input type="text" class="nomargin" placeholder="Ingresa tu e-mail">
			</div>
			<div class="two mobile-one columns">
				<a href="#" class="postfix button expand">GO</a>
			</div>
		</div>
		<div><img  style="margin-top:10%; position:relative; left:-42%" src="images/logo-atsa.png"><div style="float:right;">Con el respaldo Academico de la Escuela de Osteopatia </br> A.T.S.A (Francia), 40 años enseñando la Osteopatia</div></div>
	</div>

<div class="four columns">
		<h1>GET SOCIAL</h1>
		<div class="social facebook">
			<a href="#"></a>
		</div>
		<div class="social twitter">
			<a href="#"></a>
		</div>
		<div class="social deviantart">
			<a href="#"></a>
		</div>
		<div class="social flickr">
			<a href="#"></a>
		</div>
		<div class="social dribbble">
			<a href="#"></a>
		</div>
	</div>
	




	</footer>
</div>
<div class="copyright">
	<div class="row">
		<div class="six columns">
			 &copy;<span class="small"> </span>
		</div>
		<div class="six columns">
			<span class="small floatright"> </span>
		</div>
	</div>
</div>
<!-- JAVASCRIPTS 
================================================== -->
<!-- Javascript files placed here for faster loading -->
<script src="javascripts/foundation.min.js"></script>   
<script src="javascripts/jquery.easing.1.3.js"></script>
<script src="javascripts/elasticslideshow.js"></script>
<script src="javascripts/jquery.carouFredSel-6.0.5-packed.js"></script>
<script src="javascripts/jquery.cycle.js"></script>
<script src="javascripts/app.js"></script>
<script src="javascripts/modernizr.foundation.js"></script>
<script src="javascripts/slidepanel.js"></script>
<script src="javascripts/scrolltotop.js"></script>
<script src="javascripts/hoverIntent.js"></script>
<script src="javascripts/superfish.js"></script>
<script src="javascripts/responsivemenu.js"></script>
<script src="javascripts/jquery.tweet.js"></script>
<script src="javascripts/twitterusername.js"></script>
</body>
</html>
