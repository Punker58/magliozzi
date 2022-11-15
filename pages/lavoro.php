<?php

  // LINK FUNZIONI +  CLASSI 
  include '../config/link.php';
  linkClass();

  // PATH MASTER PER LE FOTO
  $path = 'lavori';

  // LAVORI
  if($_GET['nome'] == 'capodichino'){

      $lavoro = new lavoro(
                          'AEROPORTO',
                          'Capodichino - Napoli',
                          'Ristrutturazione totale',
                          2020,
                          '../assets/_images/lavori/aero-capodichino/1.jpg',
                          '../assets/_images/lavori/aero-capodichino/10.jpg',
      /* lavori svolti1 */'<ul>
                          <li>ristrutturazione</li>
                          <li>edile</li>
                          <li>climatizzazione</li>
                          </ul>',
      /* lavori svolti2 */'<ul>
                          <li>impianto di illuminazione</li>
                          <li>impianto elettrico</li>
                          <li>serramenti</li>
                          </ul>',
  /* numero immagini  */ 12,
  /* cartella img */   'aero-capodichino'
                      );

  }elseif($_GET['nome'] == 'linate'){

      $lavoro = new lavoro(
                          'AEROPORTO',
                          'Milano - Linate',
                          'Ristrutturazione impianto di climatizzazione e varie riparazioni.',
                          2018,
                          '../assets/_images/lavori/aero-linate/6-0.jpg',
                          '../assets/_images/lavori/aero-linate/6.jpg',
      /* lavori svolti1 */'<ul>
                          <li>tubisteria</li>
                          </ul>',
      /* lavori svolti2 */'<ul>
                          <li>climatizzazione</li>
                          </ul>',
  /* numero immagini  */ 9,
  /* cartella img */    'aero-linate'
                      );

  }elseif($_GET['nome'] == 'capannone-volla'){

      $lavoro = new lavoro(
                          'CAPANNONE',
                          'Capannone - Volla',
                          'Ristrutturazione totale',
                          2020,
                          '../assets/_images/lavori/capannone-volla/9-0.jpg',
                          '../assets/_images/lavori/capannone-volla/9.jpg',
      /* lavori svolti1 */'<ul>
                          <li>ristrutturazione</li>
                          <li>edile</li>
                          <li>impianto elettrico</li>
                          </ul>',
      /* lavori svolti2 */'<ul>
                          <li>climatizzazione</li>
                          <li>serramenti</li>
                          </ul>',
  /* numero immagini  */ 9,
  /* cartella img */    'capannone-volla'
                      );

  }elseif($_GET['nome'] == 'uffici-via-depretis-napoli'){

      $lavoro = new lavoro(
                          'centrale Climatizzazione',
                          'via depretis - napoli',
                          'Realizzazione centrale Climatizzazione e vari ripristini',
                          2021,
                          null,
                          '<img src="../assets/_images/lavori/via-depretis-napoli/10.jpg" class="img-fluid">',
      /* lavori svolti1 */'<ul>
                            <li>tubazioni in PPr Aquatherm</li>
                            <li>climatizzazione</li>
                            <li>tubisteria varia</li>
                          </ul>',
      /* lavori svolti2 */'<ul>
                              <li>ripristino gruppi frigo esistenti</li>
                              <li>ripristiono pompe</li>
                          </ul>',
  /* numero immagini  */ 10,
  /* cartella img */    'via-depretis-napoli'
                      );

  }elseif($_GET['nome'] == 'farmacia-morra'){

      $lavoro = new lavoro(
                          'FARMACIA',
                          'palma campania - napoli',
                          'Ristrutturazione totale',
                          2018,
                          '../assets/_images/lavori/farmacia-morra/2.jpg',
                          '../assets/_images/lavori/farmacia-morra/5.jpg',
      /* lavori svolti1 */'<ul>
                          <li>ristrutturazione</li>
                          <li>edile</li>
                          <li>impianto elettrico</li>
                          <li>climatizzazione</li>
                          </ul>',
      /* lavori svolti2 */'<ul>
                          <li>serramenti</li>
                          <li>videosorveglianza</li>
                          <li>anti intrusione</li>
                          </ul>',
  /* numero immagini  */ 13,
  /* cartella img */    'farmacia-morra'
                      );

  }elseif($_GET['nome'] == 'ceramiche-ferrara'){

      $lavoro = new lavoro(
                          'CERAMICHE',
                          'sant\'agostino - ferrara',
                          'Ristrutturazione totale',
                          2020,
                          '../assets/_images/lavori/ceramiche-ferrara/4.jpg',
                          '../assets/_images/lavori/ceramiche-ferrara/4-1.jpg',
      /* lavori svolti1 */'<ul>
                          <li>ristrutturazione</li>
                          <li>anti intrusione</li>
                          <li>impianto elettrico</li>
                          </ul>',
      /* lavori svolti2 */'<ul>
                          <li>climatizzazione</li>
                          <li>impinati di illuminazione</li>
                          </ul>',
  /* numero immagini  */ 9,
  /* cartella img */    'ceramiche-ferrara'
                      );

  }elseif($_GET['nome'] == 'farmacia-stilo-igea'){

      $lavoro = new lavoro(
                          'FARMACIA',
                          'Farmacia - Milano',
                          'Ristrutturazione totale',
                          2022,
                          '../assets/_images/lavori/farmacia-stilo-igea/4-0.jpg',
                          '../assets/_images/lavori/farmacia-stilo-igea/4.jpg',
      /* lavori svolti1 */'<ul>
                          <li>ristrutturazione</li>
                          <li>edile</li>
                          <li>impianto elettrico</li>
                          <li>climatizzazione</li>
                          </ul>',
      /* lavori svolti2 */'<ul>
                              <li>serramenti</li>
                              <li>anti intrusione</li>
                              <li>antisorveglianza</li>
                          </ul>',
  /* numero immagini  */ 11,
  /* cartella img */    'farmacia-stilo-igea'
                      );

  }elseif($_GET['nome'] == 'sessa-aurunca'){

      $lavoro = new lavoro(
                          'OSPEDALE',
                          'sessa aurunca - caserta',
                          'Realizzazione impianto di condizionamento',
                          2019,
                          '../assets/_images/lavori/sessa-aurunca/11-0.jpg',
                          '../assets/_images/lavori/sessa-aurunca/11.jpg',
      /* lavori svolti1 */'<ul>
                          <li>condizionamento</li>
                          <li>quadro elettrico</li>
                          <li>impianto elettrico</li>
                          </ul>',
      /* lavori svolti2 */'<ul>
                              <li>montaggio frigo baxi</li>
                              <li>tubazioni</li>
                              <li>coibentazioni e finitura in alluminio</li>
                          </ul>',
  /* numero immagini  */14,
  /* cartella img */    'sessa-aurunca'
                      );

  }elseif($_GET['nome'] == 'villa'){

      $lavoro = new lavoro(
                          'VILLA',
                          'emilia romagna',
                          'Realizzazione impianto di condizionamento',
                          2021,
                          null,
                          '<img src="../assets/_images/lavori/villa/4.jpg" class="img-fluid"> ',
      /* lavori svolti1 */'<ul>
                          <li>condizionamento</li>
                          <li>impianto elettrico</li>
                          </ul>',
      /* lavori svolti2 */'<ul>
                              <li>climatizzazioni</li>
                              <li>tubisteria</li>
                              <li>montaggio climatizzatori</li>
                          </ul>',
  /* numero immagini  */4,
  /* cartella img */    'villa'
                      );

  }


