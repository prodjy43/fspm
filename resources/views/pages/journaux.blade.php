@extends('layouts.app')

@section('title')
    Journaux techniques
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
            <div class="news-banner" style="background-image:url({{asset('images/journaux.jpg')}});"></div>
            <div class="news-content">
                <h2>Journal MSM</h2>
                <p>
                <ul><li><a href="http://www.msm.ch">MSM</a></li></ul>
                </p>
                <p>Contenu
                <br>– Articles techniques spécialisés
                <br>– L’actualité sur tous les salons et foires importants, nationaux et internationaux
                <br>– L’actualité des produits
                <br>– L’actualité économique
                <br>– Annonces
                <br>
                <br>Compétences rédactionnelles
                <br>Nos rédacteurs possèdent une solide formation technique et/ou économique.
                <br>Leur formation continue dans le domaine de la presse écrite leur permet
                <br>de traiter et de présenter des sujets de façon compétente et intéressante
                <br>
                <br>Assurance qualité
                <br>Le MSM a obtenu le sigle de qualité « Q-Publication »,
                <br>décerné par l’Association Presse Suisse.
                <br> 
                </p>
            </div>
        </div>
        <div class="news">
            <div class="news-banner" style="background-image:url({{asset('images/journaux.jpg')}});"></div>
            <div class="news-content">
                <h2>La Revue Polytechnique</h2>
                <p>
                <ul><li><a href="http://www.polymedia.ch">Polymédia</a></li></ul>
                </p>
                <p>Fondée en 1898, La Revue Polytechnique publie des informations techniques et scientifiques polyvalentes, actuelles et concrètes, à l'attention de tous les acteurs de la technique et des sciences appliquées. En Suisse et dans le monde entier, ses 21'000 lecteurs accordent tous les mois leur confiance à une notoriété rédactionnelle qui fait ses preuves depuis plus d'un siècle.
                        <br>Cette publication, qui figure parmi les revues techniques les plus lues de Suisse, offre la meilleure pénétration sur le marché romand pour des annonceurs souhaitant offrir à leurs publicités les meilleures chances d'être vues et lues.
                        <br> 
                                </p>
            </div>
        </div>
        <div class="news">
            <div class="news-banner" style="background-image:url({{asset('images/journaux.jpg')}});"></div>
            <div class="news-content">
                <h2>EUROTEC</h2>
                <h3>Magazine technique et machine-outils</h3>
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