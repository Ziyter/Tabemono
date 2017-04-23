<div id="login">
    <div class="container">
        <form action="PHPfuncs/action.php" method="post">
            <div class="form-group row">
                <label for="inputHorizontalSuccess" class="col-sm-5 col-lg-3 col-form-label">Имя</label>
                <div class="col-sm-7 col-lg-8">
                    <input required type="text" name="name" class="form-control" placeholder="name@example.com">
                    <div class="form-control-feedback">Success! You've done it.</div>
                    <small class="form-text text-muted">Example help text that remains unchanged.</small>
                </div>
            </div>
            <div id="emailblock" class="form-group row">
                <label for="inputHorizontalSuccess" class="col-sm-5 col-lg-3 col-form-label ">Email</label>
                <div class="col-sm-7 col-lg-8">
                    <input required type="email" name="email" id="email" class="form-control" >
                    <div id="emaildes" class="form-control-feedback"></div>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputHorizontalSuccess" class="col-sm-5 col-lg-3 col-form-label">Пароль</label>
                <div class="col-sm-7 col-lg-8">
                    <input required type="password" name="pass" class="form-control" >
                    <div class="form-control-feedback">Success! You've done it.</div>
                    <small class="form-text text-muted">Example help text that remains unchanged.</small>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputHorizontalSuccess" class="col-sm-5 col-lg-3 col-form-label">Еще раз</label>
                <div class="col-sm-7 col-lg-8">
                    <input required type="password" name="name" class="form-control" >
                    <div class="form-control-feedback">Success! You've done it.</div>
                    <small class="form-text text-muted">Example help text that remains unchanged.</small>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputHorizontalSuccess" class="col-sm-5 col-lg-3 col-form-label">Телефон</label>
                <div class="col-sm-7 col-lg-8">
                    <input required type="text"  name="phone" id="phone" class="form-control" maxlength="17">
                    <div class="form-control-feedback">Success! You've done it.</div>
                    <small class="form-text text-muted">Example help text that remains unchanged.</small>
                </div>
            </div>
            <button type="submit" class="btn btn-orange">Зарегистрироватся</button>&nbsp;&nbsp;
            <button type="reset" class="btn btn-orange">Сбросить</button>
        </form>
    </div>
</div>