$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#repair_home').on('click', function () {



            if ($(this).is(':checked')) {
                $('.addres_home').css({'opacity':'1','height':'auto','transform':'scaleY(1)'})
            }
            else {
                $('.addres_home').css({'opacity':'0','height':'0','transform':'scaleY(0)'})
            }

        }
    );

    $('#buttons_requres').on('click',function () {

        event.preventDefault();

        var form =$('#block-form');

        form.find('.form_errors').removeClass('has-error');

        var name = $('#name').val(),
            phone = $('#phone').val(),
            email = $('#email').val(),
            product = $('#product').val(),
            number = $('#number').val(),
            comments = $('#comments').val(),
            repair_home = 0,
            address = $('#address').val(),
            house = $('#house').val(),
            apartment = $('#apartment').val(),
            category = $(this).data('id');




        $.ajax({

            type: 'POST',
            url: '/orders',
            data: {
                name:name,phone:phone,email:email,product:product,
                number:number,comments:comments,repair_home:repair_home,
                address:address,house:house,apartment:apartment,
                category:category},

            beforeSend: function() {
                $("#buttons_requres").prop('disabled', true).addClass('proces');
            },

            success : function (data) {


                if(data == 200)
                {
                    $("#buttons_requres").prop('disabled', false).removeClass('proces');
                    $('.success').addClass('active');
                    $('#name').attr('placeholder','РРјСЏ').val('');
                    $('#phone').attr('placeholder','РўРµР»РµС„РѕРЅ').val('');
                    $('#email').attr('placeholder','РџРѕС‡С‚Р°').val('');
                    $('#product').attr('placeholder','РР·РґРµР»РёРµ').val('');
                    $('#number').attr('placeholder','РЎРµСЂРёР№РЅС‹Р№ РќРѕРјРµСЂ').val('');
                    $('#comments').attr('placeholder','РћРїРёСЃР°РЅРёРµ Р”РµС„РµРєС‚Р°').val('');

                    $('#address').attr('placeholder','РђРґСЂРµСЃ').val('');
                    $('#house').attr('placeholder','Р”РѕРј').val('');
                    $('#apartment').attr('placeholder','РљРІ.').val('');

                    setTimeout(function() {  $('.success').removeClass('active') }, 2000);

                }
            },

            error : function (xhr) {
                $("#buttons_requres").prop('disabled', false).removeClass('proces');

                var res = xhr.responseJSON;

                if($.isEmptyObject(res) == false )
                {
                    $.each(res.errors,function (key,value) {
                        $('#'+key)

                            .closest('.form_errors')
                            .addClass('has-error')
                        // .append('<span class="help-block"><strong>'+ value +'</strong></span>');
                    });

                    // $.each(res.errors,function (key,value) {
                    //     $('#'+key)
                    //
                    //         .closest('.datetimepicker')
                    //         .addClass('help-errors');
                    // });
                }

            }

        })
    });

    function clear_error(form) {
        $(form).find('.email_error').text('');
        $(form).find('.password_error').text('');
        $(form).find('.error').text('');
    }


    $('.login_btn').on('click', function (e) {
        e.preventDefault();
        clear_error('.form_login');
        var f = 1;
        if ($('.form_login').find('input[name=email]').val() == '') {
            $('.form_login').find('.email_error').text('Р’РІРµРґРёС‚Рµ Email');
            f = 0;
        }
        if ($('.form_login').find('input[name=password]').val() == '') {
            $('.form_login').find('.password_error').text('Р’РІРµРґРёС‚Рµ РїР°СЂРѕР»СЊ');
            f = 0;
        }
        if (f) {
            $.ajax({
                type: 'POST',
                url: '/login',
                data: $('.form_login').find('form').serialize(),
                success: function (result) {
                    window.location.href = "/dashboard";
                },
                error: function () {
                    $('.form_login').find('.error').text('РќРµ РїСЂР°РІРёР»СЊРЅС‹Р№ Р»РѕРіРёРЅ РёР»Рё РїР°СЂРѕР»СЊ');
                }
            });
        }
    });


    $('.register_btn').on('click', function (e) {

        e.preventDefault();
        clear_error('.form_login');

        console.log($('.form_reg').find('form').serialize());

        $('.help-block').remove();
        // $('.has-error').remove();
        $('.block_for_validation').removeClass('has-error-block-val');
        $('body').find('.form_filds ').removeClass('has-error');

        $.ajax({
            type: 'POST',
            url: '/register',
            data: $('.form_reg').find('form').serialize(),
            success: function () {

                $('.login').removeClass('active');
                $('.confirms').addClass('active').find('.tabs-content').css('display','block');

                // window.location.href = "/dashboard";
            },
            error: function (result) {
                var res = result.responseJSON;
                if ($.isEmptyObject(res) == false) {
                    $.each(res.errors, function (key, value) {

                        console.log(res.errors);
                        $('#' + key).addClass('has-error');
                        $('#' + key).parents('.block_for_validation').addClass('has-error-block-val').prepend('<span class="help-block"><strong>' + value + '</strong></span>')
                    });
                    $('form').removeClass('has-error')
                }

                //$('.form_reg').find('.error').text('РћС€РёР±РєР°');
            }
        });
    });

    $('.buttons_edit').on('click',function () {


        $('.form_edit').find('.name_error').text('');
        $('.form_edit').find('.last_name_error').text('');
        $('.form_edit').find('.phone_error').text('');
        $('.form_edit').find('.email_error').text('');
        $('.form_edit').find('.has-error').removeClass();

        $('.help-block').remove();
        // $('.has-error').remove();
        $('.block_for_validation').removeClass('has-error-block-val');
        $('body').find('.form_filds ').removeClass('has-error');



        event.preventDefault();

        var f = 1;
        if ($('.form_edit').find('input[name=names]').val() == '') {
            $('.form_edit').find('input[name=names]').addClass('has-error');
            $('.form_edit').find('.name_error').text('Р’РІРµРґРёС‚Рµ РРјСЏ');
            f = 0;
        }
        if ($('.form_edit').find('input[name=last_names]').val() == '') {
            $('.form_edit').find('input[name=last_names]').addClass('has-error');
            $('.form_edit').find('.last_name_error').text('Р’РІРµРґРёС‚Рµ Р¤Р°РјРёР»РёСЋ');
            f = 0;
        }
        if ($('.form_edit').find('input[name=emails]').val() == '') {
            $('.form_edit').find('input[name=emails]').addClass('has-error');
            $('.form_edit').find('.email_error').text('Р’РІРµРґРёС‚Рµ РџРѕС‡С‚Сѓ');
            f = 0;
        }

        if ($('.form_edit').find('input[name=phones]').val() == '') {
            $('.form_edit').find('input[name=phones]').addClass('has-error');
            $('.form_edit').find('.phone_error').text('Р’РІРµРґРёС‚Рµ РўРµР»РµС„РѕРЅ');
            f = 0;
        }

        if ($('.form_edit').find('input[name=password]').val() == '') {
            $('.form_edit').find('input[name=password]').addClass('has-error');
            $('.form_edit').find('.password_error').text('Р’РІРµРґРёС‚Рµ РџР°СЂРѕР»СЊ');
            f = 0;
        }

        if(f)
        {
            $.ajax({

                type:'POST',
                url:'/edit_data',
                data:$('.form_edit').serialize(),

                success: function (result) {
                    console.log(result);
                    $('.success').addClass('active').find('.modal-title').text('РџРµСЂСЃРѕРЅР°Р»СЊРЅС‹Рµ РґР°РЅРЅС‹Рµ РѕР±РЅРѕРІР»РµРЅС‹');

                    setTimeout(function () {$('.success').removeClass('active')

                    },1500)
                },

                error: function (result) {
                    var res = result.responseJSON;
                    if ($.isEmptyObject(res) == false) {
                        $.each(res.errors, function (key, value) {

                            console.log(res.errors);
                            $('#' + key).addClass('has-error');
                            $('#' + key).parents('.block_for_validation').addClass('has-error-block-val').prepend('<span class="help-block"><strong>' + value + '</strong></span>')
                        });
                        $('form').removeClass('has-error')
                    }

                    //$('.form_reg').find('.error').text('РћС€РёР±РєР°');
                }

            })
        }

    });

    $('.confirm_buttons').on('click', function () {

        event.preventDefault();
        var code = $('#confirm').val();

        if(code == '')
        {
            $('.confirm_error').text('Р’РІРµРґРёС‚Рµ РєРѕРґ РїРѕР»СѓС‡РµРЅС‹Р№ РІ СЃРјСЃ').css('color','red');
        }
        else
        {
            $.ajax({
                type:'POST',
                url:'/confirm',
                data:{code:code},

                success: function (result) {

                    if(result == 200)
                    {
                        $('.confirms').removeClass('actuv')
                        $('.success').addClass('active').find('.modal-title').text('РќРѕРјРµСЂ РџРѕРґС‚РІРµСЂР¶РґРµРЅ');

                        setTimeout(function() { window.location.href = "/dashboard"; }, 2000);
                    }
                    if(result == 300)
                    {
                        $('.confirm_error').text('РљРѕРґ РІРІРµРґРµРЅ РЅРµ РІРµСЂРЅРѕ, РїРѕРІС‚РѕСЂРёС‚Рµ РїРѕРїС‹С‚РєСѓ СЃРЅРѕРІР°').css('color','red');
                    }
                },
            })
        }
    })

    $('.close_confirm').on('click', function (e) {

        $.ajax({
            type:'get',
            url:'/delete_user',

            success : function (data) {

                $('.confirms').removeClass('active');
                $('.success').addClass('active').find('.modal-title').text('Р РµРіРёСЃС‚СЂР°С†РёСЏ РћС‚РјРµРЅРµРЅР°');

                setTimeout(function () {$('.success').removeClass('active')

                },1500)

            }

        })

    });
});
