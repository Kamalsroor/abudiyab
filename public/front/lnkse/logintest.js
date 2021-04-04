console.log('logintest');
$('.register-btn').on('click', function() {
    $('.fa-times-circle').addClass('fa-times-circle-left');
    $('.title').css('display', 'none');
    $('.title2').css('display', 'block');
    $('.login-btn').css('display', 'block');
    $('.register-btn').css('display', 'none');
    $('.box-color').css('margin-right', '-380px');
    $('.box-color').css('background-image', 'linear-gradient(135deg, rgb(24 47 148) 0%, rgb(0, 0, 0) 100%)');
    $('.login').css('opacity', '0');
    $('.register').css('opacity', '1');
});
$('.login-btn').on('click', function() {
    $('.fa-times-circle').removeClass('fa-times-circle-left');

    $('.title').css('display', 'block');
    $('.title2').css('display', 'none');
    $('.login-btn').css('display', 'none');
    $('.register-btn').css('display', 'block');
    $('.box-color').css('margin-right', '0');
    $('.box-color').css('background-image', 'linear-gradient(135deg, #3656e4 0%, #000000 100%)');
    $('.login').css('opacity', '1');
    $('.register').css('opacity', '0');
})