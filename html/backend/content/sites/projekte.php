<div class="main-section">
	<div class="row padding-top">
		<div class="medium-12 columns">
			<div class="view-switch right">
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
			0 => "T-Mobile",
			1 => "Entasia",
			2 => "Thomas Henn",
			3 => "Ströck",
			4 => "Jon Doe",
			5 => "Kleidershopping"

			),
		"status"  => array ( 
			0 => "closed",
			1 => "active",
			2 => "pending",
			3 => "active",
			4 => "pending",
			5 => "closed"
			)
		);

		?>

		<div class="row" >
			<div id="list-style" class="hide">
				<table>
					<tr>
						<th ><i class="fa fa-university fa-fw"></i></th>
						<th ><i class="fa fa-euro fa-fw"></i></th>
						<th ><i class="fa fa-dashboard fa-fw"></i></th>
						<th ><i class="fa fa-clock-o fa-fw"></i></th>
						<th ><i class="fa fa-edit fa-fw"></i></th>
					</tr>
					<?php for($i=0; $i<6; $i++) { 
						if($projects[status][$i] == "closed") { 
							$status = '<span class="label default">abgeschlossen</span>'; 
						}
						elseif($projects[status][$i] == "active") { 
							$status = '
							<a href="#"<i class="fa fa-check fa-fw green-font"></a>
							<a href="#"<i class="fa fa-remove fa-fw orange-font"></a>'; 
						}
						elseif($projects[status][$i] == "pending") { 
							$status = '<span class="label secondary">Abnahme ausständig</span>'; 
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
					<?php for($i=0; $i<6; $i++) { ?>
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

											<li><a href="#" class="small button green-bg"><i class="fa fa-check fa-fw"></i></a></li>
											<li><a href="#" class="small button red-bg"><i class="fa fa-remove fa-fw"></i></a></li>
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

			<div class="counter-area-3">
				<div class="row text-center">
					<div class="medium-4 columns">
						<div class="label counter">
							<i class="fa fa-recycle fa-fw"></i><br /><span class="counter-value">4</span><br />4500 €
						</div>
					</div>
					<div class="medium-4 columns">
						<div class="label green-bg counter">
							<i class="fa fa-check fa-fw"></i><br /><span class="counter-value">4</span><br />4500 €
						</div>
					</div>
					<div class="medium-4 columns">
						<div class="label grey-bg counter">
							<i class="fa fa-legal fa-fw"></i><br /><span class="counter-value">4</span><br />4500 €
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
		// View-Switch (boxed/list)
		// Declare Links
		var linkboxed = document.getElementById('link-boxed')
		var linklist = document.getElementById('link-list')
		
		// Declare container
		var liststyle = document.getElementById('list-style')
		var boxstyle = document.getElementById('boxed-style')

		linkboxed.addEventListener('click', function() {
			boxstyle.setAttribute('class', '')
			liststyle.setAttribute('class', 'hide')
			linkboxed.setAttribute('class', 'active')
			linklist.removeAttribute('class')

		})

		linklist.addEventListener('click', function() {
			boxstyle.setAttribute('class', 'hide')
			liststyle.setAttribute('class', '')
			linklist.setAttribute('class', 'active')
			linkboxed.removeAttribute('class')
		})
	</script>
