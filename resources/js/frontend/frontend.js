require('./bootstrap');
import WOW from 'wow.js'
var wow = new WOW({
    boxClass: 'wow', // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset: 0, // distance to the element when triggering the animation (default is 0)
    mobile: true, // trigger animations on mobile devices (default is true)
    live: true, // act on asynchronously loaded content (default is true)
    callback: function(box) {
        // the callback is fired every time an animation is started
        // the argument that is passed in is the DOM node being animated
    },
    scrollContainer: null, // optional scroll container selector, otherwise use window,
    resetAnimation: true, // reset animation on end (default is true)
});
wow.init();


const lang = document.documentElement.lang.substr(0, 2);

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios.defaults.headers.common['X-Accept-Language'] = lang;

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        'X-Accept-Language': lang
    }
});

import Vue from 'vue';


// or however you determine your current app locale



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('car_seles', require('../components/CarSelesComponent').default);

const app = new Vue({
    el: '#vue_app',
});

$(document).ready(function() {
    /* general variables */

    // html
    const html = document.querySelector('html');


    $('.fa-info-circle').click(function() {
        $('#additions').toggle(1000);
    });
    $("#myFormtoggeler").click(function() {
        $('#myForm').toggleClass('d-none');
    })


    $("#hamburger-bars").click(function() {
        $('#menu').toggleClass('d-none');
    })

    $("#hamburger-bars2").click(function() {
        $('#menu').toggleClass('d-none');
    })

    $(".CarCategoryChange").click(function() {

        // $('.car-model__heading').slick('unslick');
        // $('.car-model__heading').removeClass('slick-initialized slick-slider');
        // $('.car-model__heading').html("");
        // setTimeout(() => {
        window.livewire.emit('change:categories', $(this).data('id'));
        window.livewire.emit('change:carsByCatgory', $(this).data('id'));
        console.log('change:carsByCatgory', $(this).data('id'));
        // }, 2000);

    })

    $('#toggel-profile').click(function() {
        $('#update-profile').toggleClass('d-none');
        $('#profile').toggleClass('d-none');
        $('#toggel-profile').toggleClass('d-none');
        $('#toggel-password').toggleClass('d-none');
    })
    $('#toggel-password').click(function() {
        $('#update-password').toggleClass('d-none');
        $('#profile').toggleClass('d-none');
        $('#toggel-password').toggleClass('d-none');
        $('#toggel-profile').toggleClass('d-none');
    })

    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
    window.addEventListener('removeSlideCarModel', event => {

        // $('.car-model__heading').slick('removeSlide', null, null, true);

        // console.log('unslickunslick');
    });


    window.addEventListener('CarModelSlick', event => {
        slick_function(event.detail);
    });





    async function slick_function(details) {

        // $('.car-model__heading').slick('removeSlide', null, null, true);

        $('.car-model__heading').slick('unslick');


        $('.car-model__heading').removeClass('slick-initialized slick-slider');
        $('.car-model__heading').html('');
        console.log('refreshing : ', details); // $('.car-model__heading').slick('unslick');
        await details.forEach(function(entry) {
            console.log(entry);
            var div = `
                        <div class="car-model__item py-2" data-id="${entry.id}">
                            <p class=" text-center">${entry.name}</p>
                        </div>
                    `

            $('.car-model__heading').append(div);

            // $('.car-model__heading').slick('slickAdd', div);
        });

        let model__item_length = $('.car-model__item');
        console.log(model__item_length.length);
        if (model__item_length.length > 5) {
            $('.car-model__heading').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: false,
                arrows: true,
                rtl: html.dir === 'rtl',
                autoplay: true,
                autoplaySpeed: 8000,

                // centerMode: true
                responsive: [{
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots: false,
                            arrows: true,
                            rtl: html.dir === 'rtl',
                            autoplay: true
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            dots: false,
                            arrows: true,
                            rtl: html.dir === 'rtl',
                            autoplay: true
                        }
                    },
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            dots: false,
                            arrows: true,
                            rtl: html.dir === 'rtl',
                            autoplay: true
                        }
                    },
                ]
            });

        } else {
            $('.car-model__heading').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,
                arrows: true,
                rtl: html.dir === 'rtl',
                autoplay: true,
                autoplaySpeed: 8000,

                // centerMode: true
                responsive: [{
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots: false,
                            arrows: true,
                            rtl: html.dir === 'rtl',
                            autoplay: true
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots: false,
                            arrows: true,
                            rtl: html.dir === 'rtl',
                            autoplay: true
                        }
                    },
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots: false,
                            arrows: true,
                            rtl: html.dir === 'rtl',
                            autoplay: true
                        }
                    },
                ]
            });
        }

    }

    $('.car-model__heading').on('afterChange', function(event, slick, currentSlide, nextSlide) {
        console.log('change:cars', $(slick.$slides[currentSlide]).find('.car-model__item').data('id'));
        if ($(slick.$slides[currentSlide]).find('.car-model__item').data('id') != undefined) {
            window.livewire.emit('change:cars', $(slick.$slides[currentSlide]).find('.car-model__item').data('id'));
        }
    });


    $('.car-model__heading').on('init', function(event, slick, currentSlide, nextSlide) {
        console.log('change:cars', $(slick.$slides[currentSlide]).find('.car-model__item').data('id'));
        if ($(slick.$slides[currentSlide]).find('.car-model__item').data('id') != undefined) {
            window.livewire.emit('change:cars', $(slick.$slides[currentSlide]).find('.car-model__item').data('id'));
        }
    });
    window.addEventListener('CarDetailSlick', event => {
        CarDetailSlickIteams(event.detail);
    });


    async function CarDetailSlickIteams(details) {

        $('.car-details__heading').slick('removeSlide', null, null, true);

        console.log('refreshing : ', details.car.model); // $('.car-details__heading').slick('unslick');
        var div = `
        <div><div class="py-2 px-1 mx-0 text-center car-details__item" ><p class="my-0">موديل : ${details.car.model}</p></div></div>
        <div><div class="py-2 px-1 mx-0 text-center car-details__item" ><p class="my-0">ناقل الحركة : اوتوماتيك</p></div></div>
        <div><div class="py-2 px-1 mx-0 text-center car-details__item" ><p class="my-0">عدد الأبواب : ${details.car.door}</p></div></div>
        <div><div class="py-2 px-1 mx-0 text-center car-details__item" ><p class="my-0">عدد المقاعد : 5</p></div></div>
                `
        $('.car-details__heading').slick('slickAdd', div);

    }
    let addind = $('#addingFeatures');
    if (addind.length) {
        $('#addingFeatures').click(function() {
                // console.log('ssssssss ');
            })
            // console.log('aaaaaa ');

    }


    let subscribe = $('#subscribe');
    if (subscribe.length) {
        $('#subscribe').on('click', function() {
            let subscriptionEmail = $('#mailsu').val();
            var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
            var validateEmail = subscriptionEmail.match(pattern);
            if (validateEmail) {
                $.ajax({
                    type: 'post',
                    url: subscribeURL,
                    headers: {
                        "x-accept-language": "ar",
                        "X-CSRF-TOKEN": csrf_token,
                    },
                    data: {
                        'subscribeEmail': $('#mailsu').val()
                    },
                    success: function(data, status) {

                        console.log(data);
                        if (data == true) {
                            console.log('sssssss');
                            $('#confirm').show();
                            $('#reject').hide();
                            $('#exist').hide();
                            $('#notvalide').hide();


                        } else if (data['error'] == 'exist') {
                            $('#exist').show();
                            $('#confirm').hide();
                            $('#reject').hide();
                            $('#notvalide').hide();


                        } else {
                            $('#reject').show();
                            $('#confirm').hide();
                            $('#reject').hide();
                            $('#notvalide').hide();

                        }
                    }
                });
            } else {
                $('#notvalide').show();
                $('#confirm').hide();
                $('#reject').hide();
                $('#exist').hide();
            }
        });
    }

    window.addEventListener("notLogin", function() {
        console.log("i'm here");
        $('#loginModal').modal('toggle');
    })


    // const homeCarousel = $('.home-carousel');
    // if (homeCarousel.length) {
    //     $('.home-slider').carousel({
    //         interval: 7000
    //     })
    // }

    const checkReservation = $('.check-reservation');
    if (checkReservation.length) {
        $('.check-reservation').on('click', function() {
            let identityNumber = $('.identityNumber');
            if (identityNumber.length) {
                identityNumber = $('.identityNumber').val();
            } else {
                identityNumber = 0;
            }
            let orderCode = $('#orderCode').val();
            console.log(orderCode, identityNumber);
            $.ajax({
                type: 'get',
                url: showOrderURL + `/${orderCode}`,
                headers: {
                    "x-accept-language": "ar",
                },
                data: {
                    'identityNumber': identityNumber
                },
                success: function(data, status) {
                    console.log(data);
                    switch (data['data']['status']) {
                        case 'confirmed':
                            $('.confirmed').show();
                            $('.pending').hide();
                            $('.rejected').hide();
                            $('.notfound').hide();
                            break;
                        case 'pending':
                            $('.pending').show();
                            $('.confirmed').hide();
                            $('.rejected').hide();
                            $('.notfound').hide();
                            break;
                        case 'rejected':
                            console.log('rejected');
                            $('.rejected').show();
                            $('.pending').hide();
                            $('.confirmed').hide();
                            $('.notfound').hide();
                            break;
                    }
                },
                error: function(xhr, status, error) {
                    $('.notfound').show();
                    $('.pending').hide();
                    $('.confirmed').hide();
                    $('.rejected').hide();
                }
            });
        })
    }
    const homeCategory = $('.home-category');
    if (homeCategory.length) {
        const togellerBtn = $('#home-category__togeller');


        togellerBtn.on('click', function() {
            const categoryItem = $(this).parents('.home-category__conent').find('.home-category__item.not-active');
            const categoryItemActive = $(this).parents('.home-category__conent').find('.home-category__item.active');
            if (categoryItem.length) {
                categoryItem.removeClass('not-active').addClass('active')
                $(this).html($(this).data('less'));
            } else if (categoryItemActive.length) {
                categoryItemActive.addClass('not-active').removeClass('active')
                $(this).html($(this).data('more'));
            }
        });



    }

    const favoriteIcon = $('.addToFavorite');
    if (favoriteIcon.length) {
        favoriteIcon.on('click', function() {
            window.livewire.emit('addToFavorite', $(this).data('id'));
        });
    }

    const branchPage = $('.branch-page');
    if (branchPage.length) {
        const branchRegion = $('.branch-regoin');
        const page_center_dranches_items = $('.branch-page_center_dranches_items');

        branchRegion.click(function() {
            let branchesRegion = '';
            console.log(page_center_dranches_items);
            page_center_dranches_items.html("");
            $.ajax({
                type: 'get',
                url: BranchApisUrl,
                headers: {
                    "x-accept-language": "ar",
                },
                data: {
                    code: $(this).data('id'),
                    all: true
                },
                success: function(data) {
                    console.log(data.data);

                    data.data.forEach(function(branch) {
                        var timeText = "";

                        if (branch.work_time != null) {
                            // branch.work_time.forEach(function(time) {
                            //     // timeText +=
                            //     console.log(time);
                            // });

                            for (const [key, value] of Object.entries(branch.work_time)) {
                                // timeText += `<p>${ weekDays.[key] } ${ value.lock == 1 ?  "مغلق" : value.timeopen + ' : ' + value.timeclose  }</p>`;

                                console.log(`${key}: `, value);
                            }
                        }
                        console.log(timeText);
                        branchesRegion += `<div class="col-12 col-md-6 col-lg-3 mb-2">
                        <div class="branch-page_center_dranches_branch">
                            <div class="branch-hidden-list">
                                <p class="detail">التفاصيل</p>
                                <div class="section-detail">
                                    <h4>العنوان</h4>
                                    <p>${branch.name}</p>
                                    <p>${branch.address}</p>
                                    <h4>رقم الهاتف</h4>
                                    <p>${branch.tele_number}</p>
                                    <h4>موعدنا</h4>

                                    ${timeText}
                                    <button>الموقع</button>
                                </div>
                            </div>
                            <div class="branch-list-visible">
                                <img src="${branchesLogo}" alt="logo">
                                <h2>${branch.name}</h2>
                                <a href="tel:${branch.tele_number}" class="btn btn-danger btn-lg btn-block"><i class="fas fa-phone-volume"></i> ${branch.tele_number}</a>
                            </div>
                        </div>
                    </div>`;


                    });
                    page_center_dranches_items.html(branchesRegion);
                }
            });
            // $('#menu').toggleClass('d-none');
        })
    }




    let model__item_length = $('.car-model__item');
    console.log(model__item_length.length);
    if (model__item_length.length > 5) {
        $('.car-model__heading').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            rtl: html.dir === 'rtl',
            autoplay: true,
            autoplaySpeed: 8000,

            // centerMode: true
            responsive: [{
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false,
                        arrows: true,
                        rtl: html.dir === 'rtl',
                        autoplay: true
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        dots: false,
                        arrows: true,
                        rtl: html.dir === 'rtl',
                        autoplay: true
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        dots: false,
                        arrows: true,
                        rtl: html.dir === 'rtl',
                        autoplay: true
                    }
                },
            ]
        });

    } else {
        $('.car-model__heading').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            rtl: html.dir === 'rtl',
            autoplay: true,
            autoplaySpeed: 8000,

            // centerMode: true
            responsive: [{
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false,
                        arrows: true,
                        rtl: html.dir === 'rtl',
                        autoplay: true
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false,
                        arrows: true,
                        rtl: html.dir === 'rtl',
                        autoplay: true
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false,
                        arrows: true,
                        rtl: html.dir === 'rtl',
                        autoplay: true
                    }
                },
            ]
        });
    }

    window.onscroll = function() { navbarScroll() };

    function navbarScroll() {
        if (document.documentElement.scrollTop > 50) {
            document.getElementsByClassName('main-navbar')[0].style.backgroundImage = "linear-gradient( 91deg, #3f4a86 15%, #7f89c0ba 50%, #3f4a86 85%)";
        } else {
            document.getElementsByClassName('main-navbar')[0].style.backgroundImage = "none";

        }
    }

    // $('.car-model__heading').slick({
    //     slidesToShow: 4,
    //     slidesToScroll: 1,
    //     dots: false,
    //     arrows: true,
    //     rtl: html.dir === 'rtl',
    //     autoplay: true,
    //     autoplaySpeed: 8000,

    //     // centerMode: true
    //     responsive: [{
    //             breakpoint: 767,
    //             settings: {
    //                 slidesToShow: 1,
    //                 slidesToScroll: 1,
    //                 dots: false,
    //                 arrows: false,
    //                 rtl: html.dir === 'rtl',
    //                 autoplay: true
    //             }
    //         },
    //         {
    //             breakpoint: 992,
    //             settings: {
    //                 slidesToShow: 3,
    //                 slidesToScroll: 1,
    //                 dots: false,
    //                 arrows: false,
    //                 rtl: html.dir === 'rtl',
    //                 autoplay: true
    //             }
    //         },
    //         {
    //             breakpoint: 1200,
    //             settings: {
    //                 slidesToShow: 3,
    //                 slidesToScroll: 1,
    //                 dots: false,
    //                 arrows: false,
    //                 rtl: html.dir === 'rtl',
    //                 autoplay: true
    //             }
    //         },
    //     ]
    // });




    $('.car-details__heading').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        centerMode: false,
        dots: false,
        arrows: false,
        // rtl: html.dir === 'rtl',
        autoplay: true,
        autoplaySpeed: 1500,
        responsive: [{
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    centerMode: false,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    centerMode: false,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    centerMode: false,
                    slidesToScroll: 1,
                }
            },
        ]
    });

    $('.home-our-partners__content').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        centerMode: false,
        dots: false,
        arrows: false,
        rtl: html.dir === 'rtl',
        autoplay: true,
        autoplaySpeed: 1500,
        responsive: [{
                breakpoint: 767,
                settings: {
                    slidesToShow: 3,
                    centerMode: false,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    centerMode: false,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    centerMode: false,
                    slidesToScroll: 1,
                }
            },
        ]
    });

    $('#filter-toggele').click(function() {
        $('.toggeling-menue').toggleClass('d-none');
        $(body).css('position', 'fixed');
    })
    $('.cancel-toggle-menue').click(function() {
        $('.toggeling-menue').toggleClass('d-none');
    })


    $('#social-media-links-toggeler').click(function() {
        $('.social-media-links').toggleClass('d-none');
    })

    $('.category-icons label').click(function() {
        $(this).toggleClass('active');
    })

    /* =============================================================== */
    /* ======================       Offers       ===================== */
    /* =============================================================== */
    $(window).scroll(function() {
        OffersAnimation(this);
    });
    $(function() {
        OffersAnimation(window);
    });
    var OffersAnimationStart = false;

    function OffersAnimation(userLocation) {
        var nameClassOffers = '.home-offers_content_text',
            hT = $(nameClassOffers + '_discount').offset().top,
            hH = $(nameClassOffers + '_discount').outerHeight(),
            wH = $(window).height(),
            wS = $(userLocation).scrollTop();
        if (wS > (hT + hH - wH) && OffersAnimationStart == false) {
            $(nameClassOffers + '_discount').animate({ left: '104%' }, 1000, function() {
                $(nameClassOffers + '_name').animate({ left: '96%' }, 800, function() {
                    $(nameClassOffers + '_detailing').animate({ left: '95%' }, 600, function() {
                        $(nameClassOffers + '_price').animate({ top: '37%' }, 400, function() {
                            $(nameClassOffers + '_button').animate({ top: '95%' }, 400);
                        });
                    });
                });
            });
            OffersAnimationStart = true;
            console.log(hT + hH - wH);
        }
    }

    // gallery page----------------------------------------------------------------
    // $(".oldImg").click(function() {
    //     console.log('tasebgday');
    //     window.location.href = "#";
    //     $("#container").append($("<div class='opacity '><div class='container-fluid'><a id='close'>X</a><div class='row'> <img class='newImg '></div><div class='row justify-content-between mt-4'><button class='primary-btn btn-curved btn-hover mx-4' id='previous'>السابق</button><button id='next' class='primary-btn btn-curved btn-hover mx-4'>التالى</button></div></div></div>"));


    //     $(".newImg").attr("src", this.src);
    //     $("#previous").click(function() {
    //         let source = $(".newImg").attr("src");

    //         for (var i = 0; i < $('#container .row .oldImg').length; i++) {
    //             if ($("#container .row").children('img')[i].src == source) {
    //                 if (i > 0) {


    //                     let newUrl = $("#container .row").children('img')[i - 1].src
    //                     $(".newImg").fadeOut(300, function() {
    //                         $(".newImg").attr("src", newUrl)
    //                         $(".newImg").fadeIn(300);

    //                     });


    //                 }
    //             }
    //         };
    //     });
    //     $("#next").click(function() {
    //         let source = $(".newImg").attr("src");

    //         for (var i = 0; i < $('#container .row .oldImg').length; i++) {
    //             if ($("#container .row").children('img')[i].src == source) {
    //                 if (i < $('#container .oldImg').length - 1) {


    //                     let newUrl = $("#container .row").children('img')[i + 1].src
    //                     $(".newImg").fadeOut(300, function() {
    //                         $(".newImg").attr("src", newUrl)
    //                         $(".newImg").fadeIn(300);

    //                     });


    //                 }
    //             }
    //         };

    //     });
    //     $('#close').click(function() {
    //         $(".opacity").remove()
    //     });

    // });



    // gallery page ends here---------------------------------------------------------------------

    $('.nav-link').click(function() {
        $('.nav-link.active').removeClass('active');
        $(this).addClass('active');
    })

    $('#oldcontracts-toggel').click(function() {
        $('.contracts-section').addClass('d-none');
        $('#oldcontracts').removeClass('d-none');
    })
    $('#newcontracts-toggel').click(function() {
        $('.contracts-section').addClass('d-none');
        $('#newcontracts').removeClass('d-none');
    })

    /* ========================================================
       ===================logo animation=======================
       ========================================================
    */
    $('.nav-logo').animate({ top: '10px' }, 2500)
        // $('.nav-logo').animate({ width: '120px' }, 'slow')
        /* ==========================================================
           ===================logo animation ends====================
           ==========================================================
        */

});



