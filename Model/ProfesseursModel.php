<?php
    class Professeurs{
        public $id;
        public $prenom;  
        public $nom;
        public $age;
        public $matiere;

        public function __construct($id){
            if(!isset($bdd)){
                require 'Model/db.php';
            }
            $retour = $bdd->prepare('SELECT * from professeurs WHERE id = ?');
            $retour->execute(array($id));
            $professeurs = $retour->fetch();

            $this->id = $professeurs['id'];
            $this->prenom = $professeurs['prenom'];
            $this->nom = $professeurs['nom'];
            $this->age = $professeurs['age'];
            $this->matiere = $professeurs['matiere'];
        }
        public static function getListProfesseurs(){
            if(!isset($bdd)){
                require 'Model/db.php';
            }
            $reponse = $bdd->query('SELECT * from professeurs');
            $donnees = array();
            while ($prof = $reponse->fetch()){
                $professeurs = new Professeurs($prof['id']);
                $donnees[] = $professeurs;
            }
            return $donnees;
        }

       
    }
