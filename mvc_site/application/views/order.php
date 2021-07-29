<h1>Оформлення замовлення</h1>
<a href="cart"><<< Назад до кошика</a>
<br/>
<?if($error){ echo $error;}?><br/>
<?
//echo $dislpay_form;
if($dislpay_form){?>
<?if($empty_cart):?>

		<form action="cart" method="post">
			<?=$big_cart;?>
			<input class="btn_cart" type="submit" name="refresh" value="Перерахувати"  style="margin-left:10px; margin-top:10px;" />
		</form>	

		<form action="order" method="post" style="margin-left:524px;">
			<input class="btn_cart" type="submit" name="order" value="Оформити замовлення" style=" height:30px; padding: 0px 20px;" />
		</form>

<?else:?>
Ваша корзина порожня!
<?endif;?>
<div class="contact-message">
	<legend>Оформлення замовлення</legend>

	<form action="" method="post">
	<input class="form-control" placeholder="П.І.Б." type="text" name="fio" value="<?=$_REQUEST['fio']?>"/>
	<input class="form-control" placeholder="E-mail" type="email" name="email" value="<?=$_REQUEST['email']?>"/>
	<input class="form-control" placeholder="Номер телефону" type="tel" name="phone" value="<?=$_REQUEST['phone']?>"/>
	<textarea class="form-control" placeholder="Адреса доставки" name="adres"><?=$_REQUEST['adres']?></textarea>
	<input type="submit" name="to_order" value="Оформити замовлення">
	</form>

</div>
<?}
else{ echo $message; };
?>