// $(document).ready(function() {
//     /*================
//      / General Functions /
//     ================*/

//     /* general variables */

//     // html
//     const html = document.querySelector('html');

//     // navbar
//     const navbar = document.querySelector('.main-navbar');

//     // sidebar
//     const sidebar = document.querySelector('.side-bar');

//     // sidebar btn in left of page
//     const sidebarCollapse = document.querySelector('.sidebar-collapse');

//     // sidebar close btn
//     const closeSidebarBtn = document.querySelector('.side-bar__close');

//     // sidebar btn in narvar
//     const navCollapse = document.querySelector('.nav-collapse');

//     // menu in small screen
//     const navMenu = document.querySelector('.hidden-menu');

//     // close menu in small screen
//     const closeNavMenu = document.querySelector('.hidden-menu__close');

//     // closr sidebar btn
//     const collapseBtn = document.querySelector('.collapse-sidebar');

//     // all element that contain data scroll
//     const elementData = document.querySelectorAll('*[data-scroll]');

//     // button open and close form add comment
//     const addCommentBtn = document.querySelector('.add-comment-btn');

//     // search box
//     const openSearchBox = document.querySelector('.main-navbar__links__menu__item.search-link a');

//     // search box close
//     const closeSearchBox = document.querySelector('.search-box__content__block__btn button');


