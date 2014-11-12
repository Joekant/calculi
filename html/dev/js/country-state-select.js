<script>
// Generate & Enable state-selection depending on chosen country.
$('#s_country').change(function() {
  $("#s_state").prop('disabled', false);
  var options = '';
  if($(this).val() == 'unselected') {
    options = '<option value="unselected">zuerst Land wählen</option>';
    $("#s_state").prop('disabled', true);
  }
  else if($(this).val() == 'Deutschland') {
    options = '<option value="Baden-Württemberg">Baden-Württemberg</option><option value="Bayern">Bayern</option><option value="Berlin">Berlin</option><option value="Brandenburg">Brandenburg</option><option value="Bremen">Bremen</option><option value="Hamburg">Hamburg</option><option value="Hessen">Hessen</option><option value=" Mecklenburg-Vorpommern"> Mecklenburg-Vorpommern</option><option value="Niedersachsen">Niedersachsen</option><option value="Nordrhein-Westfalen">Nordrhein-Westfalen</option><option value="Rheinland-Pfalz">Rheinland-Pfalz</option><option value="Saarland">Saarland</option><option value="Sachsen">Sachsen</option><option value="Sachsen-Anhalt">Sachsen-Anhalt</option><option value="Schleswig-Holstein">Schleswig-Holstein</option><option value="Thüringen">Thüringen</option>';
  }
  else if ($(this).val() == 'Schweiz'){
    options = '<option value="Zürich">Zürich</option><option value="Bern">Bern</option><option value="Luzern">Luzern</option><option value="Uri">Uri</option><option value="Schwyz">Schwyz</option><option value="Obwalden">Obwalden</option><option value="Nidwalden">Nidwalden</option><option value="Glarus">Glarus</option><option value="Zug">Zug</option><option value="Freiburg">Freiburg</option><option value="Solothurn">Solothurn</option><option value="Basel-Stadt">Basel-Stadt</option><option value="Basel-Landschaft">Basel-Landschaft</option><option value="Schaffhausen">Schaffhausen</option><option value="Appenzell Ausserrhoden">Appenzell Ausserrhoden</option><option value="Appenzell Innerrhoden">Appenzell Innerrhoden</option><option value="St. Gallen">St. Gallen</option><option value="Graubünden">Graubünden</option><option value="Aargau">Aargau</option><option value="Thurgau">Thurgau</option><option value="Tessin">Tessin</option><option value="Waadt">Waadt</option><option value="Wallis">Wallis</option><option value="Neuenburg">Neuenburg</option><option value="Genf">Genf</option><option value="Jura">Jura</option>';
  }
  else if ($(this).val() == 'Österreich'){
    options = '<option value="Wien" selected>Wien</option><option value="Niederösterreich">Niederösterreich</option><option value="Oberösterreich">Oberösterreich</option><option value="Burgenland">Burgenland</option><option value="Steiermark">Steiermark</option><option value="Kärnten">Kärnten</option><option value="Salzburg">Salzburg</option><option value="Tirol">Tirol</option><option value="Vorarlberg">Vorarlberg</option>';
  }    
  $('#s_state').html(options);
});
</script>