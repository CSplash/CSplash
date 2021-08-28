$(function(){
	// Get the number of characters in the initial state
	var str = $('#js_count').val(),
		new_str = $.trim(str.replace(/\n/g, "")),
		strCount = new_str.length;
	$('.show_count').html(strCount);

	// Get the number of characters as you type
	$('#js_count').bind('keydown keyup keypress change',function(){
		var str = $(this).val(),
			new_str = $.trim(str.replace(/\n/g, "")),
			strCount = new_str.length;
		$('.show_count').html(strCount);
	});
});