//     // // function add rtl option to element that contain slider
//     // function fixSliderRtl() {
//     //     if (html.dir === 'rtl') {
//     //          console.log(html.dir , html.dir === 'rtl');
//     //         const allSliderBoxes = $('.header__content');
//     //         allSliderBoxes.slick('slickSetOption', 'rtl', true);
//     //     }
//     // }

//     // fixSliderRtl();

//     // function fixed navbar when scroll
//     function fixedElement() {
//         if (window.scrollY > 300) {
//             navbar.classList.add('fixed-navbar');
//         } else {
//             navbar.classList.remove('fixed-navbar');
//         }
//     }

//     // fixed navbar when scroll
//     window.onscroll = fixedElement;

//     // fixed navbar when dom ready
//     fixedElement();

//     // function toggle classes of elements
//     function toggleClasses(element, class1, class2) {
//         if (element.classList.contains(class1)) {
//             element.classList.remove(class1)
//             element.classList.add(class2)
//         } else {
//             element.classList.add(class1)
//             element.classList.remove(class2)
//         }
//     }

//     // close search box
//     closeSearchBox.onclick = () => {
//         $('.search-box').slideUp();
//     }

//     // open search box
//     openSearchBox.onclick = (e) => {
//         e.preventDefault();
//         $('.search-box').slideDown();
//     }

