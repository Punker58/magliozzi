<?php

    // CLASSE ARTICOLO
    class articolo{

        public $nome;
        public $descrizione;
        public $descrizione2;
        public $schedaTecnica;
        public $schedaTecnica2;
        public $imgItem;
        public $nImg;
        public $cartellaImg;

        public function __construct($nome, $descrizione, $descrizione2, $schedaTecnica, $schedaTecnica2, $imgItem, $nImg, $cartellaImg)
        {

        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->descrizione2 = $descrizione2;
        $this->schedaTecnica = $schedaTecnica;
        $this->schedaTecnica2 = $schedaTecnica2;
        $this->imgItem = $imgItem;
        $this->nImg = $nImg;
        $this->cartellaImg = $cartellaImg;

        }
    
        public function nome(){return $this->nome;}
    
        public function Descrizione(){return $this->descrizione;}

        public function Descrizione2(){return $this->descrizione2;}

        public function schedaTecnica(){return $this->schedaTecnica;}

        public function schedaTecnica2(){return $this->schedaTecnica2;}

        public function imgItem(){return $this->imgItem;}

        public function nImg(){return $this->nImg;}

        public function cartellaImg(){return $this->cartellaImg;}

    }

    // CLASSE LAVORO
    class lavoro{

        public $intestazione;
        public $nome;
        public $descrizione;
        public $periodo;
        public $sliderBefore;
        public $sliderAfter;
        public $lavoriSvolti;
        public $lavoriSvolti2;
        public $nImg;
        public $cartellaImg;
    
        public function __construct($intestazione, $nome, $descrizione, $periodo, $sliderBefore, $sliderAfter, $lavoriSvolti, $lavoriSvolti2, $nImg, $cartellaImg)
        {
    
          $this->intestazione = $intestazione;
          $this->nome = $nome;
          $this->descrizione = $descrizione;
          $this->periodo = $periodo;
          $this->sliderBefore = $sliderBefore;
          $this->sliderAfter = $sliderAfter;
          $this->lavoriSvolti = $lavoriSvolti;
          $this->lavoriSvolti2 = $lavoriSvolti2;
          $this->nImg = $nImg;
          $this->cartellaImg = $cartellaImg;
    
        }
       
        public function Intestazione(){return $this->intestazione;}
    
        public function Nome(){return $this->nome;}
       
        public function Descrizione(){return $this->descrizione;}
       
        public function Periodo(){return $this->periodo;}
    
        public function sliderBefore(){return $this->sliderBefore;}
    
        public function sliderAfter(){return $this->sliderAfter;}
    
        public function lavoriSvolti(){return $this->lavoriSvolti;}
    
        public function lavoriSvolti2(){return $this->lavoriSvolti2;}
    
        public function nImg(){return $this->nImg;}
    
        public function cartellaImg(){return $this->cartellaImg;}
    
    }    

    class path{

        
    }

?>