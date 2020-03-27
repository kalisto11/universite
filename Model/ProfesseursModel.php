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
        public static function ajoutProfesseurs($prenom, $nom, $age, $matiere){
            if(!isset($bdd)){
                require 'Model/db.php';
            }
            $retour = $bdd->prepare('INSERT INTO professeurs (prenom, nom, age, matiere) VALUES (:prenom, :nom, :age, :matiere)');
            $retour->execute(array(
                'prenom' => $prenom,
                'nom' => $nom,
                'age' => $age,
                'matiere' => $matiere
            ));
        }
        public function modif($prenom, $nom, $age, $matiere){
            if(!isset($bdd)){
                require 'Model/db.php';
            }
            $this->prenom = $prenom;
            $this->nom = $nom;
            $this->age = $age;
            $this->matiere = $matiere;

            $retour = $bdd->prepare('UPDATE professeurs SET prenom = :prenom, nom = :nom, age = :age, matiere = :matiere WHERE id = :id') OR die(print_r($bdd->errorinfo()));
				$retour->execute(array(
				'prenom' => $this->prenom,
				'nom' => $this->nom,
				'age' => $this->age,
                'matiere' => $this->matiere,
                'id' => $this->id
				));
        }
        public function supprimer(){
            if(!isset($bdd)){
                require 'Model/db.php';
            } 
            $retour = $bdd->prepare('DELETE from professeurs WHERE id = ?');
            $retour->execute(array($this->id));
        }

    }
