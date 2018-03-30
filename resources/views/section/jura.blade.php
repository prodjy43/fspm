@extends('layouts.app')

@section('title')
    Jura - Berne
@stop()
@section('content')
    <div class="banner" style="background-image:url({{asset('images/jurabanner.jpg')}})">
        <div class="opacity">
            <h1>Bienvenue sur notre section</h1>
            <span class="cut-banner"></span>
            <h1>Jura - Berne</h1>
            <p>
                <img src="{{asset('images/jura.png')}}" width="150px">
                <img src="{{asset('images/berne.png')}}" width="150px">
            <p>
        </div>
    </div>
    <div class="allnews">
        <div class="news">
            <div class="news-content">
                <h2>Nouvelle page en construction</h2>
                <p>Pour tout renseignement veuillez contacter : <a href="mailto:manuel.guerreiro@fspm.ch">manuel.guerreiro@fspm.ch</a></p>
            </div>
        </div>
    </div>
@stop()