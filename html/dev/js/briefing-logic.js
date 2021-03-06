var span = $('.revision-count')
$('[data-slider]').on('change.fndtn.slider', function(){
	var count = $('#revision-slider').attr('data-slider');
	span.val(count)
});


// PARSE FORM AND POST JSON ans stringify to newBriefing Controller
var submit = $('#submit')

submit.click(function() {
	postToServer()
	event.preventDefault();
})

function postToServer() {
	var data = {
		'services' : {},
		'functions' : {},
		'content' : {},
		'design' : {},
		'general' : {}

	};

	var form = $('#form');
	var inpS = form.find('input, textarea, select');
	var temp;

	for(var n = 0; n < inpS.length; n++) {

		temp = $(inpS[n]);

		if(temp.attr("name") == undefined) continue;

		if( temp.attr("checked") ) {
			if(temp.attr("type") == "checkbox") {
				if( data[temp.attr("name")][temp.data("name")] == undefined) data[temp.attr("name")][temp.data("name")] = [];
				data[temp.attr("name")][temp.data("name")].push(temp.attr("value"));

			} else if(temp.attr("type") == "radio") {
				data[temp.data("category")][temp.attr("name")] = temp.attr("value");
			}
		} else if(temp.attr("type") == "hidden" ) {
			data[temp.attr("name")][temp.data("name")] = temp.attr("value");

		} else if(temp.attr("type") == "text" ) {
			data[temp.data("category")][temp.attr("name")] = temp.val();
		} else if(temp[0].type == "textarea" ) {
			data[temp.data("category")][temp.attr("name")] = temp.text();
		} else if (temp[0].type == "select-one" ) {
			// console.log(temp, temp.val());
			data[temp.data("category")][temp.data("name")] = temp.val();
		}
	}

	
	
	var afterCreateUser = function(pass) {
		$.ajax({
			type: "POST",
			url : "/calculi/rest/briefing/newBriefing",
			data : {
				briefingData: dataStringify	
			}
		}).done(function(response)  {
			console.log(response)
			if(response.success != false) {
				if(pass == null) {
					window.location = "/calculi/html/dev/_frontend/index.php?page=briefing_s";	
				} else {
					window.location = "/calculi/html/dev/_frontend/index.php?page=briefing_s&pass=" + pass;	
				}
				
			}
			
			
		}).fail(function(response)  {
			console.log(response)
		});		
	}

	var fullName = $("#i_name").val();
	var email = $("#i_email").val();

	var dataStringify = JSON.stringify(data);

	if(fullName == undefined || email == undefined)  {
		afterCreateUser(null)
	} else {

		console.log(data, fullName, email);
		
		$.ajax({
			type: "POST",
			url : "/calculi/rest/auth/addnewuser",
			data : {
				'fullName': fullName,
				'email' : email,
				'role' : 'client'
			}
		}).done(function(response)  {
			console.log(response);
			if(response.success== false) {
				console.log(response);
			}else {
				afterCreateUser(response.success);	
			}
			
		}).fail(function(response)  {
			alert("error" + response.success);
		});
	}
	


	
	


	// $.post( "/calculi/rest/briefing/newBriefing", { briefingData: dataStringify })
	// .done(function( response ) {
	// 	console.log(response)
	// 	if (response.success == "true") {
	// 		// console.log("briefing eingetragen")
	// 		window.location = "/calculi/html/dev/_frontend/index.php?page=briefing_s";
	// 	}
	// 	else {
	// 		alert("error" + response.success)
	// 		// $(".login-error").slideDown("slow")
	// 	}
};

