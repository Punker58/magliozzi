<!doctype html>
<html lang="it">
  <head>

    <?php
      include '../../../config/link.php';
      metaTags();
      linkCss5();
    ?>

    <title>KONm | Magliozzi Group SRL</title>
  </head>
  <body>

    <!-- Header -->
    <?php $page='quinto'; include '../../../config/navbar.php';?>
    <!-- Header End -->

    <!-- Main -->
      <section id="main" class="main2">
        <div class="container">
          <h2 data-aos="fade-up" data-aos-duration="3000" class="col-12">KONm</h2>
        </div>
      </section>
    <!-- Main End -->

    <section id="main" class="main-s">

      <div class="container">

        <div class="row g8">


        </div>    

      </div>

    </section>

    <!-- Footer -->
    <?php $footer= 'quinto'; include '../../../config/footer.php';?>
    <!-- Footer End -->

    <!-- JS LINK-->
    <?php linkJs();?>
  
    <script>

      // redirect caldaia konm
      function konm() {
        location.href='articoli/caldaie/konm';
      }

    </script>


    
  </body>
</html>
