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
      <div class="agenda">
        <table>
          <thead>
            <tr>
              <th>Date</th>
              <th>Durée</th>
              <th>Evenement</th>
              <th>Lieu</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>21.03.18 <br> 25.03.18</td>
              <td>JOURNÉE</td>
              <td>Salon Interjurassien de la Formation (Forum de l'Arc)</td>
              <td>CH-MOUTIER</td>
            </tr>
            <tr>
              <td>21.03.18 <br> 27.03.18</td>
              <td>JOURNÉE</td>
              <td>TECHNICAL WATCHMAKER SHOW</td>
              <td>CH-LA CHX-DE-FONDS</td>
            </tr>
            <tr class="bold">
              <td>24.03.18</td>
              <td>MATINÉE</td>
              <td>Remise Brevet d'expert en production FNV4 Swissmechanic</td>
              <td>CH-LAUSANNE</td>
            </tr>
            <tr>
              <td>27.03.18 <br> 30.03.18</td>
              <td>JOURNÉE</td>
              <td>INDUSTRIE 2018 (Midest, Smart Industries, Tolexpo)</td>
              <td>F-PARIS</td>
            </tr>
            <tr>
              <td>17.04.18 <br> 20.04.18</td>
              <td>JOURNÉE</td>
              <td>SIAMS (Le salon des moyens de production microtechnique)</td>
              <td>CH-MOUTIER</td>
            </tr>
            <tr class="bold">
              <td>21.04.18</td>
              <td>JOURNÉE</td>
              <td>61<sup>éme</sup> AGOD FSPM (Sections VD-GE)</td>
              <td>CH-BURSINS</td>
            </tr>
            <tr>
              <td>15.05.18</td>
              <td>JOURNÉE</td>
              <td>AGOD GIM-CH / Marcel Boschung AG</td>
              <td>CH-PAYERNE</td>
            </tr>
            <tr>
              <td>28.05.18 <br> 01.06.18</td>
              <td>JOURNÉE</td>
              <td>30BIEMH (International Machine-Tool Exibition)</td>
              <td>E-BILBAO</td>
            </tr>
            <tr>
              <td>12.06.18 <br> 15.06.18</td>
              <td>JOURNÉE</td>
              <td>EPHJ-EPMT-SMT 15<sup>éme</sup> Salon international horloger PALEXPO</td>
              <td>CH-GENEVE</td>
            </tr>
            <tr>
              <td>06.09.18 <br> 12.09.18</td>
              <td>JOURNÉE</td>
              <td>CAPA'CITÉ 2018 (Salon des métiers de Neuchâtel)</td>
              <td>CH-NEUCHÂTEL</td>
            </tr>
            <tr class="bold">
              <td>07.09.18</td>
              <td>JOURNÉE</td>
              <td>EVENT FSPM 2018</td>
              <td>CH-Â DÉFINIR</td>
            </tr>
            <tr>
              <td>09.10.18 <br> 13.10.18</td>
              <td>JOURNÉE</td>
              <td>21BIMU (Metal forming and Metal cutting machines technology)</td>
              <td>I-MILANO (RHO)</td>
            </tr>
            <tr>
              <td>27.11.18 <br> 02.12.18</td>
              <td>JOURNÉE</td>
              <td>Salon des Métiers et de la Formation de Lausanne (Beaulieu)</td>
              <td>CH-LAUSANNE</td>
            </tr>
            <tr>
              <td>29.11.18</td>
              <td>JOURNÉE</td>
              <td>AGE GIM-CH</td>
              <td>CH-Â DÉFINIR</td>
            </tr>
            <tr>
              <td>11.12.18 <br> 14.12.18</td>
              <td>JOURNÉE</td>
              <td>INDUSTRIALIS BERNEXPO (L'industrie suisse au coeur)</td>
              <td>CH-BERN</td>
            </tr>
            <tr>
              <td>30.01.2019</td>
              <td>JOURNÉE</td>
              <td>TECHNOPOLIS / GIM-CH</td>
              <td>CH-Â DÉFINIR</td>
            </tr>
            <tr>
              <td>14.05.19 <br> 17.05.19</td>
              <td>JOURNÉE</td>
              <td>PRODEX (Salon International de la Machine-Outil)</td>
              <td>CH-BASEL</td>
            </tr>
            <tr>
              <td>14.05.19 <br> 17.05.19</td>
              <td>JOURNÉE</td>
              <td>SWISSTECH (Salon international dela sous-traitance)</td>
              <td>CH-BASEL</td>
            </tr>
            <tr>
              <td>16.09.19 <br> 21.09.19</td>
              <td>JOURNÉE</td>
              <td>EMO (The World of Metalworking)</td>
              <td>D-HANNOVER</td>
            </tr>
          </tbody>
        </table>
      </div>
</div>
@stop()
@section('footer')
    <footer>
        <p>Fédération Suisse des Professionnels de la Mécanique Rue du Collège 25 | 2043 BOUDEVILLIERS | <a href="mailto:info@fspm.ch">info@fspm.ch</a></p>
    </footer>
@stop()