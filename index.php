<?php
session_start();
$bdd = new PDO("mysql:host=127.0.0.1;dbname=bdd2;charset=utf8", "root", "");
$articles = $bdd->query('SELECT * FROM event_valide ORDER BY id_ev_v DESC');
?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="author" content="Yacine OUKAOUR">
    <title>3-YZ Accueil</title>
    <link rel="stylesheet" href="css/foundation.css"/>
    <link rel="stylesheet" href="css/style2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/animation.css"/>
    <link rel="stylesheet" href="css/jquery.fullPage.css"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style4.css"/>
    <link rel="stylesheet" href="css/jquery-ui-1.8.5.custom.css" type="text/css" media="all">
    <script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.5.custom.min.js"></script>

</head>
<?php require "head.php"; ?>

<style >
    .na_dates {
        background-color: white !important;
        background-image :none !important;
        color: #000000 !important;
    }
</style>
<?php require "config.php"; ?>

<body>
<!-- TOP BAR -->
<div id="header_fixed" class="fadeIn animation_delay"> <!--animation menu + menu fixe -->
    <nav class="top-bar" data-topbar role="navigation"> <!-- menu fixe -->
        <ul class="title-area">

            <li id="login" class="active">
                <a id="login-trigger"  href="#" class="active">
                    Log in <span>▼</span>
                </a>
                <div id="login-content" >
                    <form action="connect.php" method="post">
                        <fieldset class="login1" id="inputs">
                            <input id="username" type="email"  name="email"  placeholder="Your email address" pattern="[a-zA-Z\.]+@viacesi.fr" required>
                            <input id="password" type="password" name="password" placeholder="Password" pattern=".{6,}" required>
                        </fieldset>
                        <fieldset id="actions">
                            <input type="submit" id="submit" value="Log in" name="login">
                            <label><input type="checkbox" checked="checked"> Keep me signed in</label>
                        </fieldset>
                    </form>
                </div>
            </li>

            <li class="name">
                <h1><a id="logo" href="#"><img src="img/logo.png" ></a></h1>
                <!--  --> <!-- logo à gauche du menu (il faudrait mettre un vrai logo) -->
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
        </ul>
        <section class="top-bar-section" data-options="sticky_on">
            <!-- Right Nav Section -->
            <ul class="right">
                <li class="active"><a href="index.php">Présentation</a></li>
                <li class="active"><a href="event.php">Evenements 3YZ</a></li>
                <li class="active"><a href="form.php">Inscription</a></li>
            </ul>
        </section>
    </nav>
