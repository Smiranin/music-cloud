<form id="registerBox form-horizontal" class="register" role="form">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Имя</label>
            <div class="col-sm-10">
                <input type="email" name="name" class="form-control" id="inputEmail3" placeholder="Имя">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="email"  class="form-control" id="inputPassword3" placeholder="Email">
            </div>
        </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Пароль</label>
        <div class="col-sm-10">
            <input type="password" name="pwd1" class="form-control" id="inputEmail3" placeholder="Пароль">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Повтор пароля</label>
        <div class="col-sm-10">
            <input type="password" name="pwd2" class="form-control" id="inputEmail3" placeholder="Повтор пароля">
        </div>
    </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="button"  class="btn btn-default" onclick="registerNewUser()">Зарегестрироваться</button>
            </div>
        </div>
</form>
