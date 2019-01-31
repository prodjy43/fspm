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
            <div class="news-banner" style="background-image:url({{ asset('images/apprentissage.jpg')}}); height:600px !important;">
            </div>
            <div class="news-content">
                <h2>Place d'apprentissages vacantes</h2>
                <p>Merci de vous référer au site suivant</p>
                <a href="http://www.orientation.ch/dyn/1141.aspx">orientation.ch</a>
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