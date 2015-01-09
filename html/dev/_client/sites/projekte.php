<div class="main-section">
	<div class="row padding-top">
		<div class="medium-12 columns">
			<div class="view-switch right show-for-medium-up">
				<a href="#" class="active" id="link-boxed"><i class="fa fa-th fa-fw"></i></a>
				<a href="#" id="link-list"><i class="fa fa-list-ul fa-fw"></i></a>
			</div>
			<div class="sort">
				<a href="" class="sortbuttons"><i class="fa fa-recycle fa-fw"></i></a>
				<a href="" class="sortbuttons"><i class="fa fa-check fa-fw"></i></a>
				<a href="" class="sortbuttons"><i class="fa fa-legal fa-fw"></i></a>
			</div>
		</div>
	</div>
	<br class="end">

	<?php

	$projects = array (
		"name"  => array (
			0 => "Testprojekt (fertig)",
			1 => "Testprojekt (aktiv)",
			2 => "Testprojekt (aktiv)"

			),
		"status"  => array (
			0 => "closed",
			1 => "active",
			2 => "active"
			)
		);

		?>

		<div class="row" >
			<div id="list-style" class="hide">
				<table>
					<tr>
						<th ><i class="fa fa-university fa-fw"></i></th>
						<th ><i class="fa fa-euro fa-fw"></i></th>
						<th ><i class="fa fa-clock-o fa-fw"></i></th>
						<th ><i class="fa fa-edit fa-fw"></i></th>
					</tr>
					<?php for($i=0; $i<3; $i++) {
						if($projects[status][$i] == "closed") {
							$status = '<span class="label default">abgeschlossen</span>';
						}
						elseif($projects[status][$i] == "active") {
							$status = '
							<a href="#" data-reveal-id="finishproject"><i class="fa fa-check fa-fw green-font"></a>
							<a href="#" data-reveal-id="deleteproject"><i class="fa fa-remove fa-fw orange-font"></a>';
						}


						?>
						<tr>
							<td><?php echo $projects['name'][$i]; ?></td>
							<td>1600 €</td>
							<td>97</td>
							<td>2 Tage</td>
							<td><?php echo $status; ?></td>
						</tr>
						<?php } ?>
					</table>
				</div>
				<div id="boxed-style">
					<?php for($i=0; $i<3; $i++) { ?>
					<div class="medium-4 columns">
						<div class="project">
							<div class="project-name <?php if($projects[status][$i] == "closed" || $projects[status][$i] == "pending" ) { echo "closed-header"; } ?>" >
								<h2><?php echo $projects['name'][$i]; ?></h2>
							</div>
							<div  class="project-content <?php if($projects[status][$i] == "closed" || $projects[status][$i] == "pending" ) { echo "closed-content"; } ?>">
								<div class="row text-center">
									<?php
									if($projects[status][$i] == "active" || $projects[status][$i] == "pending" ) {
										echo '
										<div class="medium-4 columns"><i class="fa fa-euro fa-fw"></i><br />2500</div>
										<div class="medium-4 columns"><i class="fa fa-dashboard fa-fw"></i><br />94</div>
										<div class="medium-4 columns"><i class="fa fa-clock-o fa-fw"></i><br />22 Tage</div>
										';
									}

									elseif($projects[status][$i] == "closed" || $projects[status][$i] == "pending" ) {
										echo '
										RATINGS
										';
									}
									?>
								</div>
							</div>
							<div class="project-actions <?php if($projects[status][$i] == "closed"  || $projects[status][$i] == "pending") { echo "closed-footer"; } ?>">
								<div class="button-bar">
									<ul class="button-group">
										<?php
										if($projects[status][$i] == "active") {
											echo '

											<li><a href="#" class="small button green-bg" data-reveal-id="finishproject"><i class="fa fa-check fa-fw"></i></a></li>
											<li><a href="#" class="small button red-bg" data-reveal-id="deleteproject"><i class="fa fa-remove fa-fw"></i></a></li>
											';
										} elseif($projects[status][$i] == "closed") {
											echo '

											<li><a href="#" class="small button grey-bg">abgeschlossen</i></a></li>
											';

										} elseif($projects[status][$i] == "pending") {
											echo '
											<li><a href="#" class="small button grey-bg">warten auf abnahme</i></a></li>
											';
										}
										?>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>

<div id="finishproject" class="reveal-modal" data-reveal>
	<h2>Projekt abschließen</h2>
	<a class="close-reveal-modal">&#215;</a>
	<p>Sobald Sie das Projekt als abgeschlossen markieren wird der Webworker über die erfolgreiche Abnahme informiert und Sie können die Arbeit des Webworkers bewerten.</p>
	  <a href="index.php?page=finishproject" class="button small green-bg" ><i class="fa fa-check"></i> Projekt abnehmen</a>

</div>

<div id="deleteproject" class="reveal-modal" data-reveal>
	<h2>Projekt abbrechen</h2>
	<a class="close-reveal-modal">&#215;</a>
	<p>Sind Sie sicher, dass Sie dieses Projekt abbrechenn möchten? Dieser Schritt kann nicht rückgängig gemacht werden.</p>
		  <a href="#" class="button small red-bg"><i class="fa fa-check"></i> Projekt löschen</a>

</div>

		<script>
		// View-Switch (boxed/list)
		$("#link-boxed").click(function(){
			$("#list-style").slideUp("slow")
			$("#boxed-style").slideDown("slow")
			$("#link-boxed").addClass('active')
			$("#link-list").removeClass('active')
		});

		$("#link-list").click(function(){
			$("#list-style").slideDown("slow")
			$("#boxed-style").slideUp("slow")
			$("#link-list").addClass('active')
			$("#link-boxed").removeClass('active')
		});
	</script>
