<div id="login">
    <div class="container">
        <form id="reg" action="PHPfuncs/action.php" method="post">
            <div class="alert alert-warning">
                <span class="close" onclick="$('.alert').hide();">×</span>
                Введены неверные данные
            </div>
            <div class="form-group row">
                <label for="inputHorizontalSuccess" class="col-sm-5 col-lg-3 col-form-label">Имя</label>
                <div class="col-sm-7 col-lg-8">
                    <input required type="text" name="name" class="form-control" >
                    <div class="form-control-feedback"></div>
                    <small class="form-text text-muted"></small>
                </div> 
            </div>
            <div id="emailblock" class="form-group row">
                <label for="inputHorizontalSuccess" class="col-sm-5 col-lg-3 col-form-label ">Email</label>
                <div class="col-sm-7 col-lg-8">
                    <input required type="email" name="email" id="email" class="form-control" >
                    <div id="emaildes" class="form-control-feedback"></div>
                </div>
            </div>
            <div id="passblock" class="form-group row">
                <label for="inputHorizontalSuccess" class="col-sm-5 col-lg-3 col-form-label">Пароль</label>
                <div class="col-sm-7 col-lg-8">
                    <input required type="password" name="pass" class="form-control" >
                    <small class="form-text text-muted">Пароль должен быть не короче 8 символов</small>
                </div>
            </div>
            <div id="pass_againblock" class="form-group row">
                <label for="inputHorizontalSuccess" class="col-sm-5 col-lg-3 col-form-label">Еще раз</label>
                <div class="col-sm-7 col-lg-8">
                    <input required type="password" id="pass_again" class="form-control" >
                    <small class="form-text text-muted">Введите пароль еще раз</small>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputHorizontalSuccess" class="col-sm-5 col-lg-3 col-form-label">Телефон</label>
                <div class="col-sm-7 col-lg-8">
                    <input required type="text"  name="phone" id="phone" class="form-control" maxlength="17">
                    <div class="form-control-feedback"></div>
                    <small class="form-text text-muted"></small>
                </div>
            </div>
            <div class="g-recaptcha" data-sitekey="6LdPcB4UAAAAAIrbdr1oTzmmYJX9VLp8vJoaP3nA"></div>
            <div class="text-danger" id="recaptchaError"></div><br>
            <div class="row">
                <button type="submit" class="btn btn-orange col-md-5 col-sm-5">Зарегистрироватся</button>&nbsp;&nbsp;
                <button type="reset" id="res" class="btn btn-orange col-md-5 col-sm-5">Сбросить</button>
            </div>
        </form>
    </div>
</div>