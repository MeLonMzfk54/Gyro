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
    let cards = $(".basket-icon");
    let cardsTotal = $(cards).length;
    for(let i=0;i<cardsTotal;i++){
        $(cards[i]).on("click",function(e){
           e.preventDefault();
           let title = $(cards[i]).parent("p").siblings("h2").text();
            $(".popup__call").val(title);
            console.log(title);
              $(".popup__tel").css("border","2px solid #FB9024");
         $(".popup__name").css("border","2px solid #FB9024");
         $(".popup__count").css("border","2px solid #FB9024");
         $(".popup__call").css("border","2px solid #FB9024");
       $(".popup").addClass("popup__active");
       $(".popup__bg").fadeIn();     
        });
    }
    
    $("#popupForm").on("submit",function(event){
        event.preventDefault();
        let title = $(".popup__call").val();
        let name = $(".popup__name").val();
        let tel = $(".popup__tel").val();
        let count = $(".popup__count").val();
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
        data: {count: count, title: title, name: name,tel: tel}
    }).done(function(res){
              alert(res);
         alert("Ваш заказ поступил в обработку, ожидайте");
//         $(".popup__tel").css("border","2px solid #FB9024");
//         $(".popup__name").css("border","2px solid #FB9024");
//         $(".popup__count").css("border","2px solid #FB9024");
//         $(".popup__call").css("border","2px solid #FB9024");
          $(".popup__bg").fadeOut(); 
       $(".popup").removeClass("popup__active");       
         $("#popupForm")[0].reset();
    }).fail(function(){
       alert("Заказ не совершен"); 
    });
//         	var th = $(this);
//		$.ajax({
//			type: "POST",
//			url: "phpFunctions/mail.php", 
//			data: th.serialize()
//		}).done(function() {
//			setTimeout(function() {
//				// Done Functions
//				th.trigger("reset");
//			}, 1000);
//		});
//		return false;   
        }
    });
    
        
});