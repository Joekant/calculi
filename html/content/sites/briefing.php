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
      <ul>
       <li><span>Mit <span class="required">*</span> gekennzeichnete Angaben sind zwingend notwendig</span></li>
       <li><span>Unterwellte Worte besitzen Tooltipps</span></li>
       <li><span>Mit der Navigation am oberen Seitenrand können Sie zu den einzelnen Abschnitten wechseln</span></li>  
     </ul>
   </div>

   <div class="row">
    <div class="small-12 columns">
      <div data-magellan-expedition="fixed">
        <dl class="sub-nav">         
          <dd data-magellan-arrival="1"><a href="#1">Allgemeines</a></dd>
          <dd data-magellan-arrival="2"><a href="#2">Inhalt</a></dd>
          <dd data-magellan-arrival="4"><a href="#4">Funktionalität</a></dd>
          <dd data-magellan-arrival="3"><a href="#3">Design</a></dd>
          <dd data-magellan-arrival="5"><a href="#5">Service</a></dd>      
        </dl>  
      </div>
    </div>
  </div>
  <br class="end" />
</div> 

<div id="briefing-form">     
  <form data-abide action="index.php?page=briefing_s" method="POST">

    <!-- Step -->
    

    <div class="form-step dark-bg primary-full-border">

      <h2 data-magellan-destination="1">Allgemeines<a name="1"></a></h2> 
      
    </div>
    <div class="row">
      <div class="medium-6 columns">
        <label for="i_name">Name<span class="required">*</span>
          <input type="text" id="i_name" name="i_name" value="Max Mustermann">
        </label>
        <small class="error">Name is required and must be a string.</small>
      </div>

      <div class="medium-6 columns">
        <label for="i_email">E-mail<span class="required">*</span></label>
        <input type="email" id="i_email" name="i_email" value="max@mustermann.at">
      </div>   
    </div>
    <div class="row">
      <div class="medium-6 columns">
        <label for="i_company">Firma<span class="required">*</span></label>
        <input type="text" id="i_company" name="i_company" value="Firma GmbH" >
      </div>

      <div class="medium-6 columns">
        <label for="i_website">Website</label>
        <input type="text" id="i_website" name="i_website" value="http://company-site.com" >
      </div>
    </div>

    <div class="row">
      <div class="medium-6 columns">
        <label for="s_country">Land<span class="required">*</span></label>
        <select id="s_country" name="s_country" >
          <option value="Österreich">Österreich</option>
          <option value="Deutschland" >Deutschland</option>
          <option value="Schweiz" >Schweiz</option>
        </select>
      </label>
    </div>
    <div class="medium-6 columns">
      <label for="s_state">Bundesland<span class="required">*</span></label>
      <select id="s_state" name="s_state" >
        <option value="Wien">Wien</option>
        <option value="Niederösterreich">Niederösterreich</option>
        <option value="Oberösterreich">Oberösterreich</option>
        <option value="Burgenland">Burgenland</option>
        <option value="Steiermark">Steiermark</option>
        <option value="Kärnten">Kärnten</option>
        <option value="Salzburg">Salzburg</option>
        <option value="Tirol">Tirol</option>
        <option value="Vorarlberg">Vorarlberg</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="medium-8 columns">
      <label for="t_description">Beschreibung des Unternehmens</label>
      <textarea type="text" id="t_description" name="t_description" rows="5">Unser Unternehmen befasst sich mit der...</textarea>
    </div>
    <div class="medium-4 columns">
      <label for="s_branche">Branche
        <datalist id="s_branche">
          <select id="s_branche" name="s_branche" name="s_branche">
            <option value="Gastronomie">Gastronomie</option>
            <option value="Gesundheitswesen">Gesundheitswesen</option>
            <option value="Kunst">Kunst</option>
            <option value="Handwerk">Handwerk</option>
            <option value="Technik">Technik</option>
            <option value="Unterhaltung">Unterhaltung</option>
          </select>    
        </datalist>
        <input type="text" name="s_branche" list="s_branche" >
      </label>

      <label for="s_employees">Mitarbeiter</label>
      <select id="s_employees" name="s_employees">
        <option value="1">1</option>
        <option value="2-5">2-5</option>
        <option value="5-10">5-10</option>
        <option value="10-20">10-20</option>
        <option value="20-50">20-50</option>
        <option value="50+">50+</option>
      </select>


    </div> 
  </div>
  <!-- Step -->
  <div class="form-step dark-bg primary-full-border">
    <h2 data-magellan-destination="2">Inhalt<a name="2"></a></h2> 

  </div>
  <div class="row">

    <label for="c_pages">Welche <span data-tooltip aria-haspopup="true" class="has-tip formtipp" title="Naja, was könnte wohl mit 'Unterseite' gemeint sein?">Unterseiten</span> wird die Seite voraussichtlich besitzen?</label><br >
    <div class="medium-4 columns">
      <input name="c_pages_home" id="c_pages_home" type="checkbox" checked disabled> Startseite<br />
      <input name="c_pages_legal" id="c_pages_legal" type="checkbox" checked disabled> Impressum<br />
      <input name="c_pages_products" id="c_pages_products" type="checkbox"> Produktvorstellung <br />

    </div>
    <div class="medium-4 columns">
      <input name="c_pages_portfolio" id="c_pages_portfolio" type="checkbox" checked> Portfolio<br />
      <input name="c_pages_contact" id="c_pages_contact" type="checkbox"> Kontaktseite<br />
      <input name="c_pages_agb" id="c_pages_agb" type="checkbox"> AGB-Seite<br />

    </div>

    <div class="medium-4 columns">
      <input name="c_pages_team" id="c_pages_team" type="checkbox"> Teamvorstellung<br />
      <input name="c_pages_download" id="c_pages_download" type="checkbox"> Downloadbereich<br />
      <input name="c_pages_faq" id="c_pages_faq" type="checkbox"> F.A.Q - Seite<br />
    </div>
  </div>
  <div class="row">
   <div class="large-6 columns">
    <label for="c_text">Wie soll der Text erstellt werden?<span class="required">*</span></label><br >
    <input name="c_text_rdy" id="c_text_rdy" type="checkbox" checked> Designer erhält fertigen Text<br />
    <input name="c_text_update" id="c_text_update" type="checkbox"> Designer bereitet vorhandenen Text auf<br />
    <input name="c_text_create" id="c_text_create" type="checkbox"> Designer erstellt individuellen Text<br />
  </div>
  <div class="large-6 columns">
    <label for="c_grafik">Wie sollen die Grafiken erstellt werden?<span class="required">*</span></label><br >
    <input name="c_grafik_rdy" id="c_grafik_rdy" type="checkbox"> Designer erhält fertige Grafiken<br />
    <input name="c_grafik_update" id="c_grafik_update" type="checkbox"> Designer bereitet vorhandene Grafiken auf<br />
    <input name="c_grafik_create" id="c_grafik_create" type="checkbox" checked> Designer erstellt individuelle Grafiken<br />
  </div>
