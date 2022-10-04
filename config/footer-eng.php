<?php 
  if ($footer == null) :?>
    <!-- Footer -->
    <section id="footer" class="footer">

        <div class="container">
          <div class="row">

            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4" id="footerino">
              <h1>LEGAL AREA</h1>
              <a href="../pages/privacy-policy">Privacy Policy</a></br>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4" id="footerino">
              <h1>SITE</h1>
              <p>Via Arturo Toscanini, 3</br>(angolo Via Fraustino)</br>80040 Volla (NA)</p>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4" id="footerino">
              <h1>SITEMAP</h1>
                  <a href="../en/index">HOME</a></br>
                  <a href="pages/services">SERVICES</a></br>
                  <a href="pages/gallery">GALLERY</a></br>
                  <a href="pages/contacts">CONTACTS</a></br>
                  <a href="../download/magliozzi.pdf">BROCHURE</a>
            </div>

          </div>
        </div>

      </section>
    <!-- Footer End -->

    <!--  Copyright -->
    <section id="copyright" class="copyright-c">

      <div class="container">
        <div class="col">
          <div class="copyright">
            <i style="padding-bottom:20px;">©2022 Magliozzi Group S.R.L - VAT.n:06940561217</i>
          </div>
        </div>
      </div>

    </section>

<?php  elseif ($footer == 'doppio') :?>   
    <!-- Footer -->
    <section id="footer" class="footer">

        <div class="container">
          <div class="row">

            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4" id="footerino">
              <h1>LEGAL AREA</h1>
              <a href="../../pages/privacy-policy">Privacy Policy</a></br>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4" id="footerino">
              <h1>SITE</h1>
              <p>Via Arturo Toscanini, 3</br>(angolo Via Fraustino)</br>80040 Volla (NA)</p>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4" id="footerino">
              <h1>SITEMAP</h1>
                  <a href="../../en/index">HOME</a></br>
                  <a href="../pages/services">SERVICES</a></br>
                  <a href="../pages/gallery">GALLERY</a></br>
                  <a href="../pages/contacts">CONTACTS</a></br>
                  <a href="../../download/magliozzi.pdf" download>BROCHURE</a>
            </div>

          </div>
        </div>

      </section>
    <!-- Footer End -->

    <!--  Copyright -->
    <section id="copyright" class="copyright-c">

      <div class="container">
        <div class="col">
          <div class="copyright">
            <i style="padding-bottom:20px;">©2022 Magliozzi Group S.R.L - VAT.n:06940561217</i>
          </div>
        </div>
      </div>

    </section>

<?php else: ?>

    <!-- nothing -->
    
<?php endif; ?>
