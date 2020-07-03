$(document).ready(function(){
    $(".scrollDown").on("click",function(e){
    e.preventDefault();
    var target = $(this).attr("href");
    $("html").animate({
      scrollTop: $(target).offset().top  
    }, 1000)
});
});