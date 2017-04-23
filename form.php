<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>3 | YZ</title>


<link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/style2.css"/>
    <script src="js/vendor/modernizr.js"></script>
    <link rel="stylesheet" href="css/animation.css"/>
<link rel="stylesheet" href="css/style3.css" />
<link href='http://fonts.googleapis.com/css?family=Engagement' rel='stylesheet' type='text/css'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery.uniform.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
      $(function(){
        $("input:checkbox, input:radio, input:file, select").uniform();
      });
    </script>
</head>
<body>

  <div id="header_fixed" class="fadeIn animation_delay"> <!--animation menu + menu fixe -->
  <nav class="top-bar" data-topbar role="navigation"> <!-- menu fixe -->
    <ul class="title-area">

       <li id="login" class="active">
          <a id="login-trigger"  href="#" class="active">
            Log in <span>▼</span>
          </a>
          <div id="login-content" >
            <form>
              <fieldset class="login1" id="inputs">
                <input id="username" type="email" name="Email" placeholder="Your email address" required>
                <input id="password" type="password" name="Password" placeholder="Password" required>
              </fieldset>
              <fieldset id="actions">
                <input type="submit" id="submit" value="Log in">
                <label><input type="checkbox" checked="checked"> Keep me signed in</label>
              </fieldset>
            </form>
          </div>
        </li>

      <li class="name">
        <h1><a id="logo" href="#"><img src="img/logo.png" width="140"></a></h1> <!-- logo à gauche du menu (il faudrait mettre un vrai logo) -->
      </li>
      <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
    </ul>
    <section class="top-bar-section" data-options="sticky_on">
      <!-- Right Nav Section -->
      <ul class="right">
            <li class="active"><a href="index.php">Présentation</a></li>
        <li class="active"><a href="form.php">Inscription</a></li>
      </ul>
    </section>
  </nav>
</div>



<div class="row">
<div class="large-12 columns">

<article>
<h1>Inscription</h1>
<form action="add_membre.php" method="post">
	<ul>
        <li>
        	<label for="name">Votre Nom:</label>
            <input type="text" size="40"  name="nom" required />
        </li>
        <li>
            <label for="text">Votre Prénom:</label>
            <input type="text" size="40" name="prenom" required/>
        </li>
        <li>
        	<label for="email" >Votre Email:</label>
            <input type="email" size="40" id="email" name="email" pattern="[a-zA-Z\.]+.algerie@viacesi.fr" required/>
        </li>
        <li>
            <label for="surname">Mot de passe:</label>
            <input type="password" pattern=".{6,}" maxlength="20" name="mdp" required/>
        </li>
         <li>
            <label for="ak7abid">Matricule:</label>
            <input id="ak7abid"type="number" min="10000001" size="40" name="nbr" required/>
        </li>
        <li>
            <label>Ajouter un Avatar:</label>
            <input type="file" accept="image/*"/>
        </li>
        
	</ul>
    <p>
        <button type="reset" class="action">Annuler</button>

        <button type="submit" name="add_user" class="right" >Inscription</button>
    </p>
</form>
</article>
</div>
</div>
<div class="footer_nav">
        <div class="row footer_align">
          <div class="large-1 columns"></div>
            <div class="large-2 columns footer_link"><a class="footer_link" href="#" title="Remerciments">Remerciements</a></div>
              <div class="large-2 columns footer_link"><a class="footer_link" href="#" title="FAQ">FAQ</a></div>
                <div class="large-2 columns footer_link"><a class="footer_link" href="#" title="Presse">Evenements</a></div>
              <div class="large-2 columns footer_link"><a class="footer_link" href="#" title="Carrières">Boutique</a></div>
            <div class="large-2 columns footer_link"><a class="footer_link" href="#" title="Conditions">Conditions</a></div>
          <div class="large-1 columns"></div>
        </div><hr/>
        <div class="spacing"></div>
         <h5>Partenaires</h5> 
          <div class="row footer_align">
            <div class="large-1 columns"></div>
              <div class="large-2 columns footer_link"><a class="footer_link" href="http://gopro.com/" title="GoPro" target="_blank"><img class="zoom" src="img/goproL.png" width="120"></a></div>
                <div class="large-2 columns footer_link"><a class="footer_link" href="http://www.redbull.com/" title="RedBull" target="_blank"><img class="zoom" src="img/RedBullL.png" width="100"></a></div>
                  <div class="large-2 columns footer_link"><a class="footer_link" href="http://fise-events.net/" title="Fise" target="_blank"><img src="img/FiseL.png" class="zoom" width="120"></a></div>
                <div class="large-2 columns footer_link"><a class="footer_link" href="http://nitrocircus.com/" title="Nitro Circus" target="_blank"><img src="img/NitroL.png" class="zoom" width="100"></a></div>
              <div class="large-2 columns footer_link"><a class="footer_link" href="http://xgames.espn.go.com/" title="XGames" target="_blank"><img src="img/XGamesL.png" class="zoom" width="50"></a></div>
            <div class="large-1 columns"></div>
          </div>
          <div class="spacing view"></div>
      </div>
    
      <p class="copyright">© 2017. All rights reserved "Yaking-lolo".</p>       
    </div>  

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
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>

  <script>

      $('#ak7abid,#email').keyup(function () {
            var matri = $('#ak7abid').val();
            var email = $('#email').val();
            $.ajax({
                    type:"GET",
                    url: "checkmtrcl.php",
                    data :
                        {
                            'matri' : matri,
                            'email' : email
                        },
                    success: function (data)
                    {
                        alert(data.trim());
                    if (data.trim().includes('a bien') )
                    {
                        $('#msg_erreur').show('slide');
                    }
                    else {

                        $('#msg_erreur').hide('slide');
                    }
                },

            });
        });
  </script>
  </body>
</html>

