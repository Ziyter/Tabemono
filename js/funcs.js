$(document).ready(function () {
    var menu_active = false;
    var menu = false;
    //Если размер экрана - декстоп, то корзина будет открыватся в модальном окне       
    win_size();
    $(window).resize(function () {
        win_size();
    });
//Появление корзины в модальном окне
    function win_size() {
        if ($(window).width() > '582') {
            $("#bt-cart").attr("data-toggle", "modal");
        } else {
            $("#bt-cart").attr("data-toggle", "");
        }
    }

    var toggles = document.querySelectorAll(".cmn-toggle-switch");
    for (var i = toggles.length - 1; i >= 0; i--) {
        var toggle = toggles[i];
        toggleHandler(toggle);
    }
    ;
//Анимация кнопки
    function toggleHandler(toggle) {
        toggle.addEventListener("click", function (e) {
            e.preventDefault();
            (this.classList.contains("active") === true) ? this.classList.remove("active") : this.classList.add("active");
        });
    }
    ;
    try {
        //Инициализация слайда
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            //   item:1,
            loop: true,
            margin: 5,
            autoHeight: true,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                700: {
                    items: 2
                },
                1400: {
                    items: 3
                },
                1900: {
                    items: 3
                }
            }
        });
    } catch (e) {
    }

//Листание слайда с помощью колесика мыши
    owl.on('mousewheel', '.owl-stage', function (e) {
        if (e.deltaY > 0) {
            owl.trigger('next.owl');
        } else {
            owl.trigger('prev.owl');
        }
        e.preventDefault();
    });
    //Перемещение меню
    function  move_menu(cls) {
        var toggle_el = $("#bt").attr("data-toggle");
        $(toggle_el).toggleClass(cls);
        $("#sidebar").toggleClass(cls);
        $("#right").toggleClass(cls);
        menu_active = !menu_active;
    }

    //Открытие меню по кнопке
    $("#bt").click(function () {
        move_menu("open-sidebar");
        menu = true;
    });
    $("#bt-cart").click(function () {
        if ($(window).width() <= '582') {
            move_menu("open-sidebarright");
            $(".clcart").toggleClass("active");
            menu = false;
        }
    });
//Открытие меню не по кнопке
    $(document).bind("touchend", function (e) {
        side_menu(e);
    });
    $(document).mouseup(function (e) {
        side_menu(e);
    });

    function side_menu(e) {
        var div = $("#sidebar");
        var div1 = $("#right");
        if (!$("svg").is(e.target) && !$("#bt").is(e.target) && !$("#s_cart").is(e.target) && !$("path#cart").is(e.target) && !div1.is(e.target) && div1.has(e.target).length === 0 && !div.is(e.target) && div.has(e.target).length === 0 && menu_active) {
            if (menu) {
                move_menu("open-sidebar");
                $("#bt").removeClass("active");
            } else
            {
                move_menu("open-sidebarright");
                $(".clcart").toggleClass("active");
            }
        }
    }

//---------------------------------------
//---------Регистрация
//---------------------------------------

//Маска телефона
    $('#phone').keyup(function () {
        var value = $('#phone').val();
        phone = "+7(";
        value = value.replace(/[^0-9]/gim, '');
        value = (value.length !== 1) ? value.slice(1) : value;
        for (var i = 0; i < value.length; i++) {
            switch (i) {
                case 3:
                    phone += ") ";
                    break;
                case 6:
                case 8:
                    phone += "-";
                    break;
            }
            phone += value[i];
        }
        $('#phone').val(phone);
    });
});
