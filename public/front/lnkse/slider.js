$('.slider-next').click(function() {
    console.log(this);
    $(this).toggleClass('active');
    $('.slider-next').not(this).removeClass('active');
})


function show() {

    window.hiden.style.display = "grid";
    window.showe.style.display = "none";
    window.hidea.style.display = "inline-block";

}

function hide() {
    window.hiden.style.display = "none";
    window.showe.style.display = "inline-block";
    window.hidea.style.display = "none";
}


(function() {
    $(".home-nav").hover(function() {
        $(".nav-more").css("display", "grid")
    }, function() {
        $(".nav-more").css("display", "none")
    })
})();

(function() {
    $(".nav-more").hover(function() {
        $(".nav-more").css("display", "grid")
    }, function() {
        $(".nav-more").css("display", "none")
    })
})();

number = 1;


window.detel1.innerHTML = "عملائنا الأعزاء..";
window.detel2.innerHTML = "مع أبو ذياب أحدث أسطول";


function chang() {

    switch (number) {
        case 1:
            window.detel1.innerHTML = "عملائنا الأعزاء..";
            window.detel2.innerHTML = "لا يوجد نص";
            number += 1;
            break;
        case 2:
            window.detel1.innerHTML = "عملائنا الأعزاء..";
            window.detel2.innerHTML = "لا يوجد نص";
            number += 1;
            break;
        case 3:
            window.detel1.innerHTML = "عملائنا الأعزاء..";
            window.detel2.innerHTML = "من الطياره للسيارة";
            number += 1;
            break;
        case 4:
            window.detel1.innerHTML = "عملائنا الأعزاء..";
            window.detel2.innerHTML = "يصير حقيقه";
            number += 1;
            break;
        case 5:
            window.detel1.innerHTML = "عملائنا الأعزاء..";
            window.detel2.innerHTML = "لا يوجد نص";
            number += 1;
            break;
        case 6:
            window.detel1.innerHTML = "عملائنا الأعزاء..";
            window.detel2.innerHTML = "سلامتك تهمنا";
            number += 1;
            break;
    }
}

setInterval(chang, 5500);

var myCarousel = document.querySelector('#carouselExampleIndicators')
var carousel = new bootstrap.Carousel(myCarousel, {
    //   interval: 4800,
})



(function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
        '../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-547WHPJ');


(function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

ga('create', 'UA-50355101-1', 'auto');
ga('send', 'pageview');