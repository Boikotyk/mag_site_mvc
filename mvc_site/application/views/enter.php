<?
require_once('./application/models/auth.php');
//представление личного кабинета (страница личного кабинета)
if(!$unVisibleForm){?>
<h1>Вхід до особистого кабінету</h1>
<?}?>
<?

if(!$unVisibleForm){
echo $msg;
?>
<div class="contact-message">
  <legend>Авторизація</legend>
    <form action="enter" method="POST">
      <input  class="form-control" placeholder="Логін" type="text" name="login" value="<?=$login?>" /><br />
       <input class="form-control" placeholder="Пароль" type="text" name="pass" value="<?=$pass?>" /><br />
      <input class="sing" type="submit" value="Вхід" />
    </form>
  </form>
</div>
<?}
else{?>
<h1>Особистий кабінет користувача <?=$userName?></h1>
<a class="admin_sing" href="enter?out=1">Вийти з кабінету!</a>
<a class="admin_sing" href="admin">Зайти у адмін панель!</a>
<?}?>
