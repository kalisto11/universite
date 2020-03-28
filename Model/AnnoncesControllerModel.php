<?php 
    require 'Model/AnnoncesModel.php';
class AnnoncesControllerModel{
    public $annonces;
    public $page;

    public function __construct(){
            $this->annonces = Annonces::getListAnnonces();
            $this->page = 'View/Annonces.php';
    }
}