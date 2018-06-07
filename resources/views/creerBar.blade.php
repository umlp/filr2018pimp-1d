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

    $requete = "CREATE TABLE IF NOT EXISTS bars (
                id INTEGER PRIMARY KEY, 
                nom TEXT NOT NULL,
                description TEXT NOT NULL,
                image TEXT
            )";
    $dbconn = pg_connect("host=ec2-54-195-246-59.eu-west-1.compute.amazonaws.com dbname=dcun22aii01mbq user=pjmwjmzqcbgozo password=019e0d43393738dc02b8a19f80e82e873dd739d9a45ab90aef5713128dcb0811") or die('Connexion impossible : '.pg_last_error());
    $result = pg_query($requete) or die('Echec de la requête : '.pg_last_error());
    //$db->query("INSERT INTO dictionnaire (terme, definition, fichier) VALUES ('chat', 'Petit animal fourbe à fourrure.', 'fiche1.txt')");
    //$db->query("INSERT INTO dictionnaire (terme, definition, fichier) VALUES ('asi', 'Chouette département.', 'fiche2.txt')");
    pg_free($result);
    pg_close($dbconn);

?>
