
$(document).mouseup(function (evt) {
    var $target = $(evt.target);
    console.log($target);
    if($target.hasClass('dropdown')){

        console.log('got it')
        $('.dropdown').removeClass('active');
        $target.addClass('active');
    }
    else{
        $('.dropdown').removeClass('active');
    }


});
$(document).ready(function () {
    // $('.header__login a').on('click', function (e) {
    //    $('.modal').addClass('active');
    // });
    $('.menu').on('click', function (e) {
        $(this).toggleClass('active')
        $('.header__bottom-line').toggleClass('active')
        $('html').toggleClass('active');
    });
    $('.dropdown').each(function () {
        if($(this).next().children().length != 0){
            $(this).addClass('has-content')
        }

    });
    $('.inputmask').inputmask({"mask": "+38(099) 999-9999"});
    // $('.tab-link').each(function () {
    //     $('.tab-link:first-of-type').addClass('active');
    //     $(this).on('click', function (e) {
    //         e.preventDefault();
    //         e.stopPropagation();
    //         $('.tab-link').removeClass('active');
    //         $(this).addClass('active');
    //         var data = $(this).attr('data-attr');
    //         $('.tabs-content').hide();
    //         $('.tabs-content.' + data + '').css('display', 'block');
    //
    //     });
    // });
    // $('.modal-close').on('click', function (e) {
    //     $('.modal').removeClass('active');
    // });

});
