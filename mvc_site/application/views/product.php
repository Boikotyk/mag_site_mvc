<a href="catalog"><<< Повернутися</a>
<h1><?=$product['name']?></h1>

<div class="card_product">
	<div class="product_image">
		<img src="/mvc_site/uploads/<?=$product['image_url']?>" alt="<?=$product['name']?>" title="<?=$product['name']?>" />
	</div>
	<div class="product_desc">
		<?=$product['desc']?>					
	</div>
	<div class="price">
		<?=$product['price']?> грн.					
	</div>
	<div class="product_buy">
		
		<a href="/mvc_site/catalog?in-cart-product-id=<?=$product["id"]?>">Придбати</a>
		
	</div>
</div>