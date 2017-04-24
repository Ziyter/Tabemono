<div id="login">
    <h3>Вход</h3>
    <form action="PHPfuncs/aut.php" role="form" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="log" class="form-control" id="email" >
{*            <p class="help-block">Пример строки с подсказкой</p>*}
        </div>
        <div class="form-group">
            <label for="pass">Пароль</label>
            <input type="password" name="pass" class="form-control" id="pass" >
        </div>
        <div class="checkbox">
            <label><input type="checkbox"> Запомнить компьютер</label>
        </div>
        <button type="submit" class="btn btn-orange">Войти</button>
        <a href="/registr" style="float: right;" role="button" class="btn btn-orange">Регистрация</a>
    </form>
</div>