<div class="main-section">
  <h1 class="text-center padding-bottom">Bewerbung einreichen</h1>
  <div class="row application-summary padding-top">
   <div class="large-3 columns">
     <h2 class="application-info">Info</h2>
   </div>
   <div class="large-9 columns table-border-left application-info">

    <table>
      <tr>
        <td width="250">Ausschreibungs-ID</td>
        <td>-</td>
      </tr>
      <tr>
        <td>Status</td>
        <td>-</td>
      </tr>
      <tr>
        <td>Startzeit </td>
        <td>-</td>
      </tr>
      <tr>
        <td>Endzeit </td>
        <td>-</td>
      </tr>
      <tr>
        <td>Aufwandsindex </td>
        <td>-</td>
      </tr>
      <tr>
        <td>Anzahl Bewerber </td>
        <td>-</td>
      </tr>
    </table>
  </div> 

  <div class="large-3 columns">
    <h2>Kunde</h2>
  </div>
  <div class="large-9 columns table-border-left">
    <table>
      <tr>
        <td width="250">Name</td>
        <td><?php echo $i_name; ?></td>
      </tr>
      <tr>
        <td>E-mail </td>
        <td><?php echo $i_email; ?></td>
      </tr>
      <tr>
        <td>Unternehmen </td>
        <td><?php echo $i_company; ?></td>
      </tr>
      <tr>
        <td>Website</td>
        <td><?php echo $i_website; ?></td>
      </tr>
      <tr>
        <td>Land</td>
        <td><?php echo $s_country; ?></td>
      </tr>
      <tr>
        <td>Ort</td>
        <td><?php echo $s_state; ?></td>
      </tr>
      <tr>
        <td>Beschreibung</td>
        <td><?php echo $t_description; ?></td>
      </tr>
      <tr>
        <td>Branche</td>
        <td><?php echo $s_branche; ?></td>
      </tr>
      <tr>
        <td>Mitarbeiter</td>
        <td><?php echo $s_employees; ?></td>
      </tr>
    </table>
  </div>

  <div class="large-3 columns">
    <h2>Stil</h2>
  </div>
  <div class="large-9 columns table-border-left">
    <table>
      <tr>
        <td width="250">Eigenschaften</td>
        <td><?php echo $t_mood; ?></td>
      </tr>
      <tr>
        <td>Positive Referenzen</td>
        <td><?php echo $t_reference_positive; ?></td>
      </tr>
      <tr>
        <td>Negative Referenzen</td>
        <td><?php echo $t_reference_negative; ?></td>
      </tr>
    </table>
  </div>

</div>
</div> 
<div class="form-step dark-bg primary-full-border">
  <h2>Anforderungen</h2> 
