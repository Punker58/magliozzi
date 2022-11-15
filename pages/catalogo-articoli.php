<?php

  $listaArticoli = array(

                      [
                        'link' => 'articolo?nome=flowy',
                        'nome' => 'FLOWY<br/>CLIMATIZZATORE'
                      ],
                      [
                        'link' => 'articolo?nome=konm',
                        'nome' => 'KONM<br/>CALDAIA'
                      ]
                    );

?>

<!doctype html>
<html lang="it">
  <head>

    <?php 
      include '../config/link.php';
      metaTags();
      linkCss2();
    ?>

    <title>Articoli | Magliozzi Group SRL</title>
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

        <div class="row g6">

          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 g3 mt-5">

            <div class="row lavori" data-aos="fade-up" data-aos-duration="3000">

            <?php
            
              foreach($listaArticoli as $i){
                
                    echo '
                        <div class="col d-flex justify-content-center">
                          <a href="'.$i['link'].'">
                            <div class="item">
                              <p>'.$i['nome'].'</p>
                            </div>
                          </a>
                        </div>
                    ';

              }
            
            ?>

          </div>

        </div>
      
      </div>

    </section>

    <!-- Footer -->
    <?php $footer= 'doppio'; include '../config/footer.php';?>
    <!-- Footer End -->

    <!-- JS LINK-->
    <?php linkJs($page);?>

  </body>
</html>
