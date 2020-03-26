<?php
	// fichier de connexion à la bdd
	try
	{
		$bdd = new pdo('mysql:host=localhost; dbname=universite', 'root', '');
	}
	catch (exeption $e)
	{
		die ('erreur: ' . $e->getMessage());
	}
