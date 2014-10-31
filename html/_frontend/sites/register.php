<div id="login">
  <div class="row text-center">
    <a href="index.php"><img src="../img/logo_symbol.png" class="logo half-padding" alt="logo"></a>
    <h1 class="padding-bottom">Registrieren</h1>
    


    <?php if(isset($_GET['complete'])) {
      echo '
      <div class="panel text-center green-border">
        <h5> <i class="fa fa-check fa-fw"></i> Registrierung erfolgreich</h5>
        <p>Bitte überprüfe deinen Posteingang</p>
      </div> 
      '; 
    }
    else {
      echo '
      <dl class="tabs" data-tab data-options="deep_linking:true">
        <dd class="active logintabs"><a href="#webworker">Webworker</a></dd>
        <dd class="logintabs"><a href="#kunde">Kunde</a></dd>
      </dl>
      <div class="tabs-content">
        <div class="content active" id="webworker">
          <form class="loginform" action="index.php?page=register&complete" method="POST">
            <input type="text" placeholder="E-mail" />
            <input type="submit" class="button expand padding-top" id="loginbutton" value="Los">
          </form>
        </div>
        <div class="content" id="kunde">
          Als Kunde wirst du bei deinem ersten Auftrag automatisch registriert<br />
          <a href="index.php?page=briefing" class="button expand padding-top">Auftrag starten </a>
        </div>
      </div>

      <div id="loginlinks" >
       <a href="index.php?page=login" id="helplink"><span data-tooltip aria-haspopup="true" class="has-tip" title="zum Login"><i class="fa fa-lock fa-fw"></i></span></a>
     </div>
   </div>
   '; 
 }
 ?>



</div>