<?php
    require 'Model/EtudiantsModel.php';
    
    class EtudiantsController{

        public function __construct(){
            if (isset($_GET['action'])){
                $action = $_GET['action'];
                if ($action === 'consulter'){
                    if (isset($_GET['id'])){
                        $id = intval($_GET['id']);
                        $etudiant = new Etudiants($id);
                        require 'View/EtudiantsInfos.php';
    
                    }else{
                        $etudiants = Etudiants::getListEtudiants();
                        require 'View/EtudiantsList.php';
                    }
    
                }
                elseif ($action === 'supprimer'){
                    if (isset($_GET['id'])){
                        $id = intval($_GET['id']);
                        $etudiant = new Etudiants($id);
                        $etudiant->supprimer();
                        $etudiants = Etudiants::getListEtudiants();
                        require 'View/EtudiantsList.php';
                    }
                }
                elseif($action === 'modifier'){
                    $id = ($_GET['id']);
                    $etudiant = new Etudiants($id);
                    require 'View/EtudiantsModifForm.php';
                }
                elseif($action === 'ajouter'){
                    require 'View/EtudiantsAjoutForm.php';
                }
                else{
                    
                }
            }
            else if (isset($_POST['action'])){
                $action = $_POST['action'];
                switch($action){
                    case 'modifier':
                        $id = intval($_POST['id']);
                        $etudiant = new Etudiants($id);
                        $etudiant->modif($_POST['prenom'], $_POST['nom'], $_POST['age'], $_POST['filiere']);
                        require 'View/EtudiantsInfos.php';
                    break;
                    case 'ajouter':
                        Etudiants::ajoutEtudiant($_POST['prenom'], $_POST['nom'], $_POST['age'], $_POST['filiere']);
                        $etudiants = Etudiants::getListEtudiants();
                        require 'View/EtudiantsList.php';
                    break;
                    default:
                }
            }
            else{}
        }
    }