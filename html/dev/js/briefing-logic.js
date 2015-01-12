<script>
// Handle Revision-Range-Slider
var span = $('.revision-count')
$('[data-slider]').on('change.fndtn.slider', function(){
	var count = $('#revision-slider').attr('data-slider');
	span.val(count)
});
</script>

<script>
// PARSE FORM AND POST JSON
function postToServer() {
	var data = {
		'services' : {},
		'functions' : {},
		'content' : {},
		'design' : {},
		'general' : {}
	};

	var form = $('#form');
	var inpS = form.find('input, textarea');
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

		} else if(temp.attr("type") == "text"  ) {

			data[temp.data("category")][temp.attr("name")] = temp.attr("value");
		} else if(temp[0].type == "textarea" ) {
			data[temp.data("category")][temp.attr("name")] = temp.text();
		}
	}

	console.log(data);
}
postToServer()
</script>