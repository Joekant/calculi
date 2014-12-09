<script>
var dellink = $('.delnot')
dellink.on('click', function(e){
	e.preventDefault();

	var notificationId = $(this).attr('name')
	var tr = $(this).closest("tr")

	$.post('../php/logic/dashboard_notifications.php', {send : notificationId }, function(response) {
		tr.fadeOut(300, function(){ $(this).remove();});
	});

	if ($(".notification-area tr").length < 3) {
		$('.notification-area').remove()
		$('.notification-info').text("Keine ungelesene Benachrichtungen mehr vorhanden")
	}
});

</script>