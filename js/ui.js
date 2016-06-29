$(document).ready(function(){

$('#tabs').tabs({
	ajaxOptions: {
		error: function(xhr, index, status, anchor)
				{ 
					$(anchor.hash).text('Could not load page ') 
				} 
		
	} });

$('#local_img').hover(function() {
	$('#local_img').hide(1000);
	$('#local').show(1000);
});

$('#local_close').click(function() {
	$('#local').hide(1000);
	$('#local_img').show(1000);
});

$('#national_img').hover(function() {
	$('#national_img').hide(1000);
	$('#national').show(1000);
});

$('#national_close').click(function() {
	$('#national').hide(1000);
	$('#national_img').show(1000);
});

$('#monitor_toggle').click(function() {
	$('#wrapper').toggle(1000);
	$('#monitor_toggle').fadeOut(1000);
});

$('#wrapper_close').click(function() {
	$('#wrapper').fadeOut(1000);
	$('#monitor_toggle').toggle(1000);
});


	
});