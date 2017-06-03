<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acceuil</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />	
  </head>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="index.php"><h1><span>Humana </span>Mens</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="index.php" class="active">Acceuil</a></li>
								<li role="presentation"><a href="php/references.php">Références</a></li>
								<li role="presentation"><a href="php/partenariat_soutient.php">Partenariat et soutient</a></li>								
								<li role="presentation"><a href="php/services.php">Offre de services</a></li>
								<li role="presentation"><a href="php/contact.php">Contact</a></li>						
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
	
	<section id="main-slider" class="no-margin">
        <div class="carousel slide">      
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(images/humana.jpg);">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2 class=""><span>HUMANA MENS</span></h2>
                                    <h3 class="" style="color: magenta;">L’esprit humain au cœur du développement des compétences</h3>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs">
                                <div class="slider-img">
                                    <img src="images/linux.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->             
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->
	
	<footer style="height: 100px;">
		<div class="container">
		  <div class="row" style="margin-top: 10px;">
		    <div class="col-md-2 col-lg-2 col-xs-2 col-ms-2"><a href="#"><img src="images/facebook.png" alt="Facebook" width="70" height="60"></a></div>
		    <div class="col-md-2 col-lg-2 col-xs-2 col-ms-2"><a href="#"><img src="images/in.png" alt="Linkedin" width="65" height="50"></a></div>
		    <div class="col-md-2 col-lg-2 col-xs-2 col-ms-2"><a href="#"><img src="images/viadeo.png" alt="viadeo" width="75" height="60"></a></div>
		    <div class="col-md-offset-3 col-md-3 col-lg-3 col-xs-3 col-ms-3"><a href="#">Contactez-nous :</a></div>
		  </div>

		</div>
	</footer>

	<script src="js/jquery-2.1.1.min.js"></script>	
    <script src="js/bootstrap.min.js"></script>
	<script src="js/functions.js"></script>
	
</body>
</html>