</div>
<!-- Step -->
<div class="form-step dark-bg primary-full-border">
  <h2 data-magellan-destination="4">Funktionalität <a name="4"></a></h2> 
</div>

<div class="row">
  <label for="email">Welche Funktionen werden benötigt?<span class="required">*</span></label><br >
  <div class="medium-4 columns">
    <input id="c_function_ml" name="c_function_ml" type="checkbox" checked> Mehrsprachigkeit <br />
    <input id="c_function_comment" name="c_function_comment" type="checkbox"> Kommentarfunktion<br />
    <input id="c_function_donate" name="c_function_donate" type="checkbox"> Spendenformular<br />
    <input id="c_function_calender" name="c_function_calender" type="checkbox" checked> Terminkalender<br />
  </div>

  <div class="medium-4 columns">
    <input id="c_function_booking" name="c_function_booking" type="checkbox" checked> Buchungssystem<br />
    <input id="c_function_orderl" name="c_function_order" type="checkbox"> Bestellsystem<br />
    <input id="c_function_poll" name="c_function_poll" type="checkbox"> Umfragefunktion<br />
    <input id="c_function_intern" name="c_function_intern" type="checkbox"> Interner Bereich<br />
  </div>

  <div class="medium-4 columns">
    <input id="c_function_search" name="c_function_search" type="checkbox"> Suchfunktion<br />
    <input id="c_function_newsletter" name="c_function_newsletter" type="checkbox" checked> E-mail Newsletter <br />
    <input id="c_function_gallery" name="c_function_gallery" type="checkbox" checked> Bildergallerie<br />
    <input id="c_function_contact" name="c_function_contact" type="checkbox" checked> Kontaktformular<br />
  </div>
