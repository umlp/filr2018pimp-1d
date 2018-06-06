@extends('layouts.app')

@section('content')
<form>
    <fieldset>
        <h4>Créer un bar</h4>
        <br/>
        <label for="nom">Nom du bar</label>
        <input type="text" name="nom">
        <label for="loc">Localisation</label>
        <input type="text" name="loc">
        <label for="desc">Description</label>
        <input type="textarea" name="desc" rows="10">
    </fieldset>
</form>
<input type="button" class="btn btn-primary" value="TEST">
@endsection
