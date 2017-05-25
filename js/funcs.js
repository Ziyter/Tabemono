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
            $.cookie('MOBILE', false);
        } else {
            $.cookie('MOBILE', true);
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

    //Отмена заказа
    $(".del_order").click(function () {
        var id = $(this).attr('id_order');
        $.post(
                "../PHPfuncs/delete_order.php",
                {id: id},
                );
        window.location.reload();
    });

/////////////////////////////////////
//-------------КОРЗИНА-----------///
///////////////////////////////////

    $("#bt-cart").click(function () {
        $.post(
                "/PHPfuncs/showBasket.php",
                ajax
                );

        function ajax(data) {
            showBasket(data);
        }

        function showBasket(data) {
            if (data != '') {
                obj = jQuery.parseJSON(data);
            } else
                obj = '';
            open_basket(obj, true);
        }

        function open_basket(obj, i) {
            $("#order_preference").hide();
            $(".items_elem").remove();
            $("#cart_block").remove();
            $("#emptyd").remove();
            if (obj.length > 0) {
                var summa = 0;
                var general_quantity = 0;
                obj.forEach(function (entry) {
                    var id = entry.id_item;
                    var name = entry.name;
                    var quantity = entry.quantity;
                    var price = entry.price * quantity;
                    summa += price;
                    general_quantity += +quantity;
                    var inputnum = "<input id_item='" + id + "' class='inputnum' size='40' type='number' min='1' \n\
                                max='20' value='" + quantity + "'>";
                    var img = "<img  width='60' height='60' src='/img/goods/crop/" + entry.img + "'>";
                    if ($(window).width() <= '582') {
                        $("#items_list").append("<tr class='items_elem'>\n\
                            <td>" + img + "</td>\n\
                        <td>" + name + "<br>Количество: " + inputnum + "<div id_item='" + id + "' act='3' class='icons del_basket del_basket_white'></div><br>\n\
                    Цена: <span id='pritem_" + id + "'>" + price + "</span><f class='rubl'>о</f></td>\n\
                                </tr>"
                                );
                    } else {
                        $("#items_listd").append("<tr class='items_elem'>\n\
                            <td>" + img + "</td>\n\
                        <td>" + name + "</td><td>" + inputnum + "</td>\n\
                    <td><span id='pritem_" + id + "'>" + price + "</span><f class='rubl'>о</f></td>\n\
\n\                 <td><div id_item='" + id + "' act='3' class='icons del_basket del_basket_orange'></div></td>\n\
                                </tr>"
                                );
                    }
                });
            } else {
                $("#right").prepend("<div class='cart_block' id='empty'><h3>Корзина пуста<br> Добавьте товары</h3></div>");
                $(".modal-content").prepend("<div id='emptyd'><h4>Корзина пуста<br> Добавьте товары</h4></div>");
            }
            $("#count_items").text(general_quantity);
            $("#summa_items").text(summa);
            $("#count_itemsd").text(general_quantity);
            $("#summa_itemsd").text(summa);
            if (summa > 400) {
                $('.ordering').attr("disabled", false);
            } else {
                $('.ordering').attr("disabled", true);
            }
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
                        "/PHPfuncs/changebasket.php",
                        {id: id, act: 2, value: val},
                        );
                $.post(
                        "/PHPfuncs/showBasket.php",
                        update
                        );
            });

            function update(data) {
                obj = jQuery.parseJSON(data);
                open_basket(obj, false);
            }

            $('.del_basket').on('click', function () {
                id = this.getAttribute("id_item");
                act = this.getAttribute("act");
                $.post(
                        "/PHPfuncs/changebasket.php",
                        {id: id, act: act, value: -1},
                        );
                $.post(
                        "/PHPfuncs/showBasket.php",
                        update
                        );
            });
        }

    });

    //Блок настройки адреса и времени
    $('.ordering').click(function () {
        if ($(window).width() > '582') {
            $('#myModal').modal("hide");
        } else {
            $("#order_preference").fadeIn(400);
        }
        var now = new Date();
        date=now.getFullYear()+'-'+('0'+(now.getMonth()+1)).slice(-2)+'-'+now.getDate();
        time=(now.getHours()+1)+':'+now.getMinutes();
        $(".date-input").val(date);
        $(".date-input").attr("min",date);
        $(".time-input").attr("min",time);
        $(".time-input").val(time);
        $(".address_block_order").hide();
        $('.radiobt').click();
    });

    //Выбор адреса
    $('.radiobt').click(function () {
        if (this.getAttribute("value") === 'old') {
            $(".list_address").show();
            $(".address_block_order").hide();
            $.post("/PHPfuncs/get_address.php",
                    {act: 1},
                    function (data) {
                        obj = jQuery.parseJSON(data);
                        $(".list_address").empty();
                        obj.forEach(function (entry) {
                            $(".list_address").prepend("<option>" + entry.address + "</option>");
                        });
                    });
        } else {
            $(".list_address").hide();
            $(".address_block_order").show();
        }
    });

    //Оформление заказа
    $('.btn-order').click(function () {
        $.post("/PHPfuncs/ordering.php",
                function (data) {
                    if (data) {
                        notification("Для оформления заказа нужно зарегистрироваться!");
                        setTimeout(function () {
                            location.href = '/user';
                        }, 1100);
                    } else {
                        notification("Заказ успешно офрмлен!");
//                        move_menu("open-sidebarright");
//                        $(".clcart").toggleClass("active");
                        setTimeout(function () {
                            location.href = '/user';
                        }, 1100);
                    }
                });
    });

    //Добавление в корзину
    $('.icons').click(function () {
        id = this.getAttribute("id_item");
        act = this.getAttribute("act");
        $.post(
                "/PHPfuncs/changebasket.php",
                {id: id, act: act, value: -1},
                );
        notification("Товар добавлен в корзину");
    });

//Закрытие меню не по кнопке
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
//---------Поиск товаров
//---------------------------------------

//Открытие поисковой страницы
    $('.search').click(function () {
        var query = $('#search').val();

        if (query !== "" && query !== undefined)
            location.href = "/search/query/" + query + "/";
    });

    $('#search').keyup(function () {
        if (event.keyCode === 13)
        {
            $('.search').click();
        }
    });

//Модуль уведомления
    function notification(text) {
        $('.notification_block div').text(text);
        $('.notification_block').fadeIn(400);
        setTimeout(function () {
            $('.notification_block').fadeOut('fast');
        }, 1000);
    }
}
);
