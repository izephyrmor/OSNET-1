$(document).ready(function() {
    $('#calendar').fullCalendar({
        events:"https://www.google.com/calendar/feeds/en.philippines%23holiday%40group.v.calendar.google.com/public/basic"
    });
    
    //Initialize WYSIHTML5 - text editor
    $("#announcement_message").wysihtml5();
    
    //Date range picker
    $('#announcement-duration').daterangepicker();
});