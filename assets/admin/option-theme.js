jQuery(function($){
	var frame 								= wp.media({
		title: 								'select',
		button: 							{
			text: 							'use the media'
		},
		multiple: 							false
	});

	$('#button_image_image_about_us').click(function(event) {
		event.preventDefault();

		frame.open();
	});

	frame.on('select', function() {
		var attachment			= frame.state().get('selection').first().toJSON();
		$("input[name = twd_image_about_us]").val(attachment.url);
	});
});