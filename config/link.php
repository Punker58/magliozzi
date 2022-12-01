<?php

    function metaTags() {
        echo 
            '
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="keywords" content="Magliozzi, Magliozzi Group, Volla, galleria">
            
            ';
    }

    // LIVELLO 1 : CSS + bootstrap + line awesome + fancybox + favicon + swiper
    function linkCss() {
        echo
            '
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
            
            <!-- Main CSS -->
            <link rel="stylesheet" href="assets/css/main.css?v=2.0">
            <link rel="stylesheet" href="assets/css/card.css?v=2.0">
        
            <!-- Line Awesome --->
            <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        
            <!-- Animation CSS-->
            <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
        
            <!-- fancybox-->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

            <!-- Swiper JS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
        
            <!-- Favicon -->
            <link rel="icon" href="assets/_images/favicon.ico">

            ';
    }

    // LIVELLO 2: CSS + bootstrap + line awesome + fancybox + favicon + swiper
    function linkCss2() {
        echo
            '
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
            
            <!-- Main CSS -->
            <link rel="stylesheet" href="../assets/css/main.css?v=2.0">
            <link rel="stylesheet" href="../assets/css/card.css?v=2.0">
        
            <!-- Line Awesome --->
            <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        
            <!-- Animation CSS-->
            <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
        
            <!-- fancybox-->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

            <!-- Swiper JS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
        
            <!-- Favicon -->
            <link rel="icon" href="../assets/_images/favicon.ico">

            ';
    }

    // LIVELLO 3: CSS + bootstrap + line awesome + fancybox + favicon + swiper
    function linkCss3() {
        echo
            '
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
            
            <!-- Main CSS -->
            <link rel="stylesheet" href="../../assets/css/main.css?v=2.0">
            <link rel="stylesheet" href="../../assets/css/card.css?v=2.0">
        
            <!-- Line Awesome --->
            <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        
            <!-- Animation CSS-->
            <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
        
            <!-- fancybox-->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

            <!-- Swiper JS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
        
            <!-- Favicon -->
            <link rel="icon" href="../../assets/_images/favicon.ico">

            ';
    }    

    // LIVELLO 5: CSS + bootstrap + line awesome + fancybox + favicon + swiper
    function linkCss5() {
        echo
            '
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
            
            <!-- Main CSS -->
            <link rel="stylesheet" href="../../../assets/css/main.css?v=2.0">
            <link rel="stylesheet" href="../../../assets/css/card.css?v=2.0">
        
            <!-- Line Awesome --->
            <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        
            <!-- Animation CSS-->
            <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
        
            <!-- fancybox-->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

            <!-- Swiper JS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
        
            <!-- Favicon -->
            <link rel="icon" href="../../../assets/_images/favicon.ico">

            ';
    }

    // LINK JAVASCRIPT
    function linkJs($page) {

        //redirect mobile 
        if($page == 'triplo') {
            $f =  '<script src="../../assets/js/redirectMobile.js"></script>';
        }elseif($page == 'doppio'){
            $f = '<script src="../assets/js/redirectMobile.js"></script>';
        }else{
            $f = '<script src="assets/js/redirectMobile.js"></script>';
        }

        echo 
            '
            <!-- Optional JavaScript; choose one of the two! -->
            <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
            
            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
           
            <!-- Masonry -->
            <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
            
            <!-- Swiper -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

            <!-- REDIRECT MOBILE -->
            '.$f.'

            <script>
                AOS.init({
                    once: true,
                });
            </script>
            ';
    }

    // LIVELLO  GENERICO:  FAST CONTACTS (LOGO UNICAL + SOCIAL)
    function fastContacts($page) {

        if($page == null){
            $f = '<div class="col-5 fast-social"><a href="https://concessionari.unicalag.it/napoli/magliozzi-group-srl"><img src="assets/_images/_icone/unical.png" width="200" alt=""></a></div>';
        }elseif($page == 'doppio') {
            $f = '<div class="col-5 fast-social"><a href="https://concessionari.unicalag.it/napoli/magliozzi-group-srl"><img src="../assets/_images/_icone/unical.png" width="200" alt=""></a></div>';
        }elseif($page === 'triplo') {
            $f = '<div class="col-5 fast-social"><a href="https://concessionari.unicalag.it/napoli/magliozzi-group-srl"><img src="../../assets/_images/_icone/unical.png" width="200" alt=""></a></div>';
        }

        echo
            '
                <section id="fast-contacts-s">
                    <div class="container">
                        <div class="row">
                            '.$f.'
                            <div class="col-5 fast-social"> 
                                <a href="https://www.linkedin.com/in/magliozzi-group-srl-1b223a87/"><i class="lab la-linkedin-in"></i></a>
                                <a href="https://www.instagram.com/magliozzigroupsrl/"><i class="lab la-instagram"></i></a>
                                <a href="https://www.facebook.com/MagliozziGroupClimatizzazione"><i class="lab la-facebook"></i></a>
                                <a href="https://wa.me/+393290452179?text=Salve%20sono%20interessato%20a%20un%20prenventivo..." ><i class="lab la-whatsapp"></i></a>
                            </div>  
                        </div>
                    </div>
                </section>  
            ';

    }

    // LIVELLO GENERICO: INCLUDE LE CLASSI NEL FILE
    function linkClass() {
        include 'class.php';
    }

    // FUNZIONE NUMERO DI IMMAGINI PRESENTI
    function addNumeroimg($nimg, $path, $cartellaImg){

        for($i = 1; $i <= $nimg; $i++) {
            echo '<img src="../assets/_images/'.$path.'/'.$cartellaImg.'/'.$i.'.jpg" class="img-fluid zoom">';
        }

    }


?>