//     // show sidebar when click nav collapse
//     sidebarCollapse.onclick = () => {
//         toggleClasses(sidebar, 'show-sidebar', 'hide-sidebar');
//     };

//     // open and close add comment form
//     addCommentBtn.onclick = () => {
//         $('.add-comment__box').fadeToggle();
//     };

//     // show sidebar when click left btn
//     collapseBtn.onclick = () => {
//         toggleClasses(sidebar, 'show-sidebar', 'hide-sidebar');
//     };

//     // hide sidebar when click close sidebar btn
//     closeSidebarBtn.onclick = () => {
//         toggleClasses(sidebar, 'show-sidebar', 'hide-sidebar');
//     };

//     // show nav menu
//     navCollapse.onclick = () => {
//         toggleClasses(navMenu, 'show-sidebar', 'hide-sidebar');
//     };

//     // hide nav menu
//     closeNavMenu.onclick = () => {
//         toggleClasses(navMenu, 'show-sidebar', 'hide-sidebar');
//     };

//     // nicescroll Plugin
//     $('html').niceScroll({
//         cursorcolor: '#BA2D92',
//         cursorwidth: '6px',
//         zindex: 30,
//         cursorborder:"0",
//     });


//     // preload of page
//     $('.preload .loader').fadeOut(1500, function() {
//         $('.preload').fadeOut(1000);
//     });

