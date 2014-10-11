  <div class="main-section">
    <h1 class="text-center">Hey Philipp!</h1>
    <div class="counter-area-6">
      <div class="row text-center">
        <div class="medium-6 columns">
          <h2>Projekte</h2>
          <div class="label counter">
            <i class="fa fa-recycle fa-fw"></i><br /><span class="counter-value">4</span><br />4500 €
          </div>
          <div class="label green-bg counter">
            <i class="fa fa-check fa-fw"></i><br /><span class="counter-value">4</span><br />4500 €
          </div>
          <div class="label grey-bg counter"  id="counter-area-6">
            <i class="fa fa-legal fa-fw"></i><br /><span class="counter-value">4</span><br />4500 €
          </div>
        </div>
        <div class="medium-6 columns">
          <h2>Bewerbungen</h2>
          <div class="label green-bg counter">
            <i class="fa fa-thumbs-up fa-fw"></i><br /><span class="counter-value">4</span><br />4500 €
          </div>  
          <div class="label orange-bg counter">
            <i class="fa fa-thumbs-down fa-fw"></i><br /><span class="counter-value">4</span><br />4500 €
          </div>

          <div class="label grey-bg counter">
            <i class="fa fa-clock-o fa-fw"></i><br /><span class="counter-value">4</span><br />4500 €
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row text-center">
    <a href="index.php?page=<?php echo $page; ?>&popup&popup_message=Erfolgsmeldung&popup_icon=check&popup_color=green" class="button green-bg"><i class="fa fa-check fa-fw"></i> Success</a>
    <a href="index.php?page=<?php echo $page; ?>&popup&popup_message=Warnmeldung&popup_icon=warning&popup_color=yellow" class="button yellow-bg"><i class="fa fa-warning fa-fw"></i> Warning</a>
    <a href="index.php?page=<?php echo $page; ?>&popup&popup_message=Errormeldung&popup_icon=times&popup_color=orange" class="button orange-bg"><i class="fa fa-times fa-fw"></i> Error</a>
    <a href="index.php?page=<?php echo $page; ?>&popup&popup_message=Infomeldung&popup_icon=info&popup_color=primary" class="button primary-bg"><i class="fa fa-info fa-fw"></i> Info</a>
  </div>
  <!-- Tour -->

  <ol class="joyride-list" data-joyride>
    <li data-text="Los" data-options="prev_button:false">
      <h4>Willkommen bei Calculi!</h4>
      <p>Die folgende Tour führt dich durch dein Konto.</p>
    </li>
    <li data-id="dashboard" data-button="weiter" data-prev-text="zurück" data-options="tip_location:bottom;tip_animation:fade">
      <h4>Das Dashboard</h4>
      <p>Lorem Ipsum...</p>
    </l i>
    <li data-id="counter-area-6" data-button="weiter" data-prev-text="zurück" data-options="tip_location:bottom;tip_animation:fade">
      <h4>Statistiken</h4>
      <p>Lorem Ipsum...</p>
    </l i>
    <li data-id="profil" data-button="weiter" data-prev-text="zurück" data-options="tip_location:bottom;tip_animation:fade">
      <h4>Dein Profil</h4>
      <p>Lorem Ipsum...</p>
    </li>
    <li data-id="ausschreibungen" data-button="weiter" data-prev-text="zurück" data-options="tip_location:bottom;tip_animation:fade">
      <h4>Ausschreibungen</h4>
      <p>Lorem Ipsum...</p>
    </li>
    <li data-id="bewerbungen" data-button="weiter" data-prev-text="zurück" data-options="tip_location:bottom;tip_animation:fade">
      <h4>Bewerbungen</h4>
      <p>Lorem Ipsum...</p>
    </li>
    <li data-id="projekte" data-button="weiter" data-prev-text="zurück" data-options="tip_location:bottom;tip_animation:fade">
      <h4>Projekte</h4>
      <p>Lorem Ipsum...</p>
    </li>
    <li data-id="einstellungen" data-button="weiter" data-prev-text="zurück" data-options="tip_location:bottom;tip_animation:fade">
      <h4>Einstellungen</h4>
      <p>Lorem Ipsum...</p>
    </li>
    <li data-button="End" data-prev-text="zurück">
      <h4>Geschafft!</h4>
      <p>Jetzt wo du alles gesehen hast, wünscht dir Calculi viel Erfolg bei deinen Bewerbungen.</p>
    </li>
  </ol> 