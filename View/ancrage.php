
<div class="panel" data-x-pos="-1" data-y-pos="1">
    <div class="headframe">
        <div class="head-l">
            <div class="socialg">
                <div class="socialf"><a href="https://www.facebook.com/entraideetculture/" class="social"><img src="View/img/facebookrond.png" alt="facebook" style="width: 117%"/></a></div>

            </div>
            <span class="panel__zoom1 js-zoom">
                    <div class="cercle1">
                       <div class="logo1"><img src="View/img/logo-without.png" alt=""/></div>
                    </div>
                </span>
        </div>
        <div style="padding:20px;" class="formulaire">
            <div class="box">
                <div class="container-1">

                </div>
            </div>
        </div>
        <div class="head_T">
            <h1>ancrage local</h1>
            <div class="zoom_link"><span class="panel__zoom js-zoom">entraide & culture</span></div>
        </div>
        <nav class="main-nav">
            <ul>
                <li>
                           <span class="panel__nav panel__nav--right-down js-down js-right">
                              <div class="smile"><img src="View/img/smile.png" alt="" width="31"/></div>
                              <div class="line">accueil</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--right js-right">
                              <div class="visit"><img src="View/img/visit.png" alt="" width="35"/></div>
                              <div class="line">presentation</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__selected">
                              <div class="whee"><img src="View/img/wheelses.png" alt="" width="32"/></div>
                              <div class="line">ancrage local</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--down js-down" onclick="texts(event, 'Entraide')">
                              <div class="hands"><img src="View/img/hands.png" alt="" width="33"/></div>
                              <div class="line">entraide</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--right-down jsrightb" onclick="text(event, 'Culture')">
                              <div class="glasses"><img src="View/img/glasses.png" alt="" width="34"/></div>
                              <div class="line">culture</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--right jsleftb">
                              <div class="arbo"><img src="View/img/arbo.png" alt="" width="33"/></div>
                              <div class="line">asbl mapping</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--right-down jsupb">
                              <div class="location"><img src="View/img/location.png" alt="" width="33"/></div>
                              <div class="line">infos pratiques</div>
                           </span>
                </li>
            </ul>
        </nav>
    </div>
    <!---------------conteneur ancrage local------------------->
    <div id="conteneur">
        <div class=column_A>
            <div class=zoom>
                <div class="col-lg-1 padbot30 gallery_img lorem" id="grandephoto5">
                    <a href="View/images/gallery/murs_512.jpg" data-gal="prettyPhoto[gal]">
                        <i></i>
                        <img src="View/images/gallery/murs_512.jpg" alt="" style="width: 100%;
    height: 100%;" /></a>
                </div>
            </div>

            <script type="text/javascript">
                function afficheGrandePhoto5(imageCliquee5) {
                    /* je récupère dans l'attribut alt de l'image cliquée son nom */
                    console.log("afficheGrandePhoto : " + imageCliquee5.alt);
                    /* URL de la vignette cliquée ? */
                    var URLvignette5 = imageCliquee5.getAttribute("src");
                    console.log("URL de la photo cliquée : " + URLvignette5);
                    /* Enlever dans l'URL de ma vignette le "128" et le remplacer par "512" pour avoir l'URL de la grande photo correspondante */
                    /* Modifier l'attribut src de la grande photo */
                    var grandePhoto5 = document.querySelector("#grandephoto5 img");
                    grandePhoto5.setAttribute("src", URLvignette5);
                    grandePhoto5.setAttribute("alt", imageCliquee5.alt);
                }
            </script>
            <div id="global">
                <section>


                </section>
                <section id="vignettes">
                    <ul>
                        <?php
                        foreach ($slider4 as $item0) {
                            ?>


                            <li><img src="<?=$item0['image'];?>" alt="" width="128" height="96" onclick="afficheGrandePhoto5(this);" /></li>
                        <?php } ?>


                    </ul>
                </section>
            </div>
            <div class="imagePara">
                <p>L’ASBL Entraide et Culture, créée en 1983 à Forest par des bénévoles, apporte une aide et un soutien à un public précarisé et fragilisé.</p>
            </div>

        </div>
        <div class=column_B>
            <div class="titlePresentation"><?php
                $take = $listView[0];
                echo $take->getThetitle();
                ?></div>
            <h2><?php echo $take->getSoustitre();
                ?></h2>
            <div id="myDIVpresentation"></div>

            <div class="paraPresentation">
                <?php
                echo $take->getThetext();
                ?><p style="color: rgb(51, 51, 51); letter-spacing: 2px; text-align: justify;">Cliquez ici pour le consulter <a href="http://www.leblogdantoine.be/" target="_blank" >http://www.leblogdantoine.be/</a> et cliquez ici pour consulter <a href="http://www.leblogdantoine.be/la-gazette" target="_blank">la dernière Gazette.</a></p>

            </div>
        </div>
    </div>
    <!--------------- END conteneur ancrage locale------------------->
</div>