//     // general function scroll to element
//     function scrollElement(event) {
//         // disable prevent behavior of element
//         event.preventDefault();

//         // get current data scroll of this element
//         const element = this.dataset.scroll;

//         // get related element with thame data scroll
//         const relatedBox = document.querySelector(`*[data-scroll-target="${element}"]`);

//         if (relatedBox) {
//             // scroll to current element
//             $("html, body").animate({scrollTop: relatedBox.offsetTop}, 'slow');
//         }

//         // return false
//         return false;
//     }

//     elementData.forEach((element) => {
//         element.addEventListener('click', scrollElement);
//     });


//     /*================
//      / Home Page /
//     ================*/




//     /* workFlow */
//     const workFlow = $('.work-flow__process');
//     if (workFlow.length) {
//         workFlow.slick({
//             slidesToShow: 4,
//             slidesToScroll: 1,
//             dots: false,
//             arrows: false,
//             autoplay: true,
//             rtl : html.dir === 'rtl' ,
//             autoplaySpeed: 3000,
//             responsive: [
//                 {
//                     breakpoint: 767,
//                     settings: {
//                         slidesToShow: 1,
//                         slidesToScroll: 1,
//                     }
//                 },
//                 {
//                     breakpoint: 992,
//                     settings: {
//                         slidesToShow: 2,
//                         slidesToScroll: 1,
//                     }
//                 },
//                 {
//                     breakpoint: 1200,
//                     settings: {
//                         slidesToShow: 3,
//                         slidesToScroll: 1,
//                     }
//                 },
//             ]
//         });


