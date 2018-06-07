@extends('layouts.app')

@section('content')

<?php
      error_reporting(E_ALL);
      try
      {
	$requete = "CREATE TABLE IF NOT EXISTS bars (
		      id INTEGER PRIMARY KEY, 
		      nom TEXT NOT NULL,
		      description TEXT NOT NULL,
		      image TEXT
		    )";
	$db = new PDO("sqlite:./bars.sqlite");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->query($requete);
	//$db->query("INSERT INTO dictionnaire (terme, definition, fichier) VALUES ('chat', 'Petit animal fourbe à fourrure.', 'fiche1.txt')");
	//$db->query("INSERT INTO dictionnaire (terme, definition, fichier) VALUES ('asi', 'Chouette département.', 'fiche2.txt')");
	unset($db);
	echo "<p>Table créée. Fiches 'chat' et 'asi' insérées.</p>";
      }
      catch(PDOException $e)
      {
	echo $e->getMessage();
      }
    ?>