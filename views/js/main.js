$(document).ready(
	function(){
		

		$( "#btnAjax" ).click(function() {

			$.ajax({
				   type: "POST",
				   
				   cache: false,
				   
				   url: "tabla.php",
				   
				   beforeSend: function( xhr ) {
						$('#loadAjax').html('beforeSend');
				   },
				   
				   error: function( ){
						$('#loadAjax').html('error');
				   }, 
				   
				   data: "id=001&nombre=AAA",
				   
				   success: function(data){
						$('#loadAjax').html('success'+data);
				   }
			});// fin ajax
		
		});	// fin click #btnAjax

	}
);
	