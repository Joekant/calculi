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
  </div>
</div> 
<div class="form-step dark-bg primary-full-border">
  <h2>Anforderungen</h2> 
</div>
<div class="main-section">
  <div class="row briefing-summary">
    <div class="defaultRateContainer right">
      <input type="text" class="defaultRate" value="50" placeholder="Stundensatz">
      <label for="">Basis Stundensatz</label>
    </div>
    <br class="end">
    <div class="large-3 columns">
      <h2>Inhalt</h2>
      <span class="section-sum-money section-sum-1">0</span><span class="section-sum-time section-time-1">0</span>
    </div>
    <div class="large-9 columns table-border-left">
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
  <div class="large-9 columns table-border-left">

    <table>
      <tr>
       <td  width="30%">Selbst Inhalte warten</td>
       <td><?php echo $r_cms; ?></td>
       <td width="21%"><input type="text" class="left effort-2-1" value="0"><input type="text" class="right rate-2-1" value="50"></td>
     </tr>
     <tr>
       <td  width="30%">Mobile Version</td>
       <td  width="49%"><?php echo $r_cms; ?></td>
       <td><input type="text" class="left effort-2-2" value="0"><input type="text" class="right rate-2-2" value="50"></td>
     </tr>
     <tr>
      <td  width="30%">Barrierefreiheit</td>
      <td  width="49%"><?php echo $r_accessibility; ?></td>
      <td><input type="text" class="left effort-2-3" value="0"><input type="text" class="right rate-2-3" value="50"></td>
    </tr>
    <tr>
      <td width="250">Funktionen</td>
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
      <td width="21%"><input type="text" class="left effort-2-4" value="0"><input type="text" class="right rate-2-4" value="50"></td>
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
<div class="large-3 columns">
  <h2>Design</h2>
  <span class="section-sum-money section-sum-3">0</span><span class="section-sum-time section-time-3">0</span>
</div>
<div class="large-9 columns table-border-left">

  <table>
    <tr>
      <td width="250">Realisierung</td>
      <td><?php echo $r_design; ?></td>
      <td width="21%"><input type="text" class="left effort-3-1" value="0"><input type="text" class="right rate-3-1" value="50"></td>
    </tr>
    <tr>
      <td>Eigenschaften</td>
      <td><?php echo $t_mood; ?></td>
      <td width="21%"><input type="text" class="left effort-3-2" value="0"><input type="text" class="right rate-3-2" value="50"></td>
    </tr>
    <tr>
      <td>Positive Referenzen</td>
      <td><?php echo $t_reference_positive; ?></td>
      <td width="21%"><input type="text" class="left effort-3-3" value="0"><input type="text" class="right rate-3-3" value="50"></td>
    </tr>
    <tr>
      <td>Negative Referenzen</td>
      <td><?php echo $t_reference_negative; ?></td>
      <td width="21%"><input type="text" class="left effort-3-4" value="0"><input type="text" class="right rate-3-4" value="50"></td>
    </tr>
  </table>
</div>
<div class="large-3 columns">
  <h2>Service</h2>
  <span class="section-sum-money section-sum-4">0</span><span class="section-sum-time section-time-4">0</span>
</div>
<div class="large-9 columns table-border-left">

  <table>
    <tr>
      <td width="250">Server</td>
      <td><?php echo $r_service_server; ?></td>
      <td width="21%"><input type="text" class="left effort-4-1" value="0"><input type="text" class="right rate-4-1" value="50"></td>
    </tr>
    <tr>
      <td>Domain</td>
      <td><?php echo $r_service_domain; ?></td>
      <td width="21%"><input type="text" class="left effort-4-2" value="0"><input type="text" class="right rate-4-2" value="50"></td>
    </tr>   
    <tr>
      <td>E-mail Adressen</td>
      <td><?php echo $r_service_mail; ?></td>
      <td width="21%"><input type="text" class="left effort-4-3" value="0"><input type="text" class="right rate-4-3" value="50"></td>
    </tr> 
    <tr>
      <td>Statistiken</td>
      <td><?php echo $r_service_statistics; ?></td>
      <td width="21%"><input type="text" class="left effort-4-4" value="0"><input type="text" class="right rate-4-4" value="50"></td>
    </tr> 
    <tr>
      <td>Mitarbeiterschulung</td>
      <td><?php echo $r_service_instructions; ?></td>
      <td width="21%"><input type="text" class="left effort-4-5" value="0"><input type="text" class="right rate-4-5" value="50"></td>
    </tr>
    <tr>
      <td>Online Marketing</td>
      <td><?php echo $r_service_advertising; ?></td>
      <td width="21%"><input type="text" class="left effort-4-6" value="0"><input type="text" class="right rate-4-6" value="50"></td>
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

