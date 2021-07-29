<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="script/sidebar-menu.js"></script>
<script type="text/javascript" src="script/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="script/jquery.form.js"></script>
<script type="text/javascript" src="script/admin/admin.js"></script>
<script type="text/javascript" src="script/admin/catalog.js"></script>
<script type="text/javascript" src="script/admin/category.js"></script>
<link rel="stylesheet" href="template/style.css" type="text/css" />

</head>
<body>
	<div id="wrapper">
		<div id="header">
			<div class="logo">
				<a href="/"><img class="logoimg" src="/mvc_site/images/logo.png"/></a>
			</div>	
			<div class="smalcart">
				<strong>Товарів в кошику:</strong>	<?=$smal_cart['cart_count']?> шт.
				<br/>
				<strong>Варітсть:</strong>	<?=$smal_cart['cart_price']?> грн.	
				<br/>
				<a href='cart'>Оформити замовлення</a>
			</div>	
			<div class="menu">
				<?=$menu?>
			</div>	

		</div>
		
		<div id="sidebar">
		<div class="sidebarmenu">
			<h2 class="category-heading">Категорії</h2>
			<ul id="sidebarmenu1">
				<?=$category_list?>
			</ul>
		</div>
		</div>	
		<div id="content">
		
		