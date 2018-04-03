function slideMenu(id){
    $(id).css('left', '0');
    $('.slide-opa').addClass('active')
}
$('.slide-opa').click(function(){
    $('.menu-slide').css('left', '-300px');
    $(this).removeClass('active');
    $('.popup').css('display','none');
})

$(function () {
    $(document).scroll(function () {
        var $nav = $("nav");
        $nav.toggleClass('scrolled', $(this).scrollTop() > 120);
    });
});
function popup(id){
    $(id).css('display','block');
    $('.slide-opa').addClass('active');
}

$(document).ready(function() { //start after HTML, images have loaded
 
    var InfiniteRotator =
    {
        init: function()
        {
            //initial fade-in time (in milliseconds)
            var initialFadeIn = 1000;
 
            //interval between items (in milliseconds)
            var itemInterval = 3000;
 
            //cross-fade time (in milliseconds)
            var fadeTime = 1000;
 
            //count number of items
            var numberOfItems = $('.one-banner').length;
 
            //set current item
            var currentItem = 0;
 
            //show first item
            $('.one-banner').eq(currentItem).fadeIn(initialFadeIn);
 
            //loop through the items
            var infiniteLoop = setInterval(function(){
                $('.one-banner').eq(currentItem).fadeOut(fadeTime);
 
                if(currentItem == numberOfItems -1){
                    currentItem = 0;
                }else{
                    currentItem++;
                }
                $('.one-banner').eq(currentItem).fadeIn(fadeTime);
 
            }, itemInterval);
        }
    };
 
    InfiniteRotator.init();
 
});