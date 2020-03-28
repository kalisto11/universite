<?php
    class Annonces{
        public $id;
        public $titre;
        public $contenu;

        public function __construct($id){
            if(!isset($bdd)){
                require 'Model/db.php';
            }
            $retour = $bdd->prepare('SELECT * FROM annonces WHERE id = ?');
            $retour->execute(array($id));
            $annonce = $retour->fetch();
            $this->id = $annonce['id'];
            $this->titre = $annonce['titre'];
            $this->contenu = $annonce['contenu'];
        }

        public static function getListAnnonces(){
            if(!isset($bdd)){
                require 'Model/db.php';
            }
            $retour = $bdd->query('SELECT * FROM annonces');
            $donnees = array();
            while ($annonce = $retour->fetch()){
                $object = new Annonces($annonce['id']);
                $donnees[] = $object;
            }
            return $donnees;
        }
    }