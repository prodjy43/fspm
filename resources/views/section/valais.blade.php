@extends('layouts.app')

@section('title')
    Valais
@stop()
@section('content')
    <div class="banner" style="background-image:url({{asset('images/valaisbanner.jpg')}})">
        <div class="opacity">
            <h1>Bienvenue sur notre section</h1>
            <span class="cut-banner"></span>
            <h1>Valais</h1>
            <p><img src="{{asset('images/valais.png')}}" width="150px"><p>
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
                                <td><a href="#">Pobelle Frédéric</a></td>
                                <td>Président</td>
                            </tr>
                            <tr>
                                <td><a href="#">Rouiller Thierry</a></td>
                                <td>Webmaster</td>
                            </tr>
                            <tr>
                                <td>Ockerse Robert</d>
                                <td>Trésorier</td>
                            </tr>
                            <tr>
                                <td>D’Avola Fabrizio</td>
                                <td>Secrétaire</td>
                            </tr>
                            <tr>
                                <td>Luyet Eric</td>
                                <td>Membre</td>
                            </tr>
                        </tbody>
                    </table>
                </p>
            </div>
        </div>
        <div class="news">
            <div class="news-content">
                <h2>Historique de la Section Valaisanne</h2>
                <p>Notre section est née grâce à l'initiative d'une dizaine de maîtres mécaniciens qui se sont retrouvés le 17 février 1962 lors d'une assemblée constitutive qui s'est déroulée à l'hôtel Arnold à Sierre.</p>
                <p>Ces pionniers étaient Messieurs:
                <ul>
                    <li>Alfons Blumenthal, Jean Lathion</li> 
                    <li>Jean Burgener, Werner Pont</li> 
                    <li>Raymon Ebener, Roger Rey</li> 
                    <li>Paul Favre, Raymond Sarbach</li> 
                    <li>Georges Guibelin, Jean Schmid</li>
                </ul>
                </p>
                <p>
                    Quelques-uns de ces membres fondateurs font encore aujourd'hui, après 43 ans, toujours partie de notre section et participent aux différentes activités de la section. 
Bravo d'avoir su garder intact leur enthousiasme et leur passion. 
                </p>
                <p>Le premier comité formé lors de cette assemblée était le suivant :
                    <ul>
                        <li>Georges Guibelin : Président</li> 
                        <li>Raymon Ebener : Secrétaire </li>
                        <li>Jean Schmid : Caissier et secrétaire germanophone</li> 
                        <li>Jean Lathion : Vérificateur des comptes </li>
                        <li>Jean Burgener : Vérificateur des comptes</li> 
                        <li>Werner Pont : Suppléant</li>
                    </ul>
                </p>
                <p>
                    Les personnes ont présidé la section sont
                    <ul>
                        <li> Gerges Guibelin : 1962 à 1964 </li>
                        <li>Jean Burgener : 1964 à 1968 </li>
                        <li>Walter Dubach : 1968 à 1976</li> 
                        <li>Edmond Rey : 1976 à 1979 </li>
                        <li>Henri Zufferey : 1979 à 1985</li> 
                        <li>Pierre Perren : 1985 à 1989 </li>
                        <li>Jean-Richard Gillioz : 1989 à 1994 </li>
                        <li>Olivier Besson : 1994 à 1999</li> 
                        <li>Christian Sierro : 1999 à 2004 </li>
                        <li>Baeriswyl P.-A. : 2004 à 2010</li>
                    </ul>
                </p>
                <p>Pobelle Frédéric: actuel</p>
                <p>La section se compose aujourd'hui de 84 membres après avoir culminé en 2000 à 95 membres. La tendance générale de désengagement
                de la vie associative ne nous épargne donc malheureusement pas. Nous avons aussi plus de difficultés qu'auparavant à mobiliser
                nos membres qui sont comme partout de plus en plus sollicités par leur engagements familliaux, professionnels, politiques,
                sportifs et autres.</p>
                <p>Notre section a déjà organisé les assemblées des délégués de :
                    <ul>
                        <li>1975 à Sierre</li> 
                        <li>1984 à Venthône</li> 
                        <li>1993 à Sion</li> 
                        <li>2003 à Martigny </li>
                    </ul>
                </p>
                <p>Nous organisons depuis six ans une participation au forum des métiers de Villeneuve.Cette promotion du métier n'est possible
                qu'avec le soutient de la section valaisanne de Swissmechanic que je tiens à remercier. La collaboration entre nos deux associations
                fonctionne parfaitement et le courant passe très bien entre les membres de nos deux corporations.</p>
                <p>Christian Sierro</p>
            </div>
        </div>
    </div>
@stop()