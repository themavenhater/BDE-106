<?php

session_start();
$bdd = new PDO("mysql:host=127.0.0.1;dbname=bdd2;charset=utf8", "root", "");
if (!isset($_SESSION['id']))
{
    header("location:index.php");
}
$event = $bdd->query('SELECT * FROM event_valide ORDER BY id_ev_v DESC');
$articles = $bdd->query('SELECT * FROM event ORDER BY id DESC');
$past_event = $bdd->query('SELECT * FROM past_event ORDER BY id DESC');
?>


<!DOCTYPE html>
<html lang="fr" >
    <head>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>3-YZ Evènement</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Google Font -->

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

		<!-- CSS
		================================================== -->
		<link rel="stylesheet" href="css/animation.css"/>
		<link rel="stylesheet" href="css/style3.css" />
		<link rel="stylesheet" href="css/style2.css" />
		<link rel="stylesheet" href="css/style.css" />

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
      <li class="active">
            Bonjour <?= $_SESSION["prenom"]; ?>
      </li>
        <li class="active"><a href="disconnect.php">deconnexion</a></li>
      <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
    </ul>
    <section class="top-bar-section" data-options="sticky_on">
      <!-- Right Nav Section -->
      <ul class="right">
        <li class="active"><a href="boutique.php">Boutique</a></li>
        <li class="active"><a href="event.php">Evenements-3YZ</a></li>
        <li class="active"><a href="event.php#propose">Proposer un évènement</a></li>
        <li class="active"><a href="gal/index.php">Galerie des évènements précédents</a></li>
      </ul>
    </section>
  </nav>
