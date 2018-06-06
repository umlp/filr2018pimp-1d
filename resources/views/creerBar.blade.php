@extends('layouts.app')

@section('content')
<form>
    <div class="form-group">
        <h4>Créer un bar</h4>
        <br/>
        <label for="nom">Nom du bar</label>
        <input class="form-control" type="text" name="nom">
        <label for="loc">Localisation</label>
        <input class="form-control" type="text" name="loc">
        <label for="desc">Description</label>
        <input type="textarea" name="desc" rows="10">
    </div>
    <button type="submit" class="btn btn-success">Créer</button>
</form>
<input type="button" class="btn btn-primary" value="TEST">
@endsection
