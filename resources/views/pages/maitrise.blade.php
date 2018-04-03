@extends('layouts.app')

@section('title')
    maitrise
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
            <div class="news-banner" style="background-image:url({{ asset('images/maitrise.jpeg')}});">
            </div>
            <div class="news-content">
                <h2>Le Maître- Mécanicien</h2>
                <p>Il est capable de prendre et d’assumer Les décisions qui s’imposent pour appréhender et <strong>résoudre tous les problèmes qui touchent à la fabrication et à la gestion d’une production</strong>, multifonctionnel, il est "<em>L’ingénieur responsable de la gestion technique"</em>. </p>
<br><p><strong>Fort de plusieurs années d’expérience professionnelle avant l’examen</strong>. </p>
<br><p>Généraliste et spécialiste, en possession d’un <strong>solide savoir-faire</strong>. Familier des machines et des techniques de fabrication les plus actuelles. Bénéficiaire d’une formation continue spécifique débouchant sur des <strong>connaissances théoriques solides</strong>. Promis à un avenir de cadre supérieur avec <strong>de grandes compétences techniques et humaines</strong>. </p>
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