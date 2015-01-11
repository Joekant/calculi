<div id="login">
  <div class="row text-center">
    <a href="index.php"><img src="../img/logo_symbol.png" class="logo half-padding" alt="logo"></a>
    <h1 class="padding-bottom">Login</h1>
        <form class="loginform" method="POST">
          <input type="email" id="email" placeholder="E-mail" value="a@a.at" />
          <input type="password" id="password" placeholder="Passwort" value="3uiC8Mag" />
          <input type="submit" class="button expand padding-top" id="loginbutton" value="Login">
        </form>
        <div id="loginlinks" class="padding-top" >
          <a href="index.php?page=register" id="reglink"><span data-tooltip aria-haspopup="true" class="has-tip" title="zur Registrierung"><i class="fa fa-plus fa-fw"></i></span></a>
          <a href="" data-reveal-id="help" id="helplink"><span data-tooltip aria-haspopup="true" class="has-tip" title="Passwort widerherstellen"><i class="fa fa-question fa-fw"></i></span></a>
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
  var password = $('#password').val();

  $.post( "/calculi/rest/auth/login", { email: email, password: password })
  .done(function( data ) {
    // console.log(data)
    if (data.success == "true") {
      window.location = "/calculi/html/dev/_worker/index2.php";
    }
    else {
      alert("keine Berechtigung");
    }
  });
event.preventDefault();
})
</script>