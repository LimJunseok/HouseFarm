$(document).on('ready', function() { 

  SyntaxHighlighter.all();
});


$(window).load(function(){
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 210,
    itemMargin: 5,
    asNavFor: '#slider'
  });

  $('#slider').flexslider({
    animation: "slide",
    controlNav: true,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel",
    start: function(slider){
      $('body').removeClass('loading');
    }
  });

  var slide;
  slide = setInterval(function(){
     $('#slide .container > a:first-child').animate({
         'margin-left':0},600,function(){
           $('#slide .container').append($('#slide .container > a:first-child')) ;
           $('#slide .container > div:last-child').css ({'margin-top':0});
         }); 
  },4000);
  $('.hot_hov1').hover(function(){
    $('.hot_hover').show(1000);
    },function(){
    $('.hot_hover').hide(1000);
    })


  

});
/********서브 */
