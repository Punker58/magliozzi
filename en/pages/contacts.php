<!doctype html>
<html lang="it">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="../../assets/css/main.css">
    <link rel="stylesheet" href="../../assets/css/card.css">
    <link rel="stylesheet" href="../../assets/css/animate.css">

    <!-- Line Awesome --->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- Animation CSS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="../../assets\_images\favicon.ico">

    <title>Contacts | Magliozzi Group S.R.L
    </title>
  </head>
  <body>

    <!-- Header -->
     <?php $page= 'triplo'; include '../../config/navbar-eng.php';?>
    <!-- Header End -->

    <!-- Main -->
      <section id="main" class="main">
        <div class="container">
          <h2 data-aos="fade-up" data-aos-duration="3000">Over 30 years </br>of professional work</h2>
        </div>
      </section>
    <!-- Main End -->

    <section id="main" class="main-s">

        <div class="container">

            <div class="row g6">

                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 g3 mt-5 mb-5">

                  <div class="background-contatti">

                    <div class="form-group">

                      <h1>Contacts</h1>
                      <hr>

                    </div>  

                    <div class="row">

                      <div class="col-md-6">

                        <div class="form-group">
                          <address>Via Arturo Toscanini 3, Volla (NA)</address>
                          <p>E-mail: magliozzi-group@gmail.com</p>
                          <p>Number: 081 19812922</p>
                        </div> 

                      </div>


                      <div class="col-md-6">

                        <div class="form-group">

                          <div class="form-group2">

                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">

                              <label>First Name - Last Name</label>
                              <input type="text" class="form-control" maxlength="50"  required />
                            
                              <label>E-mail</label>
                              <input type="email" class="form-control" maxlength="60"  required />
                            
                              <label>Number</label>
                              <input type="number" class="form-control" maxlength="10"  onKeyDown="if(this.value.length==10 && event.keyCode!=8) return false;" required />
                              
                              <label>Notes</label>
                              <textarea class="form-control" rows="5" required></textarea>
                              
                              <button class="btn form-group button-contacts" type="submit" name="submit">SEND</button>

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
    <?php $footer= 'doppio'; include '../../config/footer-eng.php';?>
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
