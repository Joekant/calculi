<div id="login">
  <div class="row text-center">
    <a href="index.php"><img src="../img/logo_symbol.png" class="logo half-padding" alt="logo"></a>
    <h1 class="padding-bottom">Login</h1>
    <dl class="tabs" data-tab data-options="deep_linking:true">
      <dd class="active logintabs"><a href="#webworker">Webworker</a></dd>
      <dd class="logintabs"><a href="#kunde">Kunde</a></dd>
    </dl>
    <div class="tabs-content">
      <div class="content active" id="webworker">
        <form class="loginform" action="../_worker" method="POST">
          <input type="email" placeholder="E-mail" />
          <input type="password" placeholder="Passwort" />
          <input type="submit" class="button expand padding-top" id="loginbutton" value="Login">
        </form>
        <div id="loginlinks" >
          <a href="index.php?page=register" id="reglink"><i class="fa fa-plus fa-fw"></i></a>
          <a href="" data-reveal-id="help" id="helplink"><i class="fa fa-question fa-fw"></i></a>
        </div>
      </div>
      <div class="content" id="kunde">
        <form class="loginform" action="../_client" method="POST">
          <input type="email" placeholder="E-mail" />
          <input type="password" placeholder="Passwort" />
          <input type="submit" class="button expand padding-top" id="loginbutton" value="Login">
        </form>
        <div id="loginlinks" >
         <a href="" data-reveal-id="help" id="helplink"><i class="fa fa-question fa-fw"></i></a>
       </div>
     </div>
   </div>
 </div>
</div>

<div id="help" class="reveal-modal" data-reveal>
  <h2>Passwort vergessen?</h2>
  <p>Kein Problem. Wir schicken dir gerne ein neues zu!</p>
  <div class="row">
    <div class="medium-4 columns">
      <label for="email">E-mail Adresse</label>
      <input type="text" id="remail" placeholder="mustermann@gmail.com">
    </div>
  </div>

  <a class="close-reveal-modal">&#215;</a>
  <a href="" class="button green-bg text-right"><i class="fa fa-save fa-fw"></i> Speichern</a>
</div>