
<!doctype html>
<html class="no-js" lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>3YZ</title>
    <link rel="stylesheet" href="css/foundation.css"/>
    <link rel="stylesheet" href="css/style2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/animation.css"/>

    <script type="text/javascript">    $(document).ready(function(){
    $('#login-trigger').click(function(){
      $(this).next('#login-content').slideToggle();
      $(this).toggleClass('active');

  if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
    else $(this).find('span').html('&#x25BC;')
  })
});    </script>
  </head>

  <body id="body">


  <div id="header_fixed" class="fadeIn animation_delay"> <!--animation menu + menu fixe -->
      <nav class="top-bar" data-topbar role="navigation"> <!-- menu fixe -->
          <ul class="title-area">


              <li class="name">
                  <h1><a id="logo" href="#"><img src="img/logo.png" width="140"></a></h1> <!-- logo à gauche du menu (il faudrait mettre un vrai logo) -->
              </li>
              <li class="active">
                  Bonjour Cesi
              </li>
              <li class="active"><a href="disconnect.php">deconnexion</a></li>
              <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
          </ul>
          <section class="top-bar-section" data-options="sticky_on">
              <!-- Right Nav Section -->
              <ul class="right">
                  <li class="active"><a href="li_exars.php">liste des exars</a></li>
                  <li class="active"><a href="li_propose.php">Liste des propositions</a></li>
                  <li class="active"><a href="add_event.php">ajouter évènement</a></li>
                  <li class="active"><a href="admin_boutique.php">boutique</a></li>
              </ul>
          </section>
      </nav>
  </div>



<div class="main">
    <div class="container">
        <div class="row">
              <div class="col-md-7">
        <h1>Ajouter un article</h1>
    <form action="add_product.php" method="post" name="add_event" enctype="multipart/form-data">
     <div class="form-group">
        <label>Nom de l'article</label>
        <input type="text" class="form-control"
     placeholder="example: Nike Air Jordan" maxlength="100" name="nom_ev" required >
      </div>

      <div class="form-group">
         <label > Type </label>
             <select id="car" name="type_ev" required>
                <option>T-Shirt</option>
                <option>Stickers</option>
                <option>Bsquette</option>
                <option>Casquette</option>
                <option>Autre</option>
            </select>
     </div>



  
      <div class="form-group">
        <label>Prix</label>
        <input type="number" class="form-control"
     placeholder="example: 200 DZD" min="0" name="price" required >
      </div>
      <div class="form-group">
          <label for="comment">Description:</label>
          <textarea class="form-control" rows="5" id="comment" name="desc_ev"></textarea>
     </div>
     <div class="fileupload fileupload-new" data-provides="fileupload"></div>
        <label class="btn btn-default btn-file" >
            Browse <input type="file" name="foto_event">
        </label><br><br>
      <button type="submit" class="btn btn-default" name="add_event">Ajouter </button>
          </div>
    </form>

        </div>
      </div>
    </div>
  </div>
  </body>
</html>