jQuery(function($){
	var frame 								= wp.media({
		title: 								'select',
		button: 							{
			text: 							'use the media'
		},
		multiple: 							false
	});
	var input_image_next; 
	// $('.button_image_about_us').on("click", function(event) {
	$('.table_add_image').on("click", '.button_image_about_us', function(event) {
		event.preventDefault();
		input_image_next = $(this).parent().next();
		frame.open();
	});

	frame.on('select', function() {
		var attachment			= frame.state().get('selection').first().toJSON();
		input_image_next.val(attachment.url);
	});

 //#add_amenity

	$('#add_love_fact').click(function(){

		var count_loves = $('.table_love_fact tr').length;
		count_loves++;
		var str = '<tr><th><label for="input_love_fact_';
			str+= count_loves;
			str+= '">'
			str+= 'Fact '+count_loves;
			str+= '</label></th><td><input id="input_love_fact_';
			str+= count_loves
			str+= '" size="50" name="input_love_fact[]" type="text"></td></tr>';

		$('.table_love_fact').append(str);
	});

	$('#add_image').click(function(){

		var count_loves = $('.table_add_image tr').length;
		count_loves++;
		var str = '<tr><td><div class="input-group"><span class="input-group-btn">'
			str+= '<button class="button_image_about_us input-group-button" type="button">Upload image</button>'
			str+= '</span><input id="image_slider_';
			str+= count_loves;
			str+= '" class="input-group-text" size="50" name="image_slider[]" type="text">';
		$('.table_add_image').append(str);
	});

	$('#add_amenity').click(function(){

		var count_loves = $('.table_amenities tr').length;
		count_loves++;
		var str = '<tr><th><label for="input_amenities_';
			str+= count_loves;
			str+= '"  >Amenities</label></th><td><input id="input_amenities_';
			str+= count_loves;
			str+= '"  size="50" name="input_amenities[]" type="text"></td></tr>';
		$('.table_amenities').append(str);
	});


});
