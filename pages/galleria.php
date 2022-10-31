<?php

  $listaLavoro = array(

                      [
                        'link' => 'lavoro?nome=capodichino',
                        'nome' => 'AEROPORTO<br/>CAPODICHINO'
                      ],

                      [
                        'link' => 'lavoro?nome=linate',
                        'nome' => 'AEROPORTO<br/>LINATE'
                      ],

                      
                      [
                        'link' => 'lavoro?nome=capannone-volla',
                        'nome' => 'CAPANNONE<br/>VOLLA'
                      ],

                      
                      [
                        'link' => 'lavoro?nome=che-banca-modena',
                        'nome' => 'CHE BANCA<br/>MODENA'
                      ],

                      
                      [
                        'link' => 'lavoro?nome=ceramiche-ferrara',
                        'nome' => 'CERAMICHE<br/>FERRARA'
                      ],


                      [
                        'link' => 'lavoro?nome=farmacia-morra',
                        'nome' => 'FARMACIA<br/>MORRA'
                      ],

                      
                      [
                        'link' => 'lavoro?nome=farmacia-stilo-igea',
                        'nome' => 'FARMACIA<br/>STILO IGEA'
                      ],

                      
                      [
                        'link' => 'lavoro?nome=sessa-aurunca',
                        'nome' => 'OSPEDALE<br/>SESSA AURUNCA'
                      ],

                      
                      [
                        'link' => 'lavoro?nome=villa-nazareno',
                        'nome' => 'VILLA<br/>NAZARENO'
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

    <title>Galleria | Magliozzi Group SRL</title>
  </head>
  <body>

    <!-- fast contacts + navbar -->
    <?php $page='doppio';
          fastContacts();
          include '../config/navbar.php';
    ?>

    <!-- Main -->
      <section id="main" class="main2">
        <div class="container">
          <h2 data-aos="fade-up" data-aos-duration="3000" class="col-12">Galleria</h2>
        </div>
      </section>
    <!-- Main End -->

    <section id="main" class="main-s">

      <div class="container">

        <div class="row g6">

          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 g3 mt-5">

            <div class="row lavori" data-aos="fade-up" data-aos-duration="3000">


            <?php
            
              foreach($listaLavoro as $i){
                
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
    <?php linkJs();?>
    
  </body>
</html>
