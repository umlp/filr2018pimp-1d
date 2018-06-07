@extends('layouts.app')

@section('content')

<div class="col-sm-3">
</div>
<div class="col-sm-6">
    <form>
        <div class="form-group">
            <h4>Créer un bar</h4>
            <br/>
            <label for="nom">Nom du bar</label>
            <input class="form-control" type="text" name="nom">
            <label for="loc">Localisation</label>
            <input class="form-control" type="text" name="loc">
            <label for="desc">Description</label>
            <textarea class="form-control" name="desc" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Créer</button>
    </form>
</div>
<div class="col-sm-3">
</div>
@endsection

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