</div>
<div class="main-section">
  <div class="row briefing-summary">

    <br class="end">
    <div class="large-3 columns">
      <h2>Inhalt</h2>
      <span class="section-sum-money section-sum-1">0</span><span class="section-sum-time section-time-1">0</span>
    </div>
    <div class="large-9 columns table-border-left briefing-section">
      <table>
        <tr>
          <td width="30%">Unterseiten</td>
          <td  width="49%">
            <ul>
              <li><i class="green-font fa fa-plus  fa-fw"></i> Startseite</li>
              <li><i class="green-font fa fa-plus  fa-fw"></i> Impressum</li>
              <?php 
                  // duplicating array in new Variable, because otherwiese it works only once - don't know why ;)
              $subpages = $briefing;

                  // Run through array and output all function fields (containing "c_function_")
              while (list( $field, $value ) = each( $subpages )) {
                if(preg_match('/c_pages_/',$field)) {
                  echo '<li><i class="green-font fa fa-plus  fa-fw"></i> '.$value.'</li>';
                }
              }
              ?>
            </ul>
          </td>
          <td width="21%"><input type="text" class="left effort-1-1" value="0"><input type="text" class="right rate-1-1" value="50"></td>
        </tr>
        <tr>
         <td>Texterstellung</td>
         <td><?php echo $r_text; ?></td>
         <td><input type="text" class="left effort-1-2" value="0"><input type="text" class="right rate-1-2" value="50"></td>

       </tr>
       <tr>
        <td>Grafikerstellung</td>
        <td><?php echo $r_grafik; ?></td>
        <td><input type="text" class="left effort-1-3" value="0"><input type="text" class="right rate-1-3" value="50"></td>
      </tr>
    </table>
  </div>

  <div class="large-3 columns">
    <h2>Funktionen</h2>
    <span class="section-sum-money section-sum-2">0</span><span class="section-sum-time section-time-2">0</span>
  </div>
  <div class="large-9 columns table-border-left briefing-section">

    <table>
      <tr>
       <td width="30%">Selbst Inhalte warten</td>
       <td width="49%"><?php echo $r_cms; ?></td>
       <td width="21%"><input type="text" class="left effort-2-1" value="0"><input type="text" class="right rate-2-1" value="50"></td>
     </tr>
     <tr>
       <td >Mobile Version</td>
       <td><?php echo $r_cms; ?></td>
       <td><input type="text" class="left effort-2-2" value="0"><input type="text" class="right rate-2-2" value="50"></td>
     </tr>
     <tr>
      <td>Barrierefreiheit</td>
      <td><?php echo $r_accessibility; ?></td>
      <td><input type="text" class="left effort-2-3" value="0"><input type="text" class="right rate-2-3" value="50"></td>
    </tr>
    <tr>
      <td>Funktionen</td>
      <td>
        <ul>
          <?php 
            // duplicating array in new Variable, because otherwiese it works only once - don't know why ;)
          $functions = $briefing;

                  // Run through array and output all function fields (containing "c_function_")
          while (list( $field, $value ) = each( $functions )) {
            if(preg_match('/c_function_/',$field)) {
              echo '<li><i class="green-font fa fa-plus  fa-fw"></i> '.$value.'</li>';
            }
          }
          ?>
        </ul>
      </td>
      <td><input type="text" class="left effort-2-4" value="0"><input type="text" class="right rate-2-4" value="50"></td>
    </tr>
    <tr>
      <td>Externe Plattformen</td>
      <td>
        <ul>
          <?php 

          $plattforms = $briefing;
                  // Run through array and output all function fields (containing "c_function_")
          while (list( $field, $value ) = each( $plattforms )) {
            if(preg_match('/c_ext_/',$field)) {
              echo '<li><i class="green-font fa fa-plus  fa-fw"></i> '.$value.'</li>';
            }
          }
          ?>
        </ul>
      </td>
      <td width="21%"><input type="text" class="left effort-2-5" value="0"><input type="text" class="right rate-2-5" value="50"></td>
    </tr>
  </table>

</div>
<div class="large-3 columns section-meta">
  <h2>Design</h2>
  <span class="section-sum-money section-sum-3">0</span>
  <span class="section-sum-time section-time-3">0</span>
</div>
<div class="large-9 columns table-border-left briefing-section">

  <table>
    <tr>
      <td width="30%">Realisierung</td>
      <td width="49%"><?php echo $r_design; ?></td>
      <td width="21%"><input type="text" class="left effort-3-1" value="0"><input type="text" class="right rate-3-1" value="50"></td>
    </tr>
    <tr>
      <td>Revisionsdurchläufe</td>
      <td><?php echo $s_revisions; ?></td>
      <td><input type="text" class="left effort-3-2" value="0"><input type="text" class="right rate-3-2" value="50"></td>
    </tr>

  </table>
</div>
</div>

