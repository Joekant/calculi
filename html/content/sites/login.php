<div id="login">
  <div class="row text-center">
  <a href="index.php"><img src="img/logo_symbol.png" class="logo half-padding" alt="logo"></a>
  <h1 class="padding-bottom">Login</h1>

  


<dl class="tabs" data-tab data-options="deep_linking:true">
  <dd class="active"><a href="#webworker">Webworker</a></dd>
  <dd><a href="#kunde">Kunde</a></dd>
</dl>
<div class="tabs-content">
  <div class="content active" id="webworker">
    
  <form class="loginform" action="backend/index.php" method="POST">

    <input type="text" placeholder="E-mail" />
    <input type="password" placeholder="Passwort" />
    <input type="submit" class="button expand padding-top" id="loginbutton" value="Login">
    </form>
  <div id="loginlinks" >
    <a href="index.php?page=register" id="reglink">Registrieren</a>
    <a href="" id="helplink">Hilfe</a>
  </div>

  </div>
  <div class="content" id="kunde">
   <form class="loginform" action="index.php?page=compare" method="POST">
   <input type="password" placeholder="Auftragspasswort" />
   <input type="submit" class="button expand padding-top" id="loginbutton" value="Login">
   </form>
  <div id="loginlinks" >
    <a href="" id="helplink">Hilfe</a>
  </div>
  </div>
  


</div>


</div>