</div>

<div class="row">
  <div class="large-6 columns">
    <label for="r_cms">Möchten Sie Inhalte in Zukunft selbst bearbeiten oder hinzufügen können?<span class="required">*</span></label><br >
    <input id="r_cms_yes" name="r_cms" value="yes" type="radio" checked> Ja<br />
    <input id="r_cms_no" name="r_cms" value="no" type="radio"> Nein<br />  
  </div>
  <div class="large-6 columns">
    <label for="email">Sollen externe Plattformen integriert werden?</label><br >
    <div class="medium-3 columns"><input id="c_function_adv_blog" name="c_function_adv_blog" type="checkbox" checked> Blog</div>
    <div class="medium-3 columns"> <input id="c_function_adv_forum" name="c_function_adv_forum" type="checkbox"> Forum</div>
    <div class="medium-3 columns"><input id="c_function_adv_wikig" name="c_function_adv_wiki" type="checkbox"> Wiki</div>
    <div class="medium-3 columns"> <input id="c_function_adv_shop" name="c_function_adv_shop" type="checkbox"> Shop</div>
  </div>
</div>

<div class="row">
  <div class="large-6 columns">
    <label for="accessibility">Besteht ein erhöter Anspruch an die Barrierefreiheit?</label><br />
    <!--  Wird die Seiter voraussichtlich häufig von Personen mit ausgeprägter Sehschwäche genutzt und muss daher besonders barierefrei sein
    (Screen-Reader kompatibel, kontrastreiche Darstellungsoption, individuelle Einstellung der Schriftgröße...) und auch in älteren Browsern einwandfrei funktionieren? -->
    <input id="r_accessibility_yes" name="r_accessibility" value="yes" type="radio"> Ja<br />
    <input id="r_accessibility_no" name="r_accessibility" value="no" type="radio" checked> Nein<br />
  </div>
  <div class="large-6 columns">
   <label for="responsive">Benötigen Sie eine optimierte Version für mobile Geräte?<span class="required">*</span></label><br />
   <!-- Soll es eine optimierte Version für die Darstellung auf mobilen Geräten wie z.B. Smartphones oder Tablets geben? -->
   <input id="r_responsive_yes" name="r_responsive" value="yes" type="radio" checked> Ja<br />
   <input id="r_responsive_no" name="r_responsive" value="no" type="radio"> Nein<br />
 </div>
</div>


<!-- Step -->
<div class="form-step dark-bg primary-full-border">
  <h2 data-magellan-destination="3">Design<a name="3"></a></h2> 

</div>  
<div class="row">
  <label for="design">Wie soll das grafische Konzept der Seite erstellt werden?<span class="required">*</span></label><br >
  <div class="medium-12 columns">             
    <input id="r_design_rdy" name="design" value="rdy" type="radio"> Designer setzt vorhandenes Design um<br />
    <input id="r_design_create" name="design" value="create" type="radio" checked> Designer erstellt individuelles Design<br />
    <input id="r_design_createcd" name="design" value="createcd" type="radio"> Designer erstellt individuelles Design anhand bestehender CD-Richtlinien <br />
    <input id="r_design_template" name="design" value="template" type="radio"> Designer passt ausgewähltes Template an die Bedürfnisse des Kunden an<br />
  </div>


</div>
<div class="row">
 <label for="t_mood">Welche Eigenschaften soll die Seite vermitteln?</label>
 <textarea type="text" id="t_mood" name="t_mood" rows="3">edel, seriös, teuer, einzigartig, limitiert</textarea>

</div>

<div class="row">
  <label for="email">Die Seite soll / soll nicht aussehen wie folgende Mitbewerberseiten <br /><em>(mehrere Adressen untereinander durch Absatz getrennt)</em></label>
  <div class="medium-6 columns text-center">
    <label for="email" class="green-font">positive Referenz</label>
    <textarea type="text" id="t_reference_positiv" name="t_reference_positiv" rows="3">http://www.gute-beispielseite.at</textarea>
  </div>
  <div class="medium-6 columns text-center">
    <label for="email" class="orange-font">negative Referenz</label>
    <textarea type="text" id="t_reference_negative" name="t_reference_negative" rows="3" >http://www.schlechte-beispielseite.at</textarea>
  </div>
