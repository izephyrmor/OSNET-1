$( function() {
  $('.login-page').mousemove(function(e){
    var x = -(e.pageX + this.offsetLeft) / 100;
    var y = -(e.pageY + this.offsetTop) / 100;
    $(this).css('background-position', x + 'px ' + y + 'px');
  });    
});