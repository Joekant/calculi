<!-- requires briefing-effort-count.js -->
<main>
  <div id="briefing-form">  

    <!-- Sticky Pagination -->
    <div class="row" id="form-instruction">
      <div class="large-12 columns text-center">
        <h1 id="headline">Ausschreibung erstellen</h1>
      </div>

      <h2 class="subline text-center padding-bottom">Nach dem Absenden des Formulars wird automatisch ein kostenloses Konto für dich eingerichtet, in dem du deine Ausschreibungen verwalten kannst </h2>
      <ul>
       <li><span>Mit <span class="required">*</span> gekennzeichnete Angaben sind verpfichtend</span></li>
       <li><span>Unterwellte Worte besitzen Tooltipps</span></li>
       <li><span>Mit der Navigation am oberen Seitenrand können Sie zu den einzelnen Abschnitten wechseln</span></li>  
     </ul>
   </div>

   <div class="row padding-top">
     <div class="small-12 columns text-center">
       <div data-magellan-expedition="fixed" id="form-pagination">
        <div class="progress">
          <div class="EffortCount"> 
          </div>
          <span class="meter TotalEffortDiv"></span>
        </div> 
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

  <form data-abide action="../_worker/index.php?page=ausschreibungen_detail" method="POST" onsubmit="return checkForm(this);">

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
          <option value="unselected">Land auswählen...</option>
          <option value="Österreich" selected>Österreich</option>
          <option value="Deutschland" >Deutschland</option>
          <option value="Schweiz" >Schweiz</option>
        </select>
      </label>
    </div>
    <div class="medium-6 columns">
      <label for="s_state">Bundesland<span class="required">*</span></label>
      <select id="s_state" name="s_state" disabled>
        <option value="">zuerst Land wählen...</option>
        <!--          -->
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
    <input name="r_text" id="r_text_rdy" value="r_text_rdy" type="radio" class="has-effort" data-effort="10" checked> Designer erhält fertigen Text<br />
    <input name="r_text" id="r_text_update" value="r_text_update" type="radio" class="has-effort" data-effort="30"> Designer bereitet vorhandenen Text auf<br />
    <input name="r_text" id="r_text_create" value="r_text_create" type="radio" class="has-effort" data-effort="50"> Designer erstellt individuellen Text<br />
  </div>
  <div class="large-6 columns">
    <label for="c_grafik">Wie sollen die Grafiken erstellt werden?<span class="required">*</span></label><br >
    <input name="r_grafik" id="r_grafik_rdy" value="r_grafik_rdy" type="radio"> Designer erhält fertige Grafiken<br />
    <input name="r_grafik" id="r_grafik_update" value="r_grafik_update" type="radio"> Designer bereitet vorhandene Grafiken auf<br />
    <input name="r_grafik" id="r_grafik_create" value="r_grafik_create" type="radio" checked> Designer erstellt individuelle Grafiken<br />
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
    <input id="c_function_calendar" name="c_function_calendar" type="checkbox" checked> Terminkalender<br />
  </div>
  <div class="medium-4 columns">
    <input id="c_function_booking" name="c_function_booking" type="checkbox" checked> Buchungssystem<br />
    <input id="c_function_order" name="c_function_order" type="checkbox"> Bestellsystem<br />
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
    <label for="c_ext">Sollen externe Plattformen integriert werden?</label><br >
    <div class="medium-3 columns"><input id="c_ext_blog" value="c_ext_blog" name="c_ext_blog" type="checkbox" checked> Blog</div>
    <div class="medium-3 columns"><input id="c_ext_forum" value="c_ext_forum" name="c_ext_forum" type="checkbox"> Forum</div>
    <div class="medium-3 columns"><input id="c_ext_wiki" value="c_ext_wiki" name="c_ext_wiki" type="checkbox"> Wiki</div>
    <div class="medium-3 columns"><input id="c_ext_shop" value="c_ext_shop" name="c_ext_shop" type="checkbox"> Shop</div>
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
  <div class="columns medium-6">

    <label for="design">Wie soll das grafische Konzept der Seite erstellt werden?<span class="required">*</span></label><br >
    <div class="medium-12 columns">             
      <input id="r_design_rdy" name="r_design" value="r_design_rdy" type="radio"> Designer setzt vorhandenes Design um<br />
      <input id="r_design_create" name="r_design" value="r_design_create" type="radio" checked> Designer erstellt individuelles Design<br />
      <input id="r_design_template" name="r_design" value="r_design_template" type="radio"> Designer adaptiert gewähltes Template<br />
    </div>
  </div>
  <div class="columns medium-6">
    <label for="design">Wie viele Revisionsdurchläufe sind gewünscht?<span class="required">*</span></label>
    <div class="medium-12 columns">  
     <input type="text" class="revision-count" value="0" disabled>
     <div class="range-slider" id="revision-slider" name="s_revisions" data-slider data-options="start: 1; end: 5;">
      <span class="range-slider-handle" role="slider" tabindex="0" name="s_revisions"></span>
      <span class="range-slider-active-segment" name="s_revisions"></span>
      <input type="hidden" name="s_revisions">
    </div>

  </div>
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
    <textarea type="text" id="t_reference_positive" name="t_reference_positive" rows="3">http://www.gute-beispielseite.at</textarea>
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
  <label for="t_comment"> Hier können Sie ergänzende Anmerkungen zum gesamten Briefing beifügen.</label>
  <textarea type="text" id="t_comment" name="t_comment" rows="3" >Mir ist besonders wichtig, dass...</textarea>

  <input id="c_notifications" name="c_notifications" type="checkbox" value="yes" checked> 
  Ich möchte automatisch per E-mail über neue Bewerber informiert werden <br />     

  <input id="c_agb" name="agb" type="checkbox" required> 
  Ich stimme den <a href="">AGB</a> zu

  <br class="full-padding">
  <div class="large-12 columns text-center padding-top">
    <button type="submit" class="button">Absenden</button>
  </div>
</div>
</form>
</div>
</main>
<script>
// Handle Revision-Range-Slider
var span = $('.revision-count')
$('[data-slider]').on('change.fndtn.slider', function(){
 var count = $('#revision-slider').attr('data-slider');
 span.val(count)
});
</script>  


