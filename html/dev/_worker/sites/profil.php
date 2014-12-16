<div class="main-section">
	<div class="row padding-top">		
<!-- 		<div class="row half-padding show-for-medium-up" id="profile-progress">
			Profil zu 30% vollständig
			<div class="progress">
				<span class="meter" style="width:30%"></span>
			</div> 
		</div> -->
		<div class="medium-2 columns show-for-medium-up">
			<div id="profile-navigation">
				<dl class="tabs vertical" data-tab>
					<dd class="active"><a href="#panel1"><i class="fa fa-user fa-fw"></i></a></dd>
					<dd><a href="#panel2"><i class="fa fa-mortar-board fa-fw"></i></a></dd>
					<dd><a href="#panel3"><i class="fa fa-windows fa-fw"></i><br /></a></dd>
				</dl>
			</div>	 
		</div>

		<div class="icon-submenu medium-10 columns">		
			<div class="tabs-content">
				<div class="content active" id="panel1">
					<h1>Allgemeine Daten</h1>
					<div class="row">
						<div class="large-4 columns">
							<div id="dropzone" class="fade well">
								<div id="upload-pic">
									<!-- <img src="http://lorempixel.com/250/200/people/" alt=""> -->
								</div>		    						
								<a class="fileinput-button">
									<i class="fa fa-upload fa-fw"></i><br />Profilbild wählen...
									<!-- The file input field used as target for the file upload widget -->
									<input id="fileupload" type="file" name="files[]">
								</a>
							</div>
						</div>
						<div class="medium-8 columns">
							<div class="medium-5 columns">
								<label for="i_name">Name</label>
								<input type="text" id="i_name" placeholder="Max Mustermann">
							</div>
							<div class="medium-5 columns">
								<label for="i_website">Website</label>
								<input type="text" id="i_website" placeholder="http://website.at">
							</div>
							<div class="medium-2 columns">
								<label for="i_birth">Geburtsjahr</label>
								<input type="text" id="i_birth" placeholder="1988">
							</div>

							<div class="medium-5 columns">
								<label for="i_competence">Kompetenzen</label>
								<input type="text" id="i_competence" placeholder="PHP, SQL, Photoshop...">
							</div>
							<div class="medium-7 columns">
								<label for="i_skills">Stärken</label>
								<input type="text" id="i_skills" placeholder="Disziplin, Pünktlichkeit...">
							</div>

							<div class="medium-6 columns">
								<label for="s_country">Land</span></label>
								<select id="s_country" name="s_country" >
									<option value="unselected">Land auswählen...</option>
									<option value="Österreich">Österreich</option>
									<option value="Deutschland" >Deutschland</option>
									<option value="Schweiz" >Schweiz</option>
								</select>
							</label>
						</div>
						<div class="medium-6 columns">
							<label for="s_state">Bundesland</label>
							<select id="s_state" name="s_state" disabled>
								<option value="">Bitte Land wählen</option>
							</select>
						</div>
					</div>
					<div class="medium-12 columns">
						<textarea type="text" id="t_description" rows="5" placeholder="Ich arbeite seit 2004 als ..."></textarea>
					</div>
					<div class="medium-3 columns">
						<label for="t_facebook" class="text-center"><i class="fa fa-facebook fa-fw"></i></label>
						<input type="text" id="t_facebook" placeholder="http://facebook.com/...">
					</div>
					<div class="medium-3 columns">
						<label for="t_googleplis" class="text-center"><i class="fa fa-google-plus fa-fw"></i></label>
						<input type="text" id="t_googleplus" placeholder="http://google.com/...">
					</div>
					<div class="medium-3 columns">
						<label for="t_twitter" class="text-center"><i class="fa fa-twitter fa-fw"></i></label>
						<input type="text" id="t_twitter" placeholder="http://twitter.com/...">
					</div>
					<div class="medium-3 columns">
						<label for="t_xing" class="text-center"><i class="fa fa-xing fa-fw"></i></label>
						<input type="text" id="t_xing" placeholder="http://xing.com/...">
					</div>
				</div>
				<div class="text-right padding-top">
					<a href="index.php?page=<?php echo $page; ?>&popup&popup_message=Änderungen gespeichert&popup_icon=check&popup_color=green" class="button green-bg"><i class="fa fa-save fa-fw"></i> Speichern</a>
				</div>
			</div>
			<div class="content" id="panel2">
				<h1>Ausbildung</h1>
				<a href="" data-reveal-id="add-education" class="button green-bg half-margin"><i class="fa fa-plus fa-fw"></i></a>

				<table id="education-list">
					<tr>
						<th width="50px"><i class="fa fa-clock-o fa-fw"></i></th>
						<th width="60px"><i class="fa fa-map-marker fa-fw"></i></th>
						<th><i class="fa fa-university fa-fw"></i></th>
						<th><i class="fa fa-info fa-fw"></i></th>
						<th  width="100px"><i class="fa fa-mortar-board fa-fw"></i></th>
						<th  width="80px"></th>
					</tr>
					<tr>
						<td>2014</td>
						<td>Wien</td>
						<td>SAE Technology Institute</td>
						<td>Webdesign & Development</td>
						<td>Bachelor</td>      
						<td><a href=""><i class="fa fa-edit fa-fw"></i></a></td>   
					</tr>
					<tr>
						<td>2014</td>
						<td>Wien</td>
						<td>SAE Technology Institute</td>
						<td>Webdesign & Development</td>
						<td>Bachelor</td>   
						<td><a href=""><i class="fa fa-edit fa-fw"></i></a></td>      
					</tr>

				</table>


				<div id="add-education" class="reveal-modal" data-reveal>
					<h2>Ausbildung hinzufügen</h2>

					<div class="medium-4 columns">
						<label for="i_institution">Einrichtung</label>
						<input type="text" name="i_institution" id="i_institution" placeholder="SAE Institute">
					</div>
					<div class="medium-4 columns">
						<label for="i_course">Kurs</label>
						<input type="text" name="i_course" id="i_course" placeholder="Webdesign & Development">
					</div>

					<div class="medium-4 columns">
						<label for="i_title">Titel</label>
						<input type="text" name="i_title" id="i_title" placeholder="Bachelor">
					</div>

					<div class="medium-4 columns">
						<label for="i_state">Ort</label>
						<input type="text" name="i_state" id="i_state" placeholder="Wien">
					</div>
					<div class="medium-4 columns">
						<label for="i_start">Start</label>
						<input type="text" name="i_start" id="i_start" placeholder="2013">
					</div>

					<div class="medium-4 columns">
						<label for="i_end">Ende</label>
						<input type="text" nmae="i_end" id="i_end" placeholder="2016">
					</div>	

					<a class="close-reveal-modal">&#215;</a>
					<a href="" class="button green-bg text-right"><i class="fa fa-save fa-fw"></i> Speichern</a>
				</div>
			</div>
			<div class="content" id="panel3">
				<h1>Referenzen</h1>
				<a href="" data-reveal-id="add-reference" class="button green-bg half-margin"><i class="fa fa-plus fa-fw"></i></a>
				<div id="profile-references">

					<?php

					for($i=1; $i<7; $i++) {

						$pictures = array('people', 'nightlife', 'nature', 'city', 'fashion', 'food');

						?>
						<div class="medium-4 columns reference-item">
							<a href="" data-reveal-id="add-reference">
								<img src="http://lorempixel.com/300/300/<?php echo $pictures[$i] ?>/" alt="">
							</a>
						</div>
						<?php } ?>
					</div>
					<div id="add-reference" class="reveal-modal" data-reveal>
						<h2>Referenz hinzufügen</h2>
						<div class="row">
							<div class="medium-3 columns">
								<label for="i_name">Projektname</label>
								<input type="text" name="i_name" id="i_name" placeholder="Calculi">
							</div>
							<div class="medium-3 columns">
								<label for="i_url">URL</label>
								<input type="text" name="i_url" id="i_url" placeholder="http://calculi.at">
							</div>

							<div class="medium-2 columns">
								<label for="i_date">Datum</label>
								<input type="text" name="i_date" id="i_date" placeholder="2014">
							</div>
							<div class="medium-4 columns">
								<a class="fileinput-button button padding-top">
									Thumbnail wählen
									<!-- The file input field used as target for the file upload widget -->
									<input id="fileupload" name="f_thumb" type="file" >
								</a>
							</div>
						</div>
						<div class="row">
							<div class="medium-12 columns">
								<label for="i_description">Beschreibung</label>
								<textarea type="text" name="i_description" id="i_description" rows="5" placeholder="Das Projekt wurde..."></textarea>
							</div>
						</div>
						<a class="close-reveal-modal">&#215;</a>
						<a href="" class="button green-bg text-right"><i class="fa fa-save fa-fw"></i> Speichern</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
