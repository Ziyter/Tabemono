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
        $(".back_block").toggleClass("show_b");
        menu_active = !menu_active;
    }

    //Открытие меню по кнопке
    $("#bt").click(function () {
        move_menu("open-sidebar");
        menu = true;
    });

/////////////////////////////////////
//-------------КОРЗИНА-----------///
///////////////////////////////////
    $("#bt-cart").click(function () {
        $.post(
                "../PHPfuncs/showBasket.php",
                ajax
                );
        function ajax(data) {
            showBasket(data);
        }

        function showBasket(data) {
            obj = jQuery.parseJSON(data);
            if ($(window).width() <= '582') {
                mobile_basket(obj,true);
            }
        }

        function mobile_basket(obj, i) {
            $(".items_elem").remove();
            var summa = 0;
            var general_quantity=0
            obj.forEach(function (entry) {
                var id = entry.id_item;
                var name = entry.name;
                var quantity = entry.quantity;
                var price = entry.price * quantity;
                summa += price;
                general_quantity+=+quantity;
                var inputnum = "<input id_item='" + id + "' class='inputnum' size='2' type='number' min='1' \n\
                                max='20' value='" + quantity + "'>";
                var img = "<img  width='60' height='60' src='img/goods/crop/" + entry.img + "'>";
                $("#items_list").append("<tr class='items_elem'>\n\
                            <td>" + img + "</td>\n\
                        <td>" + name + "<br>Количество: " + inputnum + "<br>\n\
                    Цена: <span id='pritem_" + id + "'>" + price + "</span><f class='rubl'>о</f></td>\n\
                                </tr>"
                        );
            });
            $("#count_items").text(general_quantity);
            $("#summa_items").text(summa);
            if (i) {
                move_menu("open-sidebarright");
                $(".clcart").toggleClass("active");
                menu = false;
            }

            //Устанавливаем обработчик на изменение количества
            $('.inputnum').on('change', function () {
                var id = $(this).attr('id_item');
                var val = $(this).val();
                $.post(
                        "../PHPfuncs/changebasket.php",
                        {id: id, act: 2, value: val},
                        );
                $.post(
                        "../PHPfuncs/showBasket.php",
                        update
                        );
                function update(data) {
                    obj = jQuery.parseJSON(data);
                    mobile_basket(obj,false);
                }
//                price=$("#pritem_"+id).text()*val;
//                $("#pritem_"+id).text(price+"");
            });
        }
        /**
         * Вычисление общей стоймости заказа
         */
//        function summa_order() {
//            var summa = 0;
//            $.post(
//                    "../PHPfuncs/showBasket.php",
//                    {act: 1},
//                    sum
//                    );
//            function sum(data) {
//                obj = jQuery.parseJSON(data);
//                obj.forEach(function (entry) {
//                    summa += entry.price * entry.quantity;
//                });
//            }
//        }
    });

//закрытие меню не по кнопке
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

//////////////////////////////////////////
//---------Регистрация-----------------//
////////////////////////////////////////

//Маска телефона
    $('#phone').keyup(function () {
        var value = $('#phone').val();
        phone = "+";
        value = value.replace(/[^0-9]/gim, '');
        //value = (value.length !== 1) ? value.slice(1) : value;
        for (var i = 0; i < value.length; i++) {
            switch (i) {
                case 1:
                    phone += "(";
                    break;
                case 4:
                    phone += ") ";
                    break;
                case 7:
                case 9:
                    phone += "-";
                    break;
            }
            phone += value[i];
        }
        $('#phone').val(phone);
    });

//Проверка email адреса
    $("#email").keyup(function () {
        checkemail();
    });
    $("#email").change(function () {
        checkemail();
        if (!$("#email").hasClass("form-control-warning"))
            $.post(
                    "../PHPfuncs/checkemail.php",
                    {
                        email: $("#email").val()
                    },
                    onAjaxSuccess
                    );

        function onAjaxSuccess(data)
        {
            if (data == 0) {
                $("#emailblock").addClass("has-success");
                $("#email").addClass("form-control-success");
                $("#emailblock").removeClass("has-warning");
                $("#email").removeClass("form-control-warning");
                $("#emaildes").text("Email свободен");
                $("#emailblock").removeClass("has-danger");
                $("#email").removeClass("form-control-danger");
            } else {
                $("#emailblock").removeClass("has-warning");
                $("#email").removeClass("form-control-warning");
                $("#emailblock").addClass("has-danger");
                $("#email").addClass("form-control-danger");
                $("#emaildes").text("Такой email уже зарегистрирован");
            }
        }
    });

    function checkemail() {
        var mail = $("#email").val();
        if (!isValidEmailAddress(mail)) {
            $("#emailblock").addClass("has-warning");
            $("#email").addClass("form-control-warning");
        } else {
            $("#emailblock").removeClass("has-warning");
            $("#email").removeClass("form-control-warning");
        }
    }

    function isValidEmailAddress(emailAddress) {
        var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
        return pattern.test(emailAddress);
    }

    $("#pass_again").keyup(function () {
        checkpass();
    });
    $("[name=pass]").keyup(function () {
        checkpass();
    });

    function checkpass() {
        if ($("#pass_again").val().length >= 8)
            if ($("#pass_again").val() === $("[name=pass]").val()) {
                $("#passblock").addClass("has-success");
                $("[name=pass]").addClass("form-control-success");
                $("#pass_againblock").addClass("has-success");
                $("#pass_again").addClass("form-control-success");
                $("#passblock").removeClass("has-danger");
                $("[name=pass]").removeClass("form-control-danger");
                $("#pass_againblock").removeClass("has-danger");
                $("#pass_again").removeClass("form-control-danger");
                return;
            }
        $("#passblock").removeClass("has-success");
        $("[name=pass]").removeClass("form-control-success");
        $("#pass_againblock").removeClass("has-success");
        $("#pass_again").removeClass("form-control-success");
        $("#passblock").addClass("has-danger");
        $("[name=pass]").addClass("form-control-danger");
        $("#pass_againblock").addClass("has-danger");
        $("#pass_again").addClass("form-control-danger");
    }

    $('.alert').hide();

    $('#reg').submit(function () {
        $('.alert').hide();
        var verif = true;
        if ($("#g-recaptcha-response").val() === "") {
            $('#captcha').show();
            verif = false;
        }
        if (!$("#email").hasClass("form-control-success") || !$("[name=pass]").hasClass("form-control-success")) {
            $('#data').show();
            verif = false;
        }
        return verif;
    });

//---------------------------------------
//---------Товары
//---------------------------------------

//Добавление в корзину
    $('.icons').click(function () {
        id = this.getAttribute("id_item");

        $.post(
                "../PHPfuncs/changebasket.php",
                {id: id, act: 1, value: -1},
                );
    });
});
