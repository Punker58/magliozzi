<?php 
  if ($page == null) :?>

      <section id="header"> 
          <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark">

              <div class="container">
                <a class="navbar-brand" href="#" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000"><img src="assets/_images/logo.png" class="d-block w-100" alt="Magliozzi-Group"></a>
              <!-- NAVBAR MOBILE END -->
                <div class="collapse navbar-collapse" id="navbarNav" data-aos="fade-up" data-aos-duration="3000">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="../en/pages/servizi">Catalogue</a></li>
                        <li><a class="dropdown-item" href="../en/pages/bonus-casa">Home bonus</a></li>
                        <li><a class="dropdown-item" href="../en/pages/eco-bonus">EcoBonus</a></li>
                        <li><a class="dropdown-item" href="../en/pages/super-bonus-110">SuperBonus 110%</a></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../en/pages/galleria">Gallery</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../en/pages/contatti">Contacts</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
        </div>
      </section>

      <!-- NAVBAR MOBILE -->
      <section id="fast-contacts-s2">
        <nav id="nav-mobile" class="navbar navbar-dark bg-#FBBD04 fixed-top">
          <div id="nav-toggle" class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

              <div class="offcanvas-body" id="bg-navbar-mobile">

                <a id="tdn" href="#">
                  <div class="nav-item-mobile"><img src="https://img.icons8.com/ios-glyphs/30/ffffff/home-page--v1.png"/> HOME</div>
                </a>
                  
                <a id="tdn" href="../en/pages/servizi">
                  <div class="nav-item-mobile"><img src="https://img.icons8.com/ios-filled/30/ffffff/water.png"/>SERVICES</div>
                </a>

                <a id="tdn" href="../en/pages/galleria">
                  <div class="nav-item-mobile"><img src="https://img.icons8.com/glyph-neue/30/ffffff/gallery.png"/>GALLERY</div>
                </a>

                <a id="tdn" href="../en/pages/incentivi">
                  <div class="nav-item-mobile"><img src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/30/ffffff/external-sheet-business-elements-and-symbols-metaphors-flatart-icons-outline-flatarticons.png"/>INCENTIVES</div>
                </a>

                <a id="tdn" href="../download/magliozzi.pdf">
                  <div class="nav-item-mobile"><img src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/30/ffffff/external-brochure-museum-vitaliy-gorbachev-fill-vitaly-gorbachev.png"/>BROCHURE</div>
                </a>

                <a id="tdn" href="../en/pages/contatti">
                  <div class="nav-item-mobile"><img src="https://img.icons8.com/ios-filled/30/ffffff/apple-contacts.png"/>CONTACTS</div>
                </a>

                <div class="container">
                  <div class="row">
                    <div class="col fast-social"> 
                      <a href="https://www.linkedin.com/in/magliozzi-group-srl-1b223a87/"><i class="lab la-linkedin-in"></i></a>
                      <a href="https://www.instagram.com/magliozzigroupsrl/"><i class="lab la-instagram"></i></a>
                      <a href="https://www.facebook.com/MagliozziGroupClimatizzazione"><i class="lab la-facebook"></i></a>
                      <a href="tel:08119812922"><i class="las la-phone"></i></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </nav>
      </section>

      

