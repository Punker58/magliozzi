<!doctype html>
<html lang="it">
  <head>

    <?php
      include '../config/link.php';
      metaTags();
      linkCss2();
    ?>

    <title>Contatti | Magliozzi Group SRL</title>
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
          <h2 data-aos="fade-up" data-aos-duration="3000" class="col-12">Contatti</h2>
        </div>
      </section>
    <!-- Main End -->

    <section id="main">

        <div class="container">

            <div class="row g9">

                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">

                  <div class="background-contatti shadow-lg p-3 mt-5 mb-5">

                    <div class="row">

                      <div class="col-md-6">

                        <div class="form-group mt-5">
                          <h1>SEDE</h1>
                          <address>Via Arturo Toscanini 3, Volla (NA)</address>
                          <p>Email: info@magliozzi-group.com</p>
                          <p>Telefono: 081 19812922</p>
                        </div>
                        <hr> 

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

    <!-- JS LINK-->
    <?php linkJs();?>
    
  </body>
</html>
