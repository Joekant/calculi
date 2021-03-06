  <div class="main-section">


    <div class="row padding-bottom">

      <div class="row text-center">

        <div class="panel text-center green-border">
          <h5>Projekt abgeschlossen</h5>
          <p>
            Gratulation, das Projekt wurde nun erfolgreich abgeschlossen!
          </p>
          <p>
            Um die qualitative Arbeit unserer Experten sicherzustellen, bitten wir dich, den Webworker nach folgenden Kriterien zu bewerten.
          </p>
          <!--
          <br class="half-padding" /><a  href="index.php?page=login#kunde">jetzt anmleden</a>
        </p> -->
      </div>
      <form>
        <table>
          <tr>
            <td width="250px"><i class="fa fa-comment fa-fw"></i> Kommunikation</td>
            <td>
              <div class="range-slider" id="rating-com" name="rating-com" data-slider data-options="start: 1; end: 10;">
                <span class="range-slider-handle" role="slider" tabindex="0"></span>
                <span class="range-slider-active-segment"></span>
                <input type="hidden">
              </div>
            </div>
          </td>
          <td width="110px"><input type="text" class="rating rating-com" value="0" disabled ></td>
        </tr>
        <tr>
          <td><i class="fa fa-heart fa-fw"></i> Design</td>
          <td>
            <div class="range-slider" id="rating-design" name="rating-design" data-slider data-options="start: 1; end: 10;">
              <span class="range-slider-handle" role="slider" tabindex="0"></span>
              <span class="range-slider-active-segment"></span>
              <input type="hidden">
            </div>
          </div>
        </td>
        <td><input type="text" class="rating rating-design" value="0" disabled></td>
      </tr>
      <tr>
        <td><i class="fa fa-wrench fa-fw"></i> Funktionalität</td>
        <td>
          <div class="range-slider" id="rating-func" name="rating-func" data-slider data-options="start: 1; end: 10;">
            <span class="range-slider-handle" role="slider" tabindex="0"></span>
            <span class="range-slider-active-segment"></span>
            <input type="hidden">
          </div>
        </div>
      </td>
      <td><input type="text" class="rating rating-func" value="0" disabled></td>
    </tr>
    <tr>
      <td><i class="fa fa-clock-o fa-fw"></i> Geschwindigkeit</td>
      <td>
        <div class="range-slider" id="rating-speed" name="rating-speed" data-slider data-options="start: 1; end: 10;">
          <span class="range-slider-handle" role="slider" tabindex="0"></span>
          <span class="range-slider-active-segment"></span>
          <input type="hidden">
        </div>
      </div>
    </td>
    <td><input type="text" class="rating rating-speed" value="0" disabled></td>
  </tr>
</tr>
<tr>
  <td><i class="fa fa-info fa-fw"></i>Beratung</td>
  <td>
    <div class="range-slider" id="rating-cons" name="rating-cons" data-slider data-options="start: 1; end: 10;">
      <span class="range-slider-handle" role="slider" tabindex="0"></span>
      <span class="range-slider-active-segment"></span>
      <input type="hidden">
    </div>
  </div>
</td>
<td><input type="text" class="rating rating-cons" value="0" disabled></td>
</tr>
</table>
<div class="rating-sum-container">
  Gesamtbewertung: <span class="rating-sum">25</span> / 50
</div>

<h3 class="padding-top">Kommentar</h3>
<p>Hier hast du die Möglichkeit, ein persönliches Kommentar über die Zusammenarbeit zu verfassen. Dieses wird im öffentlichen Profil des Webworkers angezeigt.</p>
<textarea type="text" id="comment" name="comment" rows="5" placeholder="An der Zusammenarbeit mit XY hat mir besonders gefallen, dass..."></textarea>
<button type="submit" class="button">Berwertung abgeben</button>
</form>
</div>
</div>
</div>

<script>
// Handle Rating-Sliders
// Aus zeitgründen wenig flexibler Pfusch mit copy/paste ;) 

  var allRatings = $('input.rating');
  var ratingsumspan = $('span.rating-sum');

  $('[data-slider]').on('change.fndtn.slider', function(){
   $('.rating-com').val($('#rating-com').attr('data-slider'))
   $('.rating-design').val($('#rating-design').attr('data-slider'))
   $('.rating-func').val($('#rating-func').attr('data-slider'))
   $('.rating-speed').val($('#rating-speed').attr('data-slider'))
   $('.rating-cons').val($('#rating-cons').attr('data-slider'))
   var ratingsum = 0;
   
   $.each(allRatings, function( index, value ) {
    ratingsum += parseInt($(this).val())
  });
   ratingsumspan.text(ratingsum)
   if(ratingsum < 26) {
    ratingsumspan.css('color', 'red');
  }
  else if (27 < ratingsum < 40) {
    ratingsumspan.css('color', 'orange');
  }
  if (ratingsum > 41) {
    ratingsumspan.css('color', 'green');
  }
});
</script> 