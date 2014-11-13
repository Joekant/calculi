<!-- requires logic/logic_briefing.php -->
<main>
	
	<div class="row text-center">			
		<h1 id="headline"></h1>
		<div class="panel text-center green-border">
			<h5>Briefing erfolgreich!</h5>
			<p>
				Nachdem du den <strong>Aktivierungslink</strong> in deinem E-mail Postfach bestätigt hast wird dein Konto aktiviert, 
				sodass du dich mit E-mail und Passwort anmelden kannst und die Kostenvoranschläge der Bewerber vergleichen.
			</p>
			<p>
				Dein Passwort <br>
				<span class="label secondary code padding-bottom">4gR6atg</span>
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
		<div class="form-step dark-bg primary-full-border">
			<h2>Zusammenfassung</h2> 
		</div>
		<div class="row briefing-summary">

			<div class="large-3 columns">
				<h2>Service</h2>
			</div>
			<div class="large-9 columns table-border-left grey-border">

				<table>
					<tr>
						<td width="250">Server</td>
						<td><?php echo $r_service_server; ?></td>
					</tr>
					<tr>
						<td>Domain</td>
						<td><?php echo $r_service_domain; ?></td>
					</tr>   
					<tr>
						<td>E-mail Adressen</td>
						<td><?php echo $r_service_mail; ?></td>
					</tr> 
					<tr>
						<td>Statistiken</td>
						<td><?php echo $r_service_statistics; ?></td>
					</tr> 
					<tr>
						<td>Mitarbeiterschulung</td>
						<td><?php echo $r_service_instructions; ?></td>
					</tr>
					<tr>
						<td>Online Marketing</td>
						<td><?php echo $r_service_advertising; ?></td>
					</tr>
				</table>
			</div>


			<div class="large-3 columns">
				<h2>Kunde</h2>
			</div>
			<div class="large-9 columns table-border-left">
				<table>
					<tr>
						<td width="250">Name</td>
						<td><?php echo $i_name; ?></td>
					</tr>
					<tr>
						<td>E-mail </td>
						<td><?php echo $i_email; ?></td>
					</tr>
					<tr>
						<td>Unternehmen </td>
						<td><?php echo $i_company; ?></td>
					</tr>
					<tr>
						<td>Website</td>
						<td><?php echo $i_website; ?></td>
					</tr>
					<tr>
						<td>Land</td>
						<td><?php echo $s_country; ?></td>
					</tr>
					<tr>
						<td>Ort</td>
						<td><?php echo $s_state; ?></td>
					</tr>
					<tr>
						<td>Beschreibung</td>
						<td><?php echo $t_description; ?></td>
					</tr>
					<tr>
						<td>Branche</td>
						<td><?php echo $s_branche; ?></td>
					</tr>
					<tr>
						<td>Mitarbeiter</td>
						<td><?php echo $s_employees; ?></td>
					</tr>
				</table>
			</div>
			<div class="large-3 columns">
				<h2>Inhalt</h2>
			</div>
			<div class="large-9 columns table-border-left">
				<table>
					<tr>
						<td width="250">Unterseiten</td>
						<td>
							<ul>
								<li><i class="green-font fa fa-plus  fa-fw"></i> Startseite</li>
								<li><i class="green-font fa fa-plus  fa-fw"></i> Impressum</li>
								<?php 
                  // duplicating array in new Variable, because otherwiese it works only once - don't know why ;)
								$subpages = $briefing;

                  // Run through array and output all function fields (containing "c_function_")
								while (list( $field, $value ) = each( $subpages )) {
									if(preg_match('/c_pages_/',$field)) {
										echo '<li><i class="green-font fa fa-plus  fa-fw"></i> '.$value.'</li>';
									}
								}
								?>
							</ul>
						</td>
					</tr>
					<tr>
						<td width="250">Texterstellung</td>
						<td><?php echo $r_text; ?></td>
					</tr>
					<tr>
						<td>Grafikerstellung</td>
						<td><?php echo $r_grafik; ?></td>
					</tr>
				</table>
			</div>
			<div class="large-3 columns">
				<h2>Funktionen</h2>
			</div>
			<div class="large-9 columns table-border-left">

				<table>
					<tr>
						<td width="250">Selbst Inhalte warten</td>
						<td><?php echo $r_cms; ?></td>
					</tr>
					<tr>
						<td width="250">Mobile Version</td>
						<td><?php echo $r_cms; ?></td>
					</tr>
					<tr>
						<td width="250">Barrierefreiheit</td>
						<td><?php echo $r_accessibility; ?></td>
					</tr>
					<tr>
						<td width="250">Gewünschte Funktionen</td>
						<td>
							<ul>
								<?php 
                  // duplicating array in new Variable, because otherwiese it works only once - don't know why ;)
								$functions = $briefing;

                  // Run through array and output all function fields (containing "c_function_")
								while (list( $field, $value ) = each( $functions )) {
									if(preg_match('/c_function_/',$field)) {
										echo '<li><i class="green-font fa fa-plus  fa-fw"></i> '.$value.'</li>';
									}
								}
								?>
							</ul>
						</td>
					</tr>
					<tr>
						<td>Externe Plattformen</td>
						<td>
							<ul>
								<?php 

								$plattforms = $briefing;
                  // Run through array and output all function fields (containing "c_function_")
								while (list( $field, $value ) = each( $plattforms )) {
									if(preg_match('/c_ext_/',$field)) {
										echo '<li><i class="green-font fa fa-plus  fa-fw"></i> '.$value.'</li>';
									}
								}
								?>
							</ul>
						</td>
					</tr>
				</table>
			</div>
			<div class="large-3 columns">
				<h2>Design</h2>
			</div>
			<div class="large-9 columns table-border-left">

				<table>
					<tr>
						<td width="250">Realisierung</td>
						<td><?php echo $r_design; ?></td>
					</tr>
					<tr>
						<td>Eigenschaften</td>
						<td><?php echo $t_mood; ?></td>
					</tr>
					<tr>
						<td>Positive Referenzen</td>
						<td><?php echo $t_reference_positive; ?></td>
					</tr>
					<tr>
						<td>Negative Referenzen</td>
						<td><?php echo $t_reference_negative; ?></td>
					</tr>
				</table>
			</div>
			<div class="large-3 columns">
				<h2>Service</h2>
			</div>
			<div class="large-9 columns table-border-left">

				<table>
					<tr>
						<td width="250">Server</td>
						<td><?php echo $r_service_server; ?></td>
					</tr>
					<tr>
						<td>Domain</td>
						<td><?php echo $r_service_domain; ?></td>
					</tr>   
					<tr>
						<td>E-mail Adressen</td>
						<td><?php echo $r_service_mail; ?></td>
					</tr> 
					<tr>
						<td>Statistiken</td>
						<td><?php echo $r_service_statistics; ?></td>
					</tr> 
					<tr>
						<td>Mitarbeiterschulung</td>
						<td><?php echo $r_service_instructions; ?></td>
					</tr>
					<tr>
						<td>Online Marketing</td>
						<td><?php echo $r_service_advertising; ?></td>
					</tr>
				</table>
			</div>
			<div class="large-3 columns">
				<h2>Kommentar</h2>
			</div>
			<div class="large-9 columns table-border-left">

				<table>

					<?php echo $t_comment; ?>
				</table>
			</div>
		</div>
	</div> 
</main>