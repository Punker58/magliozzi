<?php 
  if ($page == null) :?>

    <!-- NAVBAR DESKTOP -->
    <section id="header"> 
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg navbar-dark">

            <div class="container">
              <a class="navbar-brand" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000"><img src="assets/_images/logo.png" class="d-block w-100" alt="Magliozzi-Group"></a>
            <!-- NAVBAR MOBILE END -->
              <div class="collapse navbar-collapse" id="navbarNav" data-aos="fade-up" data-aos-duration="3000">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Servizi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="pages/servizi">Catalogo servizi</a></li>
                      <li><a class="dropdown-item" href="pages/catalogo-articoli">Articoli</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/galleria">Galleria</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/contatti">Contatti</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
      </div>
    </section>

    <!-- NAVBAR MOBILE -->
    <section id="fast-contacts-s2">
      <nav id="nav-mobile" class="navbar navbar-dark fixed-top">
        <div id="nav-toggle" class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>

          <img class="img-fluid" src="assets/_images/logo.png" width="100" alt="...">
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

            <div class="offcanvas-body" id="bg-navbar-mobile">
              <div class="container">
                <div class="row">

                  <div class="col-12 fast-social"> 
                    <div data-bs-dismiss="offcanvas" class="btn btn-light btn-lg mb-3"><i class="las la-times"></i></div>
                    <img class="img-fluid" src="assets/_images/_icone/unical.png" width="100" alt="...">
                    <img class="img-fluid" src="assets/_images/logo.png" width="100" alt="...">
                  </div>

                  <div class="col-12">
                    <button onclick="linkedinRedirect()" class="btn btn-light btn-lg mb-3" ><i class="lab la-linkedin-in"></i></button>
                    <button onclick="instagramRedirect()" class="btn btn-light btn-lg mb-3" ><i class="lab la-instagram"></i></button>
                    <button onclick="facebookRedirect()" class="btn btn-light btn-lg mb-3" ><i class="lab la-facebook"></i></button>
                    <button onclick="whatsappRedirect()" class="btn btn-light btn-lg mb-3" ><i class="lab la-whatsapp"></i></button>
                  </div>
                  
                </div>
              </div>

              <a id="tdn" href="/">
                <div class="nav-item-mobile"><img src="https://img.icons8.com/ios-glyphs/30/ffffff/home-page--v1.png"/> HOME</div>
              </a>
                
              <a id="tdn" href="pages/servizi">
                <div class="nav-item-mobile"><img src="https://img.icons8.com/ios-filled/30/ffffff/water.png"/>SERVIZI</div>
              </a>

              <a id="tdn" href="pages/catalogo-articoli">
                <div class="nav-item-mobile"><img src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/30/ffffff/external-sheet-business-elements-and-symbols-metaphors-flatart-icons-outline-flatarticons.png"/>ARTICOLI</div>
              </a>

              <a id="tdn" href="pages/galleria">
                <div class="nav-item-mobile"><img src="https://img.icons8.com/glyph-neue/30/ffffff/gallery.png"/>GALLERIA</div>
              </a>


              <a id="tdn" href="download/magliozzi.pdf">
                <div class="nav-item-mobile"><img src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/30/ffffff/external-brochure-museum-vitaliy-gorbachev-fill-vitaly-gorbachev.png"/>BROCHURE</div>
              </a>

              <a id="tdn" href="pages/contatti">
                <div class="nav-item-mobile"><img src="https://img.icons8.com/ios-filled/30/ffffff/apple-contacts.png"/>CONTATTI</div>
              </a>

            </div>
          </div>
        </div>
      </nav>
    </section>

