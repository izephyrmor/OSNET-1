$(document).ready(function() {
    $('#calendar').fullCalendar({
        events:"https://www.google.com/calendar/feeds/en.philippines%23holiday%40group.v.calendar.google.com/public/basic"
    });
    
    //Initialize WYSIHTML5 - text editor
    $("#announcement_message").wysihtml5();
    
    //Date range picker
    $('#announcement-duration').daterangepicker();
	
	

	$('.announcement_list').click(function(){
		var rowid = $(this).data('id');
		$.ajax({
			type: "POST",
			url: site_url + 'index.php/ajax/announcement_ajax/view',
			data: {row_id:rowid}, 
			success:function(data) {
				$("#ann_div").html(data);
			}
		});
	});
	
	
	
	$('#save_announcement_butt').click(function(){

		var title = $.trim( $('#announcement_title').val());
		var duration = $.trim( $('#announcement-duration').val());
		var message = $.trim( $('#announcement_message').val());
								
		var err = "";
		if (!title) 			err += '<p>Title Required</p>';
		if (!duration) 	err += '<p>Duration Required</p>';
		if (!message) 	err += '<p>Message Required</p>';
		$("#add_announcement_errors").html(err);
		
		if(title && duration && message){
			$.ajax({
				type: "POST",
				url: site_url + 'index.php/ajax/announcement_ajax/add',
				data: {title:title, duration:duration, message:message}, 
				success:function(data) {
					window.location.href= site_url;
				}
			});
		}

	});
	
	
	
		
		
});