console.log('hi');
$('#termsCheck').change(function() {
    if (this.checked) {
        $('.buy').removeClass('disabled');
    } else {
        $('.buy').addClass('disabled');
    }
});
if (localStorage.getItem('terms') == 'agree') {
    $('#termsCheck').attr('checked', 'checked');
    $('.buy').removeClass('disabled');
    localStorage.clear();
}
if (true) {
    $('.next-step').click(function(e) {
        let login = localStorage.getItem('login');
        if (login == 'true') {

        } else {
            e.preventDefault();
        }
    })
}

document.getElementsByClassName('showCar')[0].addEventListener('click', function(e) {
    $('.showCar').text('اخفاء السياره')
    $('.showCar').click(function() {
        $('.CarImg').animate({
            width: '0px',
            height: '0px'
        }, 1000)
        $(this).text('اظهار السياره');
        $('.showCar').unbind();
    })
    $('.CarImg').animate({
        width: '800px',
        height: '500px'
    }, 1000, function() {
        //     $('.CarImg').animate({ borderSpacing: -360 }, {
        //         step: function(now, fx) {
        //             $(this).css('-webkit-transform', 'translateX(-600px)');
        //             $(this).css('-moz-transform', 'translateX(-600px)');
        //             $(this).css('transform', 'translateX(-600px)');
        //         },
        //     duration: 'slow'
        // }, 'linear');
    });
    document.getElementsByClassName('CarImg')[0].style.display = 'block';
})