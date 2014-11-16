<?php 	
// create empty array
$briefing = array();

// Run through POST-Array and change field names to printable words
while( list( $field, $value ) = each( $_POST )) {

	// Manipulate output 
	if ($value == "yes" || $value == "Designer") {
		$value = '<i class="green-font fa fa-check fa-fw"></i> Ja';
	}
	elseif  ($value == "no" || $value == "Kunde") {
		$value = '<i class="orange-font fa fa-remove fa-fw"></i> Nein';
	}
	elseif  ($value == "r_text_rdy") {
		$value = 'Designer erhält fertigen Text';
	}
	elseif  ($value == "r_text_update") {
		$value = 'Designer bereitet vorhandenen Text auf';
	}
	elseif  ($value == "r_text_create") {
		$value = 'Designer erstellt individuellen Text';
	}
	elseif  ($value == "r_grafik_rdy") {
		$value = 'Designer erhält fertige Grafiken';
	}
	elseif  ($value == "r_grafik_update") {
		$value = 'Designer bereitet vorhandene Grafiken auf';
	}
	elseif  ($value == "r_grafik_create") {
		$value = 'Designer erstellt individuelle Grafiken';
	}
	elseif  ($value == "r_design_rdy") {
		$value = 'Designer setzt vorhandenes Design um';
	}
	elseif  ($value == "r_design_create") {
		$value = 'Designer erstellt individuelles Design';
	}
	elseif  ($value == "r_design_template") {
		$value = 'Designer passt ausgewähltes Template an die Bedürfnisse des Kunden an';
	}
	elseif  ($field == "c_function_ml") {
		$value = 'Multilingualität';
	}
	elseif  ($field == "c_function_comment") {
		$value = 'Kommentarfunktion';
	}
	elseif  ($field == "c_function_donate") {
		$value = 'Spendenformular';
	}
	elseif  ($field == "c_function_calendar") {
		$value = 'Terminkalender';
	}
	elseif  ($field == "c_function_booking") {
		$value = 'Buchungssystem';
	}
	elseif  ($field == "c_function_order") {
		$value = 'Bestellsystem';
	}
	elseif  ($field == "c_function_poll") {
		$value = 'Umfragefunktion';
	}
	elseif  ($field == "c_function_intern") {
		$value = 'Interner Bereich';
	}
	elseif  ($field == "c_function_search") {
		$value = 'Suchfunktion';
	}
	elseif  ($field == "c_function_newsletter") {
		$value = 'E-mail Newsletter';
	}
	elseif  ($field == "c_function_gallery") {
		$value = 'Bildergallerie';
	}
	elseif  ($field == "c_function_contact") {
		$value = 'Kontaktformular';
	}
	elseif  ($field == "c_ext_blog") {
		$value = 'Blog';
	}	
	elseif  ($field == "c_ext_forum") {
		$value = 'Forum';
	}	
	elseif  ($field == "c_ext_shop") {
		$value = 'Shop';
	}		
	elseif  ($field == "c_ext_wiki") {
		$value = 'Wiki';
	}				
	elseif  ($field == "c_pages_products") {
		$value = 'Produktvorstellung';
	}	
	elseif  ($field == "c_pages_portfolio") {
		$value = 'Portfolio';
	}	
	elseif  ($field == "c_pages_contact") {
		$value = 'Kontaktseite';
	}	
	elseif  ($field == "c_pages_agb") {
		$value = 'AGB-Seite';
	}	
	elseif  ($field == "c_pages_team") {
		$value = 'Teamvorstellung';
	}	
	elseif  ($field == "c_pages_download") {
		$value = 'Downloadbereich';
	}	
	elseif  ($field == "c_pages_faq") {
		$value = 'F.A.Q - Seite';
	}	

	// Append current element to array
	$briefing += array($field => $value);
	
	$$field = $value;
}

?>