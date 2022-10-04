<!doctype html>
<html lang="it">
  <head>

    <?php
      include '../config/link.php';
      metaTags();
      linkCss();
    ?>

    <title>Contatti | Magliozzi Group SRL</title>
  </head>
  <body>
    <!-- Header -->
    <?php $page='doppio'; include '../config/navbar.php';?>
    <!-- Header End -->

    <!-- Main -->
      <section id="main" class="main2">
        <div class="container">
          <h2 data-aos="fade-up" data-aos-duration="3000" class="col-12">Contatti</h2>
        </div>
      </section>
    <!-- Main End -->

    <section id="main" class="main-s">

        <div class="container">

            <div class="row g8">

                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">

                  <div class="background-contatti  shadow-lg p-3 mb-5 mt-5">

                    <div class="form-group">

                      <h1 class="pt-3">Contattaci</h1>
                      <hr>

                    </div>  

                    <div class="row">

                      <div class="col-md-6">

                        <div class="form-group">
                          <address>Via Arturo Toscanini 3, Volla (NA)</address>
                          <p>Email: info@magliozzi-group.com</p>
                          <p>Telefono: 081 19812922</p>
                        </div> 

                      </div>


                      <div class="col-md-6">

                        <div class="form-group">

                          <div class="form-group2">

                            <form action="contatti" method="post">

                              <label>Nome - Cognome</label>
                              <input type="text" class="form-control" name="nome" maxlength="50"  required />
                            
                              <label>Indirizzo Email</label>
                              <input type="email" class="form-control" name="email" maxlength="60"  required />
                            
                              <label>Telefono</label>
                              <input type="number" class="form-control" name="numero" maxlength="10"  onKeyDown="if(this.value.length==10 && event.keyCode!=8) return false;" required />
                              
                              <label>Messaggio</label>
                              <textarea class="form-control" rows="5" name="note" required></textarea>
                              
                              <button class="btn form-group button-contacts mt-3 mb-3" type="submit">INVIA</button>

                            </form>
                            
                          </div>

                        </div> 

                      </div>

                    </div>    

                  </div>

                </div>

            </div>

        </div>
        
    </section>

    <?php
    
      if(isset($_POST['submit'])) {
        
        $from = ltrim(rtrim(strip_tags(stripslashes($_POST['email']))));
        $to = "info@magliozzi-group.com";

        $nome = ltrim(rtrim(strip_tags(stripslashes($_POST['nome']))));
        $numero = ltrim(rtrim(strip_tags(stripslashes($_POST['numero']))));

        $subject = "Richiesta info da" . ltrim(rtrim(strip_tags(stripslashes($from))));
        $message = $_POST['note'];
        $headers = "Da " . $nome . "</br>" . $numero . "</br>" . $from;

        mail($to, $subject, $message, $headers);

      }
    ?>


    <!-- Footer -->
    <?php $footer= 'doppio'; include '../config/footer.php';?>
    <!-- Footer End -->

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
      AOS.init({
        once: true,
      });
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    
  </body>
</html>