<?php  elseif ($page == 'doppio') :?>

    <!-- NAVBAR DESKTOP -->
    <section id="header"> 
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg navbar-dark">
            
            <div class="container">
              <a class="navbar-brand" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000"><img src="../assets/_images/logo.png" class="d-block w-100" alt="Magliozzi-Group"></a>
              <div class="collapse navbar-collapse" id="navbarNav" data-aos="fade-up" data-aos-duration="3000">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Servizi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="../pages/servizi">Catalogo servizi</a></li>
                      <li><a class="dropdown-item" href="../pages/catalogo-articoli">Articoli</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../pages/galleria">Galleria</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../pages/contatti">Contatti</a>
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

              <div class="container">
                  <div class="row">

                    <div class="col-12 fast-social"> 
                      <div data-bs-dismiss="offcanvas" class="btn btn-light btn-lg mb-3"><i class="las la-times"></i></div>
                    </div>

                    <div class="col-12">
                      <button onclick="linkedinRedirect()" class="btn btn-light btn-lg mb-3" ><i class="lab la-linkedin-in"></i></button>
                      <button onclick="instagramRedirect()" class="btn btn-light btn-lg mb-3" ><i class="lab la-instagram"></i></button>
                      <button onclick="facebookRedirect()" class="btn btn-light btn-lg mb-3" ><i class="lab la-facebook"></i></button>
                      <button onclick="whatsappRedirect()" class="btn btn-light btn-lg mb-3" ><i class="lab la-whatsapp"></i></button>
                    </div>
                    
                  </div>
              </div>

              <a id="tdn" href="../">
                <div class="nav-item-mobile"><img src="https://img.icons8.com/ios-glyphs/30/ffffff/home-page--v1.png"/> HOME</div>
              </a>
                
              <a id="tdn" href="../pages/servizi">
                <div class="nav-item-mobile"><img src="https://img.icons8.com/ios-filled/30/ffffff/water.png"/>SERVIZI</div>
              </a>

              <a id="tdn" href="../pages/catalogo-articoli">
                <div class="nav-item-mobile"><img src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/30/ffffff/external-sheet-business-elements-and-symbols-metaphors-flatart-icons-outline-flatarticons.png"/>ARTICOLI</div>
              </a>

              <a id="tdn" href="../pages/galleria">
                <div class="nav-item-mobile"><img src="https://img.icons8.com/glyph-neue/30/ffffff/gallery.png"/>GALLERIA</div>
              </a>

              <a id="tdn" href="../download/magliozzi.pdf">
                <div class="nav-item-mobile"><img src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/30/ffffff/external-brochure-museum-vitaliy-gorbachev-fill-vitaly-gorbachev.png"/>BROCHURE</div>
              </a>

              <a id="tdn" href="../pages/contatti">
                <div class="nav-item-mobile"><img src="https://img.icons8.com/ios-filled/30/ffffff/apple-contacts.png"/>CONTATTI</div>
              </a>

            </div>
          </div>
        </div>
      </nav>
    </section>

<?php  elseif ($page == 'triplo') :?>

    <!-- NAVBAR DESKTOP -->
    <section id="header"> 
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg navbar-dark">
            
            <div class="container">
              <a class="navbar-brand" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000"><img src="../../assets/_images/logo.png" class="d-block w-100" alt="Magliozzi-Group"></a>
              <div class="collapse navbar-collapse" id="navbarNav" data-aos="fade-up" data-aos-duration="3000">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../../">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Servizi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="../../pages/servizi">Catalogo servizi</a></li>
                      <li><a class="dropdown-item" href="../../pages/catalogo-articoli">Articoli</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/galleria">Galleria</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/contatti">Contatti</a>
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

              <div class="container">
                  <div class="row">

                    <div class="col-12 fast-social"> 
                      <div data-bs-dismiss="offcanvas" class="btn btn-light btn-lg mb-3"><i class="las la-times"></i></div>
                    </div>

                    <div class="col-12">
                      <button onclick="linkedinRedirect()" class="btn btn-light btn-lg mb-3" ><i class="lab la-linkedin-in"></i></button>
                      <button onclick="instagramRedirect()" class="btn btn-light btn-lg mb-3" ><i class="lab la-instagram"></i></button>
                      <button onclick="facebookRedirect()" class="btn btn-light btn-lg mb-3" ><i class="lab la-facebook"></i></button>
                      <button onclick="whatsappRedirect()" class="btn btn-light btn-lg mb-3" ><i class="lab la-whatsapp"></i></button>
                    </div>
                    
                  </div>
              </div>

              <a id="tdn" href="../../">
                <div class="nav-item-mobile"><img src="https://img.icons8.com/ios-glyphs/30/ffffff/home-page--v1.png"/> HOME</div>
              </a>
                
              <a id="tdn" href="../../pages/servizi">
                <div class="nav-item-mobile"><img src="https://img.icons8.com/ios-filled/30/ffffff/water.png"/>SERVIZI</div>
              </a>

              <a id="tdn" href="../../pages/catalogo-articoli">
                <div class="nav-item-mobile"><img src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/30/ffffff/external-sheet-business-elements-and-symbols-metaphors-flatart-icons-outline-flatarticons.png"/>ARTICOLI</div>
              </a>

              <a id="tdn" href="../../pages/galleria">
                <div class="nav-item-mobile"><img src="https://img.icons8.com/glyph-neue/30/ffffff/gallery.png"/>GALLERIA</div>
              </a>

              <a id="tdn" href="../../download/magliozzi.pdf">
                <div class="nav-item-mobile"><img src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/30/ffffff/external-brochure-museum-vitaliy-gorbachev-fill-vitaly-gorbachev.png"/>BROCHURE</div>
              </a>

              <a id="tdn" href="../../pages/contatti">
                <div class="nav-item-mobile"><img src="https://img.icons8.com/ios-filled/30/ffffff/apple-contacts.png"/>CONTATTI</div>
              </a>

            </div>
          </div>
        </div>
      </nav>
    </section>    

<?php else: ?>

  <!-- nothing -->

<?php endif; ?>
