function show() {
    $('.hidden-part *').css('display', 'block');
    $('.show-less').css('display', 'inline');
    $('.show-more').css('display', 'none');

}


// var myDate = document.querySelector('#myDate');
// var today = new Date();
// myDate.value = today.toISOString().substr(0, 10);


// console.log(today.toISOString().substr(0, 10));

function hide() {
    $('.hidden-part *').css('display', 'none');
    $('.show-less').css('display', 'none');
    $('.show-more').css('display', 'inline');
};



function x() {
    $('[data-toggle="popover"]').popover();

};

x();

$('#toggel-profile').click(function() {
    $('#update-profile').toggleClass('d-none');
    $('#profile').toggleClass('d-none');
    $('#toggel-profile').toggleClass('d-none');

})

function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}

window.addEventListener("notLogin", function() {
    $('#exampleModal').modal('toggle');
})
window.addEventListener("load", function() {
    var allcars = '';
    var carid = 0;
    $(function() {
        $('.memd1').slideDown();
        $('.memd2').slideDown();
        $('.memd3').slideDown();
        $('.men1').click(function() {
            $('.memd1').slideToggle();
        })
        $('.men2').click(function() {
            $('.memd2').slideToggle();
        })

        $('.men3').click(function() {
            $('.memd3').slideToggle();
        })
    })
    $("#hamburger-bars").click(function() {
        $('#menu').toggleClass("hidden")
    })
    $('.carousel').carousel({
        interval: 1500
    })
    $('.allcategory').click(function() {
        $.ajax({
            type: 'get',
            url: '/getCarsCategories',
            data: {
                category_id: this.id
            },
            success: function(data) {
                let modelnames = '';
                let i = 0;
                allcars = data[0];
                data[0].forEach(element => {
                    i++;
                    if (i < 6) {
                        modelnames += `
                                <div  class="col-2 carNames pt-2 ` + ((i == 1) ? 'bg-primary' : '') + `" id='` + element['id'] + `' style="font-size: 20px;cursor: pointer;background-color: #505151;">
                                    <p class=" text-center " >` + element['name'] + `</p>
                                    </div>
                                `
                    }
                });
                let firstCarCategory = `
                            <div class="row py-3" >
                                <div class="col-4 d-flex align-items-center justify-content-center">

                                        <div class="text-center">
                                        <p class="before-price m-0" style=" text-decoration: line-through;" >` + data[1]['price2'] + `</p>
                                        <h2 class="after-price"  >` + data[1]['price1'] + `</h2>
                                        <p style="transform: translateY(-20px);" class="m-0 before-price">يومى</p>
                                        <a  href="#" class="btn btn-primary btn-block">احجز الان</a>
                                        </div>
                                </div>
                                <div class="col-8 d-flex align-items-end justify-content-center">

                                    <img class="mx-lg-5 mx-md-2 ml-sm-2" style="width: 80%;" src="` + data[2] + `" alt="car image" >
                                </div>


                            </div>
                            <div class="row " style="background-color:#505151 ;">
                                <div class="py-2 col-3 px-1 mx-0 text-right" style="border-left: white solid 1px;"><p class="my-0">سنة ` + data[1]['model'] + `</p></div>
                                <div class="py-2 col-3 px-1 mx-0 text-right" style="border-left: white solid 1px;"><p class="my-0">ناقل الحركة اوتوماتيك</p></div>
                                <div class="py-2 col-3 px-1 mx-0 text-right" style="border-left: white solid 1px;"><p class="my-0">عدد الأبواب ` + data[1]['door'] + `</p></div>
                                <div class="py-2 col-3 px-1 mx-0 text-right"><p class="my-0">عدد المقاعد 5</p></div>
                            </div>
                        `
                $('.astolContainer').html(firstCarCategory);
                $('.ModelName').html(modelnames);
                $('.carNames').click(function() {
                    carid = this.id;
                    allcars.find(function(car, index) {
                        if (car['id'] == carid) {
                            let firstCarCategory = `
                                        <div class="row py-3" >
                                            <div class="col-4 d-flex align-items-center justify-content-center">

                                                    <div class="text-center">
                                                    <p class="before-price m-0" style=" text-decoration: line-through;" >` + car['price2'] + `</p>
                                                    <h2 class="after-price"  >` + car['price1'] + `</h2>
                                                    <p style="transform: translateY(-20px);" class="m-0 before-price">يومى</p>
                                                    <a  href="#" class="btn btn-primary btn-block">احجز الان</a>
                                                    </div>
                                            </div>
                                            <div class="col-8 d-flex align-items-end justify-content-center">

                                                <img class="mx-lg-5 mx-md-2 ml-sm-2" style="width: 80%;" src="` + data[3][index] + `" alt="car image" >
                                            </div>


                                        </div>
                                        <div class="row " style="background-color:#505151 ;">
                                            <div class="py-2 col-3 px-1 mx-0 text-right" style="border-left: white solid 1px;"><p class="my-0">سنة ` + car['model'] + `</p></div>
                                            <div class="py-2 col-3 px-1 mx-0 text-right" style="border-left: white solid 1px;"><p class="my-0">ناقل الحركة اوتوماتيك</p></div>
                                            <div class="py-2 col-3 px-1 mx-0 text-right" style="border-left: white solid 1px;"><p class="my-0">عدد الأبواب ` + car['door'] + `</p></div>
                                            <div class="py-2 col-3 px-1 mx-0 text-right"><p class="my-0">عدد المقاعد 5</p></div>
                                        </div>
                                    `
                            $('.astolContainer').html(firstCarCategory);
                            console.log(data[3]);
                        }
                    })
                })
            }
        });
    });
});