</div>


<div class="form-step dark-bg primary-full-border">
  <h2 data-magellan-destination="5">Service <a name="5"></a></h2> 

</div>
<div class="row">
  <div class="medium-9 columns">
    <label for="email">Wer stellt den Server für die Seite bereit?</label>
  </div>
  <div class="medium-3 columns">
    <input id="r_service_server_d" name="r_service_server" value="Designer" type="radio" checked> Designer <br />
    <input id="r_service_server_k" name="r_service_server" value="Kunde" type="radio"> Kunde
  </div>
  <hr />
  <div class="medium-9 columns">
    <label for="email">Wer registriert die Domain?</label>
  </div>
  <div class="medium-3 columns">
    <input id="r_service_domain_d" name="r_service_domain" value="Designer" type="radio" checked> Designer <br />
    <input id="r_service_domain_k" name="r_service_domain" value="Kunde" type="radio"> Kunde
  </div>
  <hr />
  <div class="medium-9 columns">
    <label for="email">Benötigen Sie E-mail Adressen?</label>
  </div>
  <div class="medium-3 columns">
    <input id="r_service_mail_y" name="r_service_mail" value="yes" type="radio" checked> Ja<br />
    <input id="r_service_mail_n" name="r_service_mail" value="no" type="radio"> Nein<br />
  </div>
  <hr />
  <div class="medium-9 columns">
    <label for="email">Benötigen Sie detaillierte Nutzungsstatistiken?</label>
  </div>
  <div class="medium-3 columns">
    <input id="r_service_statistics_y" name="r_service_statistics" value="yes" type="radio" checked> Ja<br />
    <input id="r_service_statistics_n" name="r_service_statistics" value="no" type="radio"> Nein<br />
  </div>
  <hr />
  <div class="medium-9 columns">
    <label for="email">Sollen Mitarbeiter in die Pflege & Wartung der Seite eingeschult werden?</label>
  </div>
  <div class="medium-3 columns">
    <input id="r_service_instructions_y" name="r_service_instructions" value="yes" type="radio" checked> Ja<br />
    <input id="r_service_instructions_n" name="r_service_instructions" value="no" type="radio"> Nein<br />
  </div>
  <hr />
  <div class="medium-9 columns">
    <label for="email"> Möchten Sie die Seite durch die Schaltung bezahlter Werbung in Suchmaschinen oder sozialen Netzwerken bewerben?</label>
  </div>
  <div class="medium-3 columns">
    <input id="r_service_advertising_y" name="r_service_advertising" value="yes" type="radio" checked> Ja<br />
    <input id="r_service_advertising_n" name="r_service_advertising" value="no" type="radio"> Nein<br />
  </div>
  <hr>
</div>
<div class="row">
  <h3 class="subline padding-top">Ergänzende Bemerkungen</h3>
  <label for="t_comment"> Hier können Sie ergänzende Anmerkungen zu dem gesamten Projekt beifügen.</label>
  <textarea type="text" id="t_comment" name="t_comment" rows="3" >Mir ist besonders wichtig, dass...</textarea>

  <input id="c_notifications" name="c_notifications" type="checkbox" value="yes" checked> 
  Ich möchte automatisch per E-mail über neue Bewerber informiert werden <br />     

  <input id="c_agb" name="c_agb" type="checkbox" value="yes" checked> 
  Ich stimme den <a href="">AGB</a> zu

  <br class="full-padding">
  <div class="large-12 columns text-center padding-top">
    <button type="submit" class="button">Absenden</button>
  </div>
</div>
</form>
</div>
</main>


<div id="myModal" class="reveal-modal" data-reveal>
  <h2>Kommentar hinzufügen</h2>
  <p class="lead">Bereich: Allgemeines</p>
  <textarea type="text" id="remail" rows="3" value="Ich möchte noch ergänzen, dass mir wichtig ist..."></textarea>
  <a href="" class="button">Hinzufügen</a>
  <a class="close-reveal-modal">&#215;</a>
</div>
