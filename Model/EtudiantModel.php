<?php
    class Etudiants{
        public $id;
        public $prenom;  
        public $nom;
        public $age;
        public $filiere;

        public function __construct($id){
            if(!isset($bdd)){
                require 'Model/db.php';
            }
            $retour = $bdd->prepare('SELECT * from etudiants WHERE id = ?');
            $retour->execute(array($id));
            $etudiant = $retour->fetch();

            $this->id = $etudiant['id'];
            $this->prenom = $etudiant['prenom'];
            $this->nom = $etudiant['nom'];
            $this->age = $etudiant['age'];
            $this->filiere = $etudiant['filiere'];
        }

        public function modif($prenom, $nom, $age, $filiere){
            if(!isset($bdd)){
                require 'Model/db.php';
            }
            $this->prenom = $prenom;
            $this->nom = $nom;
            $this->age = $age;
            $this->filiere = $filiere;

            $retour = $bdd->prepare('UPDATE etudiants SET prenom = :prenom, nom = :nom, age = :age, filiere = :filiere WHERE id = :id') OR die(print_r($bdd->errorinfo()));
				$retour->execute(array(
				'prenom' => $this->prenom,
				'nom' => $this->nom,
				'age' => $this->age,
                'filiere' => $this->filiere,
                'id' => $this->id
				));
        }

        public function supprimer(){
            if(!isset($bdd)){
                require 'Model/db.php';
            } 
            $retour = $bdd->prepare('DELETE from etudiants WHERE id = ?');
            $retour->execute(array($this->id));
        }

        public static function getListEtudiants(){
            if(!isset($bdd)){
                require 'Model/db.php';
            }
            $reponse = $bdd->query('SELECT * from etudiants');
            $donnees = array();
            while ($etu = $reponse->fetch()){
                $etudiant = new Etudiants($etu['id']);
                $donnees[] = $etudiant;
            }
            return $donnees;
        }

        public static function ajoutEtudiant($prenom, $nom, $age, $filiere){
            if(!isset($bdd)){
                require 'Model/db.php';
            }
            $retour = $bdd->prepare('INSERT INTO etudiants (prenom, nom, age, filiere) VALUES (:prenom, :nom, :age, :filiere)');
            $retour->execute(array(
                'prenom' => $prenom,
                'nom' => $nom,
                'age' => $age,
                'filiere' => $filiere
            ));
        }
    }