<div class="row briefing-summary">
  <div class="large-3 columns">
    <h2>Service</h2>
    <span class="section-sum-money section-sum-4">0</span>
    <span class="section-sum-time section-time-4">0</span>
  </div>
  <div class="large-9 columns table-border-left briefing-section">

    <table>
      <tr>
        <td width="30%">Server</td>
        <td width="49%"><?php echo $r_service_server; ?></td>
        <td width="21%"><input type="text" class="left effort-4-1" value="0"><input type="text" class="right rate-4-1" value="50"></td>
      </tr>
      <tr>
        <td>Domain</td>
        <td><?php echo $r_service_domain; ?></td>
        <td><input type="text" class="left effort-4-2" value="0"><input type="text" class="right rate-4-2" value="50"></td>
      </tr>   
      <tr>
        <td>E-mail Adressen</td>
        <td><?php echo $r_service_mail; ?></td>
        <td><input type="text" class="left effort-4-3" value="0"><input type="text" class="right rate-4-3" value="50"></td>
      </tr> 
      <tr>
        <td>Statistiken</td>
        <td><?php echo $r_service_statistics; ?></td>
        <td><input type="text" class="left effort-4-4" value="0"><input type="text" class="right rate-4-4" value="50"></td>
      </tr> 
      <tr>
        <td>Mitarbeiterschulung</td>
        <td><?php echo $r_service_instructions; ?></td>
        <td><input type="text" class="left effort-4-5" value="0"><input type="text" class="right rate-4-5" value="50"></td>
      </tr>
      <tr>
        <td>Online Marketing</td>
        <td><?php echo $r_service_advertising; ?></td>
        <td><input type="text" class="left effort-4-6" value="0"><input type="text" class="right rate-4-6" value="50"></td>
      </tr>
    </table>
  </div>
  <div class="large-3 columns">
    <h2>Kommentar</h2>
  </div>
  <div class="large-9 columns table-border-left">
    <table>
      <?php echo $t_comment; ?>
    </table>
  </div>
</div>
</div> 

<div class="sticky-application-form">
  <div class="large-3 columns">
    <div class="applicationsettings text-center">
      <div id="settings-time">
        <div class="small-4 columns">€ Basissatz<input type="text"  value="50" class="defaultRate" placeholder="Stundensatz"></div>
        <div class="small-4 columns">% Rabatt<input type="text"  name="discount" value="0" placeholder=""></div>
        <div class="small-4 columns">% Steuer<input type="text" name="mwst" value="20" placeholder=""></div>
      </div>
      <div id="settings-pauschal" class="hide">
        <div class="small-6 columns">€ Kosten<input type="text" name="pauschal-price" value="0" placeholder="Stundensatz"></div>
        <div class="small-6 columns">% Steuer<input type="text" name="mwst2" value="0" placeholder=""></div>
      </div>

      <div class="method-change-buttons">
        <a href="#" id="link-time" class="active"><i class="fa fa-clock-o"></i></a>
        <a href="#" id="link-pauschal"><i class="fa fa-legal"></i></a>
      </div>
    </div>
  </div>
  <div class="large-6 columns">
    <textarea type="text" id="t_application" rows="5" name="t_application" >Ich möchte mich gerne für diesen Auftrag bewerben, weil...</textarea>
  </div>
  <div class="large-3 columns">
    <div class="label primary-bg counter application-final-result">
      <span class="counter-value">0</span> (inkl. <span class="mwst-part">0</span> € MwSt.)
      <div class="total-calculatet"><span class="total-effort">0</span> <span class="average-rate">0</span>
      </div>
      <div class="total-pauschal hide">Pauschalpreis</div>
    </div>
    <a href="#" class="button green-bg expand big" data-reveal-id="sendApplication"><i class="fa fa-check"></i> Absenden</a>
  </div>
</div>

<div id="sendApplication" class="reveal-modal tiny" data-reveal>
  <h2>Bewerbung absenden</h2>
  <p class="lead">Kosten: <strong><span class="counter-value">0</span></strong> €</p>
  <ul>
    <li>
      Nach dem Absenden kann der Auftraggeber dein komplettes Profil einsehen und die Bewerbung nicht mehr geändert werden (lediglich gänzlich zurückgezogen). Aktualisierungen des Profils hingegen sind jederzeit möglich.
    </li>
    <li>Die Kalkulation ist nicht transparent. Der Kunde sieht lediglich den finalen Preis</li>
  </ul>
  <a href="#" class="button small green-bg" data-reveal-id="sendApplication"><i class="fa fa-check"></i> Absenden</a>
  <a href="#" class="button small grey-bg right" data-reveal-id="sendApplication"><i class="fa fa-cancel"></i> zurück</a>
  <a class="close-reveal-modal">&#215;</a>
</div>