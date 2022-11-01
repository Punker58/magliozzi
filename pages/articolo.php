<?php

  // LINK FUNZIONI +  CLASSI + OGGETTI
  include '../config/link.php';
  linkClass();

  // PATH MASTER PER LE FOTO
  $path = 'articoli';

  // ARTICOLI
  if($_GET['nome'] == 'konm'){

    $articolo = new articolo(
    /* nome */         'KONM',
    /* descrizione */  'Caldaia murale a gas con bruciatore a premiscelazione totale, a condensazione Low NOx - a camera stagna - accensione elettronica e modulazione di potenza - IPX5D - anche per esterno',
    /* descrizione 2 */'<p class="mt-5">• KONm EXT<br/>per installazioni all’esterno (opzionale):</p>
                          <ul>
                            <li>KIT ESTERNO (top in gomma)</li>
                            <li>DIMA</li>
                            <li>Accessori di regolazione</li>
                        </ul>',
    /* scheda tecnica */'<ul>
                          <li>classe A</li>
                          <li>accensione e controllo elettronico di fiamma monoelettrodo</li>
                          <li>regolazione in alluminio</li>
                          <li>funzione antigelo</li>
                        </ul>',
  /* scheda tecnica2 */'<ul>
                            <li>funzione antiblocco</li>
                            <li>H.W.S - elimina il ritardo di produzione A.C.S</li>
                            <li>idrometro</li>
                        </ul>',
                        '<img class="img-fluid" src="../assets/_images/articoli/konm/master.png" alt="item"/>',
    /* numero img */      4,
    /* nome cartella */ 'konm'
                      );

  }elseif ($_GET['nome'] == 'flowy') {

    $articolo = new articolo(
      /* nome */         'FLOWY',
      /* descrizione */  'Climatizzatore a parete con ionizzatore di serie, sistema “Full Inverter”, con pompa di calore, adatto all’installazione in tutti i tipi di locali domestici e uffici, negozi.',
      /* descrizione 2 */'<p class="mt-5">Funzioni gestite dal telecomando:</p>
                          <ul>
                              <li>raffreddamento</li>
                              <li>deumidificazione</li>
                              <li>riscaldamento</li>
                              <li>ionizzatore</li>
                              <li>sola ventilazione</li>
                              <li>gentle wind</li>
                              <li>i feel</li>
                              <li>sleep</li>
                              <li>air swing</li>
                              <li>timer</li>
                              <li>self-cle</li>
                          </ul>',
      /* scheda tecnica */'<ul>
                            <li>Classe di risparmio energetico A++</li>
                            <li>Refrigerante gas R32</li>
                            <li>Tecnologia “FULL INVERTER” per riduzione di costi e consumi</li>
                            <li>“SELF CLEAN”: funzione automatica di pulitura dello scambiatore tramite shock termico e attivabile da telecomando</li>
                          </ul>',
    /* scheda tecnica2 */'<ul>
                              <li>Funzione notturna “SLEEP” per riduzione dei consumi e aumento della silenziosità</li>
                              <li>USB Key (opzionale) per gestione a distanza tramite home Wi-Fi ed il proprio device (smartphone, tablet) tramite APP semplice e intuitiva</li>
                              <li>DEFLETTORI VERTICALI con fori “diffusori” brevettati per una piacevole efficace distribuzione dell’aria</li>
                              <li>Telecomando, di facile utilizzo, a raggi infrarossi con display a cristalli liquidi</li>
                          </ul>',
                          '<img class="img-fluid" src="../assets/_images/articoli/flowy/master.png" alt="item"/>',
      /* numero img */      4,
      /* nome cartella */ 'flowy'
                        );
                        
    }

?>

<!doctype html>
<html lang="it">
  <head>

    <?php
      metaTags();
      linkCss2();
    ?>

    <title><?php echo $articolo->nome; ?> | Articoli</title>
  </head>
  <body>

    <!-- fast contacts + navbar -->
    <?php $page='doppio';
          fastContacts($page);
          include '../config/navbar.php';
    ?>

    <!-- Main -->
      <section id="main" class="main2">
        <div class="container">
          <h2 data-aos="fade-up" data-aos-duration="3000" class="col-12">Articoli</h2>
        </div>
      </section>
    <!-- Main End -->

    <section id="main" class="main-s">

      <div class="container">

        <div class="row g8 mt-5">

          <!-- img  -->
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
            <?php  echo $articolo->imgItem; ?>
          </div>

          <!-- intestazione -->
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 gal">

            <h1><?php echo $articolo->nome; ?></h1>
            <span><?php echo $articolo->descrizione; ?></span>

            <?php echo $articolo->descrizione2; ?>

          </div>

          <!-- scheda tecnica -->
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 gal mt-5">

            <h1 class="mb-5 ms-4">SCHEDA TECNICA</h1>

              <div class="container-fluid">

                <div class="row gal1 mt-4">

                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                      <?php echo $articolo->schedaTecnica; ?>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                      <?php echo $articolo->schedaTecnica2; ?>
                    </div>

                </div>
                
              </div>

          </div>

          <!-- Galleria -->
          <div class="col-12 mt-5 gal text-end">

            <h1 class="mb-5 me-4">GALLERIA</h1>

            <div class="container-fluid">

                <div class="row">

                  <div class="col-12 gal1 mb-5">

                    <?php 

                        addNumeroimg($articolo->nImg(), $path, $articolo->cartellaImg());
                    
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

      // medium zoom js
      mediumZoom('.zoom', {
        background: '#054664'
      })

    </script>

  </body>
</html>