</div>
<!-- SECTION 1 -->
<div id="fullpage"> <!-- animation scroll -->
    <div class="section" id="section0"> <!-- slide 1 -->
        <video autoplay loop muted id="video_home">
            <source src="vid/video_home1.mp4" type="video/mp4">
        </video>
        <div class="layer animation_delay fadeIn">
            <a id="scroll_down"><img src="img/Y_akou.png" id="drone" class="floating" width="150"></a><br/>
            <span data-tooltip aria-haspopup="true" class="has-tip" title="Vous pouvez utilser les flêches directionelles de votre clavier"><a id="scroll_down2" class="boutton floating">CLIQUER POUR CONTINUER<i class="fa fa-arrow-right"></i></a></span>
        </div>
    </div>
    <!-- SECTION 2 -->
    <div class="section" id="section1"> <!-- slide 2 -->


        <?php while($a = $articles->fetch()) { ?>
            <div class="slide" id="slide1"> <!-- carrousel image 1 -->
                <div class="row">
                    <div class="large-6 columns">
                        <img class="zoom" src="img_event/<?= $a['id_ev_v'] ?>.jpg" width="500">
                    </div>
                    <div class="large-6 columns">
                        <h2><?= $a['nom'] ?></h2><br>
                        <h6>Location :<?= $a['location'] ?></h6><br>
                        <h6 >Date :<?= $a['date'] ?></h6><br>
                        <div style=" word-wrap: break-word;"><?= $a['descr'] ?></div><br><br>
                    </div>
                </div>
            </div>
        <?php } ?>


    </div>
    <!-- SECTION 3 -->

    <div class="section hidden" id="section2">
        <div class="row resize"> <!-- colonne pour le responsive -->
            <div class="large-6 columns">
                <h2>Notre calendrier</h2><hr />
                <div id="date_picker"></div>
                <br><br><br>
                <div id=d2></div>



                <script>
                    $(document).ready(function() {

                        /////////////////////
                        function checkDate(selectedDate) {
                            <?Php

                            $q="select distinct date_format( date, '%d-%m-%Y' ) as date from event";

                            $str="[ ";
                            foreach ($dbo->query($q) as $row) {
                                $str.="\"$row[date]\",";
                            }
                            $str=substr($str,0,(strlen($str)-1));
                            $str.="]";
                            echo "var not_available_dates=$str"; // array is created in JavaScript

                            ?>
                            // var not_available_dates = ["5-12-2015", "25-12-2015", "1-1-2016", "2-2-2017"];
                            //For month 09 should be written as 9 only, 5th of any month to be written as 5 only.
                            // Try to get Month Part , date part and year part from the selected date.
                            var m = selectedDate.getMonth()+1;
                            var d = selectedDate.getDate();
                            var y = selectedDate.getFullYear();
                            m=m.toString();
                            d=d.toString();
                            if(m.length <2){m='0'+m;} // Make the month 2 digit, Example 02 for Feb
                            if(d.length <2){d='0'+d;} // Make the date 2 digit , example 08 for 8th day of the month
                            // Create  a variable in dd-mm-yyyy format ( or the format you want )
                            // In JavaScript January month starts with 0 and December is 11 so we will increment the month count by 1
                            var date_to_check = d+ '-' + m + '-'  + y ;
                            //alert(date_to_check);
                            // Loop through all the elements of Not avalable dates array ///
                            for (var i = 0; i < not_available_dates.length; i++) {

                                // Now check if the selected  date is inside the not available  dates array.
                                if ($.inArray(date_to_check, not_available_dates) != -1 ) {
                                    return [true,'	','Open date T'];
                                }else{
                                    return [false,'na_dates','Close date F'];
                                }// end of if else
                            } // end of for loop
                        } // end of function checkDate
                        ////////
                        $(function() {
                            $( "#date_picker" ).datepicker({
                                dateFormat: 'dd-mm-yy',
                                beforeShowDay:checkDate,
                                onSelect:function() {
                                    selectedDate = $('#date_picker').val();
                                    var url="display-data.php?selectedDate="+selectedDate;
                                    $('#info_ev').load(url);
                                }
                            });
                        });
                        //////////////////////////
                        /////////////
                    })
                </script>




                <!-- <img class="hidden" src="img/Louvre.jpg" width="330" height="50">
                <h5>Découvrez nos réalisations!</h5>
                <p class="hidden">3YZ vous permet de participer à des évènements GRATUIT, tel que la visite de certains musées, ainsi que des sorties vers certaibns parc pour préparer (journée d'integration, journée sportive etc.) Généralement ce genre d'évènements, s'adresse à tous ceux qui sont intéréssé par la culture, l'art ou les randonnée. Ne soyez, pas stupide et développez votre culture!
                Le meilleur des évènement reste le WEI, un week-end où chaque adhérant du BDE peut faiure ressortir la bete en lui!</p>
                <a href="event.html" class="button expand">En savoir plus</a> -->
            </div>
            <div class="large-6 columns" id="info_ev" style="overflow-y: scroll; height:400px;">


            </div>

        </div>
    </div>
    <!-- FOOTER -->
    <div class="section" id="section2">

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

                <div class="large-1 columns"></div>
            </div>
            <div class="spacing view"></div>
        </div>

        <p id="copy-r">© 2017. All rights reserved "Yaking-lolo".</p>
    </div>
    <!--FIN DE LA PAGE -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.pics').cycle({
                fx: 'toss',
                next:  '#next',
                prev:  '#prev'
            });

            // Datepicker
            $('#datepicker').datepicker({
                inline: true
            });

        });
    </script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/modernizr.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/jquery.fullPage.min.js"></script>
    <script src="js/main_home.js"></script>
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
</body>
</html>
