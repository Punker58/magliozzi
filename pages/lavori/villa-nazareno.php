<!doctype html>
<html lang="it">
  <head>

  <?php 
      include '../../config/link.php';
      metaTags();
      linkCss3();
    ?>

    <title>Villa Nazareno | Lavori</title>
  </head>
  <body>
    <!-- Header -->
    <?php $page='triplo'; include '../../config/navbar.php';?>
    <!-- Header End -->

    <section id="main" class="main-s">

    <!-- Main -->
    <section id="main" class="main2">
        <div class="container">
          <h2 data-aos="fade-up" data-aos-duration="3000" class="col-12">Villa Nazareno</h2>
        </div>
      </section>
    <!-- Main End -->

    <section id="main" class="main-s">

        <div class="container">

            <div class="row g6">

                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 g3 mt-5 mb-5">

                  <div class="row g1">

                      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 ms-3 g2">
                        <img src="../assets/_images/lavori/villa-nazareno/1.jpg" class="img-fluid text-center" alt="img-fluid">
                      </div>

                      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 g3 mt-5 mb-5">

                        <h2 class="text-start">Periodo<hr></h2>
                        <p>2021</p>
                        <h2 class="text-start">Generale<hr></h2>
                        <p>Ristrutturazione di impianto elettrico.</p>
                        <h2 class="text-start">Lavori eseguiti<hr></h2>
                        <ul>
                          <li>Impianto elettrico</li>
                          <li>Climatizzazione</li> 
                        </ul>
                        
                      </div> 

                      <div class="col-12">

                        <div class="owl-carousel owl-theme ps-5 pe-5 mt-5 g5">
                          <a href="../assets/_images/lavori/villa-nazareno/1.jpg" class="fancybox" data-fancybox="gallery1"><div class="item"><img src="../assets/_images/lavori/villa-nazareno/1.jpg" class="img-fluid" alt="img-fluid"></div></a>
                          <a href="../assets/_images/lavori/villa-nazareno/2.jpg" class="fancybox" data-fancybox="gallery1"><div class="item"><img src="../assets/_images/lavori/villa-nazareno/2.jpg" class="img-fluid" alt="img-fluid"></div></a>
                          <a href="../assets/_images/lavori/villa-nazareno/3.jpg" class="fancybox" data-fancybox="gallery1"><div class="item"><img src="../assets/_images/lavori/villa-nazareno/3.jpg" class="img-fluid" alt="img-fluid"></div></a>
                          <a href="../assets/_images/lavori/villa-nazareno/2.jpg" class="fancybox" data-fancybox="gallery1"><div class="item"><img src="../assets/_images/lavori/villa-nazareno/2.jpg" class="img-fluid" alt="img-fluid"></div></a>
                          <a href="../assets/_images/lavori/villa-nazareno/4.jpg" class="fancybox" data-fancybox="gallery1"><div class="item"><img src="../assets/_images/lavori/villa-nazareno/4.jpg" class="img-fluid" alt="img-fluid"></div></a>
                          <a href="../assets/_images/lavori/villa-nazareno/1.jpg" class="fancybox" data-fancybox="gallery1"><div class="item"><img src="../assets/_images/lavori/villa-nazareno/1.jpg" class="img-fluid" alt="img-fluid"></div></a>
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
    <?php linkJs();?>
    
  </body>
</html>
