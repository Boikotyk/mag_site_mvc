<h2>Корзина</h2>

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