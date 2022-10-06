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

    <!-- Header -->
    <?php $page='doppio'; include '../config/navbar.php';?>
    <!-- Header End -->

    <!-- Main -->
      <section id="main" class="main2">
        <div class="container">
          <h2 data-aos="fade-up" data-aos-duration="3000" class="col-12">Articoli</h2>
        </div>
      </section>
    <!-- Main End -->

    <section id="main" class="main-s">

      <div class="container">

        <div class="row g8">

          <h1 class="mt-5">Caldaie</h1>

            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-6 p-5">

                  <div class="articolo shadow"  onclick="konm()">
                    <p>KONm</p>
                  </div>      
            </div>

        </div>


        <div class="row g8">

          <h1 class="mt-5">Climatizzatori</h1>

            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-6 p-5">

                  <div class="articolo shadow">
                    <p>FLOWY</p>
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

    <script>

      function konm() {
        location.href='articoli/caldaie/konm';
      }

    </script>

    
  </body>
</html>
