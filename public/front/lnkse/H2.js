var no_click = 0;
var preId = 20;
$('.fa-info-circle').click(function() {
    let details = ".moreDetails:eq(" + this.id + ")";
    $('.moreDetails').slideUp(500)
    $(details).slideDown(500);
    $('.cancelDetails').click(function() {
        console.log('sayed');
        $('.moreDetails').slideUp(500)
    })
});

$('.cancelDetails').click(function() {
    console.log('sayed');
    $('.moreDetails').slideUp(500)
})

function cancelSlide() {

}