</div>
</div>
</div>

<div class="sticky-application-form ">
  <div class="large-9 columns">
    <textarea type="text" id="t_application" rows="5" name="t_application" >Ich möchte mich gerne für diesen Auftrag bewerben, weil...</textarea>
  </div>
  <div class="large-3 columns">
    <div class="label primary-bg counter application-final-result">
      <span class="counter-value">0</span><br /><span class="total-effort">0</span>
    </div>
    <a href="#" class="button green-bg expand big" data-reveal-id="sendApplication"><i class="fa fa-check"></i> Absenden</a>
  </div>
</div>

<div id="sendApplication" class="reveal-modal tiny" data-reveal>
  <h2>Bewerbung absenden</h2>
  <p class="lead">Wichtiger Hinweis</p>
  <p>Nach dem Absenden der Bewerbung kann der Auftraggeber dein komplettes Profil einsehen und die Bewerbung nicht mehr geändert werden (lediglich gänzlich zurückgezogen). Aktualisierungen des Profils hingegen sind jederzeit möglich.</p>
  <a href="#" class="button small green-bg" data-reveal-id="sendApplication"><i class="fa fa-check"></i> Bewerbung Absenden</a>
  <a href="#" class="button small grey-bg right" data-reveal-id="sendApplication"><i class="fa fa-cancel"></i> zurück</a>
  <a class="close-reveal-modal">&#215;</a>
</div>


<script>
// Change Default Rates
var defaultRateInput = $(".defaultRate")
var allRates = $("input.right")

defaultRateInput.change(function() {
  var defaultRateValue = defaultRateInput.val()
  var defaultRateInt = parseInt(defaultRateValue)
  var allRates = $("input.right")
  
  $.each(allRates, function( index, value ) {
    $(this).attr('value', defaultRateInt)
  });

});


// Display Total
var counterValue = $('span.counter-value')
var totalEffortSpan = $('span.total-effort')

// Get Section
var totalPriceSpan = $('span.section-sum-money');

$( "input[type=text]" ).change(function() {
  sectionCount = 1;
  itemCount = 1;
  var efforts = 0;
  var rates = 0;
  var rowSum = 0;
  var sectionSum = 0;
  var sectionEffort = 0
  var totalSum = 0;
  var totalEffort = 0;

  // Run through sections
  for (sectionCount=1;sectionCount<5;sectionCount++) {
    var sectionEffort = 0
    var sectionSum = 0

    // run through Elements from sections
    for (itemCount=1;itemCount<7;itemCount++) {
      var efforts = $(".effort-"+sectionCount+"-"+itemCount)
      var rates = $(".rate-"+sectionCount+"-"+itemCount)
      var rowSum = efforts.val() * rates.val()

      if (isNaN(rowSum)) {

      }
      else {
       sectionSum += rowSum
       sectionEffort += parseInt(efforts.val())       
     }
   }

    // Get right Section Sum-Field
    var sectionSumMoney = $("span.section-sum-"+sectionCount);
    var sectionSumTime = $("span.section-time-"+sectionCount);
    
    // Display Section Sum
    sectionSumMoney.text(sectionSum);
    sectionSumTime.text(sectionEffort);

    // Build Total Sum
    totalSum += sectionSum
    totalEffort += sectionEffort

    counterValue.text(totalSum)
    totalEffortSpan.text(totalEffort)

  }
  console.log(totalSum)

});

// TOTAL EFFORT DISPLAY

// SUM UP Section Valued

</script>