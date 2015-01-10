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
 
  <form id ="form" data-abide action="../_worker/index.php?page=ausschreibungen_detail" method="POST" onsubmit="return checkForm(this);">
 
    <div id="general">
      <!-- Step -->
      <div class="form-step dark-bg primary-full-border">
        <h2 data-magellan-destination="1">Allgemeines<a name="1"></a></h2>
      </div>
      <div class="row">
        <div class="medium-6 columns">
          <label for="i_name">Name<span class="required">*</span>
            <input type="text" id="i_name" name="i_name" value="Max Mustermann">
          </label>
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
  </div>
  <div id="contents">
    <!-- Step -->
    <div class="form-step dark-bg primary-full-border">
      <h2 data-magellan-destination="2">Inhalt<a name="2"></a></h2>
    </div>
    <div class="row">
      <label for="c_pages">Welche <span data-tooltip aria-haspopup="true" class="has-tip formtipp" title="Naja, was könnte wohl mit 'Unterseite' gemeint sein?">Unterseiten</span> wird die Seite voraussichtlich besitzen?</label><br >
      <div class="medium-4 columns">
        <input name="content" id="c_pages_home" type="checkbox" value="Startseite" data-name="subpages" checked disabled> Startseite<br />
        <input name="content" id="c_pages_legal" type="checkbox" value="Impressum" data-name="subpages" checked disabled> Impressum<br />
        <input name="content" id="c_pages_products" type="checkbox" value="Produktvorstellung" data-name="subpages" > Produktvorstellung <br />
      </div>
      <div class="medium-4 columns">
        <input name="content" id="c_pages_portfolio" type="checkbox" value="Portfolio" data-name="subpages" checked> Portfolio<br />
        <input name="content" id="c_pages_contact" type="checkbox" value="Kontaktseite" data-name="subpages" > Kontaktseite<br />
        <input name="content" id="c_pages_agb" type="checkbox" value="AGB-Seite" data-name="subpages" > AGB-Seite<br />
      </div>
      <div class="medium-4 columns">
        <input name="content" id="c_pages_team" type="checkbox" value="Teamvorstellung" data-name="subpages" > Teamvorstellung<br />
        <input name="content" id="c_pages_download" type="checkbox" value="Downloadbereich" data-name="subpages" > Downloadbereich<br />
        <input name="content" id="c_pages_faq" type="checkbox" value="F.A.Q - Seite" data-name="subpages" > F.A.Q - Seite<br />
      </div>
    </div>
    <div class="row">
     <div class="large-6 columns">
      <label for="c_text">Wie soll der Text erstellt werden?<span class="required">*</span></label><br >
      <input name="content" id="r_text_rdy" data-name="text" value="Designer erhält fertigen Text" type="radio" class="has-effort" data-effort="10" data checked> Designer erhält fertigen Text<br />
      <input name="content" id="r_text_update" data-name="text" value="Designer bereitet vorhandenen Text auf" type="radio" class="has-effort" data-effort="30"> Designer bereitet vorhandenen Text auf<br />
      <input name="content" id="r_text_create" data-name="text" value="Designer erstellt individuellen Text" type="radio" class="has-effort" data-effort="50"> Designer erstellt individuellen Text<br />
    </div>
    <div class="large-6 columns">
      <label for="c_grafik">Wie sollen die Grafiken erstellt werden?<span class="required">*</span></label><br >
      <input name="content" id="r_grafik_rdy" data-name="graphics" value="Designer erhält fertige Grafiken" type="radio"> Designer erhält fertige Grafiken<br />
      <input name="content" id="r_grafik_update" data-name="graphics" value="Designer bereitet vorhandene Grafiken auf" type="radio"> Designer bereitet vorhandene Grafiken auf<br />
      <input name="content" id="r_grafik_create" data-name="graphics" value="Designer erstellt individuelle Grafiken" type="radio" checked> Designer erstellt individuelle Grafiken<br />
    </div>
  </div>
