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
    <div class="allitem">
        <div class="item">
            <div class="item-image" style="background-image:url({{asset('images/shop/item1.jpg')}});"></div>
            <div class="item-arrow">
                <i class="arrow-left"></i>
            </div>
            <div class="item-content">
                <h2>CLE USB FSPM</h2>
                <p>
                    Cle USB 4 Giga
                </p>
                <p>
                    Prix de vente Fr. 25.-- 
                </p>
                <p>
                    <a href="#!">Bulletin de commande</a>
                </p>
            </div>
        </div>
        <div class="item">
            <div class="item-image" style="background-image:url({{asset('images/shop/item2.jpg')}});"></div>
            <div class="item-arrow">
                <i class="arrow-left"></i>
            </div>
            <div class="item-content">
                <h2>Bouteilles de la Fédération</h2>
                <p>Offre spéciale pack de 3 bouteilles<br>
                1 Fendant, 1 Gamay et 1 Pinot</p>
                <p>Prix de vente Fr. 30.-- </p>
                <p>
                    <a href="#!">Bulletin de commande</a>
                </p>
            </div>
        </div>
        <div class="item">
            <div class="item-image" style="background-image:url({{asset('images/shop/item3.jpg')}});"></div>
            <div class="item-arrow">
                <i class="arrow-left"></i>
            </div>
            <div class="item-content">
                <h2>Les chemises FSPM</h2>
                <p>Elles sont en vente...</p>
                <p>Les photos arrivent bientôt!</p>
                <p>
                    <a href="#!">Bulletin de commande</a>
                </p>
            </div>
        </div>
        <div class="item">
            <div class="item-image" style="background-image:url({{asset('images/shop/item4.jpg')}});"></div>
            <div class="item-arrow">
                <i class="arrow-left"></i>
            </div>
            <div class="item-content">
                <h2>D'autre articles en vente</h2>
                <p>Exemple d'article</p>
                <p>affichage des articles</p>
                <p>
                    <a href="#!">Bulletin de commande</a>
                </p>
            </div>
        </div>
        <div class="item">
            <div class="item-image" style="background-image:url({{asset('images/shop/item4.jpg')}});"></div>
            <div class="item-arrow">
                <i class="arrow-left"></i>
            </div>
            <div class="item-content">
                <h2>D'autre articles en vente</h2>
                <p>Exemple d'article</p>
                <p>affichage des articles</p>
                <p>
                    <a href="#!">Bulletin de commande</a>
                </p>
            </div>
        </div>
        <div class="item">
            <div class="item-image" style="background-image:url({{asset('images/shop/item4.jpg')}});"></div>
            <div class="item-arrow">
                <i class="arrow-left"></i>
            </div>
            <div class="item-content">
                <h2>D'autre articles en vente</h2>
                <p>Exemple d'article</p>
                <p>affichage des articles</p>
                <p>
                    <a href="#!">Bulletin de commande</a>
                </p>
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