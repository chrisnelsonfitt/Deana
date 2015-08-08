
var count = 1;
setInterval(function(){
if (count <= 3){
    $("#slideshow").fadeOut(2000);
    setTimeout(function(){$("#slideshow").attr("src","breakup/"+ count +".jpg")},2000);
    $("#slideshow").fadeIn(2000);
    count++;

    if (count>3){
    count = 1
    }
}//end if
}/*end function*/,5000);
//Light Box
$('li img').on('click',function(){
                var src = $(this).attr('src');
                var img = '<img src="' + src + '" class="img-responsive"/>';
 
        
                var index = $(this).parent('li').index();                   
                var html = '';
                html += img;                
                html += '<div style="height:25px;clear:both;display:block;">';
                html += '<a class="controls next" href="'+ (index+2) + '">next &raquo;</a>';
                html += '<a class="controls previous" href="' + (index) + '">&laquo; prev</a>';
                html += '</div>';
              
 
                $('#myModal').modal();
                $('#myModal').on('shown.bs.modal', function(){
                    $('#myModal .modal-body').html(html);
                })
                $('#myModal').on('hidden.bs.modal', function(){
                    $('#myModal .modal-body').html('');
                });
           });
 $(document).on('click', 'a.controls', function(){
                      
          var index = $(this).attr('href');
var src = $('ul.row li:nth-child('+ index +') img').attr('src'); 
     
     
     var newPrevIndex = parseInt(index) - 1; 
var newNextIndex = parseInt(newPrevIndex) + 2; 
 
if($(this).hasClass('previous')){               
    $(this).attr('href', newPrevIndex); 
    $('a.next').attr('href', newNextIndex);
}else{
    $(this).attr('href', newNextIndex); 
    $('a.previous').attr('href', newPrevIndex);
}
     
   var total = $('ul.row li').length + 1; 
//hide next button
if(total === newNextIndex){
    $('a.next').hide();
}else{
    $('a.next').show()
}            
//hide previous button
if(newPrevIndex === 0){
    $('a.previous').hide();
}else{
    $('a.previous').show()
}  
     
     
     
$('.modal-body img').attr('src', src);
           return false;
        });




$(function(){
var slides= $('.slideShow>li');
    var slideCount = 0;
    var totalSLides = slides.length;
    var slideCache = [ ];
    
 (function preloader(){
     if(slideCount < totalSLides){
     //load images
     slideCache[slideCOunt] = new Image();
     slideCache[slideCount].src = slides.eq(slideCount).find('img').attr('src');
     slideCache[slideCount].onload =function(){
         slideCount++;
preloader();         
     }
 } else {
     //run slides
     slideCount = 0
     SlideShow();
     
 }
    
};
  
  function slideshow(){
     slide.eq(slideCount).fadeIn(1000).delay(2000).fadeOut(1000,function(){
      
         slideCount < totalSLides - 1 ? slideCount ++ : slideCount = 0;
         slideshow();
     });
 }; 
    
    
    
    
    



