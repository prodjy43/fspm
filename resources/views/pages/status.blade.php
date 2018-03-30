@extends('layouts.app')

@section('title')
    Statuts
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
                <h2>Statuts FSPM</h2>
                <div class="pdf-download">
                    <a class="pdf" href="/data/download/Objets/Id_646_Statuts_prop Modif_FSPM_008.pdf"><div>
                        <img src="{{ asset('images/pdf.png')}}" width="200px">
                        <p>Statuts FSPM</p>
                    </div></a>
                    <a class="pdf" href="/data/download/Objets/Id_274_Compte rendu de la commission des statuts août 2005_fr.pdf"><div>
                        <img src="{{ asset('images/pdf.png')}}" width="200px">
                        <p>Compte rendu de la commision des statuts août 2005</p>
                    </div></a>
                </div>
            </div>
        </div>
        <div class="news">
            <div class="news-content">
                <h2>Archive</h2>
                <div class="pdf-download">
                    <a class="pdf" href="/data/download/Objets/Id_316_Status specimen.pdf"><div>
                        <img src="{{ asset('images/pdf.png')}}" width="200px">
                        <p>Statuts (specimen)</p>
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