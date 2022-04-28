<?php 
	require_once "header.php";
	echo "<link rel='stylesheet' href='assets/css/cart.css'>";
	echo "<link rel='stylesheet' href='assets/css/featured-products.css'>";
?>

<? require('components/filter/template.php'); ?>

<main class="p-tb-64">
	<article class="container">
		<h1 class="basket-title">Избранные товары</h1>
		<div class="basket-block">
			<div class="basket-submenu">
				<?
					require('components/discount/template.php');
					require('components/left-nav/template.php');
				?>
			</div>
			<div class="basket-content">
				<div class="cart-white">
					<table class="basket-table-form">
						<tr>
							<th>Название</th>
							<th class="cost">Наличие</th>
							<th class="code">Код</th>
							<th>Стоимость</th>
							<th></th>
						</tr>
						<tr>
							<td class="table-name">Болт М8х1,25х65 крепления масляного насоса, передней крышки дв.УМЗ (УАЗ) ** / 200272-П29</td>
							<td class="cost"><p class="have">в наличии</p></td>
							<td class="code">11382</td>
							<td>19 р.</td>
							<td class="table-btn">
								<button class="table-btn-orn"><? require('assets/svg/icon-basket.php'); ?></button>
								<button><? require('assets/svg/basket-orn.php'); ?></button>
							</td>
						</tr>
						<tr>
							<td class="table-name">Блок двигателя ЗМЗ-4021 УАЗ с картером сцепления / 4021-1002009-30</td>
							<td class="cost"><p class="donthave">нет в наличии</p></td>
							<td class="code">10157</td>
							<td>75 319 р.</td>
							<td class="table-btn">
								<button class="table-btn-orn"><? require('assets/svg/icon-basket.php'); ?></button>
								<button><? require('assets/svg/basket-orn.php'); ?></button>
							</td>
						</tr>
					</table>
					<div class="basket-btn">
						<div class="basket-btn-item" id="basket-clear">
							<div class="basket-btn-icon"><? require('assets/svg/basket-orn.php'); ?></div>
							<p class="basket-btn-txt">Очистить корзину</p>
						</div>
						<div class="basket-btn-item" id="basket-like">
							<div class="basket-btn-icon"><? require('assets/svg/like-orn.php'); ?></div>
							<p class="basket-btn-txt">Отложить весь товар</p>
						</div>
						<div class="basket-btn-item" id="basket-print">
							<div class="basket-btn-icon"><? require('assets/svg/print.php'); ?></div>
							<p class="basket-btn-txt">Версия для печати</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</article>
</main>

<?php 
	echo "<script src='assets/js/cart.js'></script>";
	require_once "footer.php"; 
?>