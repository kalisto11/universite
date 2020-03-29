<?php
    require 'Model/AnnoncesModel.php';
    require 'Model/Request.php';
    class AnnoncesController{
        public $request;
        public $annonces;

        public function __construct(){
            $this->request = new Request();
        }

        public function afficherListAnnonces(){
            $annonces = Annonces::getListAnnonces();
            require 'View/Annonces.php';
        }

        public function afficherAnnonce(){
            $annonce = new annonces($this->request->id);
            require 'View/Annonce.php';
        }
    }