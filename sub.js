// JavaScript Document
$("#submit").click(function() {
	$.post( $("#creation").attr("action"), $("#creation :input").serializeArray(), function(info) {
		$("#purchase").html(info);
	} );
	
	clearInput();
});

$("#creation").submit(function() {
	return false;
});


function clearInput() {
	$("#myform :input").each(function() {
		$(this).val('');
	});
}