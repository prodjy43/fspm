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