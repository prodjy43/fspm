<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FSPM - @yield('title')</title>
    
    <!-- Styles -->
    <link href="{{ asset('css/unsemantic.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery.js') }}"></script>
</head>
<body @yield('body')>
    <div class="slide-opa"></div>
    <nav @yield('class')>
        <ul class="menu">
            <li><a href="/" class="logo"><img src="{{ asset('images/logo_fspm.png') }}" height="55px"></a></li>
            <li><a href="#!" onclick="slideMenu('#medias')">Médias</a></li>
            <li><a href="#!" onclick="slideMenu('#fspm')">FSPM</a></li>
            <li><a href="#!" onclick="slideMenu('#metiers')">Les métiers</a></li>
            <li><a href="#!" onclick="slideMenu('#agenda')">Agenda</a></li>
            <li><a href="/shop">Shop</a></li>
            <li><a href="http://qcm.fspm.ch/">QCM</a></li>
            <li><a href="#!" onclick="slideMenu('#emploi')">Emploi</a></li>
            <li><a href="#!" onclick="slideMenu('#contact')">Contact</a></li>
            
            @if (Auth::user())
                <li><a href="/account/{{Auth::user()->name}}">{{Auth::user()->name}}</a></li>
                <li><a href="{{Auth::logout()}}">Déconnexion</a></li>
            @else
                <li><a href="/login">Membres</a></li>
            @endif
            
            
        </ul>
    </nav>
    <div class="menu-slide" id="medias">
        <a href="/post" class="slide-lien">News</a>
        <a href="/journaux" class="slide-lien">Journaux techniques</a>
        <a href="/revue" class="slide-lien">Revue de presse</a>
    </div>
    <div class="menu-slide" id="fspm">
        <a href="/presentation" class="slide-lien">Présentation</a>
        <a href="/comite" class="slide-lien">Comité central</a>
        <a href="/section" class="slide-lien">Sections</a>
        <a href="/status" class="slide-lien">Status</a>
        <a href="/register" class="slide-lien">Devenir membre</a>
        <a href="/partenaire" class="slide-lien">Partenaires</a>
        <a href="/experts" class="slide-lien">Experts examens</a>
    </div>
    <div class="menu-slide" id="metiers">
        <a href="/maitrise" class="slide-lien">Maîtrisés</a>
        <a href="/afcmt" class="slide-lien">AFCMT</a>
        <a href="/polymecanicien" class="slide-lien">Polymécaniciens</a>
    </div>
    <div class="menu-slide" id="agenda">
        <a href="/agenda" class="slide-lien">Comités</a>
        <a href="/agenda" class="slide-lien">AGs</a>
        <a href="/agenda" class="slide-lien">Evènements</a>
        <a href="/agenda" class="slide-lien">Foires</a>
        <a href="/agenda" class="slide-lien">AGOD</a>
    </div>
    <div class="menu-slide" id="emploi">
        <a href="/offre-d-emplois" class="slide-lien">Offres d'emplois</a>
        <a href="/apprentissage" class="slide-lien">Place d'apprentissages</a>
    </div>
    <div class="menu-slide" id="contact">
        <a href="#" class="slide-lien">Comité central</a>
        <a href="#" class="slide-lien">Comité VS</a>
        <a href="#" class="slide-lien">Comité FR</a>
        <a href="#" class="slide-lien">Comité NE</a>
        <a href="#" class="slide-lien">Comité JU/BE</a>
        <a href="#" class="slide-lien">Comité VD/GE</a>
        <a href="/publicite" class="slide-lien">Publicité</a>
    </div>
    @yield('content')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('footer')
</body>
</html>