</div>
<div id="functions">
  <!-- Step -->
  <div class="form-step dark-bg primary-full-border">
    <h2 data-magellan-destination="4">Funktionalität <a name="4"></a></h2>
  </div>
  <div class="row">
    <label for="email">Welche Funktionen werden benötigt?<span class="required">*</span></label><br >
    <div class="medium-4 columns" id="tests">
      <input id="c_function_ml" name="functions" type="checkbox" value = "Mehrsprachigkeit" data-name="subfunction" checked> Mehrsprachigkeit <br />
      <input id="c_function_comment" name="functions" type="checkbox" value = "Kommentarfunktion" data-name="subfunction" > Kommentarfunktion<br />
      <input id="c_function_donate" name="functions" type="checkbox" value = "Spendenformular" data-name="subfunction" > Spendenformular<br />
      <input id="c_function_calendar" name="functions" type="checkbox" value = "Terminkalender" data-name="subfunction"  checked> Terminkalender<br />
    </div>
    <div class="medium-4 columns">
      <input id="c_function_booking" name="functions" type="checkbox" value="Buchungssystem" data-name="subfunction"  checked> Buchungssystem<br />
      <input id="c_function_order" name="functions" type="checkbox" value="Bestellsystem" data-name="subfunction" > Bestellsystem<br />
      <input id="c_function_poll" name="functions" type="checkbox" value="Umfragefunktion" data-name="subfunction" > Umfragefunktion<br />
      <input id="c_function_intern" name="functions" type="checkbox" value="Interner Bereich" data-name="subfunction" > Interner Bereich<br />
    </div>
    <div class="medium-4 columns">
      <input id="c_function_search" name="functions" type="checkbox" value="Suchfunktion" data-name="subfunction" > Suchfunktion<br />
      <input id="c_function_newsletter" name="functions" type="checkbox" value="E-mail Newsletter" checked data-name="subfunction" > E-mail Newsletter <br />
      <input id="c_function_gallery" name="functions" type="checkbox" value="Bildergallerie" checked data-name="subfunction" > Bildergallerie<br />
      <input id="c_function_contact" name="functions" type="checkbox" value="Kontaktformular" checked data-name="subfunction" > Kontaktformular<br />
    </div>
 
  </div>
  <div class="row">
    <div class="large-6 columns">
      <label for="r_cms">Möchten Sie Inhalte in Zukunft selbst bearbeiten oder hinzufügen können?<span class="required">*</span></label><br >
      <input id="r_cms_yes" name="functions" value="true" type="radio" data-name="cms" checked> Ja<br />
      <input id="r_cms_no" name="functions" value="false" type="radio" data-name="cms"> Nein<br />  
    </div>
    <div class="large-6 columns">
      <label for="c_ext">Sollen externe Plattformen integriert werden?</label><br >
      <div class="medium-3 columns"><input id="c_ext_blog" value="Blog" name="functions" type="checkbox" data-name="platform" checked> Blog</div>
      <div class="medium-3 columns"><input id="c_ext_forum" value="Forum" name="functions" type="checkbox" data-name="platform"> Forum</div>
      <div class="medium-3 columns"><input id="c_ext_wiki" value="Wiki" name="functions" type="checkbox" data-name="platform"> Wiki</div>
      <div class="medium-3 columns"><input id="c_ext_shop" value="Shop" name="functions" type="checkbox" data-name="platform"> Shop</div>
    </div>
  </div>
  <div class="row">
    <div class="large-6 columns">
      <label for="accessibility">Besteht ein erhöter Anspruch an die Barrierefreiheit?</label><br />
    <!--  Wird die Seiter voraussichtlich häufig von Personen mit ausgeprägter Sehschwäche genutzt und muss daher besonders barierefrei sein
    (Screen-Reader kompatibel, kontrastreiche Darstellungsoption, individuelle Einstellung der Schriftgröße...) und auch in älteren Browsern einwandfrei funktionieren? -->
    <input id="r_accessibility_yes" name="functions" value="true" data-name="accessibility" type="radio"> Ja<br />
    <input id="r_accessibility_no" name="functions" value="false" data-name="accessibility" type="radio" checked> Nein<br />
  </div>
  <div class="large-6 columns">
   <label for="responsive">Benötigen Sie eine optimierte Version für mobile Geräte?<span class="required">*</span></label><br />
   <!-- Soll es eine optimierte Version für die Darstellung auf mobilen Geräten wie z.B. Smartphones oder Tablets geben? -->
   <input id="r_responsive_yes" name="functions" value="true" data-name="mobile" type="radio" checked> Ja<br />
   <input id="r_responsive_no" name="functions" value="false" data-name="mobile" type="radio"> Nein<br />
 </div>
</div>
</div>
<div id="design">
  <!-- Step -->
  <div class="form-step dark-bg primary-full-border">
    <h2 data-magellan-destination="3">Design<a name="3"></a></h2>
  </div>  
  <div class="row">
    <div class="columns medium-6">
 
      <label for="design">Wie soll das grafische Konzept der Seite erstellt werden?<span class="required">*</span></label><br >
      <div class="medium-12 columns">            
        <input id="r_design_rdy" name="design" value="Designer setzt vorhandenes Design um" data-name="concept" type="radio"> Designer setzt vorhandenes Design um<br />
        <input id="r_design_create" name="design" value="Designer erstellt individuelles Design" data-name="concept" type="radio" checked> Designer erstellt individuelles Design<br />
        <input id="r_design_template" name="design" value="Designer adaptiert gewähltes Template" data-name="concept" type="radio"> Designer adaptiert gewähltes Template<br />
      </div>
    </div>
    <div  class="columns medium-6">
      <label for="design">Wie viele Revisionsdurchläufe sind gewünscht?<span class="required">*</span></label>
      <div id="asd" class="medium-12 columns">  
        <input type="text" name="design" class="revision-count" data-name="revisions" >
        <div class="range-slider" id="revision-slider" name="s_revisions" data-slider data-options="start: 1; end: 5;">
          <span class="range-slider-handle" role="slider" tabindex="0" name="s_revisions"></span>
          <span class="range-slider-active-segment" name="s_revisions"></span>
          <input type="hidden" name="design" data-name="revisions">
        </div>
 
      </div>
    </div>
  </div>
  <div class="row">
   <label for="t_mood">Welche Eigenschaften soll die Seite vermitteln?</label>
   <textarea id="t_mood" name="design" data-name="characteristics" rows="3">edel, seriös, teuer, einzigartig, limitiert</textarea>
 </div>
 <div class="row">
  <label for="email">Die Seite soll / soll nicht aussehen wie folgende Mitbewerberseiten <br /><em>(mehrere Adressen untereinander durch Absatz getrennt)</em></label>
  <div class="medium-6 columns text-center">
    <label for="email" class="green-font">positive Referenz</label>
    <textarea  id="t_reference_positive" name="design" data-name="positiveReference" rows="3">http://www.gute-beispielseite.at</textarea>
  </div>
  <div class="medium-6 columns text-center">
    <label for="email" class="orange-font">negative Referenz</label>
    <textarea  id="t_reference_negative" name="design" data-name="negativeReference" rows="3" >http://www.schlechte-beispielseite.at</textarea>
  </div>
