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
            <div class="news-content">
                <h2>Les sections</h2>
                <p>
                    Notre Fédération est constituée des sections suivantes
                </p>
                <p>
                    Section Romande:
                </p>
                <ul>
                   <li><a href="/section/valais">Valais</a></li>
                   <li><a href="/section/vaud">Vaud et Genève</a></li>
                   <li><a href="/section/fribourg">Fribourg</a></li>
                   <li><a href="/section/neuchatel">Neuchâtel</a></li>
                   <li><a href="/section/jura">Jura et Berne</a></li>
                </ul>
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