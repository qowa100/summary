$('form').submit(function(e){
     e.preventDefault();

     let fioEl = $(this).find("[name='fio']");
     let emailEl = $(this).find("[name='email']");
     let telEl = $(this).find("[name='phone']");
     let textComment = $(this).find("[name='message']");
     
     if(fioEl.val() != '' && emailEl.val() != '' && telEl.val() != '' && textComment.val() != ''){
        fioEl.css('border-color', '#ffc155');
        emailEl.css('border-color', '#ffc155');
        telEl.css('border-color', '#ffc155');
        textComment.css('border-color', '#ffc155');
        
        this.submit();
        $('.column, .form-message').fadeOut();
        $('.us-success').fadeIn();

     }else{
         if(fioEl.val() == ''){
            fioEl.css('border-color', 'red');
         }else{
            fioEl.css('border-color', '#ffc155');
         }
         
         if(emailEl.val() == ''){
            emailEl.css('border-color', 'red');
         }else{
            emailEl.css('border-color', '#ffc155');
         }
         
         if(telEl.val() == ''){
            telEl.css('border-color', 'red');
         }else{
            telEl.css('border-color', '#ffc155');
         }
         
         if(textComment.val() == ''){
            textComment.css('border-color', 'red');
         }else{
            textComment.css('border-color', '#ffc155');
         }  
     }
});

let topEl = $('.top');
let topBoxEl = topEl.find('.top-box');
let topBoxSliderEls = topEl.find('.top-box-slider');
let topPointSliderEls = topEl.find('.top-point-slider');
let nowSlideNum = 0;

topEl.find('.arrow-left').click(function(){
   if(nowSlideNum == 0){
      nowSlideNum = topBoxSliderEls.length - 2;
  }else{
      nowSlideNum--;
  }
  topBoxEl.animate({
      'left': nowSlideNum * -100 + '%'
  });
  topPointSliderEls.removeClass('active');
  topPointSliderEls.eq(nowSlideNum).addClass('active');
});

topEl.find('.arrow-right').click(function(){
   if(nowSlideNum == topBoxSliderEls.length - 2){
      nowSlideNum++;
      topBoxEl.animate({
         'left': nowSlideNum * -100 + '%'
     }, function(){
         nowSlideNum = 0;
         topBoxEl.css('left', nowSlideNum * -100 + '%');
         topPointSliderEls.removeClass('active');
         topPointSliderEls.eq(nowSlideNum).addClass('active');
     });
 }else{
     nowSlideNum++;
     topBoxEl.animate({
         'left': nowSlideNum * -100 + '%'
     });
     topPointSliderEls.removeClass('active');
     topPointSliderEls.eq(nowSlideNum).addClass('active');
 }
});

topPointSliderEls.click(function(){
   nowSlideNum = topPointSliderEls.index($(this));
   topPointSliderEls.removeClass('active');
   topPointSliderEls.eq(nowSlideNum).addClass('active');
   topBoxEl.animate({
      'left': nowSlideNum * -100 + '%'
   });
});


$('.burger-click').click(function(){
   $(this).toggleClass('open');
   $('.header-nav').toggleClass('open');
   $('.burger-click-line').toggleClass('open');
   $('.burger-click-line::after').toggleClass('open');
   $('.burger-click-line::before').toggleClass('open');
 });