var link_url;
var lrnuq_header;
var modalCaller = function(element){
	link_url = element.getAttribute("data-link");
}
function delete_item() {
	$.ajax({
		async: true,
		method: 'delete',
		headers:lrnuq_header,
		url: link_url,
		success: function(response) {
			window.location = response;
		}
	});
}
$(document).ready(function(){
	$('.modal').modal();
	lrnuq_header = {'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')};
});