$(document).ready(function() {
	$('.ui.sidebar').sidebar({
	    transition: 'overlay'
	});
	// For responsive sidebar menu
	$("a.sidebar-toggle").click(function() {
		$('.ui.sidebar').sidebar('toggle');
	});
});