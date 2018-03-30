@extends('layouts.app')

@section('title')
    Jura - Berne
@stop()
@section('content')
    <div class="banner" style="background-image:url({{asset('images/fribourgbanner.jpg')}})">
        <div class="opacity">
            <h1>Bienvenue sur notre section</h1>
            <span class="cut-banner"></span>
            <h1>Fribourg</h1>
            <p>
                <img src="{{asset('images/fribourg.png')}}" width="150px">
            <p>
        </div>
    </div>
    <div class="allnews">
        <div class="news">
            <div class="news-content">
                <h2>Historique</h2>
                <p>La section fribourgeoise des maîtres mécaniciens se présente Fondée en 1988, la section fribourgeoise compte à ce jour environ 40 membres. Avant sa fondation, environ deux tiers de nos membres actuels faisaient déjà partie d'une autre section, principalement de la section vaudoise. Depuis sa création, de nombreux nouveaux maîtres mécaniciens sont venus se joindre à nous.</p>
                <p>Bien que le canton de Fribourg se situe sur la frontière linguistique entre la Suisse romande et la Suisse alémanique, la section ne peut se vanter d'être bilingue. La majorité des membres habite et travaille dans la partie francophone. Peu de membres ont leur propre entreprise. La plupart occupent des postes à responsabilités dans des ateliers de production, d'entretien ou de formation d'apprentis. Mais surtout, nous établissons entre nous un réseau informel d'informations sur la marche des entreprises, les méthodes de travail, les fournisseurs, les débouchés, la sous-traitance, la formation des apprentis, en bref, sur tout ce qui nous touche dans notre vie professionnelle</p>
            </div>
        </div>
        <div class="news">
            <div class="news-content">
                <h2>Comité</h2>
                <table>
                <thead>
                    <tr>
                        <th>Personnes de contact</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a href="#Jaquet" onclick="popup('#Jaquet')">JAQUET Jean-Marc <br>Président</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#Chenaux" onclick="popup('#Chenaux')">CHENAUX Patrice <br>Caissier</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#Zimmermann" onclick="popup('#Zimmerman')">ZIMMERMANN Léo <br>Manifestation et organisation</a>
                            </d>
                    </tr>
                    <tr>
                        <td>
                            <a href="#Perroud" onclick="popup('#Perroud')">PERROUD Jacques <br>Manifestation et organisation</a>
                        </td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="popup" id="Jaquet">
        <div class="popup-content">
            <h1>Jaquet Jean-Marc</h1>
            <p>Président</p>
            <p>Adresse : Utilis AG</p>
            <p>NPA / Localité : 8555 Müllheim</p>
            <p>Mobile : 079/291 64 63</p>
            <p>E-mail :
                <a href="mailto:jeanmarc.jaquet@bluewin.ch">jeanmarc.jaquet@bluewin.ch</a>
            </p>
        </div>
    </div>
    <div class="popup" id="Chenaux">
        <div class="popup-content">
            <h1>Chenaux Patrice</h1>
            <p>Caissier</p>
            <p>Adresse : Wago Contact Rte de l'Industrie 19</p>
            <p>NPA / Localité : 1564 Domdidier</p>
            <p>Téléphone : 026/676 75 94</p>
            <p>E-mail :
                <a href="mailto:dpchenaux@bluewin.ch">dpchenaux@bluewin.ch</a>
            </p>
        </div>
    </div>
    <div class="popup" id="Zimmerman">
        <div class="popup-content">
            <h1>Zimmermann Léo</h1>
            <p>Manifestation et organisation</p>
            <p>Adresse : Pavatex SA rte de la Pisciculture 37</p>
            <p>NPA / Localité : 1700 Fribourg</p>
            <p>Téléphone : 026/426 31 11</p>
            <p>E-mail :
                <a href="mailto:leo.zimmermann@romandie.com">leo.zimmermann@romandie.com</a>
            </p>
        </div>
    </div>
    <div class="popup" id="Perroud">
        <div class="popup-content">
            <h1>Perroud Jacques</h1>
            <p>Manifestation et organisation</p>
            <p>Adresse : Moratec Freiburgstr. 112</p>
            <p>NPA / Localité : 3280 Morat</p>
            <p>Téléphone : 026/670 71 30</p>
            <p>Mobile : 079/381 42 64</p>
            <p>E-mail :
                <a href="mailto:jperroud@bluewin.ch">jperroud@bluewin.ch</a>
            </p>
        </div>
    </div>
@stop()