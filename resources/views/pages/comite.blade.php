@extends('layouts.app')

@section('title')
    Comité Central
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
                <h2>Adresses comité central et présidents</h2>
                <h3>Fichiers</h3>
                <div class="pdf-download">
                    <a class="pdf" href="/data/download/Objets/Id_575_Adresses%20CC.pdf"><div>
                        <img src="{{ asset('images/pdf.png')}}" width="200px">
                        <p>Comité Central</p>
                    </div></a>
                    <a class="pdf" href="/data/download/Objets/Id_711_Pr%C3%A9sidents%202016.pdf"><div>
                        <img src="{{ asset('images/pdf.png')}}" width="200px">
                        <p>Présidents des sections</p>
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