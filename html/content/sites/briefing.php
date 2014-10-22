<main>
  <div class="row">
    <div class="large-12 columns half-padding text-center">
      <h1 id="headline">Ausschreibung erstellen</h1>
      <h2 class="subline">in 5 Minuten zum fertigen Briefing</h2>
    </div>
  </div>
  <!-- Sticky Pagination -->
  <div id="form-pagination">
    <div class="row padding-bottom" id="form-instruction">
      <i class="fa fa-question fa-fw"></i> Tipps zum Formular
      <ul>
        <li><span>Unterwellte Worte besitzen Tooltipps</span></li>
        <li><span>Mit * gekennzeichnete Angaben sind zwingend notwendig</span></li>
        <li><span>Über das Symbol <i class="fa fa-question fa-fw"></i> können Sie Bereiche um ein individuelles Kommentar ergänzen</span></li>
        <li><span>Mit der Navigation am oberen Seitenrand können Sie zu den einzelnen Abschnitten wechseln</span></li>  
      </ul>
    </div>

    <div class="row padding-bottom">
      <div class="small-12 columns">
        <div data-magellan-expedition="fixed">      
          <dl class="sub-nav"> 
            <dd data-magellan-arrival="1"><a href="#1">Allgemeines</a></dd>
            <dd data-magellan-arrival="2"><a href="#2">Inhalt</a></dd>
            <dd data-magellan-arrival="4"><a href="#4">Funktionen</a></dd>
            <dd data-magellan-arrival="3"><a href="#3">Design</a></dd>
            <dd data-magellan-arrival="5"><a href="#5">Service</a></dd>      
          </dl>   
        </div>
      </div>
    </div>
    <br class="end" />
  </div> 

  <div id="briefing-form">     
    <form action="index.php?page=briefing_s" method="POST">

      <!-- Step -->
      <div class="row">

        <h2 data-magellan-destination="1">Allgemeines<span class="add-comment"><a href="" data-reveal-id="myModal"><i class="fa fa-question fa-fw"></i></a></span></h2> 
        <a name="1"></a>
        <h3 class="subline">Grundlegendes zum Auftraggeber</h3>

        <div class="medium-6 columns">
          <label for="email">Name</label>
          <input type="text" id="remail" placeholder="Max Mustermann">
        </div>

        <div class="medium-6 columns">
          <label for="email">E-mail</label>
          <input type="text" id="remail" placeholder="max@mustermann.at">
        </div>   

        <div class="medium-6 columns">
          <label for="email">Firma</label>
          <input type="text" id="remail" placeholder="Firma GmbH">
        </div>

        <div class="medium-6 columns">
          <label for="email">Branche</label>
          <input type="text" id="remail" placeholder="Baugewerbe">
        </div>

        <div class="medium-6 columns">
          <label for="email">Land</label>
          <input type="text" id="remail" placeholder="Österreich">
        </div>

        <div class="medium-4 columns">
          <label for="email">Bundesland</label>
          <input type="text" id="remail" placeholder="Wien">
        </div>

        <div class="medium-2 columns">
          <label for="email">Mitarbeiter</label>
          <input type="text" id="remail" placeholder="12">
        </div>

        <div class="medium-12 columns">
          <label for="email">Beschreibung des Unternehmens</label>
          <textarea type="text" id="remail" rows="3" placeholder="Unser Unternehmen befasst sich mit der..."></textarea>
        </div>     

        <!-- Step -->
        <div class="row">

          <h2 data-magellan-destination="2">Inhalt der Website<span class="add-comment"><a href="" data-reveal-id="myModal"><i class="fa fa-question fa-fw"></i></a></span></h2> 
          <a name="2"></a>
          <h3 class="subline">Der strukturelle Aufbau</h3>
          <label for="email">Welche <span data-tooltip aria-haspopup="true" class="has-tip formtipp" title="Naja, was könnte wohl mit 'Unterseite' gemeint sein?">Unterseiten</span> wird die Seite voraussichtlich besitzen?</label><br >
          <div class="medium-4 columns">
            <input id="checkbox1" type="checkbox" checked disabled> Startseite<br />
            <input id="checkbox1" type="checkbox" checked disabled> Impressum<br />
            <input id="checkbox1" type="checkbox"> Produktvorstellung <br />

          </div>
          <div class="medium-4 columns">
            <input id="checkbox1" type="checkbox"> Portfolio<br />
            <input id="checkbox1" type="checkbox"> Kontaktseite<br />
            <input id="checkbox1" type="checkbox"> AGB-Seite<br />

          </div>
          <div class="medium-4 columns">
            <input id="checkbox1" type="checkbox"> Teamvorstellung<br />
            <input id="checkbox1" type="checkbox"> Downloadbereich<br />
            <input id="checkbox1" type="checkbox"> F.A.Q - Seite<br />
          </div>


          <div class="row">
            <h3 class="subline">Der textuelle Inhalt</h3>
            <label for="email">Welche Aufgaben soll der Designer bezüglich der Texterstellung übernehmen?</label><br >
            <div class="medium-12 columns">             
              <input id="checkbox1" type="radio"> Designer erhält fertigen Text<br />
              <input id="checkbox1" type="radio"> Designer bereitet vorhandenen Text auf<br />
              <input id="checkbox1" type="radio"> Designer erstellt individuellen Text<br />
            </div>
          </div>

          <div class="row">
            <h3 class="subline">Der grafische Inhalt</h3>
            <label for="email">Welche Aufgaben soll der Designer bezüglich der Grafikgestaltung übernehmen?</label><br >
            <div class="medium-12 columns">             
              <input id="checkbox1" type="radio"> Designer erhält fertige Grafiken<br />
              <input id="checkbox1" type="radio"> Designer bereitet vorhandene Grafiken auf<br />
              <input id="checkbox1" type="radio"> Designer erstellt individuelle Grafiken<br />
            </div>
          </div>

          <!-- Step -->
          <div class="row">

            <h2 data-magellan-destination="4">Funktionalität<span class="add-comment"><a href="" data-reveal-id="myModal"><i class="fa fa-question fa-fw"></i></a></span></h2> 
            <a name="4"></a>
            <h3 class="subline">Seiteninterne Funktionen</h3>

            <div class="medium-4 columns">
              <input id="checkbox1" type="checkbox"> Mehrsprachigkeit <br />
              <input id="checkbox1" type="checkbox"> Kommentarfunktion<br />
              <input id="checkbox1" type="checkbox"> Spendenformular<br />
              <input id="checkbox1" type="checkbox"> Terminkalender<br />
            </div>

            <div class="medium-4 columns">
              <input id="checkbox1" type="checkbox"> Buchungssystem<br />
              <input id="checkbox1" type="checkbox"> Bestellsystem<br />
              <input id="checkbox1" type="checkbox"> Umfragefunktion<br />
              <input id="checkbox1" type="checkbox"> Interner Bereich<br />
            </div>

            <div class="medium-4 columns">
              <input id="checkbox1" type="checkbox"> Suchfunktion<br />
              <input id="checkbox1" type="checkbox"> E-mail Newsletter <br />
              <input id="checkbox1" type="checkbox"> Bildergallerie<br />
              <input id="checkbox1" type="checkbox"> Kontaktformular<br />
            </div>
          </div>

          <div class="row">
            <h3 class="subline">Externe Programme</h3> 
            <input id="checkbox1" type="checkbox"> Blog<br />
            <input id="checkbox1" type="checkbox"> Forum<br />
            <input id="checkbox1" type="checkbox"> Wiki<br />
            <input id="checkbox1" type="checkbox"> Online Shop<br />
          </div>

          <div class="row">
            <h3 class="subline">Erweitertes Nutzererlebnis</h3> 
            <div class="medium-10 columns">
              <strong>Barrierefreiheit</strong><br />Wird die Seiter voraussichtlich häufig von Personen mit ausgeprägter Sehschwäche genutzt und muss daher besonders barierefrei sein
              (Screen-Reader kompatibel, kontrastreiche Darstellungsoption, individuelle Einstellung der Schriftgröße...) und auch in älteren Browsern funktionieren?
            </div>
            <div class="medium-2 columns center-input">
              <input id="checkbox1" name="radio" type="radio"> Ja<br />
              <input id="checkbox2" name="radio" type="radio"> Nein<br />
            </div>
            <hr />
            <div class="medium-10 columns">
             <strong>Mobile Version</strong><br />Soll es eine optimierte Version für die Darstellung auf mobilen Geräten wie z.B. Smartphones oder Tablets geben?
           </div>
           <div class="medium-2 columns">
            <input id="checkbox1" name="radio" type="radio"> Ja<br />
            <input id="checkbox2" name="radio" type="radio"> Nein<br />
          </div>
        </div>
        <!-- Step -->
        <div class="row">
         <h2 data-magellan-destination="3">Design<span class="add-comment"><a href="" data-reveal-id="myModal"><i class="fa fa-question fa-fw"></i></a></span></h2> 
         <a name="3"></a>

         <h3 class="subline">Das grafische Konzept</h3>
         <label for="email">Welche Aufgabe soll der Designer bezüglich der grafischen Gestaltung übernehmen?</label><br >
         <div class="medium-12 columns">             
          <input id="checkbox1" type="radio"> Designer setzt vorhandenes Design um<br />
          <input id="checkbox1" type="radio"> Designer erstellt individuelles Design<br />
          <input id="checkbox1" type="radio"> Designer erstellt individuelles Design anhand bestehender CD-Richtlinien <br />
          <input id="checkbox1" type="radio"> Designer passt ausgewähltes Template an die Bedürfnisse des Kunden an<br />
        </div>
      </div>

      <div class="row medium-6">
        <div class="large-12 columns">
          <label for="email">Welche Eigenschaften soll die Seite vermitteln?</label><br >
          <textarea type="text" id="remail" rows="3" placeholder="edel, seriös, teuer, einzigartig, limitiert..."></textarea>
        </div>
      </div>

      <div class="row">
        <label for="email">Die Seite soll / soll nicht aussehen wie folgende Mitbewerberseiten</label>
        <div class="medium-6 columns">
          <label for="email" class="green-font">positive Referenz</label>
          <textarea type="text" id="remail" rows="3" placeholder="http://www.gute-beispielseite.at"></textarea>
        </div>
        <div class="medium-6 columns">
          <label for="email" class="orange-font">negative Referenz</label>
          <textarea type="text" id="remail" rows="3" placeholder="http://www.schlechte-beispielseite.at"></textarea>
        </div>
      </div>

      <div class="row">
        <h2 data-magellan-destination="5">Service<span class="add-comment"><a href="" data-reveal-id="myModal"><i class="fa fa-question fa-fw"></i></a></span></h2> 
        <a name="5"></a>
        <h3 class="subline">Welche Dienstleistungen werden benötigt?</h3>
        <div class="medium-10 columns">
          <label for="email">Wer stellt den Server für die Seite bereit?</label>
        </div>
        <div class="medium-2 columns">
          <input id="checkbox1" name="radio" type="radio"> Designer<br />
          <input id="checkbox2" name="radio" type="radio"> Kunde<br />
        </div>
        <hr />
        <div class="medium-10 columns">
          <label for="email">Wer registriert die Domain?</label>
        </div>
        <div class="medium-2 columns">
          <input id="checkbox1" name="radio" type="radio"> Designer<br />
          <input id="checkbox2" name="radio" type="radio"> Kunde<br />
        </div>
        <hr />
        <div class="medium-10 columns">
          <label for="email">Benötigen Sie E-mail Adressen?</label>
        </div>
        <div class="medium-2 columns">
          <input id="checkbox1" name="radio" type="radio"> Ja<br />
          <input id="checkbox2" name="radio" type="radio"> Nein<br />
        </div>
        <hr />
        <div class="medium-10 columns">
          <label for="email">Benötigen Sie detaillierte Nutzungsstatistiken?</label>
        </div>
        <div class="medium-2 columns">
          <input id="checkbox1" name="radio" type="radio"> Ja<br />
          <input id="checkbox2" name="radio" type="radio"> Nein<br />

        </div>
        <hr />
        <div class="medium-10 columns">
          <label for="email">Sollen Mitarbeiter in die Pflege & Wartung der Seite eingeschult werden?</label>
        </div>
        <div class="medium-2 columns">
          <input id="checkbox1" name="radio" type="radio"> Ja<br />
          <input id="checkbox2" name="radio" type="radio"> Nein<br />
        </div>
        <hr />
        <div class="medium-10 columns">
          <label for="email"> Möchten Sie die Seite durch die Schaltung bezahlter Werbung in Suchmaschinen oder sozialen Netzwerken bewerben?</label>
        </div>
        <div class="medium-2 columns">
         <input id="checkbox1" name="radio" type="radio"> Ja<br />
         <input id="checkbox2" name="radio" type="radio"> Nein<br />
       </div>
     </div>
     <hr>
     <h3 class="subline">Ergänzende Bemerkungen</h3>
     Hier können Sie ergänzende Anmerkungen zu dem gesamten Projekt beifügen.
     <textarea type="text" id="remail" rows="3" placeholder="Mir ist besonders wichtig, dass..."></textarea>

     <h2 class="freestyle padding-bottom">geschafft!</h2>

     <input id="checkbox1" type="checkbox" checked> 
     Ich möchte automatisch per E-mail über neue Bewerber informiert werden  <br />     

     <input id="checkbox1" type="checkbox"> 
     Ich stimme den <a href="">Datenschutzbestimmungen</a> zu

     <br class="full-padding">
     <div class="large-12 columns text-center padding-top">
      <button type="submit" class="button">Absenden</button>
    </div>
  </form>
</div>
</main>


<div id="myModal" class="reveal-modal" data-reveal>
  <h2>Kommentar hinzufügen</h2>
  <p class="lead">Bereich: Allgemeines</p>
  <textarea type="text" id="remail" rows="3" placeholder="Ich möchte noch ergänzen, dass mir wichtig ist..."></textarea>
  <a href="" class="button">Hinzufügen</a>
  <a class="close-reveal-modal">&#215;</a>
</div>
