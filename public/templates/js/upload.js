// JavaScript Document

$(document).ready(function(){

	
	$('#import_form').on('submit', function(event){
		event.preventDefault();
		$.ajax({
			url:"<?php echo base_url(); ?>viewexcel/importdata",
			method:"POST",
			data:new FormData(this),
			contentType:false,
			cache:false,
			processData:false,
			success:function(data){
				$('#file').val('');
				load_data();
				alert(data);
			}
		})
	});

});