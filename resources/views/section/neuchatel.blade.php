@extends('layouts.app')

@section('title')
    Neuchâtel
@stop()
@section('content')
    <div class="banner" style="background-image:url({{asset('images/neuchatelbanner.jpg')}})">
        <div class="opacity">
            <h1>Bienvenue sur notre section</h1>
            <span class="cut-banner"></span>
            <h1>Neuchâtel</h1>
            <p>
                <img src="{{asset('images/neuchatel.png')}}" width="150px">
            <p>
        </div>
    </div>
    <div class="allnews">
        <div class="news">
            <div class="news-content">
                <h2>Comité</h2>
                <p>
                    <b>Organigramme</b>
                    <table>
                        <thead>
                            <tr>
                                <th>Prenom & Nom</th>
                                <th>Fonction</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td ><a href="mailto:dtr@eicndhcpd.ch?subject=FSPM Section NEUCHATEL" onmouseover="self.status='TREUTHARDT David'; return true" onmouseout="self.status=' '; return true">TREUTHARDT David</a></td>
                        
                            <td >Président</td>
                        
                            </tr>
                            
                            <tr >
                            
                            <td ><a href="mailto:claude.monney@rpn.ch?subject=FSPM Section NEUCHATEL" onmouseover="self.status='MONNEY Claude'; return true" onmouseout="self.status=' '; return true">MONNEY Claude</a></td>
                        
                            <td >Sorties et activités</td>
                        
                            </tr>
                            
                            <tr >
                            
                            <td ><a href="mailto:p-a.rubeli@bluewin.ch?subject=FSPM Section NEUCHATEL" onmouseover="self.status='RUBELI Pierre-André'; return true" onmouseout="self.status=' '; return true">RUBELI Pierre-André</a></td>
                        
                            <td >Caissier</td>
                        
                            </tr>
                            
                            <tr >
                            
                            <td ><a href="mailto:m.voegtlin@hotmail.com?subject=FSPM Section NEUCHATEL" onmouseover="self.status='VOEGTLIN Michael'; return true" onmouseout="self.status=' '; return true">VOEGTLIN Michael</a></td>
                        
                            <td >Webmaster &amp; Formation</td>
                        
                            </tr>
                            
                            <tr >
                            
                            <td ><a href="mailto:pascalbarras@bluewin.ch?subject=FSPM Section NEUCHATEL" onmouseover="self.status='BARRAS Pascal'; return true" onmouseout="self.status=' '; return true">BARRAS Pascal</a></td>
                        
                            <td >Vice-Président</td>
                        
                            </tr>
                            
                            <tr >
                            
                            <td ><a href="mailto:thypsx@me.com?subject=FSPM Section NEUCHATEL" onmouseover="self.status='PESEUX Thierry'; return true" onmouseout="self.status=' '; return true">PESEUX Thierry</a></td>
                        
                            <td >Marketing et Communications</td>
                        
                            </tr>
                            
                            <tr >
                            
                            <td ><a href="mailto:o.oppliger@gmail.com?subject=FSPM Section NEUCHATEL" onmouseover="self.status='OPPLIGER Olivier'; return true" onmouseout="self.status=' '; return true">OPPLIGER Olivier</a></td>
                        
                            <td >Secrétaire</td>
                        
                        </tr>
                        </tbody>
                    </table>
                </p>
            </div>
        </div>
        <div class="news">
            <div class="news-content">
                <h2>Status de section NE</h2>
                <h3>Fichiers</h3>
                <div class="pdf-download">
                    <a class="pdf" href="/data/download/Objets/Id_269_Statuts de section_NE_2005_fr.pdf"><div>
                        <img src="{{ asset('images/pdf.png')}}" width="200px">
                        <p>Nouveau status de section_NE</p>
                    </div></a>
                </div>
            </div>
        </div>
    </div>
@stop()