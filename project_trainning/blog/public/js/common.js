
$(document).ready(function(){
	envent();
});

// function envent of app 
function envent() {

	// change languages
	$(document).on('change','#languages',function(){

		var laguages = $('#languages').val();
		//
		location.href='language/'+laguages;
	});
}