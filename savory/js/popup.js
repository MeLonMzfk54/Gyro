$(document).ready(function(){
   $(".popupOpen").on("click",function(e){
       e.preventDefault();
       $(".popup__tel").css("border","2px solid #FB9024");
         $(".popup__name").css("border","2px solid #FB9024");
         $(".popup__count").css("border","2px solid #FB9024");
         $(".popup__call").css("border","2px solid #FB9024");
       $(".popup").addClass("popup__active");
       $(".popup__bg").fadeIn();
   });
    $(".popup__bg").on("click",function(){
       $(".popup__bg").fadeOut(); 
       $(".popup").removeClass("popup__active"); 
    });
    $(".popup__tel").mask("+7-999-999-99-99");
    
    $("#popupForm").on("submit",function(event){
        event.preventDefault();
//        console.log($(".popup__tel").value.length());
        if($(".popup__call").val() == "" || $(".popup__count").val() == "" || $(".popup__name").val() == "" || $(".popup__tel").val() == "" ){
            if($(".popup__call").val() == ""){
               $(".popup__call").css("border","2px solid red"); 
            }else{
              $(".popup__call").css("border","2px solid #FB9024");   
            }
            if($(".popup__count").val() == ""){
               $(".popup__count").css("border","2px solid red"); 
            }else{
              $(".popup__count").css("border","2px solid #FB9024");   
            }
            if($(".popup__name").val() == ""){
               $(".popup__name").css("border","2px solid red"); 
            }else{
              $(".popup__name").css("border","2px solid #FB9024");   
            }
            if($(".popup__tel").val() == ""){
               $(".popup__tel").css("border","2px solid red"); 
            }else{
              $(".popup__tel").css("border","2px solid #FB9024");   
            }
        }else{
          $.ajax({
        type: "POST",
        url: "phpFunctions/order.php",
        data: $(this).serialize()
    }).done(function(res){
         $(".popup__tel").css("border","2px solid #FB9024");
         $(".popup__name").css("border","2px solid #FB9024");
         $(".popup__count").css("border","2px solid #FB9024");
         $(".popup__call").css("border","2px solid #FB9024");
        alert("Удачно");
              $("#popupForm")[0].reset();
    }).fail(function(){
       alert("Заказ не совершен"); 
    });
        }
    });   
        
});