//     }

//     /* services */
//     const servicesHome = $('.services-home__cards');

//     if (servicesHome.length) {
//         if (window.outerWidth < 992) {
//             servicesHome.slick({
//                 slidesToShow: 4,
//                 slidesToScroll: 1,
//                 dots: false,
//                 arrows: false,
//                 rtl : html.dir === 'rtl' ,
//                 autoplay: true,
//                 autoplaySpeed: 3000,
//                 responsive: [
//                     {
//                         breakpoint: 767,
//                         settings: {
//                             slidesToShow: 1,
//                             slidesToScroll: 1,
//                         }
//                     },
//                     {
//                         breakpoint: 992,
//                         settings: {
//                             slidesToShow: 2,
//                             slidesToScroll: 1,
//                         }
//                     },
//                 ]
//             });
//         }
//     }

//     /* clientsText */
//     const clientsText = $('.testmonials__text');
//     if (clientsText.length) {
//         clientsText.slick({
//             slidesToShow: 1,
//             slidesToScroll: 1,
//             dots: false,
//             rtl : html.dir === 'rtl' ,
//             arrows: false,
//             autoplay: true,
//             autoplaySpeed: 3000,
//             asNavFor: '.testmonials__clients__items'
//         });
//     }

//     /* clientsImgs */
//     const clientsImgs = $('.testmonials__clients__items');
//     if (clientsImgs.length) {
//         clientsImgs.slick({
//             slidesToShow: 3,
//             slidesToScroll: 1,
//             dots: false,
//             arrows: false,
//             rtl : html.dir === 'rtl' ,
//             autoplay: true,
//             autoplaySpeed: 3000,
//             asNavFor: '.testmonials__text',
//             responsive: [
//                 {
//                     breakpoint: 767,
//                     settings: {
//                         slidesToShow: 1,
//                         slidesToScroll: 1,
//                     }
//                 },
//                 {
//                     breakpoint: 992,
//                     settings: {
//                         slidesToShow: 2,
//                         slidesToScroll: 1,
//                     }
//                 },
//                 {
//                     breakpoint: 1200,
//                     settings: {
//                         slidesToShow: 3,
//                         slidesToScroll: 1,
//                     }
//                 },
//             ]
//         });
//     }


