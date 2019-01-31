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
                <p>La philosophie et les buts de notre site sont les suivants :</p>
                <p>
                <br><ul>
                <br><li>Ce site se veut un <strong>lieu de rassemblement</strong> des divers professionnels de la <strong>Mécanique Suisse</strong> de fabrication/production et d’entretien. Il permettra des échanges accrus entre les <strong>différents acteurs de l’économie</strong> : institutions formatrices, fournisseurs, fabricants, entreprises, Maîtres Mécaniciens, enseignants, apprentis. 
                <br></li><li>Une multitude d’informations concernant la mécanique sera présentée grâce à notre <strong>réseau de Maîtres Mécaniciens </strong>Diplômés. 
                <br></li><li>Un <a href="http://www.fsmmd.ch/Intranet/">Intranet</a>&nbsp;est présent avec <strong>un accès réservé aux membres</strong>. 
                <br></li><li>Toutes les sections de la Fédération ont leur propre partie de site ! </li></ul>
                </p>
            </div>
        </div>
        <div class="news">
            <div class="news-content">
                <h2>Liste des contreparties</h2>
                <p>Les contreparties publicitaires de votre sponsoring se détermineraient de la manière suivante : </p>
                <br><ul>
                <br><li>Nos 800 membres sont informés 3 fois par année de <strong>manière écrite</strong> de la marche de la fédération, ainsi votre publicité ira directement <strong>aux personnes concernées </strong>et dans leurs<strong> sociétés respectives</strong>. 
                <br></li><li>Votre publicité peut être distribuée par le biais de <strong>nos adresses e-mail</strong>. 
                <br></li><li>Une information par les <strong>Offices d’Orientation et Ecoles professionnelles </strong>sur l’existence du site aux futurs professionnels de la branche sera donnée. 
                <br></li><li>L’orientation des <strong>Polymécaniciens </strong>et <strong>Mécapraticiens</strong> vers les sponsors du site par le biais des Maîtres Mécaniciens qui enseignent dans les Centres Professionnels. (16'000 apprentis par année sur une base de 1 visite par semaine soit 16'000 x 52 = 832’000 visites par année) 
                <br></li><li>Une information écrite <strong>aux professionnels de la branche</strong> sera effectuée. 
                <br></li><li>Par le biais des internautes.</li></ul>
                <br><p>Pour ce faire, nous avons besoin de <strong>votre soutien pour consolider notre réseau d’annonceurs </strong>et pour pouvoir constituer des bases de données et des liens qui serviront autant <strong>aux professionnels de la branche qu’aux futurs acteurs de notre industrie </strong>que nous avons nommé <strong>les apprentis .</strong></p>
            </div>
        </div>
        <div class="news">
                <div class="news-content">
                    <h2>Possibilités de sponsoring</h2>
                    <h3>Fichiers</h3>
                    <div class="pdf-download">
                        <a class="pdf" href="/data/download/Objets/Id_234_Donnée pub2 à 1000-500fr.-.pdf"><div>
                            <img src="{{ asset('images/pdf.png')}}" width="200px">
                            <p>Toutes les possibilités</p>
                        </div></a>
                        <a class="pdf" href="/data/download/Objets/Id_527_Contrat pub 500 site fspm.ch_fr.pdf"><div>
                            <img src="{{ asset('images/pdf.png')}}" width="200px">
                            <p>contrat petite bannière site FSPM</p>
                        </div></a>
                        <a class="pdf" href="/data/download/Objets/Id_528_Contrat pub 1000 site fspm.ch_fr.pdf"><div>
                            <img src="{{ asset('images/pdf.png')}}" width="200px">
                            <p>contrat grande bannière site FSPM</p>
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