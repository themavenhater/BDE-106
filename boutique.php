<?php
session_start();
if (!isset($_SESSION['id']))
{
    header("location:index.php");
}
$bdd = new PDO("mysql:host=127.0.0.1;dbname=bdd2;charset=utf8", "root", "");
$articles = $bdd->query('SELECT * FROM boutique ORDER BY id_item DESC ');
$rows = array();
?>
<!DOCTYPE html>
<html lang="fr" > 
    <head>
    
        <meta charset="utf-8">
	
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>3-YZ Boutique</title>		
	
        <meta name="author" content="OUKAOUR Yacine">

        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Google Font -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

		<!-- CSS
		================================================== -->
		<link rel="stylesheet" href="css/animation.css"/>
		<link rel="stylesheet" href="css/style3.css" />
		<link rel="stylesheet" href="css/style2.css" />
		<link rel="stylesheet" href="css/style.css" />
		<!--<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->

        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- jquery.fancybox  -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- animate -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
		<!-- media-queries -->
        <link rel="stylesheet" href="css/media-queries.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>

    </head>
	
    <body id="body">


    	<div id="header_fixed" class="fadeIn animation_delay"> <!--animation menu + menu fixe -->
  <nav class="top-bar" data-topbar role="navigation"> <!-- menu fixe -->
    <ul class="title-area">
      <li class="name">
        <h1><a id="logo" href="#"><img src="img/logo.png" width="140"></a></h1> <!-- logo à gauche du menu (il faudrait mettre un vrai logo) -->
      </li>
        <li class="active">Bonjour <?= $_SESSION['prenom'] ?></li>
        <li class="active"><a href="disconnect.php">deconnexion</a></li>

        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
    </ul>
    <section class="top-bar-section" data-options="sticky_on">
      <!-- Right Nav Section -->
      <ul class="right">
        <li class="active"><a href="boutique.php">Boutique</a></li>
        <li class="active"><a href="event.php">Evenements-3YZ</a></li>
      </ul>
    </section>
  </nav>
