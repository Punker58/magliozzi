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
    <!-- Header -->
    <?php $page='doppio'; include '../config/navbar.php';?>
    <!-- Header End -->

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

                <div class="col d-flex justify-content-center">
                  <a href="lavori/aeroporto-capodichino">
                    <div class="item">
                      <p>Aeroporto</br>Capodichino</p>
                    </div>
                  </a>
                </div>
          

            <div class="col d-flex justify-content-center">
              <a href="lavori/aeroporto-linate">
                <div class="item">
                  <p>Aeroporto</br>Linate</p>
                </div>
              </a>
            </div>

            <div class="col d-flex justify-content-center">
              <a href="lavori/capannone-volla">
                <div class="item">
                  <p>Capannone</br>Volla</p>
                </div>
              </a>
            </div>

            <div class="col d-flex justify-content-center">
              <a href="che-banca-modena">
                <div class="item">
                  <p>Che Banca</br>Modena</p>
                </div>
              </a>
            </div>

            <div class="col d-flex justify-content-center">
              <a href="lavori/farmacia-morra">
                <div class="item">
                  <p>Farmacia</br>Morra</p>
                </div>
              </a>
            </div>

            <div class="col d-flex justify-content-center">
              <a href="lavori/ferrara">
                <div class="item">
                  <p>Sant'agostino</br>Ferrara</p>
                </div>
              </a>
            </div>

            <div class="col d-flex justify-content-center">
              <a href="lavori/sessa-aurunca">
                <div class="item">
                  <p>Sessa</br>Aurunca</p>
                </div>
              </a>
            </div>

            <div class="col d-flex justify-content-center">
              <a href="lavori/villa-nazareno">
                <div class="item">
                  <p>Villa</br>Nazareno</p>
                </div>
              </a>
            </div>

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
