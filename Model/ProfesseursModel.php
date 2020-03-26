<?php
    class Professeur{
        public $id;
        public $prenom;
        public $nom;
        public $age;
        public $matiere;

        public function __construct($id){

        }

        public function modif($prenom, $nom, $age, $matiere){
            if(!isset($bdd)){
                require 'Model/db.php';
            }
            $this->prenom = $prenom;
            $this->nom = $nom;
            $this->age = $age;
            $this->matiere = $filiere;

            $retour = $bdd->prepare('UPDATE professeurs SET prenom = :prenom, nom = :nom, age = :age, matiere = :matiere WHERE id = :id') OR die(print_r($bdd->errorinfo()));
				$retour->execute(array(
				'prenom' => $this->prenom,
				'nom' => $this->nom,
				'age' => $this->age,
                'matiere' => $this->matiere,
                'id' => $this->id
				));
        }
    }