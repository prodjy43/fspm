@extends('layouts.app')

@section('title')
    Experts examens
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
                <div class="news-banner" style="background-image:url({{ asset('images/underconstruct.jpg')}}); height:600px !important;">
                </div>
            <div class="news-content">
                <h2>Page en construction</h2>
                <p>Cette page est actuellement en construction ! Revenez-vous un autre fois.</p>
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