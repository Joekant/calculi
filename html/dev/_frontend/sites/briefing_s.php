<!-- requires logic/logic_briefing.php -->

<?php 
$pass = "";

if(isset($_GET["pass"])) {
	$pass = $_GET['pass'];	
}

?>
<main>
	<div class="row text-center half-padding">

		<div class="panel text-center green-border">
			<h5>Briefing erfolgreich!</h5>
			<p>
				Nachdem du den <strong>Aktivierungslink</strong> in deinem E-mail Postfach bestätigt hast wird dein Konto aktiviert,
				sodass du dich mit E-mail und Passwort anmelden kannst und die Kostenvoranschläge der Bewerber vergleichen.
			</p>
			<p>
				Dein Passwort <br>
				<span class="label secondary code padding-bottom"><?php echo $pass; ?></span>
			</p>
					<!--
					<br class="half-padding" /><a  href="index.php?page=login#kunde">jetzt anmleden</a>
				</p> -->
			</div>
			<form>
				<label for="email">Feedback zum Formular?</label>
				<textarea type="text" id="remail" rows="3" placeholder="Mir hat am Formular gefehlt, dass..."></textarea>
				<button type="submit" class="button">Absenden</button>
			</form>
		</div>
	</div>

</main>