</div>
<div class="form-step dark-bg primary-full-border">
  <h2 data-magellan-destination="5">Service <a name="5"></a></h2>
</div>
</div>
<div id="services">
  <div class="row">
    <div class="medium-9 columns">
      <label for="email">Wer stellt den Server für die Seite bereit?</label>
    </div>
    <div class="medium-3 columns">
      <input id="r_service_server_d" name="services" data-name="server" value="Designer" type="radio" checked> Designer <br />
      <input id="r_service_server_k" name="services" data-name="server" value="Kunde" type="radio"> Kunde
    </div>
    <hr />
    <div class="medium-9 columns">
      <label for="email">Wer registriert die Domain?</label>
    </div>
    <div class="medium-3 columns">
      <input id="r_service_domain_d" name="services" data-name="domain" value="Designer" type="radio" checked> Designer <br />
      <input id="r_service_domain_k" name="services" data-name="domain" value="Kunde" type="radio"> Kunde
    </div>
    <hr />
    <div class="medium-9 columns">
      <label for="email">Benötigen Sie E-mail Adressen?</label>
    </div>
    <div class="medium-3 columns">
      <input id="r_service_mail_y" name="services" data-name="emails" value="true" type="radio" checked> Ja<br />
      <input id="r_service_mail_n" name="services" data-name="emails" value="false" type="radio"> Nein<br />
    </div>
    <hr />
    <div class="medium-9 columns">
      <label for="email">Benötigen Sie detaillierte Nutzungsstatistiken?</label>
    </div>
    <div class="medium-3 columns">
      <input id="r_service_statistics_y" name="services" data-name="statistics" value="true" type="radio" checked> Ja<br />
      <input id="r_service_statistics_n" name="services" data-name="statistics" value="false" type="radio"> Nein<br />
    </div>
    <hr />
    <div class="medium-9 columns">
      <label for="email">Sollen Mitarbeiter in die Pflege & Wartung der Seite eingeschult werden?</label>
    </div>
    <div class="medium-3 columns">
      <input id="r_service_instructions_y" name="services" data-name="training" value="true" type="radio" checked> Ja<br />
      <input id="r_service_instructions_n" name="services" data-name="training" value="false" type="radio"> Nein<br />
    </div>
    <hr />
    <div class="medium-9 columns">
      <label for="email"> Möchten Sie die Seite durch die Schaltung bezahlter Werbung in Suchmaschinen oder sozialen Netzwerken bewerben?</label>
    </div>
    <div class="medium-3 columns">
      <input id="r_service_advertising_y" name="services" data-name="advertising" value="true" type="radio" checked> Ja<br />
      <input id="r_service_advertising_n" name="services" data-name="advertising" value="false" type="radio"> Nein<br />
    </div>
    <hr>
  </div>
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
 
<script>
 
  function postToServer() {
    var data = {
      'services' : {},
      'functions' : {},
      'content' : {},
      'design' : {},
      'general' : {}
    };
 
    var form = $('#form');
 
    var inpS = form.find('input, textarea');
    var temp;
 
    for(var n = 0; n < inpS.length; n++) {
 
      temp = $(inpS[n]);
      
      if( temp.attr("checked") ) {
        if(temp.attr("type") == "checkbox") {
 
          if( data[temp.attr("name")][temp.data("name")] == undefined) data[temp.attr("name")][temp.data("name")] = [];
         
          data[temp.attr("name")][temp.data("name")].push(temp.attr("value"));
 
        } else if(temp.attr("type") == "radio") {
          data[temp.attr("name")][temp.data("name")] = temp.attr("value");
        }
      } else if(temp.attr("type") == "hidden" ) {
        data[temp.attr("name")][temp.data("name")] = temp.attr("value");
     
     } else if(temp.attr("type") == "text" ) {
       data[temp.attr("name")][temp.data("name")] = temp.attr("value");     
     } else if(temp[0].type == "textarea" ) {
        data[temp.attr("name")][temp.data("name")] = temp.text();
     }
   }
 
   console.log(data);
 }
</script>