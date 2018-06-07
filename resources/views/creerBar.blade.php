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

    $requete = DB::statement('CREATE TABLE IF NOT EXISTS bars (
                id INTEGER PRIMARY KEY, 
                nom TEXT NOT NULL,
                description TEXT NOT NULL,
                image TEXT
            )');
    
    $insert = DB::insert('insert into bars (nom, description) values ("Test", "Yolo")', array(1, 'Arnaud'));
    $select = DB::select('select * from bars', array(1));

    foreach ($select as $data) {
        echo '<p>'.$data.'</p>';
    }
?>
