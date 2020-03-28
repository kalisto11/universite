<?php
    require 'Model/AnnoncesControllerModel.php';
    class AnnoncesController{
        public $model;
        public $annonces;
        public function __construct(){
            $model = new AnnoncesControllerModel();
            $this->model = $model;
            $this->annonces = $this->getAnnonces();
        }

        public function getAnnonces(){
            return $this->model->annonces;
        }
        public function afficher(){
            require $this->model->page;
        }
    }