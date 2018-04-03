@extends('layouts.app')

@section('title')
    Présentation
@stop()
@section('class')
    class="fixed-scr"
@stop() 
@section('body')
    class="relative"
@stop()   
@section('content')
<div class="content">
    <div class="allnews">
        <div class="news">
            <div class="news-banner" style="background-image:url({{ asset('images/offre.jpg')}});">
            </div>
            <div class="news-content">
                <h2>MAPAL recherche</h2>
                <h3>Un Conseiller technique pour la Suisse romande</h3>
                <p>C’est l'un des principaux fournisseurs internationaux d'outils de précision pour l'usinage de presque tous les matériaux. La société possède des sites de production, de vente et de service dans 44 pays. Aujourd'hui, l'engagement en Suisse romande s'intensifie. A cette fin, le fabricant d'outils est à la recherche d'un consultant technique expérimenté pour accompagner ses clients locaux. Connaissance du marché suisse romand, parfaite connaissance du français et de l’allemand sont des conditions préalable ainsi qu ‘une excellente compréhension technique. Si vous êtes intéressé, veuillez contacter Klaus Abele au +49 7361 585-3370 ou klaus.abele@mapal.com</p>
            </div>
        </div>
        <div class="news">
            <div class="news-banner" style="background-image:url({{ asset('images/offre.jpg')}});">
            </div>
            <div class="news-content">
                <h2>Cartier Horlogerie cherche</h2>
                <h3>Un spécialiste métier usinage</h3>
                <h3>Fichiers</h3>
                <div class="pdf-download">
                    <a class="pdf" href="/data/download/Objets/Id_740_Offres d'emploi Cartier.pdf"><div>
                        <img src="{{ asset('images/pdf.png')}}" width="200px">
                        <p>Description du poste</p>
                    </div></a>
                </div>
            </div>
        </div>
        <div class="news">
                <div class="news-banner" style="background-image:url({{ asset('images/offre.jpg')}});">
                </div>
                <div class="news-content">
                    <h2>AMEPAG2 cherche</h2>
                    <h3>un polymécanicien</h3>
                    <h3>Fichiers</h3>
                    <div class="pdf-download">
                        <a class="pdf" href="/data/download/Objets/Id_721_Recherche d' un polymécanicien AMEPAG2 SA.pdf"><div>
                            <img src="{{ asset('images/pdf.png')}}" width="200px">
                            <p>Description du poste</p>
                        </div></a>
                    </div>
                </div>
            </div>
    </div>
</div>
@stop()
@section('footer')
    <footer>
        <p>Fédération Suisse des Professionnels de la Mécanique Rue du Collège 25 | 2043 BOUDEVILLIERS | <a href="mailto:info@fspm.ch">info@fspm.ch</a></p>
    </footer>
@stop()