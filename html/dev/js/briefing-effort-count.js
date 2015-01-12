// Count Effort
// Select Elements with class "has-effort"
var $EffortInputs = $('.has-effort') 

// At status Update
$EffortInputs.change(function() {

	var totalEffort = 0

// Run through all elements
$EffortInputs.each(function() {  
	if ($(this).is(':checked')) {
		var selectedEffort = $(this).data('effort')
		console.log(selectedEffort)
		totalEffort += selectedEffort
	}
})

// Prevent Overskill ;)
if(totalEffort > 100) {
	totalEffort = 100;
}

// increase process-bar
$('.TotalEffortDiv').animate( {"width": totalEffort + "%"},1000 );

// show effort-value
$('.EffortCount').text('Aufwand (~' + totalEffort + '%)')
})

// initialize Counter
$EffortInputs.first().change();