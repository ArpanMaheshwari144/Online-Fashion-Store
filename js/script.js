$(document).ready(function() {


	// Categories Dropdown
	$('#categories-dropdown-toggler').mouseenter(function(){
		$('#categories-dropdown').show(100);
	});
	$('#categories-dropdown').mouseenter(function(){
		$('#categories-dropdown').show();
	});
	$('#categories-dropdown').mouseleave(function(){
		$('#categories-dropdown').hide(100);
	});
	$('#categories-dropdown-toggler').mouseleave(function(){
		$('#categories-dropdown').hide(100);
	});

	// Mens Dropdown
	$('#mens-dropdown-toggler').mouseenter(function(){
		$('#mens-dropdown').show(100);
	});
	$('#mens-dropdown').mouseenter(function(){
		$('#mens-dropdown').show();
	});
	$('#mens-dropdown').mouseleave(function(){
		$('#mens-dropdown').hide(100);
	});
	$('#mens-dropdown-toggler').mouseleave(function(){
		$('#mens-dropdown').hide(100);
	});

	// Ladies Dropdown
	$('#ladies-dropdown-toggler').mouseenter(function(){
		$('#ladies-dropdown').show(100);
	});
	$('#ladies-dropdown').mouseenter(function(){
		$('#ladies-dropdown').show();
	});
	$('#ladies-dropdown').mouseleave(function(){
		$('#ladies-dropdown').hide(100);
	});
	$('#ladies-dropdown-toggler').mouseleave(function(){
		$('#ladies-dropdown').hide(100);
	});
	
});