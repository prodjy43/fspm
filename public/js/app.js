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
 
    var InfiniteRotatorG =
    {
        init: function()
        {
            //initial fade-in time (in milliseconds)
            var initialFadeIn = 1000;
 
            //interval between items (in milliseconds)
            var itemInterval = 5000;
 
            //cross-fade time (in milliseconds)
            var fadeTime = 1000;
 
            //count number of items
            var numberOfItems = $('.one-bannerG').length;
 
            //set current item
            var currentItem = Math.floor((Math.random() * $('.one-bannerG').length) + 1);;
 
            //show first item
            $('.one-bannerG').eq(currentItem).fadeIn(initialFadeIn);
 
            //loop through the items
            var infiniteLoop = setInterval(function(){
                $('.one-bannerG').eq(currentItem).fadeOut(fadeTime);
 
                if(currentItem == numberOfItems -1){
                    currentItem = 0;
                }else{
                    currentItem++;
                }
                $('.one-bannerG').eq(currentItem).fadeIn(fadeTime);
 
            }, itemInterval);
        }
    };
 
    InfiniteRotatorG.init();
 
});

$(document).ready(function() { //start after HTML, images have loaded
 
    var InfiniteRotatorP =
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
            var numberOfItems = $('.one-bannerP').length;
 
            //set current item
            var currentItem = Math.floor((Math.random() * $('.one-bannerP').length));;
 
            //show first item
            $('.one-bannerP').eq(currentItem).fadeIn(initialFadeIn);
 
            //loop through the items
            var infiniteLoop = setInterval(function(){
                $('.one-bannerP').eq(currentItem).fadeOut(fadeTime);
 
                if(currentItem == numberOfItems -1){
                    currentItem = 0;
                }else{
                    currentItem++;
                }
                $('.one-bannerP').eq(currentItem).fadeIn(fadeTime);
 
            }, itemInterval);
        }
    };
 
    InfiniteRotatorP.init();
 
});