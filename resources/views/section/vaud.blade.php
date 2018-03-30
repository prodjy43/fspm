@extends('layouts.app')

@section('title')
    Vaud Geneve
@stop()
@section('content')
    <div class="banner" style="background-image:url({{asset('images/vaudbanner.jpg')}})">
        <div class="opacity">
            <h1>Bienvenue sur notre section</h1>
            <span class="cut-banner"></span>
            <h1>Vaud - Geneve</h1>
            <p>
                <img src="{{asset('images/vaud.png')}}" width="150px">
                <img src="{{asset('images/geneve.png')}}" width="150px">
            <p>
        </div>
    </div>
    <div class="allnews">
        <div class="news">
            <div class="news-content">
                <h2>AGOD 2018</h2>
                <p>La section VD-GE a l'honneur d'organiser l'AGOD 2018 le samedi 21 avril 2018.</p>
                <p>Réservez d'ores et déjà cette date.</p>
                <h3>Fichiers</h3>
                <div class="pdf-download">
                    <a class="pdf" href="/data/download/Objets/Id_738_02_Courrier_Inscription_AGOD%202018.docx"><div>
                        <img src="{{ asset('images/docx.png')}}" width="200px">
                        <p>Informations et inscription membre</p>
                    </div></a>
                    <a class="pdf" href="/data/download/Objets/Id_739_03_Courrier_Annonceurs%20carnet%20de%20f%C3%AAtes_AGOD%202018.docx"><div>
                        <img src="{{ asset('images/docx.png')}}" width="200px">
                        <p>Envie de sponsoriser notre manifestation? Informations et inscription</p>
                    </div></a>
                </div>
            </div>
        </div>
        <div class="news">
            <div class="news-content">
                <h1>Visite de Bumotec SA à Vuadens</h1>
                <p>Venez nombreux visiter Bumotec SA le mercredi 14 février 2018.</p>
                <p>Bumotec SA appartient à Starrag Group, qui occupe sur le marché mondial une position de leader technologique dans la fabrication de machines-outils de précision.</p>
                <p>Prenez vos amis et connaissances avec vous afin de faire connaître notre association.</p>
                <h3>Fichiers</h3>
                <div class="pdf-download">
                    <a class="pdf" href="/data/download/Objets/Id_737_Visite Bumotec SA avis.pdf"><div>
                        <img src="{{ asset('images/pdf.png')}}" width="200px">
                        <p>Informations et inscriptions</p>
                    </div></a>
                </div>
            </div>
        </div>
        <div class="news">
            <div class="news-content">
                <h2>Comité</h2>
                <p>
                    Pour contacter votre comité: <a href="mailto:VDGE@fspm.ch">VDGE@fspm.ch</a>
                </p>
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
                                <td><a href="#">Domingo Olaya</a></td>
                                <td>Président</td>
                            </tr>
                            <tr>
                                <td><a href="#">Nicolino Casula</a></td>
                                <td>Vice président</td>
                            </tr>
                            <tr>
                                <td><a href="#">Alexandre Gaillard</a></d>
                                <td>Membre</td>
                            </tr>
                            <tr>
                                <td><a href="#">Corinne Veulliez</a></td>
                                <td>Secrétaire/Comptabilité</td>
                            </tr>
                        </tbody>
                    </table>
                </p>
            </div>
        </div>
        <div class="news">
            <div class="news-content">
                <h1>La commission technique</h1>
                <p>La commission technique fut crée lors de l'assemblée annuelle de section qui c'est tenue à Bex en 1989, suite à la proposition de M. Raymond Keller et de M. Daniel Ruchet.</p>
                <p>Le but de cette commission est d'organiser des visites, des conférences et toutes autres manifestations afin permettre aux membres de s'imformer et de parfaire leurs connaissances professionnelles et techniques.</p>
                <p>Elle est composée de 5 à 6 membres</p>
                <p>
                    <table>
                        <thead>
                            <tr>
                                <th>Personnes de contact</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#Chevalley" onclick="popup('#Chevalley')">CHEVALLEY Albert</a></td>
                            </tr>
                            <tr>
                                <td><a href="#Gaud" onclick="popup('#Gaud')">GAUD Michel</a></td>
                            </tr>
                            <tr>
                                <td><a href="#Giger" onclick="popup('#Giger')">GIGER Heinz</a></d>
                            </tr>
                            <tr>
                                <td><a href="#Jacot" onclick="popup('#Jacot')">JACOT Maurice</a></td>
                            </tr>
                            <tr>
                                <td><a href="#Matthey" onclick="popup('#Matthey')">MATTHEY Patrick</a></td>
                            </tr>
                        </tbody>
                    </table>
                </p>
            </div>
        </div>
        <div class="news">
            <div class="news-content">
                <h2>Un peu d'histoire</h2>
                <h3>Création de la fédération et de la section</h3>
                <p>Il y a un peu plus de 40 ans, quelques Maîtres Mécaniciens Diplômés avaient pris l'habitude de se retrouver autour d'un pot
                "Genevois" pour faire le coup. " et si nous faisons une petite association ?" Et c'était le début d'une grande aventure.
                En compulsant le cahier des procès-verbaux de la section de Genève, on peut lire en première page l'en-tête suivant :</p>
                <p><b>"l'Assemblée Générale du 17 décembre 1956, Café du Portail, 9, rue de la Servette".</b></p>
                <p>Nous continuons la lecture,&nbsp; "le président
                <strong>DELIEUTRAZ</strong> déclare la séance ouverte&nbsp; 20.45h . Le comité a reçu une lettre de M.
                <strong>ROCHAT </strong>à Lausanne qui désire créer une association de Maîtres Mécaniciens Diplômés&nbsp;&nbsp;dans cette ville".
                Le moins qu'on puisse dire, ça bouge autours du Léman! Qu'est-ce qu'il suivait? Reprenons la lecture de notre chahier si
                vous voulez :&nbsp; "Assemblée Générale du18 mars1957".&nbsp;&nbsp; "L'assemblée passe à la discussion de nos relations avec
                l'association des
                <strong>M.M.D</strong>. en formation à Lausanne. M.
                <strong>JOLLER</strong> pense tout d'abord qu'il faudrait déléguer quelqu'un du comité pour prendre contact avec M.
                <strong>ROCHAT</strong>, étant bien entendu que la question de savoir si l'on veut quelque chose en commun ne se pose même pas. M.
                <strong>JACOT</strong> estime qu'il est plus constructif de poser des jalons pour un travail en commun et pense, avec M.
                <strong>JOLLER</strong> et M.
                <strong>KÜNG</strong>, qu'il faut s'orienter vers une Fédération romande d'associations cantonales car les problèmes à résoudre varient
                énormément d'un canton à l'autre. D'autre part, la fondation d'une Fédération romande ne pourra qu'inciter d'autres
                <strong>M.M.D</strong>. à se grouper Ceci se passait à Lausanne, le 6 décembre 1957 au restaurant des Deux Gares. A l'appel de M.
                <strong>MARTI</strong>, directeur de l'Ecole des Métiers de Lausanne, et de M. Charles
                <strong>ROCHAT</strong>, 24 Maîtres Mécaniciens Diplômés vaudois répondirent présents pour jeter les bases d'un éventuel groupement
                des Maîtres Mécaniciens Diplômés. Il existait bien déjà, à cette époque, une société dont le siège était à Zurich et qui
                s'intitulait : "Société suisse des Maîtres Mécaniciens Diplômés" qui ne groupait que des patrons dont certains n'étaient
                même pas titulaires de la Maîtrise Fédérale. Cette société, reconnue par
                <strong>l'OFIAMT</strong> organisait les examens de maîtrise mais refusait l'entrée en son sein aux Maîtres Mécaniciens Diplômés
                qui n'étaient pas patrons. Ainsi, employés, cadres, enseignants se voyaient laissés pour compte. De là, l'idée de se grouper,
                sur le plan romand d'abord et de ne faire aucune discrimination entre patrons, employés, cadres et enseignants. M.
                <strong>PIGUET</strong>, président de l'Association des Maîtres Mécaniciens en automobile, présenta l'organisation de la société
                dans la branche automobile et forma ses vœux pour notre future union. M.
                <strong>MARTI</strong> nous conseilla de nous organiser afin de pouvoir discuter entre autre avec l'Association romande des industriels.
                M.
                <strong>ROCHAT</strong>, en l'absence d'un membre de l'Association genevoise des Maîtres Mécaniciens Diplômés nous parla de celle-ci.
                Forte d'une trentaine de membres, elle rencontre de grandes difficultés aussi bien sur le plan cantonal que vis-à-vis de
                l'industrie. Après une discussion étoffée, il fut décidé à l'unanimité de fonder une association. Un comité provisoire fut
                nommé.</p>
                <p>Composé de Messieurs :
                    <ul>
                        <li><b>ROCHAT</b> Charles président</li> 
                        <li><b>BEBOUX</b> Jean secrétaire</li>
                        <li><b>RANDIN</b> Jean-Claude caissier</li>
                    </ul>
                </p>
                <p>
                     l était chargé d'élaborer un projet de statuts. Il fut bien précisé que le titre de maîtrise serait exigé. Trois séances
                    furent nécessaires pour rédiger les statuts, avec l'aide de M. MAYOR, secrétaire patronal, après quoi le comité provisoire
                    convoquait l'assemblée constitutive. Ces statuts ont été transmis pour information au Service de la formation professionnelle
                    du canton de Vaud, à l'Association des Maîtres Mécaniciens Diplômés de Genève et à la Société suisse des Maîtres mécaniciens
                    de Zürich. Le 21 février 1958, au secrétariat patronal à Lausanne, se déroule l'Assemblée constitutive de "l'Union des Maîtres
                    Mécaniciens Diplômés, section vaudoise". Les statuts proposés sont adoptés à l'unanimité des 21 Maîtres Mécaniciens Diplômés
                    présents.
                </p>
                <p>Un comité de trois membres est élu, composé de Messieurs :
                    <ul>
                        <li><b>BEBOUX</b> Jean président</li>
                        <li><b>ROSSIER</b> Maurice secrétaire</li>
                        <li><b>RANDIN</b> Jean-Claude caissier</li>
                    </ul>
                </p>
                <p>M.
                <strong>ROCHAT</strong> souhaite bonne chance à ce nouveau comité qui est vivement applaudi. La cotisation est fixée à Fr. 12.--
                et la finance d'entrée à Fr. 5.--. La société était née et démarrait dans ses nouvelles activités. Notons les points suivants
                : Un "Stamm" le premier vendredi de chaque mois. Formation de groupes de travail régionaux. Communiqués à la presse. Demande
                de reconnaissance par
                <strong>l'OFIAMT</strong>. Edition d'un bulletin. Sortie familiale. Décision de faire précéder l'Assemblée générale d'une visite,
                et de poursuivre par un repas en commun. Le 1er octobre 1958 à Nyon, réunion des comités vaudois et genevois et décision
                de fonder une Fédération. Le 29 octobre 1958 à Nyon, adoption des statuts de la Fédération. Le 28 novembre 1958 à Lausanne,
                assemblée extraordinaire de "l'Union vaudoise", adoption des statuts de la Fédération, modification des statuts de l'Union
                vaudoise, nomination des délégués à la Fédération soit : le comité accompagné de MM.
                <strong>BETTENS</strong>,
                <strong>GAUTHEY</strong> et
                <strong>FISCHER</strong>.</p>
                <p>Le
                <strong>1er décembre 1958 </strong>à Lausanne, assemblée constitutive de la "Fédération suisse des maîtres mécaniciens diplômés"
                ; M. Maurice
                <strong>GUEY</strong> (Genève) est élu président. Assemblée générale des délégués de la Fédération Suisse des Maîtres Mécaniciens
                Diplômés à Genève le 2 mars 1959 ; acceptation par
                <strong>l'OFIAMT</strong> de la Fédération. Le journal "La Revue polytechnique" est désignée comme organe officiel. Le 6 février
                1960, M. Maurice
                <strong>ROSSIER</strong> est élu président. Le 8 juillet 1960, reconnaissance de notre section par le Conseil d'Etat Vaudois comme
                groupement professionnel au sens de la loi du 12 décembre 1944 sur l'organisation professionnelle. Le 24 janvier 1961, prise
                de contact avec les Industries vaudoises qui sont représentées par M.
                <strong>BAUMGARTNER</strong> pour faire connaître les Maîtres Mécaniciens Diplômés.</p>
                <p>Le 4 février 1961, cinq membres sont nommés pour faire partie de la Commission cantonale d'examens, ce sont Messieurs :
                    <ul>
                        <li><b>BAUMBERGER</b> Charles</li>
                        <li><b>BETTENS</b> Jean-Paul</li>
                        <li><b>BOLOMEY</b> Jaques</li>
                        <li><b>FRIEDERICH</b> René</li>
                        <li><b>GAUTHEY</b> William</li>
                    </ul>
                </p>
                <p>Changement de statuts : "Union des maîtres mécaniciens" se transforme en "Section vaudoise des Maîtres Mécaniciens Diplômés".
                Sont nommés présidents, Messieurs: Horace
                <strong>GLOOR</strong> en février 1963 Alfred
                <strong>CHOLLY</strong> en février 1966 Maurice
                <strong>SCHMALZ</strong> en février 1970 En 1971, débutaient des discussions pour la création d'une "journée de l'apprenti" avec
                les thèmes suivants : structure des examens finaux systèmes de taxation possibilités futures faire connaître la maîtrise
                éventuellement organiser une fête aider le Service de la formation professionnelle Une commission fut mise sur pied.</p>
                <p>Formée de Messieurs :
                    <ul>
                        <li><b>GLOOR</b> Horace</li>
                        <li><b>GUIBELIN</b></li>
                    </ul>
                </p>
            </div>
        </div>
        <div class="news">
            <div class="news-content">
                <h2>Status de section</h2>
                <h3>Fichiers</h3>
                <div class="pdf-download">
                    <a class="pdf" href="/data/download/Objets/d_278_Statuts%20section%20VD-GE_03.11.2012.pdf">
                        <div>
                            <img src="{{ asset('images/pdf.png')}}" width="200px">
                            <p>Nouveaux STATUS DE SECTION du 03.11.2012</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="popup" id="Chevalley">
        <div class="popup-content">
            <h1>Chevalley Albert</h1>
            <p>Tel. privé : 021 921 70 69</p>
            <p>E-mail : <a href="mailto:albertchevalley@bluewin.ch">albertchevalley@bluewin.ch</a></p>
        </div>
        <div class="popup-image" style="background-image:url({{asset('images/commission/Chevalley.jpg')}})">
            
        </div>
    </div>
    <div class="popup" id="Gaud">
        <div class="popup-content">
            <h1>Gaud Michel</h1>
            <p>Tel. privé : 022 771 29 24</p>
            <p>E-mail :
                <a href="mailto:gmgaud@infomaniak.ch">gmgaud@infomaniak.ch</a>
            </p>
        </div>
        <div class="popup-image" style="background-image:url({{asset('images/commission/Gaud.jpg')}})">
    
        </div>
    </div>
    <div class="popup" id="Giger">
        <div class="popup-content">
            <h1>Giger Heinz</h1>
            <p>Tel. privé : 021 781 25 08</p>
            <p>E-mail :
                <a href="mailto:heinz.giger@bobstgroup.com">heinz.giger@bobstgroup.com</a>
            </p>
        </div>
        <div class="popup-image" style="background-image:url({{asset('images/commission/Giger.jpg')}})">
    
        </div>
    </div>
    <div class="popup" id="Jacot">
        <div class="popup-content">
            <h1>Jacot Maurice</h1>
            <p>Tel. privé : 021 943 16 38</p>
            <p>E-mail :
                <a href="mailto:acot-brunner@bluewin.ch">acot-brunner@bluewin.ch</a>
            </p>
        </div>
        <div class="popup-image" style="background-image:url({{asset('images/commission/Jacot.jpg')}})">
    
        </div>
    </div>
    <div class="popup" id="Matthey">
        <div class="popup-content">
            <h1>Matthey Patrick</h1>
            <p>Tel. privé : 021 791 38 43</p>
        </div>
        <div class="popup-image" style="background-image:url({{asset('images/commission/Matthey.jpg')}})">
    
        </div>
    </div>
@stop()