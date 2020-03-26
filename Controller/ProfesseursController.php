<?php
    require 'Model/ProfesseursModel.php';
    
    class ProfesseursController{

        public function __construct(){
            if (isset($_GET['action'])){
                $action = $_GET['action'];
                if ($action === 'consulter'){
                    if (isset($_GET['id'])){
                        $id = intval($_GET['id']);
                        $professeur = new Professeurs($id);
                        require 'View/PofesseursInfos.php';
    
                    }else{
                        $professeur = Professeurs::getListProfesseurs();
                        require 'View/ProfesseursList.php';
                    }
                }
                elseif($action === 'ajouter'){
                    require 'View/ProfesseursAjoutForm.php';
                }
                elseif ($action === 'supprimer'){
                    if (isset($_GET['id'])){
                        $id = intval($_GET['id']);
                        $professeur = new Professeurs($id);
                        $professeur->supprimer();
                        $professeur = Professeurs::getListProfesseurs();
                        require 'View/ProfesseursList.php';
                    }
                }
                elseif($action === 'modifier'){
                    $id = ($_GET['id']);
                    $professeur = new Professeurs($id);
                    require 'View/ProfesseursModifForm.php';
                }
                else{
                    
                }
            }
            else if (isset($_POST['action'])){
                $action = $_POST['action'];
                switch($action){
                    case 'modifier':
                        $id = intval($_POST['id']);
                        $professeur = new Professeurs($id);
                        $professeur->modif($_POST['prenom'], $_POST['nom'], $_POST['age'], $_POST['matiere']);
                        require 'View/ProfesseursInfos.php';
                    break;
                    case 'ajouter':
                        Professeurs::ajoutProfesseurs($_POST['prenom'], $_POST['nom'], $_POST['age'], $_POST['matiere']);
                        $professeur = Professeurs::getListProfesseurs();
                        require 'View/ProfesseursList.php';
                    break;
                    default:
                }
            }
            else{

            }
        }
    }