</div>


        <!--
        Offre de service
        ==================================== -->

		<section id="features" class="features">
			<div class="container">
				<div class="row">

					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
						<h2>Nos types d'evenements</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>

					<!-- service item -->
					<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-github fa-2x"></i>
							</div>

							<div class="service-desc">
								<h3>Culturel</h3>
								<p>Ce genre d'évènements sont gratuits, et vont nous permettre de visiter les lieux historique et culturels de nos villes. Ce qui av nous permettre de mieux connaitre l'héritage qui nous a été légué. </p>
							</div>
						</div>
					</div>
					<!-- end service item -->

					<!-- service item -->
					<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-pencil fa-2x"></i>
							</div>

							<div class="service-desc">
								<h3>Voyages</h3>
								<p>Ces évènements permettent le rapprochement entre les élèves. Ainsi les nouveaux pourront familiariser avec les anciens, ce qui augmentera la solidité des liens dans le groupe pour une meilleure approche des cours et des projets.</p>
							</div>
						</div>
					</div>
					<!-- end service item -->

					<!-- service item -->
					<div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-bullhorn fa-2x"></i>
							</div>

							<div class="service-desc">
								<h3>Gaming</h3>
								<p>Vous connaissant fan de jeux vidéos, votre BDE vous propose des évènements gaming. Des jeux d'équipe qui vous feront sentir au championnat du monde (csgo, lol, overwatch). A la fin des Lan de nombreux cadeaux sont à gagner </p>
							</div>
						</div>
					</div>
					<!-- end service item -->

				</div>
			</div>
		</section>

        <!--
        End Features
        ==================================== -->
        <section id="works" class="works clearfix">
            <div class="container">
                <div class="row">

                    <div class="sec-title text-center">
                        <h2>Nos Pronchains évènements</h2>
                        <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                    </div>

                    <div class="work-filter wow fadeInRight animated" data-wow-duration="500ms" id="adel" >
                        <ul class="text-center">
                            <li><a href="javascript:;" data-filter="all" class="active filter">Tout</a></li>
                            <li><a href="javascript:;" data-filter=".Culturels1" class="filter">Culturels</a></li>
                            <li><a href="javascript:;" data-filter=".Gaming1" class="filter">Gaming</a></li>
                            <li><a href="javascript:;" data-filter=".Voyage1" class="filter">Voyage</a></li>
                            <li><a href="javascript:;" data-filter=".Festifs1" class="filter">Festifs</a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="project-wrapper">
                <script type="text/javascript">
                    $(document).ready(function() {
                        $(".iframe").fancybox({
                            type: 'iframe'
                        });
                    });
                </script>
                <?php while($a = $event->fetch()) { ?>
                    <?php $rows[]=$a ?>
                    <figure class="mix work-item <?= $a['type'] ?>1">
                        <img src="img_event/<?= $a['id_ev_v'] ?>.jpg"  alt="" width="200" height="200">
                        <figcaption class="overlay">
                            <a  href="pas_ev.php?id=<?= $a['id_ev_v'] ?>" class="iframe"><i class="fa fa-eye fa-lg"></i></a>
                            <h4>Labore et dolore magnam</h4>
                            <p>Photography</p>
                        </figcaption>
                    </figure>
                <?php } ?>

            </div>


        </section>

        <!--
        Our Works
        ==================================== -->

		<section id="works" class="works clearfix">
			<div class="container">
				<div class="row">

					<div class="sec-title text-center">
						<h2>Votez pour le prochaine évènement</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>

					<div class="sec-sub-title text-center">
						<p>Encore petits mais... efficace</p>
					</div>

					<div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
						<ul class="text-center">
							<li><a href="javascript:;" data-filter="all" class="active filter">Tout</a></li>
							<li><a href="javascript:;" data-filter=".Culturels2" class="filter">Culturels</a></li>
							<li><a href="javascript:;" data-filter=".Gaming2" class="filter">Gaming</a></li>
							<li><a href="javascript:;" data-filter=".Voyage2" class="filter">Voyage</a></li>
							<li><a href="javascript:;" data-filter=".Festifs2" class="filter">Festifs</a></li>
						</ul>
					</div>

				</div>
			</div>

			<div class="project-wrapper">
        <script type="text/javascript">
        $(document).ready(function() {
          $(".iframe").fancybox({
              type: 'iframe'
          });
        });
        </script>
        <?php while($a = $articles->fetch()) { ?>
          <?php $rows[]=$a ?>
                  <figure class="mix work-item <?= $a['type'] ?>2">
                      <img src="img_event/<?= $a['id'] ?>.jpg"  alt="" width="200" height="200">
                      <figcaption class="overlay">
                       <a  href="activity.php?id=<?= $a['id'] ?>" class="iframe"><i class="fa fa-eye fa-lg"></i></a>
                          <h4>Labore et dolore magnam</h4>
                          <p>Photography</p>
                      </figcaption>
                  </figure>
              <?php } ?>

			</div>


		</section>

        <!--
        End Our Works
        ==================================== -->

        <!--
        Meet Our Team
        ==================================== -->

		<section id="team" class="team">
			<div class="container">
				<div class="row">

					<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
						<h2>#La Fine Equipe</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>

					<div class="sec-sub-title text-center wow fadeInRight animated" data-wow-duration="500ms">
						<p>Comme beaucoups, nous sommes une BDE crétif. Comme beaucoup, notre objectif est de répondre le mieux à vos attentes.<br>Comme peu nous sommes passionnés, et avons la certitude que la réussite d'un bon BDE est aussi liée à la relation qu'entretien les membres et notre BDE: engagement, fiabilité et confiance.</p>
					</div>

					<!-- single member -->
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
						<div class="member-thumb">
							<img src="img/team/member-1.png" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>voluptatem quia voluptas </h5>
								<p class="p-mem">sit aspernatur aut odit aut fugit,</p>

							</figcaption>
						</div>
						<h4>Yacine OUKAOUR</h4>
						<span>Président du BDE.</span>
					</figure>
					<!-- end single member -->

					<!-- single member -->
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="member-thumb">
							<img src="img/team/member-2.png" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>Stratégie web </h5>
								<p class="p-mem">Développement & stratégie web.</p>

							</figcaption>
						</div>
						<h4>Youcef Bendiha</h4>
						<span>Responsable évènements.</span>
					</figure>
					<!-- end single member -->

					<!-- single member -->
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="member-thumb">
							<img src="img/team/member-3.png" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>voluptatem quia voluptas </h5>
								<p class="p-mem">sit aspernatur aut odit aut fugit,</p>

							</figcaption>
						</div>
						<h4>Islem Zouagui</h4>
						<span>Responsable comptabilité</span>
					</figure>
					<!-- end single member -->

					<!-- single member -->
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
						<div class="member-thumb">
							<img src="img/team/member-4.png" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>voluptatem quia voluptas </h5>
								<p class="p-mem">sit aspernatur aut odit aut fugit,</p>

							</figcaption>
						</div>
						<h4>Belkacem Yahyaoui</h4>
						<span>Responsable commercial</span>
					</figure>
					<!-- end single member -->

				</div>
			</div>
		</section>

        <!--
        End Meet Our Team
        ==================================== -->

		<!--
        Some fun facts
        ==================================== -->

		<section id="facts" class="facts">
			<div class="parallax-overlay">
				<div class="container">
					<div class="row number-counters">

						<div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
							<h2>Bon à savoir</h2>
							<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
						</div>

						<!-- first count item -->
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
							<div class="counters-item">
								<i class="fa fa-clock-o fa-3x"></i>
								<strong data-to="4910">0</strong>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p id="p-fac">Heures de travail</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
							<div class="counters-item">
								<i class="fa fa-users fa-3x"></i>
								<strong data-to="15">0</strong>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p id="p-fact">Partenaires</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
							<div class="counters-item">
								<i class="fa fa-rocket fa-3x"></i>
								<strong data-to="23">0</strong>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p id="p-facts"> Projets lancés </p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
							<div class="counters-item">
								<i class="fa fa-trophy fa-3x"></i>
								<strong data-to="83">0</strong>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p id="p-facts">Membres</p>
							</div>
						</div>
						<!-- end first count item -->

					</div>
				</div>
			</div>
		</section>

        <!--
        End Some fun facts
        ==================================== -->


		<!--
        Contact Us
        ==================================== -->

		<section id="contact" class="contact">
			<div class="container">
				<div class="row mb50">

					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms" id="propose">
						<h2>Parlons-en</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>

					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<p>Il est primordiale pour nous de connaitre votre avis, et ainsi pouvoir mieux répondre a vos exigences. Nous aspirons à combler votre satisfaction en apprenant a mieux vous connaitre. Et cela commence par l'écoute de l'autre.</p>
					</div>




            <!-- contact form -->
                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms" >
                        <div class="contact-form">
                            <h3>Proposer un évènement </h3>
                            <form action="suggest_act.php" method="post">
                                <div class="input-group">
                                    <textarea name="description" id="message" placeholder="Message" class="form-control" required></textarea>
                                </div>
                                <div class="large-3 medium-4 small-4 columns" >
                                    <label>Quel type d'acitivité ?</label>
                                    <select  name="types" required>
                                        <option value="web">Sportives</option>
                                        <option value="logo-design">Féstives</option>
                                        <option value="photography">Culturelles</option>
                                        <option value="branding">Voyages</option>
                                    </select><br>
                                </div>
                                <div class="input-group">
                                    <input type="submit" name="valider" id="form-submit" class="pull-right" value="valider">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <!-- end contact form -->





		</section>

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
