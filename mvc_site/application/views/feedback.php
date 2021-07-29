<h1>Контакти</h1>
<?if($error){ echo $error;}?><br/>
<?
if($dislpay_form){?>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2645.7434225511183!2d24.562858115660344!3d48.46145227925056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4737242ce126a1d7%3A0x1d009c76847388e8!2z0LLRg9C70LjRhtGPINCh0LLQvtCx0L7QtNC4LCDQr9GA0LXQvNGH0LUsINCG0LLQsNC90L4t0KTRgNCw0L3QutGW0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1suk!2sua!4v1623010115901!5m2!1suk!2sua" width="700" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<div class="contact-message">
	<legend>Контактна форма</legend>

	<form action="" method="post">
	<input class="form-control" placeholder="Ім'я" type="text" name="fio" value="<?=$_REQUEST['fio']?>"/>
	<input class="form-control" placeholder="E-mail" type="text" name="email" value="<?=$_REQUEST['email']?>"/>
	<textarea class="form-control" placeholder="Повідомлення" name="message" rows="10"><?=$_REQUEST['message']?></textarea>
	<input type="submit" name="send" value="Надіслати">
	</form>
</div>
<?}
else{ echo $message; };
?>
