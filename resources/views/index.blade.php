<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Get a Beer !</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Menu principal</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-center">
                    <li class="active"><a href="#">Accueil</a></li>
                    <li><a href="#">Profil</a></li>
                    <li><a href="#">Mon historique</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Créer un compte</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Se connecter</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
            <div style="border: solid lightgrey 2px; padding: 10px 0px 10px 30px">
                <h3>Fil d'actualités</h3>
            </div>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-3">
            <img src="alice.jpg" width="100%"/>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron" style="padding: 25px">
                <h3>Nom du bar</h3>
                <p>Description succinte du bar.</p>
                <hr class="my-4">
                <p>Ambiance, notation, etc...</p>
                <p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Voir la page du bar</a>
                </p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="d-none d-sm-block">
                <button type="button" class="btn btn-primary">Organiser son barathon</button>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-3">
            <img src="https://cuteoverload.files.wordpress.com/image7-967-14-_tphq.jpg" width="100%"/>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron" style="padding: 25px">
                <h3>Nom du bar</h3>
                <p>Description succinte du bar.</p>
                <hr class="my-4">
                <p>Ambiance, notation, etc...</p>
                <p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Voir la page du bar</a>
                </p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="d-none d-sm-block">
                <span>
                    <input type="text" placeholder="Recherche">
                    <button type="button" class="btn btn-info">Rechercher</button>
                </span>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-3">
            <img src="https://cuteoverload.files.wordpress.com/image7-967-14-_tphq.jpg" width="100%"/>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron" style="padding: 25px">
                <h3>Nom du bar</h3>
                <p>Description succinte du bar.</p>
                <hr class="my-4">
                <p>Ambiance, notation, etc...</p>
                <p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Voir la page du bar</a>
                </p>
            </div>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-3">
            <img src="https://cuteoverload.files.wordpress.com/image7-967-14-_tphq.jpg" width="100%"/>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron" style="padding: 25px">
                <h3>Nom du bar</h3>
                <p>Description succinte du bar.</p>
                <hr class="my-4">
                <p>Ambiance, notation, etc...</p>
                <p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Voir la page du bar</a>
                </p>
            </div>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-3">
            <img src="https://cuteoverload.files.wordpress.com/image7-967-14-_tphq.jpg" width="100%"/>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron" style="padding: 25px">
                <h3>Nom du bar</h3>
                <p>Description succinte du bar.</p>
                <hr class="my-4">
                <p>Ambiance, notation, etc...</p>
                <p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Voir la page du bar</a>
                </p>
            </div>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-3">
            <img src="https://cuteoverload.files.wordpress.com/image7-967-14-_tphq.jpg" width="100%"/>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron" style="padding: 25px">
                <h3>Nom du bar</h3>
                <p>Description succinte du bar.</p>
                <hr class="my-4">
                <p>Ambiance, notation, etc...</p>
                <p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Voir la page du bar</a>
                </p>
            </div>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
</body>
</html>
