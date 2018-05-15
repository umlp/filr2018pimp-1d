@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
          <div class="col-sm-2">
          </div>
          <div class="col-sm-8">
            <div style="border: solid lightgrey 2px; padding: 10px 0px 10px 30px">
              <h3>Fil d'actualités</h3>
            </div>
          </div>
          <div class="col-sm-2">
          </div>
        </div>
        <div class="row" style="margin-top: 10px;">
          <div class="col-sm-2">
          </div>
          <div class="col-sm-4">
            <img src="https://cuteoverload.files.wordpress.com/image7-967-14-_tphq.jpg" width="100%"/>
          </div>
          <div class="col-sm-4">
            <div class="jumbotron" style="padding: 25px">
              <h3>Nom du bar</h1>
              <p>Description succinte du bar.</p>
              <hr class="my-4">
              <p>Ambiance, notation, etc...</p>
              <p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Voir la page du bar</a>
              </p>
            </div>
          </div>
          <div class="col-sm-2">
          </div>
        </div>
    </div>
@endsection
