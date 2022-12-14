<?php

  // array img galleria
  $galleria = array(
                  ['farmacia-morra/10.jpg'],
                  ['farmacia-stilo-igea/7.jpg'],
                  ['farmacia-stilo-igea/8.jpg'],
                  ['aero-linate/6.jpg'],
                  ['aero-capodichino/10.jpg'],
                  ['via-depretis-napoli/10.jpg'],
                  ['ceramiche-ferrara/6.jpg'],
                  ['sessa-aurunca/7.jpg'],
                  ['villa/4.jpg']
                );
?>

<!doctype html>
<html lang="it">
  <head>

    <?php 
      include 'config/link.php';
      metaTags();
      linkCss();
    ?>

    <title>Sito Web Ufficiale Magliozzi Group SRL</title>
  </head>
  <body>

    <!-- fast contacts + navbar -->
    <?php $page=null;
          fastContacts($page);
          include 'config/navbar.php';
    ?>

    <!-- Main -->
      <section id="main" class="main">
        <div class="container">
          <h2 data-aos="fade-up" data-aos-duration="3000">Da oltre trent'anni </br>garanzia di Professionalità</h2>
        </div>
      </section>
    <!-- Main End -->

    <!-- Mission -->
      <section id="certificazioni" class="mission mb-2">
        <div class="container" data-aos="fade-up" data-aos-duration="3000">
            <h2>Mission</h2>
             <p>Magliozzi Group S.r.l. opera, in collaborazione di professionisti con provata esperienza da oltre 30 anni,
                nel settore dell'impiantistica - assistenza e manutenzioni di : climatizzazione, condizionamento, riscaldamento,
                trattamento aria, depurazione acqua, tubisteria, idraulica e termoidraulica ,elettrico, fotovoltaico, solare termico,
                e ristrutturazioni con allestimenti-uffici, negozi, appartamenti, capannoni. </br>
                La Magliozzi Group S.r.l. gestisce sia il civile che l'industriale a 360 ° partendo da una progettazione mirata in base
                alle esigenze della propria clientela e si serve di professionisti qualificati come ingegneri, progettisti, architetti geometri.</br>
                La Magliozzi Group S.r.l. è sempre attenta nei particolari e alle esigenze dei propri clienti si propone come un punto di riferimento
                per la realizzazione di un progetto seguito poi dalla realizzazione e della gestione dello stesso.</br>
            </p>
        </div>
      </section>
    <!-- Mission End -->

    <!-- Lavori -->
    <section id="main" class="lavori-s pb-3">

      <h2 data-aos="fade-up" data-aos-duration="3000">I NOSTRI LAVORI</h2>
      <div class="container">

        <div class="swiper mySwiper">
 
          <div class="swiper-wrapper text-center">

            <?php
            
              foreach($galleria as $g){
                echo '<div class="swiper-slide">
                          <img src="assets/_images/lavori/'.$g[0].'"  alt="...">
                      </div>';
              }
            
            ?>

          </div>  

      </div>
   
    </section>

    <!-- Lavori End Ciao andrea so che sei qui.-->
    
    <!-- Servizi -->
      <section id="two" class="servizi">
        <div class="container" data-aos="fade-up" data-aos-duration="3000">
          <h2 id="s-servizi">Servizi</h2>

          <div class="row" data-aos="zoom-in" data-aos-duration="1500">
            <div id="col-card" class="col">
              <div class="card">
                <div class="face face1">
                  <div class="content">
                    <span class="stars"></span>
                    <h2>Climatizzazione</h2>
                      <p>Realizzazione e gestione di impianti con contratti
                        di manutenzione e visite periodiche pianificate in
                        base alla tipologia di impianti...
                      </p>
                  </div>
                </div>
                <div class="face face2">
                  <h2><i class="las la-snowflake"></i></h2>
                </div>
              </div>
            </div> 

            <div id="col-card" class="col">
              <div  class="card">
                <div class="face face1">
                  <div class="content">
                    <span class="stars"></span>
                    <h2 >Elettrico</h2>
                      <p >Realizzazione, manutenzione e gestione con controlli mirati dei
                        componenti di sicurezza, interruttori, quadri elettrici in
                        generale... 
                      </p>
                  </div>
                </div>
                <div class="face face2">
                  <h2><i class="las la-plug"></i></h2>
                </div>
              </div>
            </div>

            <div id="col-card" class="col">
              <div  class="card">
                <div class="face face1">
                  <div class="content">
                    <span class="stars"></span>
                    <h2>Idraulico</h2>
                      <p>
                        Realizzazione manutenzione e gestione di impianti
                        industriali sia termici che idraulici con controlli...
                      </p>
                  </div>
                </div>
                <div class="face face2">
                  <h2><i class="las la-tint"></i></h2>
                </div>
              </div>
            </div>

            <div id="col-card" class="col">
              <div class="card">
                <div class="face face1">
                  <div class="content">
                    <span class="stars"></span>
                    <h2>Fotovoltaico</h2>
                      <p>Proggettiamo e realizziamo impianti solari
                        residenziali, ma anche di potenza indistriale...
                      </p>
                  </div>
                </div>
                <div class="face face2">
                  <h2><i class="las la-solar-panel"></i></h2>
                </div>
              </div>
            </div>

            <div id="col-card" class="col">
              <div class="card">
                <div class="face face1">
                  <div class="content">
                    <span class="stars"></span>
                    <h2>Gestione</h2>
                      <p>Ci proponiamo come punto di riferimento per la realizzazione
                        di un progetto con la collaborazione dei nostri profesionisti...
                      </p>
                  </div>
                </div>
                <div class="face face2">
                  <h2><i class="las la-tools"></i></h2>
                </div>
              </div> 
            </div>

            <div id="col-card" class="col">
              <div class="card">
                <div class="face face1">
                  <div class="content">
                    <span class="stars"></span>
                    <h2>Ristrutturazione</h2>
                      <p>Realizzazione di Ristruttarazioni con Architetto,
                        studiate insieme al cliente nei minimi particolari...
                      </p>
                  </div>
                </div>
                <div class="face face2">
                  <h2><i class="las la-house-damage"></i></h2>
                </div>
              </div>
            </div>

        </div> 
      </section>
    <!-- Servizi End -->

    <!-- Certificazioni -->
    <section id="main" class="certificazioni">

      <div class="container">
        <h2 class="text-center" data-aos="fade-up" data-aos-duration="3000">LE NOSTRE CERTIFICAZIONI</h2>
      </div>

      <div class="container" data-aos="fade-up" data-aos-duration="3000">

        <div class="row">

          <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-3 mb-5 text-center">

            <h1>F-GAS</h1>
            <a href="assets/_images/certificazioni/Certificazione-IMQ.pdf"><img class="center"src="assets/_images/_icone/imq.png"  alt=""></a>

          </div>

          <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-3 mb-5 text-center">

            <h1>UNI EN ISO 9001:2015</h1>
            <a href="assets/_images/certificazioni/Certificazione-PCQ.pdf"><img src="assets/_images/_icone/pcq.png" alt=""></a>

          </div>

          <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-3 mb-5 text-center">

            <h1>SOA CAT.1 0S28 I</h1>
            <a href="assets/_images/certificazioni/Certificazione-SOA.pdf"><img src="assets/_images/_icone/soa.png" alt=""></a>

          </div>

          <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-5 text-center">

            <h1>DM 37/08</h1>
            <img src="assets/_images/_icone/dm3708.png" alt="">

          </div>



          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 col-xxl-12 mb-5 text-center">

            <a href="assets/_images/certificazioni/Certificazione-hilti.pdf"><img src="assets/_images/_icone/hilti.png" alt=""></a>

          </div>
        
        </div>

      </div>

      </section>
    <!-- Certificazioni End -->    

    <!-- Contatti -->
    <section id="three" class="servizi">
    
        <div class="container margin-bottom" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">
        <h2 id="s-servizi">CONTATTI</h2>
        </div>

        <div class="container contattix">

          <div class="row align-items-start" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">
            
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 text-center pe-5-xxl">
              <h2>SEDE</h2>
              <p class="mb-5">Via Arturo Toscanini, 3</br>(angolo Via Fraustino)<br/>80040 Volla (NA)</p>

              <div class="map-responsive rounded mb-5 me-md-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1508.4993438761485!2d14.344734000000003!3d40.871903!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2b4947dc04a34f8a!2sVia%20Arturo%20toscanini!5e0!3m2!1sit!2sit!4v1634808889939!5m2!1sit!2sit" width="150" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>

            </div>

            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 ps-5-xxl">

              <h2 class="text-center">INFO</h2>
              <p class="text-center">Email: info@magliozzi-group.com</p>
              <p class="text-center mb-5">Telefono: 081 19812922</p>

              <h2 class="text-center">ORARI</h2>

              <table class="table">
                <tbody class="x1">
                  <tr>
                    <th scope="row">Lunedì</th>
                    <td>09:00/18:00</td>
                  </tr>
                  <tr>
                    <th scope="row">Martedì</th>
                    <td>09:00/18:00</td>
                  </tr>
                  <tr>
                    <th scope="row">Mercoledì</th>
                    <td>09:00/18:00</td>
                  </tr>
                  <tr>
                    <th scope="row">Giovedì</th>
                    <td>09:00/18:00</td>
                  </tr>
                  <tr>
                    <th scope="row">Venerdì</th>
                    <td>09:00/18:00</td>
                  </tr>
                  <tr>
                    <th scope="row">Sabato</th>
                    <td>Solo previo appuntamento</td>
                  </tr>
                  <tr>
                    <th scope="row">Domenica</th>
                    <td>Chiuso</td>
                  </tr>
                </tbody>
              </table>

            </div>
        
          </div>

        </div>

      </section>   
    <!-- Contatti End -->
    
    <!-- Footer -->
    <?php $footer= null; include 'config/footer.php';?>
    <!-- Footer End -->

    <!-- JS LINK-->
    <?php linkJs($page);?>

    <script>
      var swiper2 = new Swiper(".mySwiper", {
                loop: true,
                grabCursor: true,
                effect: "creative",
                creativeEffect: {
                  prev: {
                    translate: ["-130%", 0, -500],
                  },
                  next: {
                    translate: ["130%", 0, -500],
                  },
                },
                autoplay: {
          delay: 3000,
        },
      });
    </script>
    
  </body>
</html>