?>

<!doctype html>
<html lang="it">
  <head>

    <?php
      // META TAGS +  CSS 
      metaTags();
      linkCss2();
    ?>
    <title><?php echo $lavoro->nome; ?> | Lavori</title>
  </head>
  <body>

    <!-- fast contacts + navbar -->
    <?php $page='doppio';
          fastContacts($page);
          include '../config/navbar.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/before-after-slider@1.0.0/dist/slider.bundle.js"></script>

    <!-- Main -->
    <section id="main" class="main2">
      <div class="container">
        <h2 data-aos="fade-up" data-aos-duration="3000" class="col-12">Lavori</h2>
      </div>
    </section>

    <section id="main" class="main-s">

        <div class="container">

          <div class="row mt-5">

            <!-- Intestazione -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 gal mb-5" data-aos="fade-up" data-aos-duration="3000">

              <h1><?php echo $lavoro->Intestazione(); ?></h1>
              <span><?php echo $lavoro->Nome(); ?></span>

              <h2>Generale</h2>
              <span><?php echo $lavoro->Descrizione(); ?></span>

              <h2>Periodo</h2>
              <span><?php echo $lavoro->Periodo(); ?></span>

            </div>

            <!-- Slider before & after IMG -->   
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8 mb-5" data-aos="fade-up" data-aos-duration="3000">
              
              <?php

                if($lavoro->sliderBefore === null){

                  echo $lavoro->sliderAfter;

                }else{

                  echo '<div id="mySlider"></div>';

                }

              ?>

            </div>

            <!-- Lavori svolti -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 gal mt-5" data-aos="fade-up" data-aos-duration="3000">

              <h1 class="mb-5 text-end">LAVORI SVOLTI</h1>

                <div class="container-fluid">

                  <div class="row gal1 mt-4">

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                      <?php echo $lavoro->lavoriSvolti(); ?>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                      <?php echo $lavoro->lavoriSvolti2(); ?>
                    </div>

                  </div>
                  
                </div>

            </div>

            <!-- Galleria -->
            <div class="col-12 mt-5 gal" data-aos="fade-up" data-aos-duration="3000">

              <h1 class="mt-5 mb-5">GALLERIA</h1>

              <div class="container-fluid">

                <div class="row">

                  <div class="col-12 gal1 text-center mb-5">

                    <?php 

                        addNumeroimg($lavoro->nImg(), $path, $lavoro->cartellaImg());
                    
                    ?>

                  </div>

                </div>
              </div>

            </div>

          </div>

        </div>   

    </section>

    <!-- Footer -->
    <?php $footer= 'doppio'; include '../config/footer.php';?>
    <!-- Footer End -->

    <!-- JS LINK-->
    <?php linkJs($page);?>

    <script src="https://cdn.jsdelivr.net/npm/medium-zoom@1.0.6/dist/medium-zoom.min.js"></script>

    <script>

      // sliderbar js
      new SliderBar({
        el: '#mySlider',            // The container, required
        beforeImg: '<?php echo $lavoro->sliderBefore();?>',  // before image, required
        afterImg: '<?php echo $lavoro->sliderAfter();?>',    // after image, required
        width: "100%",               // slide-wrap width, default 100%
        height: "40rem",            // slide-wrap height, default image-height
        line: true,                 // Dividing line, default true
        lineColor: "rgba(0,0,0,30)" // Dividing line color, default rgba(0,0,0,0.5)
      });

      // medium zoom js
      mediumZoom('.zoom', {
        background: '#054664'
      })

    </script>    

  </body>
</html>
