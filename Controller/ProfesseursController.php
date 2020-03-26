<?php
    require 'Model/ProfesseursModel.php';
    
    class ProfesseursController{

        public function __construct(){
            if (isset($_GET['action'])){
                $action = $_GET['action'];
                if ($action === 'consulter'){
                    if (isset($_GET['id'])){
                        $id = intval($_GET['id']);
                        $professeurs = new Professeurs($id);
                        require 'View/PofesseursInfos.php';
    
                    }else{
                        $professeurs = Professeurs::getListProfesseurs();
                        require 'View/ProfesseursList.php';
                    }
    
                }
                elseif($action === 'ajouter'){
                    require 'View/ProfesseursAjoutForm.php';
                }
        }
    }
}