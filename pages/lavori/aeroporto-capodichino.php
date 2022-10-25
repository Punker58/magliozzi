<?php

  class lavoro{

    public $nome;
    public $descrizione;
    public $periodo;
    public $sliderBefore;
    public $sliderAfter;
    public $lavoriSvolti;
    public $lavoriSvolti2;
    public $nImg;
    public $cartellaImg;

    public function __construct($nome, $descrizione, $periodo, $sliderBefore, $sliderAfter, $lavoriSvolti, $lavoriSvolti2, $nImg, $cartellaImg)
    {

      $this->nome = $nome;
      $this->descrizione = $descrizione;
      $this->periodo = $periodo;
      $this->sliderBefore = $sliderBefore;
      $this->sliderAfter = $sliderAfter;
      $this->lavoriSvolti = $lavoriSvolti;
      $this->lavoriSvolti2 = $lavoriSvolti2;
      $this->nImg = $nImg;
      $this->cartellaImg = $cartellaImg;

    }
   
    public function Nome(){return $this->nome;}
   
    public function Descrizione(){return $this->descrizione;}
   
    public function Periodo(){return $this->periodo;}

    public function sliderBefore(){return $this->sliderBefore;}

    public function sliderAfter(){return $this->sliderAfter;}

    public function lavoriSvolti(){return $this->lavoriSvolti;}

    public function lavoriSvolti2(){return $this->lavoriSvolti2;}

    public function nImg(){return $this->nImg;}

    public function cartellaImg(){return $this->cartellaImg;}

  }

  // FUNZIONE NUMERO DI IMMAGINI PRESENTI
  function addNumeroimg($nimg, $cartellaImg){

    for($i = 1; $i <= $nimg; $i++) {
        echo '<img src="../../assets/_images/lavori/'.$cartellaImg.'/'.$i.'.jpg" class="img-fluid zoom">';
    }

  }


  if($_GET['lavoro'] == 'capodichino'){

    $lavoro = new lavoro(
                        'Capodichino - Napoli',
                        'Ristrutturazione totale',
                        2020,
                        '../../assets/_images/lavori/aeroporto_capodichino/7.jpg',
                        '../../assets/_images/lavori/aeroporto_capodichino/7A.jpg',
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
  /* cartella img */   'aero_capodichino'
                      );

  }elseif($_GET['lavoro'] == 'capannone-volla'){

    $lavoro = new lavoro(
                        'Capannone - Volla',
                        'Ristrutturazione totale',
                        2020,
                        '../../assets/_images/lavori/capannone-volla/4-0.jpg',
                        '../../assets/_images/lavori/capannone-volla/4.jpg',
    /* lavori svolti1 */'<ul>
                          <li>ristrutturazione</li>
                          <li>edile</li>
                          <li>impianto elettrico</li>
                        </ul>',
    /* lavori svolti2 */'<ul>
                          <li>climatizzazione</li>
                          <li>serramenti</li>
                        </ul>',
  /* numero immagini  */ 7,
  /* cartella img */    'capannone-volla'
                      );

  }elseif($_GET['lavoro'] == 'farmacia-stilo-igea'){

    $lavoro = new lavoro(
                        'Farmacia - Milano',
                        'Ristrutturazione totale',
                        2022,
                        '../../assets/_images/lavori/farmacia-stilo-igea/3-0.jpg',
                        '../../assets/_images/lavori/farmacia-stilo-igea/3.jpg',
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
  /* numero immagini  */ 6,
  /* cartella img */    'farmacia-stilo-igea'
                      );

  }
                      

?>

<!doctype html>
<html lang="it">
  <head>

    <?php 
      include '../../config/link.php';
      metaTags();
      linkCss3();
    ?>
    <title><?php echo $lavoro->nome; ?> | Lavori</title>
  </head>
  <body>

    <!-- fast contacts + navbar -->
    <?php $page='triplo';
          fastContacts();
          include '../../config/navbar.php';
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
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 gal mb-5">

              <h1>AEROPORTO</h1>
              <span><?php echo $lavoro->Nome(); ?></span>

              <h2>Generale</h2>
              <span><?php echo $lavoro->Descrizione(); ?></span>

              <h2>Periodo</h2>
              <span><?php echo $lavoro->Periodo(); ?></span>

            </div>

            <!-- Slider before & after IMG -->   
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8 mb-5">
              
              <div id="mySlider"></div>

            </div>

            <!-- Lavori svolti -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 gal mt-5">

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
            <div class="col-12 mt-5 gal">

              <h1 class="mt-5 mb-5">GALLERIA</h1>

                <div class="col-12 gal1 mb-5">

                  <?php 

                      addNumeroimg($lavoro->nImg(), $lavoro->cartellaImg());
                  
                  ?>

              </div>

            </div>

          </div>

        </div>   

    </section>

    <!-- Footer -->
    <?php $footer= 'triplo'; include '../../config/footer.php';?>
    <!-- Footer End -->

    <!-- JS LINK-->
    <?php linkJs();?>

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