//     const plans = $('.plans');

//     if (plans.length) {
//         const planControlBtn = $('.plans__heading__control a');
//         planControlBtn.on('click', function(e) {
//             e.preventDefault();
//             planControlBtn.not($(this)).removeClass('active');
//             $(this).addClass('active');
//             $(this).attr('data-plan') === 'year' ? $('.plans__heading__control').addClass('enable') : $('.plans__heading__control').removeClass('enable');
//             // $('.plans__cards__item__box__price span').text($(this).attr('data-plan'));
//             $('.plans__cards__item__box__price').hide();
//             $('.plans__cards__item__box__price.'+$(this).attr('data-plan')).show();
//         });



//         $('.plans__cards').slick({
//             slidesToShow: 3,
//             slidesToScroll: 1,
//             dots: false,
//             arrows: false,
//             rtl : html.dir === 'rtl' ,
//             // autoplay: true,
//             autoplaySpeed: 3000,
//             responsive: [
//                 {
//                     breakpoint: 767,
//                     settings: {
//                         slidesToShow: 1,
//                         slidesToScroll: 1,
//                     }
//                 },
//                 {
//                     breakpoint: 992,
//                     settings: {
//                         slidesToShow: 2,
//                         slidesToScroll: 1,
//                     }
//                 },
//                 {
//                     breakpoint: 1200,
//                     settings: {
//                         slidesToShow: 3,
//                         slidesToScroll: 1,
//                     }
//                 },
//             ]
//         });
//     }

//     const blog = $('.blog');

//     if (blog.length) {

//         $('.blog__cards__item__box__content__btn').on('click', function() {
//             const blogImg = $(this).parents('.blog__cards__item__box').find('img').attr('src');
//             const blogDetail = $(this).parents('.blog__cards__item__box__content').find('.blog__cards__item__box__content__detail').text();

//             $('.blog-modal img').attr('src', blogImg);
//             $('.blog-modal p').text(blogDetail);
//         });

//         $('.blog__cards').slick({
//             slidesToShow: 3,
//             slidesToScroll: 1,
//             dots: true,
//             arrows: false,
//             rtl : html.dir === 'rtl' ,
//             autoplay: true,
//             autoplaySpeed: 3000,
//             responsive: [
//                 {
//                     breakpoint: 767,
//                     settings: {
//                         slidesToShow: 1,
//                         slidesToScroll: 1,
//                     }
//                 },
//                 {
//                     breakpoint: 992,
//                     settings: {
//                         slidesToShow: 2,
//                         slidesToScroll: 1,
//                     }
//                 },
//                 {
//                     breakpoint: 1200,
//                     settings: {
//                         slidesToShow: 3,
//                         slidesToScroll: 1,
//                     }
//                 },
//             ]
//         });
//     }

//     const brand = $('.brand');

//     if (brand.length) {



//         $('.brand__cards').slick({
//             slidesToShow: 6,
//             slidesToScroll: 1,
//             dots: false,
//             arrows: false,
//             autoplay: true,
//             rtl : html.dir === 'rtl' ,
//             autoplaySpeed: 3000,
//             responsive: [
//                 {
//                     breakpoint: 767,
//                     settings: {
//                         slidesToShow: 2,
//                         slidesToScroll: 1,
//                     }
//                 },
//                 {
//                     breakpoint: 992,
//                     settings: {
//                         slidesToShow: 3,
//                         slidesToScroll: 1,
//                     }
//                 },
//                 {
//                     breakpoint: 1200,
//                     settings: {
//                         slidesToShow: 4,
//                         slidesToScroll: 1,
//                     }
//                 },
//             ]
//         });
//     }


//     /*================
//      / about Page /
//     ================*/
//     const us_best = $('.us-the-best');

//     if (us_best.length) {



//         $('.us-the-best__process').slick({
//             slidesToShow: 4,
//             slidesToScroll: 1,
//             dots: false,
//             arrows: false,
//             rtl : html.dir === 'rtl' ,
//             autoplay: true,
//             autoplaySpeed: 3000,
//             responsive: [
//                 {
//                     breakpoint: 767,
//                     settings: {
//                         slidesToShow: 1,
//                         slidesToScroll: 1,
//                     }
//                 },
//                 {
//                     breakpoint: 992,
//                     settings: {
//                         slidesToShow: 2,
//                         slidesToScroll: 1,
//                     }
//                 },
//                 {
//                     breakpoint: 1200,
//                     settings: {
//                         slidesToShow: 4,
//                         slidesToScroll: 1,
//                     }
//                 },
//             ]
//         });
//     }