<?php  elseif ($page == 'doppio') :?>

  <section id="header"> 
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark">
          
          <div class="container">
            <a class="navbar-brand" href="#" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000"><img src="../assets/_images/logo.png" class="d-block w-100" alt="Magliozzi-Group"></a>
            <!-- NAVBAR MOBILE END -->
            <div class="collapse navbar-collapse" id="navbarNav" data-aos="fade-up" data-aos-duration="3000">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../en/pages/services">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../en/pages/gallery">Gallery</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../en/pages/contacts">Contacts</a>
                </li>
              </ul>
            </div>
          </div>

        </nav>
    </div>
  </section>

        <!-- NAVBAR MOBILE -->
        <section id="fast-contacts-s2">
        <nav id="nav-mobile" class="navbar navbar-dark bg-#FBBD04 fixed-top">
          <div id="nav-toggle" class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

              <div class="offcanvas-body" id="bg-navbar-mobile">

                <a id="tdn" href="#">
                  <div class="nav-item-mobile"><img src="https://img.icons8.com/ios-glyphs/30/ffffff/home-page--v1.png"/> HOME</div>
                </a>
                  
                <a id="tdn" href="../en/pages/services">
                  <div class="nav-item-mobile"><img src="https://img.icons8.com/ios-filled/30/ffffff/water.png"/>SERVICES</div>
                </a>

                <a id="tdn" href="../en/pages/gallery">
                  <div class="nav-item-mobile"><img src="https://img.icons8.com/glyph-neue/30/ffffff/gallery.png"/>GALLERY</div>
                </a>

                <a id="tdn" href="../download/magliozzi.pdf">
                  <div class="nav-item-mobile"><img src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/30/ffffff/external-brochure-museum-vitaliy-gorbachev-fill-vitaly-gorbachev.png"/>BROCHURE</div>
                </a>

                <a id="tdn" href="../en/pages/contacts">
                  <div class="nav-item-mobile"><img src="https://img.icons8.com/ios-filled/30/ffffff/apple-contacts.png"/>CONTACTS</div>
                </a>

                <div class="container">
                  <div class="row">
                    <div class="col fast-social"> 
                      <a href="https://www.linkedin.com/in/magliozzi-group-srl-1b223a87/"><i class="lab la-linkedin-in"></i></a>
                      <a href="https://www.instagram.com/magliozzigroupsrl/"><i class="lab la-instagram"></i></a>
                      <a href="https://www.facebook.com/MagliozziGroupClimatizzazione"><i class="lab la-facebook"></i></a>
                      <a href="tel:08119812922"><i class="las la-phone"></i></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </nav>
      </section>

      <?php  elseif ($page == 'triplo') :?>

      <section id="header"> 
          <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark">
              
              <div class="container">
                <a class="navbar-brand" href="#" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000"><img src="../../assets/_images/logo.png" class="d-block w-100" alt="Magliozzi-Group"></a>
                <!-- NAVBAR MOBILE END -->
                <div class="collapse navbar-collapse" id="navbarNav" data-aos="fade-up" data-aos-duration="3000">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="../../en/index">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../../en/pages/services">Services</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../../en/pages/gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../../en/pages/contacts">Contacts</a>
                    </li>
                  </ul>
                </div>
              </div>

            </nav>
        </div>
      </section>

            <!-- NAVBAR MOBILE -->
            <section id="fast-contacts-s2">
            <nav id="nav-mobile" class="navbar navbar-dark bg-#FBBD04 fixed-top">
              <div id="nav-toggle" class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

                  <div class="offcanvas-body" id="bg-navbar-mobile">

                    <a id="tdn" href="../../en/index">
                      <div class="nav-item-mobile"><img src="https://img.icons8.com/ios-glyphs/30/ffffff/home-page--v1.png"/> HOME</div>
                    </a>
                      
                    <a id="tdn" href="../../en/pages/services">
                      <div class="nav-item-mobile"><img src="https://img.icons8.com/ios-filled/30/ffffff/water.png"/>SERVICES</div>
                    </a>

                    <a id="tdn" href="../../en/pages/gallery">
                      <div class="nav-item-mobile"><img src="https://img.icons8.com/glyph-neue/30/ffffff/gallery.png"/>GALLERY</div>
                    </a>

                    <a id="tdn" href="../../download/magliozzi.pdf">
                      <div class="nav-item-mobile"><img src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/30/ffffff/external-brochure-museum-vitaliy-gorbachev-fill-vitaly-gorbachev.png"/>BROCHURE</div>
                    </a>

                    <a id="tdn" href="../../en/pages/contacts">
                      <div class="nav-item-mobile"><img src="https://img.icons8.com/ios-filled/30/ffffff/apple-contacts.png"/>CONTACTS</div>
                    </a>

                    <div class="container">
                      <div class="row">
                        <div class="col fast-social"> 
                          <a href="https://www.linkedin.com/in/magliozzi-group-srl-1b223a87/"><i class="lab la-linkedin-in"></i></a>
                          <a href="https://www.instagram.com/magliozzigroupsrl/"><i class="lab la-instagram"></i></a>
                          <a href="https://www.facebook.com/MagliozziGroupClimatizzazione"><i class="lab la-facebook"></i></a>
                          <a href="tel:08119812922"><i class="las la-phone"></i></a>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </nav>
          </section>


 <?php else: ?>

  <!-- nothing -->

 <?php endif; ?>