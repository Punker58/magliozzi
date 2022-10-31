<!doctype html>
<html lang="it">
  <head>

    <?php 
        include '../config/link.php';
        metaTags();
        linkCss2();
    ?>

    <title>Servizi | Magliozzi Group SRL</title>
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
          <h2 data-aos="fade-up" data-aos-duration="3000" class="col-12">Servizi</h2>
        </div>
    </section>
    <!-- Main End -->

    <section id="main" class="main-s">

        <div class="container">

            <div class="row g8">

                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mt-5 " data-aos="fade-up" data-aos-duration="3000">
                    <h1>Magliozzi Group S.R.L ricopre i seguenti servizi:</h1>
                    <p>
                        Climatizzazione, Riscaldamento, Refrigerazione, Trattamento aria, Fotovoltaico, Termicosolare,
                        Progettazione, Gestione, Manutenzione, Assistenza Tecnica, Idraulico, Termoidraulico, Antincendio,
                        Tubisteria, Elettrico, Elettronico, antisorveglianza, anti intrusione ed edile.
                    </p>
                </div>

                <hr>

                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-6 mt-5 mb-5" data-aos="fade-up" data-aos-duration="3000">
                    <h1>Climatizzazione</h1>
                    <p>
                        Realizzazione e gestione di impianti con contratti
                        di manutenzione e visite periodiche, pianificate in
                        base alla tipologia di impianti per assicurare
                        il continuo funzionamento degli stessi e per
                        la pulizia e la sanificazione così da evitare lo sviluppo
                        di batteri utilizzando prodotti professionali e specifici.
                    </p>
                </div>


                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-6 mt-5 mb-5" data-aos="fade-up" data-aos-duration="3000">

                    <h1>Fotovoltaico</h1>
                    <p>
                        Progettiamo e realizziamo impianti solari
                        residenziali, ma anche di potenza indistriale come Capannoni,
                        Serre, Terreni e Centri Sportivi.
                    </p>

                </div>                

                <hr>


                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-6 mt-5 mb-5" data-aos="fade-up" data-aos-duration="3000">

                    <h1>Idraulico</h1>
                    <p>
                        Realizzazione, manutenzione e gestione di impianti
                        industriali sia termici che idraulici, con controlli periodici
                        che si stabiliscono in base alla dimensione
                        e all'utilizzo dello stesso.
                    </p>        

                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-6 mt-5 mb-5" data-aos="fade-up" data-aos-duration="3000">

                    <h1>Elettrico</h1>
                    <p>
                        Realizzazione, manutenzione e gestione con controlli mirati dei
                        componenti di sicurezza, interruttori, quadri elettrici in
                        generale e cassette di ispezione.</br>
                        Il tutto rispettando la normativa vigente sulla sicurezza D.M.37/08.
                    </p>

                </div>

                <hr>

                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mt-5 mb-5 text-center" data-aos="fade-up" data-aos-duration="3000">

                    <h1>Progettazione</h1>
                    <p>
                        Ci proponiamo come punto di riferimento per la realizzazione
                        di un progetto con la collaborazione dei nostri profesionisti.
                        Inoltre eseguiamo per tutte le tipologie di impianti già installati,
                        contratti di manutenzione ordinaria e straordinaria, riparazioni
                        e assistenza tecnica per garantire il costante funzionamento.
                        La manutenzione ordinaria degli impianti
                        ha come obiettivo prioritario il prolungamento della loro durata,
                        l'ottenimento di significativi risparmi nella gestione,
                        il mantenimento del livello di sicurezza nel funzionamento e,
                        quindi, la garanzia di disponibilità fornire con continuità e
                        nel tempo le prestazioni richieste.
                    </p>

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
