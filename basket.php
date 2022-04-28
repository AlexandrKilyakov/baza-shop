<?php 
	require_once "header.php";
	echo "<link rel='stylesheet' href='assets/css/cart.css'>";
?>

<? require('components/filter/template.php'); ?>

<main class="p-tb-64">
	<article class="container">
		<h1 class="basket-title">Корзина</h1>
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
							<th class="code">Код</th>
							<th>Количество</th>
							<th>Цена, шт</th>
							<th class="cost">Сумма</th>
						</tr>
						<tr>
							<td>
								<p class="form-table-name">Болт М8х1,25х65 крепления масляного насоса, передней крышки дв.УМЗ (УАЗ) ** / 200272-П29</p>
								<div class="form-table-btn">
									<div class="table-btn">
										<div class="slider-btn-left"><? require('assets/svg/like-orn.php'); ?></div>
										<p class="table-btn-txt">Отложить товар</p>
									</div>
									<div class="table-btn">
										<div class="slider-btn-left"><? require('assets/svg/basket-orn.php'); ?></div>
										<p class="table-btn-txt">Удалить товар</p>
									</div>
								</div>
							</td>
							<td class="code">11382</td>
							<td>
								<div class="table-col">
									<div class="btn-minus">-</div>
									<input type="number" value="1" min="1" class="table-input">
									<div class="btn-plus">+</div>
								</div>
							</td>
							<td>19 р.</td>
							<td class="table-cost cost">19 р.</td>
						</tr>
						<tr>
							<td>
								<p class="form-table-name">Блок двигателя ЗМЗ-4021 УАЗ с картером сцепления / 4021-1002009-30</p>
								<div class="form-table-btn">
									<div class="table-btn">
										<div class="slider-btn-left"><? require('assets/svg/like-orn.php'); ?></div>
										<p class="table-btn-txt">Отложить товар</p>
									</div>
									<div class="table-btn">
										<div class="slider-btn-left"><? require('assets/svg/basket-orn.php'); ?></div>
										<p class="table-btn-txt">Удалить товар</p>
									</div>
								</div>
							</td>
							<td class="code">10157</td>
							<td>
								<div class="table-col">
									<div class="btn-minus">-</div>
									<input type="number" value="1" min="1" class="table-input">
									<div class="btn-plus">+</div>
								</div>
							</td>
							<td>75 319 р.</td>
							<td class="table-cost cost">75 319 р.</td>
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
					<div class="basket-form-end">
						<p class="form-descr">Нажимая на кнопку «Оформить заказ», вы закажете все запчасти, которые<br>в данный момент находятся в корзине. Если вы хотите заказать только часть позиций, пожалуйста, отложите ненужные позиции, воспользовавшись кнопкой «Отложить товар» под соответствующим товаром в списке.</p>
						<div class="checkout">
							<div class="total">
								<p class="total-txt">ИТОГО:</p>
								<p class="total-txt">75 338 р.</p>
							</div>
							<button id="checkout-btn" type="submit" class="btn-standart checkout-btn" disabled="disabled">Оформить заказ</button>
							<div class="agreement-block">
								<div class="agreement-rel">
									<input type="checkbox" id="agreement">
									<label for="agreement" id="agreement-label" class="bcg-contain"></label>
								</div>
								<label for="agreement-label" class="agreement-txt">Нажимая кнопку «Оформить заказ»,<br>я принимаю политику конфиденциальности</label>
							</div>
						</div>
					</div>
				</div>
				<div class="basket-info">
					<h2 class="basket-h2">Посчитать примерную стоимость доставки</h2>
					<div class="basket-flex">
						<div class="basket-items">
							<div class="basket-item">
								<p class="basket-item-txt">Регион</p>
								<select class="basket-list" name="region">
									<option value="name">Санкт-Петербург</option>
									<option value="cost">Москва</option>
									<option value="rating">Сочи</option>
								</select>
							</div>
							<div class="basket-item">
								<p class="basket-item-txt">Город</p>
								<select class="basket-list" name="city">
									<option value="name">Санкт-Петербург</option>
									<option value="cost">Москва</option>
									<option value="rating">Сочи</option>
								</select>
							</div>
						</div>
						<p class="basket-cart-txt">
							Обращаем Ваше внимание!<br>Вес посылки указан без учета веса упаковочных материалов.
						</p>
					</div>
				</div>
				<div class="cart-white">
					
					<table class="basket-table-form last-table">
						<tr>
							<th>Метод доставки</th>
							<th class="tar">Стоимость руб.</th>
						</tr>
						<tr>
							<td>Почта России (вес заказа - до 10 кг)</td>
							<td class="form-table-name last-table-txt">4177</td>
						</tr>
						<tr>
							<td>EMS-почта (вес заказа - до 30 кг)</td>
							<td class="form-table-name last-table-txt">По запросу</td>
						</tr>
						<tr>
							<td>Транспортная компания</td>
							<td class="form-table-name last-table-txt">По запросу</td>
						</tr>
						<tr>
							<td>ТК Dalli СДЭК</td>
							<td class="form-table-name last-table-txt">По запросу</td>
						</tr>
						<tr>
							<td>ТК Dalli Почта Росиии</td>
							<td class="form-table-name last-table-txt">По запросу</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</article>
</main>

<?php 
	echo "<script src='assets/js/cart.js'></script>";
	require_once "footer.php"; 
?>