//     /*================
//      / contact Page /
//     ================*/

//     const contactPayments = $('.contact-payments__items');
//     if (contactPayments.length) {
//         contactPayments.slick({
//             slidesToShow: 3,
//             slidesToScroll: 1,
//             dots: false,
//             arrows: false,
//             rtl : html.dir === 'rtl' ,
//             autoplay: true,
//             autoplaySpeed: 3000,
//             responsive: [
//                 {
//                     breakpoint: 767,
//                     settings: {
//                         slidesToShow: 1,
//                         slidesToScroll: 1,
//                     }
//                 },
//                 {
//                     breakpoint: 992,
//                     settings: {
//                         slidesToShow: 2,
//                         slidesToScroll: 1,
//                     }
//                 },
//                 {
//                     breakpoint: 1200,
//                     settings: {
//                         slidesToShow: 3,
//                         slidesToScroll: 1,
//                     }
//                 },
//             ]
//         });
//     }


//     var getTouch = $('.get-touch__form');

//     if (getTouch.length) {
//         getTouch.validate({
//             rules: {
//                 name: {
//                     required: true,
//                 },

//                 email: {
//                     required: true,
//                     email: true,
//                 },
//                 phone: {
//                     required: true,
//                 },
//                 subject: {
//                     required: true,
//                 },
//                 message: {
//                     required: true
//                 },
//             },
//             errorPlacement: function (error, element) {
//                 error.appendTo(element.parent());
//             },
//         });
//     }




//     /*================
//      / register Page /
//     ================*/
//     var register = $('.register-form form');

//     register.validate({
//         rules: {
//             first_name: {
//                 required: true,
//             },
//             last_name: {
//                 required: true,
//             },
//             email: {
//                 required: true,
//                 email: true,
//             },
//             number: {
//                 required: true,
//             },
//             another_number: {
//                 required: true,
//             },
//             password: {
//                 required: true
//             },
//             confirm_password: {
//                 required: true
//             },
//         },
//         errorPlacement: function (error, element) {
//             error.appendTo(element.parent());
//         },
//     });



//    /*******************
//     * Profile Page *
//     ********************/
//    const profileUser = $('.user-profile');
//    if (profileUser.length) {
//         // select all user filter
//         var userFilter = $('.user-profile__left__cat a[data-user-filter]');

//         // edit btn
//         $('.user-profile__right__details__right .edit-btn').click(function() {
//             $('.user-profile__left__cat a[data-user-filter="user-edit"]').click();
//         });
//         $('.user-profile__right__details__right .edit-address').click(function() {
//             $('.user-profile__left__cat a[data-user-filter="address-edit"]').click();
//         });

//         // add active class to current active tab
//         userFilter.on('click', function(e) {

//             e.preventDefault();

//             userFilter.not($(this)).removeClass('active');

//             $(this).addClass('active');

//             userSet();
//         });

//         $('.user-profile__right__details__right .edit-btn').click(function() {
//             $('.user-profile__left__cat a[data-user-filter="user-edit"]').click();
//         });
//         // function control tabs
//         function userSet() {

//             var userFilterLink = $('.user-profile__left__cat a.active').attr('data-user-filter');

//             var relatedContent = $(`div[data-user="${userFilterLink}"]`);

//             allUserContent = $(`div[data-user]`);

//             allUserContent.not(relatedContent).addClass('d-none');

//             relatedContent.removeClass('d-none');
//         }

//         userSet();


//         var userEdit = $('.edit-user');


//         userEdit.validate({
//             rules: {
//                 name: {
//                     required: true,
//                 },
//                 email: {
//                     required: true,
//                     email: true,
//                 },
//                 phone: {
//                     required: true,
//                     number: true,
//                 },
//                 company: {
//                     required: true,
//                 },
//                 password: {
//                     // required: true,
//                     minlength: 8
//                 }
//             },
//             errorPlacement: function (error, element) {
//                 error.appendTo(element.parent());
//             },
//             success: function (label) {
//                 label.addClass("valid").text('success');
//             }
//         });

//         var addressEdit = $('form.edit-address');


//         addressEdit.validate({
//             rules: {
//                 name: {
//                     required: true,
//                 },
//                 government: {
//                     required: true,
//                 },
//                 area: {
//                     required: true,
//                 },
//                 street: {
//                     required: true,
//                 },
//                 'bulding-no': {
//                     required: true,
//                 },
//                 'floor-no': {
//                     required: true,
//                 },
//                 'apartment-no': {
//                     required: true,
//                 }
//             },
//             errorPlacement: function (error, element) {
//                 error.appendTo(element.parent());
//             },
//             success: function (label) {
//                 label.addClass("valid").text('success');
//             }
//         });

//     }









// });

