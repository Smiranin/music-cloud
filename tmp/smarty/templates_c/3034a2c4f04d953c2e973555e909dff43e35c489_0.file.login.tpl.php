<?php
/* Smarty version 3.1.30-dev/18, created on 2016-01-25 13:53:45
  from "C:\xampp\htdocs\musicCloud\views\default\login.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.30-dev/18',
  'unifunc' => 'content_56a61ad99a1cb9_85992052',
  'file_dependency' => 
  array (
    '3034a2c4f04d953c2e973555e909dff43e35c489' => 
    array (
      0 => 'C:\\xampp\\htdocs\\musicCloud\\views\\default\\login.tpl',
      1 => 1453726423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56a61ad99a1cb9_85992052 ($_smarty_tpl) {
?>
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
<?php }
}
