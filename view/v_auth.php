﻿<!-- Шаблон авторизации --><div class = "headline">Authorization</div><? if ($error): ?>	<b style="color: red;">Вы неверно ввели логин или пароль!</b><? endif; ?><div class="center">    <form action = "index.php?c=user&act=auth" method = "post">	Name:<br/>	<input type = "text" name = "name" required/><br/>	Password:<br/>	<input type = "password" name = "password" required/><br/><br />        <input type = "submit" name = "login" value = "Log me in!" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        <input type = "submit" name = "reg" value = "Sign up" /><br/>    </form></div>