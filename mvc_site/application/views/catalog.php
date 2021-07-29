<h1><?=$TiteCategory?></h1>
<?

//представление каталога (страница каталога)
foreach($Items as $item)
		{
			if($i%4==0):?> 
			<div style="clear:both;"></div>
			<?endif;?>
			<div class="product">
				<div class="product_image">
					<a href="/mvc_site/<?=$item["category_url"]?>/<?=$item["product_url"]?>"><image src="/mvc_site/uploads/<?=$item["image_url"]?>" /></a>
				</div>
				<h2>
				<a href="/mvc_site/<?=$item["category_url"]?>/<?=$item["product_url"]?>"><?=$item["name"]?></a>
				</h2>
				<div class="product_price">
				<?=$item["price"]?> грн.
				</div>
				<div class="product_buy">
				
						<a href="/mvc_site/catalog?in-cart-product-id=<?=$item["id"]?>">Добавити</a>
					
				</div>
			
			</div>
		<?
			$i++;
		}
		
		echo $pager;
		?>
	
