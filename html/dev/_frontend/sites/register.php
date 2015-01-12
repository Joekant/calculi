
<div id="login">
  <div class="row text-center">
    <a href="index.php"><img src="../img/logo_symbol.png" class="logo half-padding" alt="logo"></a>
    <h1 class="padding-bottom">Registrieren</h1>


<div class="panel text-center green-border register-success hide">
        <h5> <i class="fa fa-check fa-fw"></i> Registrierung erfolgreich</h5>
        <p>Bitte überprüfe deinen Posteingang um das Konto zu aktivieren</p>
        <a href="index.php?page=login" class="button expand">zum Login</a>
      </div>

      <div class="panel text-center orange-border register-error hide">
        <h5> <i class="fa fa-check fa-fw"></i> Registrierung fehlgeschlagen</h5>
      </div>
<div class="login-form">
        <form class="loginform" method="POST">
          <input type="text" id="name" placeholder="Max Mustermann" value="mustermann" />
          <input type="email" id="email" placeholder="mustermann@gmail.com" value="mustermann@gmail.com" />
          <input type="submit" class="button expand padding-top" id="loginbutton" value="Registrieren">
        </form>
        <div id="loginlinks" class="padding-top" >
          <a href="index.php?page=login" id="reglink"><span data-tooltip aria-haspopup="true" class="has-tip" title="zum Login"><i class="fa fa-lock fa-fw"></i></span></a>
        </div>
        </div>
   </div>
 </div>
</div>

<div id="help" class="reveal-modal" data-reveal>
  <h2>Passwort vergessen?</h2>
  <p>Kein Problem. Wir schicken dir gerne ein Neues zu!</p>
  <div class="row">
    <div class="medium-4 columns">
      <label for="email">E-mail Adresse</label>
      <input type="text" id="remail" placeholder="mustermann@gmail.com">
    </div>
  </div>
  <a class="close-reveal-modal">&#215;</a>
  <a href="" class="button green-bg text-right"><i class="fa fa-save fa-fw"></i> Speichern</a>
</div>

<script>
  var submit = $('#loginbutton')
  submit.click(function() {

  var email = $('#email').val();
  var name = $('#name').val();

  $.post( "/calculi/rest/auth/addnewuser", { email: email, fullName: name, role:"client" })
  .done(function( data ) {

if (data.success == "true") {
    $(".register-success").slideDown("slow")
    $(".login-form").slideUp("slow")
}
$(".register-error").slideDown("slow")

  });

event.preventDefault();
})
</script>

<!--

<div id="login">
  <div class="row text-center">
    <a href="index.php"><img src="../img/logo_symbol.png" class="logo half-padding" alt="logo"></a>
    <h1 class="padding-bottom">Registrieren</h1>

      <div class="panel text-center green-border">
        <h5> <i class="fa fa-check fa-fw"></i> Registrierung erfolgreich</h5>
        <p>Bitte überprüfe deinen Posteingang um das Konto zu aktivieren</p>
        <a href="index.php?page=login" class="button expand">zum Login</a>
      </div>

      <dl class="tabs" data-tab data-options="deep_linking:true">
        <dd class="active logintabs"><a href="#webworker">Webworker</a></dd>
        <dd class="logintabs"><a href="#kunde">Kunde</a></dd>
      </dl>
      <div class="tabs-content">
        <div class="content active" id="webworker">
          <form class="loginform">
          <input type="text" id="name" placeholder="Max Mustermann" />
            <input type="text" id="email" placeholder="E-mail" />
            <input type="submit" class="button expand padding-top" id="registerbutton" value="Los">
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
</div>
<script>

<script>
  var submit = $('#registerbutton')

  submit.on('click', (function() {
    event.preventDefault();

console.log("clic")
var email = $('#email').val();
var name = $('#name').val();

  $.post( "/calculi/rest/auth/addnewuser", { email: email, fullName: name, role: "client" })
  .done(function( data ) {
    // console.log(data)
    if (data.success == "true") {
      alert("success")
      // window.location = "/calculi/html/dev/_worker/index2.php";
    }
    else {
      alert("keine Berechtigung");
    }
  });

})
</script> -->