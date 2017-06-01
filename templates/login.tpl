<div id="login">
    <h3>Вход/Регистрация</h3>
    <form id="log"action="/PHPfuncs/aut.php" role="form" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="log" class="form-control" id="email" >
        </div>
        <div class="form-group">
            <label for="pass">Пароль</label>
            <input type="password" name="pass" class="form-control" id="pass" >
        </div>
        <div class="alert alert-warning captcha">
            <span class="close" onclick="$('.captcha').hide();">×</span>
            Пройдите проверку на бота!
        </div>
        <div class="g-recaptcha cap" data-sitekey="6LdPcB4UAAAAAIrbdr1oTzmmYJX9VLp8vJoaP3nA"></div><br>
        <button type="submit" class="btn btn-orange autin-bt">Войти</button>
        <a href="/registr" style="float: right;" role="button" class="btn btn-orange">Регистрация</a>
    </form>
</div>