</div>
	
	   <!--      <header id="navigation" class="navbar-fixed-top navbar">
            <div class="contt">
                <div class="navbar-header">
                    
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
			
					
		
                    <a class="navbar-brand" href="#body">
						
							<img src="img/logo.png" alt="Brandi">
					>
					</a>
					
                </div>
				
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="active"><a href="index.html">Présentation</a></li>
                        <li class="active"><a href="event.html">Evènements</a></li>
                        <li class="active"><a href="form.html">Inscription</a></li>
                        <li class="active"><a href="boutique.html">La Boutique</a></li>
                        <li id="contact-nav" class="active"><a href="ajout.html">Ajouter un évènement</a></li>
                    </ul>
                </nav>
				
				
            </div>
        </header> -->
				
				
        <!--
        End Fixed Navigation
        ==================================== -->
        <!--
        End Fixed Navigation
        ==================================== -->
		

        <!--
        Offre de service
        ==================================== -->
		
		
		
        <!--
        Our Works
        ==================================== -->
		
		<section id="works" class="works clearfix">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center">
						<h2>Notre Boutique</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center">
						<p>Nous vous poposons divers aticles, qui seront mis à vtre disposition au niveau du BDE au sein de l'école. <br>
                        Des sweat, des T-sirt, tasse de café et beaucoup d'autres articiles à l'éfigie du 3YZ, que vous purrez personnalisé à vtre guise.</p>
					</div>
					
					<div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
						<ul class="text-center">
							<li><a href="javascript:;" data-filter="all" class="active filter">Tout</a></li>
							<li><a href="javascript:;" data-filter=".stickers" class="filter">stickers</a></li>
							<li><a href="javascript:;" data-filter=".t-shirt" class="filter">T-shirt</a></li>
							<li><a href="javascript:;" data-filter=".basket" class="filter">Basket</a></li>
							<li><a href="javascript:;" data-filter=".casquette" class="filter">casquette</a></li>
						</ul>
                        <ul class="text-center">
							<li><a href="javascript:;" data-filter="all" class="active filter">Tout les prix</a></li>
							<li><a href="javascript:;" data-filter=".2000" class="filter">Plus de 2000da</a></li>
							<li><a href="javascript:;" data-filter=".1000" class="filter">Plus de 1500</a></li>
							<li><a href="javascript:;" data-filter=".500" class="filter">1000da et moins</a></li>
							
						</ul>
					</div>
					
				</div>

			
			<div class="project-wrapper">
			    
            <?php while($a = $articles->fetch()) { ?>
              <?php $rows[]=$a ?>
                <form method="post" action="shop.php?action=add&id=<?= $a["id_item"]; ?>">
				<figure class="mix work-item <?= $a['type'] ?> <?= $a['prix'] ?> ">
					<img src="bout/<?= $a['id_item'] ?>.jpg" alt="<?= $a['reference'] ?>">

					<figcaption class="overlay">
                        <input type="submit" name="add" style="margin-top:5px;" class="btn btn-default" value="Ajouter au panier">

						<a class="fancybox" rel="works" title="<?= $a['descr'] ?>" href="bout/<?= $a['id_item'] ?>.jpg">
						<i class="fa fa-eye fa-lg"></i></a>
                        <input name="nom" value="<?= $a['nom'] ?>"type="hidden">
                        <input name="prix" value="<?= $a['prix'] ?>"type="hidden">
						<h4><?= $a['nom'] ?></h4>
						<p><?= $a['descr'] ?></p>
                        <input type="text" name="quantity" class="form-control" value="1">
					</figcaption>
				</figure>
                </form>
            <?php } ?>
				
			</div>

            </div>
		</section>
		
        <!--
        End Our Works
        ==================================== -->
		
        <!--
       
					
					
            <!-- contact form -->
        <div style="clear:both"> </div>
        <h2>Panier</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th width="40%">Nom de produit</th>
                    <th width="10%">Quantité</th>
                    <th width="20%">Prix/unité</th>
                    <th width="15%">Total</th>
                    <th width="5%">retirer</th>
                </tr>
                <?php
                if(!empty($_SESSION["cart"]))
                {
                    $total = 0;
                    foreach($_SESSION["cart"] as $keys => $values)
                    {
                        ?>
                        <tr>
                            <td><?php echo $values["item_name"]; ?></td>
                            <td><?php echo $values["item_quantity"] ?></td>
                            <td>DZD<?php echo $values["product_price"]; ?></td>
                            <td>DZD <?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>
                            <td><a href="shop.php?action=delete&id=<?php echo $values["product_id"]; ?>"><span class="text-danger">X</span></a></td>
                        </tr>
                        <?php
                        $total = $total + ($values["item_quantity"] * $values["product_price"]);
                    }
                    ?>
                    <tr>
                        <td colspan="3" align="right">Total</td>
                        <td align="right">DZD <?php echo number_format($total, 2); ?></td>
                        <td></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <button type="" name="facture" style="margin-top:10px;" class="btn btn-default">Imprimer la facture</button>

        </div>
					<!-- end contact form -->

		
        <!--
        End Contact Us
        ==================================== -->
		
		
		<footer id="footer" class="footer">
			<div class="container">
				<div class="row">
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
						<div class="footer-single">
							<img src="img/footer-logo.png" alt="" width="180">
							<p>Le fruit d'un dévouement inconditionné. <br>
							Pour un résultat qui vous époustouflera.</p>
						</div>
					</div>
				
				
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="footer-single">
							<h6>Aller plus loin</h6>
							<ul>
								<li><a href="https://www.facebook.com/yakou.oukaour">Facebook</a></li>
								<li><a href="#">twitter</a></li>
								<li><a href="#">Google</a></li>
							</ul>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
						<div class="footer-single">
							<h6>Relations Clientèle</h6>
							<ul>
								<li><a href="#">Nous contacter</a></li>
								<li><a href="#">Donnez votre avis</a></li>
								
							</ul>
						</div>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="copyright text-center">
							Copyright © 2017 <a href="https://www.facebook.com/yakou.oukaour">Yacine.O</a> 
						</p>
					</div>
				</div>
			</div>
		</footer>
		
		<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
		<!-- jquery.mixitup.min -->
        <script src="js/jquery.mixitup.min.js"></script>
		<!-- jquery.parallax -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- jquery.countTo -->
        <script src="js/jquery-countTo.js"></script>
		<!-- jquery.appear -->
        <script src="js/jquery.appear.js"></script>
		<!-- Contact form validation -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
		<!-- Google Map -->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
		<!-- jquery easing -->
		    <script type="text/javascript">
$(document).ready(function(){
$('#login-trigger').click(function(){
  $(this).next('#login-content').slideToggle();
  $(this).toggleClass('active');

  if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
    else $(this).find('span').html('&#x25BC;')
  })
});
</script>
        <script src="js/wow.min.js"></script>
		<script>
			var wow = new WOW ({
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       120,          // distance to the element when triggering the animation (default is 0)
				mobile:       false,       // trigger animations on mobile devices (default is true)
				live:         true        // act on asynchronously loaded content (default is true)
			  }
			);
			wow.init();
		</script> 
		<!-- Custom Functions -->
        <script src="js/custom.js"></script>
		<script type="text/javascript">
			$(function(){
				/* ========================================================================= */
				/*	Contact Form
				/* ========================================================================= */
				
				$('#contact-form').validate({
					rules: {
						name: {
							required: true,
							minlength: 2
						},
						email: {
							required: true,
							email: true
						},
						message: {
							required: true
						}
					},
					messages: {
						name: {
							required: "Allez! Tu as bien un nom n'est-ce-pas?",
							minlength: "Minimum de 2 caractères"
						},
						email: {
							required: "Il faut bien un e-mail pour envoyez un message!"
						},
						message: {
							required: "Les messages vide ne sont pas envoyés.",
							minlength: "C'est tout? Vous en êtes sûr?"
						}
					},
					submitHandler: function(form) {
						$(form).ajaxSubmit({
							type:"POST",
							data: $(form).serialize(),
							url:"process.php",
							success: function() {
								$('#contact-form :input').attr('disabled', 'disabled');
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$(this).find(':input').attr('disabled', 'disabled');
									$(this).find('label').css('cursor','default');
									$('#success').fadeIn();
								});
							},
							error: function() {
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$('#error').fadeIn();
								});
							}
						});
					}
				});
			});
		</script>
		
    </body>
</html>
