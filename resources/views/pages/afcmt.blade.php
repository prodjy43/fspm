@extends('layouts.app')

@section('title')
    AFCMT
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
            <div class="news-banner" style="background-image:url({{ asset('images/afcmt.jpg')}});">
            </div>
            <div class="news-content">
                <h2>AFCMT</h2>
                <p><strong><a href="http://www.swissmechanic.ch/xml_1/internet/fr/application/d2976/d3834/f3888.cfm">L’AFCMT</a> </strong>(Association Suisse pour la formation continue mécanique et technique) </p>
            </div>
        </div>
        <div class="news">
            <div class="news-content">
                <h2>Nouvelle formation - brevet fédéral d'Expert en production</h2>
                <p>Depuis cette année, la Maîtrise a été remplacée par le Brevet fédéral d'expert en production</p>
                <h3>Fichiers</h3>
                <div class="pdf-download">
                    <a class="pdf" href="/data/download/Objets/Id_526_12050510_bf-expert-production_brochure-site_fr.pdf"><div>
                        <img src="{{ asset('images/pdf.png')}}" width="200px">
                        <p>Brevet fédéral d'expert en production</p>
                    </div></a>
                </div>
            </div>
        </div>
        <div class="news">
            <div class="news-content">
                <h2>Articles parus dans le MSM</h2>
                <h3>Fichiers</h3>
                <div class="pdf-download">
                    <a class="pdf" href="/data/download/Objets/Id_368_MSM_07_041.pdf"><div>
                        <img src="{{ asset('images/pdf.png')}}" width="200px">
                        <p>Page 41</p>
                    </div></a>
                    <a class="pdf" href="/data/download/Objets/Id_369_MSM_07_042.pdf"><div>
                        <img src="{{ asset('images/pdf.png')}}" width="200px">
                        <p>Page 42</p>
                    </div></a>
                    <a class="pdf" href="/data/download/Objets/Id_370_MSM_07_043.pdf"><div>
                        <img src="{{ asset('images/pdf.png')}}" width="200px">
                        <p>Page 43</p>
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