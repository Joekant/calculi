<?php

if($page == "projekte") {
	$helptitle = "Hilfe zur Projektverwaltung";
	$helptext = 'Für diesen Bereich der Seite existiert momentan noch kein Hilfebereich';
}
elseif($page == "bewerbungen") {
	$helptitle = "Hilfe zu den Bewerbungen";
	$helptext = 'Für diesen Bereich der Seite existiert momentan noch kein Hilfebereich';
}
elseif($page == "dashboard") {
	$helptitle = "Hilfe zum Dashboard";
	$helptext = 'Für diesen Bereich der Seite existiert momentan noch kein Hilfebereich';
}
elseif($page == "ausschreibungen") {
	$helptitle = "Hilfe zu den Ausschreibungen";
	$helptext = 'Für diesen Bereich der Seite existiert momentan noch kein Hilfebereich';
}
elseif($page == "einstellungen") {
	$helptitle = "Hilfe zu den Kontoinstellungen";
	$helptext = 'Für diesen Bereich der Seite existiert momentan noch kein Hilfebereich';
}
elseif($page == "profil") {
	$helptitle = "Hilfe zum Profil";
	$helptext = 'Für diesen Bereich der Seite existiert momentan noch kein Hilfebereich';
}
else {
	$helptitle = "Allgemeine Hilfe";
	$helptext = 'Für diesen Bereich der Seite existiert momentan noch kein Hilfebereich';
}

?>

<div id="helpmodal" class="reveal-modal" data-reveal>
	<h2><i class="fa fa-question fa-fw"></i> <?php echo $helptitle;  ?></h2>
	<a class="close-reveal-modal">&#215;</a>
	<?php echo $helptext;  ?>
</div>

<div id="feedbackmodal" class="reveal-modal" data-reveal>
	<h2><i class="fa fa-comment fa-fw"></i> Feedback zur Seite "<?php echo ucfirst($page); ?>"</h2>
	Wir sind stet's bemüht Calculi zu verbessern. Sag uns deine Meinung!
	<form action="index.php?page=briefing_s" method="POST">
		<textarea type="text" id="remail" rows="3" placeholder="Auf dieser Seite ist mir aufgefallen, dass..."></textarea>
		<button type="submit" class="button">Absenden</button>
	</form>
	<a class="close-reveal-modal">&#215;</a>

</div>