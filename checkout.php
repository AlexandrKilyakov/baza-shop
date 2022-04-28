<?php 
	require_once "header.php";
	echo "<link rel='stylesheet' href='assets/css/cart.css'>";
	echo "<link rel='stylesheet' href='assets/css/checkout.css'>";
?>

<? require('components/filter/template.php'); ?>

<main class="p-tb-64">
	<article class="container">
		<h1 class="basket-title">Оформление заказа</h1>
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
							<th>Количество</th>
							<th>Цена, шт</th>
							<th class="cost">Сумма</th>
						</tr>
						<tr>
							<td class="form-table-name">Болт М8х1,25х65 крепления масляного насоса, передней крышки дв.УМЗ (УАЗ) ** / 200272-П29</td>
							<td>1</td>
							<td>19 р.</td>
							<td class="table-cost cost">19 р.</td>
						</tr>
						<tr>
							<td class="form-table-name">Блок двигателя ЗМЗ-4021 УАЗ с картером сцепления / 4021-1002009-30</td>
							<td>1</td>
							<td>75 319 р.</td>
							<td class="table-cost cost">75 319 р.</td>
						</tr>
					</table>
					<div class="checkout-totle">
						<table class="total-table">
							<tr>
								<td class="tas">Сумма заказа:</td>
								<td>75 338 р.</td>
							</tr>
							<tr>
								<td class="tas">Доставка:</td>
								<td>0 р.</td>
							</tr>
							<tr>
								<td class="tas table-cost">ИТОГО:</td>
								<td class="table-cost">75 338 р.</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="cart-white">
					<h2 class="basket-h2">Регион и город доставки</h2>
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
				</div>
				<div class="cart-white">
					<h2 class="basket-h2">Адрес доставки</h2>
					<div class="address-checkout">
						<input id="address-checkout" type="radio" class="radio" checked="true">
						<label for="address-checkout" class="radio-label">
							<span class="label-txt">188910, г. Санкт-Петербург, ул. Главная, д.1, кв.1</span>
							<span class="label-items">
								<span class="label-item">
									<span class="label-item-name">Регион:</span>Санкт-Петербург
								</span>
								<span class="label-item">
									<span class="label-item-name">Город:</span>Санкт-Петербург
								</span>
							</span>
						</label>
					</div>
					<div class="address-new">
						<div class="radio-block">
							<input id="address-new" type="radio" class="radio">
							<label for="address-new" class="radio-label label-title">Новый адрес</label>
						</div>
						<div class="address-new-items">
							<dev class="address-new-form">
								<table class="address-new-form-table">
									<tr class="address-new-form-item">
										<td>
											<label for="form-name" class="address-new-form-name">Имя и Отчество:<span class="warning">*</span></label>
										</td>
										<td>
											<input disabled="disabled" type="text" id="form-name" placeholder="Иван Михайлович">
										</td>
									</tr>
									<tr class="address-new-form-item">
										<td>
											<label for="form-subname" class="address-new-form-name">Фамилия:<span class="warning">*</span></label>
										</td>
										<td>
											<input disabled="disabled" type="text" id="form-subname" placeholder="Иванов">
										</td>
									</tr>
									<tr class="address-new-form-item">
										<td>
											<label for="form-text" class="address-new-form-name">Полный адрес:<span class="warning">*</span></label>
										</td>
										<td>
											<textarea disabled="disabled" id="form-text" placeholder="188888, г. Москва, 3-я улица строителей, д.25., кв. 12"></textarea>
										</td>
									</tr>
								</table>
							</dev>
							<div class="address-new-item">
								<p class="address-new-item-txt">Введите <b>Имя и Отчество</b> (если Вы планируете пользоваться доставкой)</p>
								<p class="address-new-item-txt">Заполните поле адреса полностью, включая <b>ИНДЕКС</b> (это необходимо для Почты России)</p>
							</div>
						</div>
					</div>
				</div>
				<div class="cart-white">
					<h2 class="basket-h2">Способ доставки / Самовывоза</h2>
					<p class="way-txt">Обращаем Ваше внимание! Вес посылки указан без учета веса упаковочных материалов.</p>
					<div class="way-items">
						<div class="way-item">
							<div class="way-item-name way-item-name-no-cost">
								<div class="way-item-el">
									<div class="way-item-radio radio-block">
										<input type="radio" checked="checked" class="radio way-radio-up">
										<label class="radio-label">Самовывоз из магазина</label>
									</div>
									<div class="way-arrow"><? require('assets/svg/arrow-r.php'); ?></div>
								</div>
								<div class="way-item-child">
									<div class="way-item-child-item">
										<div class="way-item-radio radio-block">
											<input type="radio" class="radio way-radio-down">
											<label class="radio-label way-item-child-label">
												<span class="radio-down-name">Самостоятельный вывоз из Шушар, Пушкинская, 25, к.7</span>
												<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, Шушары, ул. Пушкинская, 25 к7. Товар будет собран и подготовлен для Вас на следующий рабочий день после согласования заказа к 15 часам.</span>
												<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
											</label>
										</div>
										<p class="way-cost">0 р.</p>
									</div>
									<div class="way-item-child-item">
										<div class="way-item-radio radio-block">
											<input type="radio" class="radio way-radio-down">
											<label class="radio-label way-item-child-label">
												<span class="radio-down-name">Самостоятельный вывоз с Непокорённых, 17</span>
												<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, пр. Непокорённых, 17. Товар будет собран и подготовлен для Вас на следующий рабочий день после согласования заказа к 15 часам.</span>
												<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
											</label>
										</div>
										<p class="way-cost">0 р.</p>
									</div>
									<div class="way-item-child-item">
										<div class="way-item-radio radio-block">
											<input type="radio" class="radio way-radio-down">
											<label class="radio-label way-item-child-label">
												<span class="radio-down-name">Самостоятельный вывоз со Стачек, 81-2</span>
												<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, пр. Стачек, 81, кор.2. Товар будет собран и подготовлен для Вас на следующий рабочий день после согласования заказа к 15 часам.</span>
												<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
											</label>
										</div>
										<p class="way-cost">0 р.</p>
									</div>
									<div class="way-item-child-item">
										<div class="way-item-radio radio-block">
											<input type="radio" class="radio way-radio-down">
											<label class="radio-label way-item-child-label">
												<span class="radio-down-name">Самостоятельный вывоз с Пражская 8 к1</span>
												<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, ул. Пражская 8 к 1 Товар соберут и отложат для Вас сразу после оплаты.</span>
												<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
											</label>
										</div>
										<p class="way-cost">0 р.</p>
									</div>
									<div class="way-item-child-item">
										<div class="way-item-radio radio-block">
											<input type="radio" class="radio way-radio-down">
											<label class="radio-label way-item-child-label">
												<span class="radio-down-name">Самостоятельный вывоз с Планерной 47 к1</span>
												<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, ул. Планерная, 47 к1. Товар будет собран и подготовлен для Вас на следующий рабочий день после согласования заказа к 15 часам.</span>
												<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
											</label>
										</div>
										<p class="way-cost">0 р.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="way-item">
							<div class="way-item-name">
								<div class="way-item-el">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-up">
										<label class="radio-label">Курьер</label>
									</div>
									<div class="way-arrow"><? require('assets/svg/arrow-r.php'); ?></div>
								</div>
								<p class="way-cost">250 р.</p>
							</div>
							<div class="way-item-child">
								<div class="way-item-child-item">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-down">
										<label class="radio-label way-item-child-label">
											<span class="radio-down-name">Самостоятельный вывоз из Шушар, Пушкинская, 25, к.7</span>
											<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, Шушары, ул. Пушкинская, 25 к7. Товар будет собран и подготовлен для Вас на следующий рабочий день после согласования заказа к 15 часам.</span>
											<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
										</label>
									</div>
									<p class="way-cost">0 р.</p>
								</div>
								<div class="way-item-child-item">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-down">
										<label class="radio-label way-item-child-label">
											<span class="radio-down-name">Самостоятельный вывоз с Непокорённых, 17</span>
											<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, пр. Непокорённых, 17. Товар будет собран и подготовлен для Вас на следующий рабочий день после согласования заказа к 15 часам.</span>
											<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
										</label>
									</div>
									<p class="way-cost">0 р.</p>
								</div>
								<div class="way-item-child-item">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-down">
										<label class="radio-label way-item-child-label">
											<span class="radio-down-name">Самостоятельный вывоз со Стачек, 81-2</span>
											<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, пр. Стачек, 81, кор.2. Товар будет собран и подготовлен для Вас на следующий рабочий день после согласования заказа к 15 часам.</span>
											<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
										</label>
									</div>
									<p class="way-cost">0 р.</p>
								</div>
								<div class="way-item-child-item">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-down">
										<label class="radio-label way-item-child-label">
											<span class="radio-down-name">Самостоятельный вывоз с Пражская 8 к1</span>
											<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, ул. Пражская 8 к 1 Товар соберут и отложат для Вас сразу после оплаты.</span>
											<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
										</label>
									</div>
									<p class="way-cost">0 р.</p>
								</div>
								<div class="way-item-child-item">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-down">
										<label class="radio-label way-item-child-label">
											<span class="radio-down-name">Самостоятельный вывоз с Планерной 47 к1</span>
											<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, ул. Планерная, 47 к1. Товар будет собран и подготовлен для Вас на следующий рабочий день после согласования заказа к 15 часам.</span>
											<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
										</label>
									</div>
									<p class="way-cost">0 р.</p>
								</div>
							</div>
						</div>
						<div class="way-item">
							<div class="way-item-name">
								<div class="way-item-el">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-up">
										<label class="radio-label">Самостоятельный вывоз из пунктов выдачи</label>
									</div>
									<div class="way-arrow"><? require('assets/svg/arrow-r.php'); ?></div>
								</div>
								<p class="way-cost">260 р.</p>
							</div>
							<div class="way-item-child">
								<div class="way-item-child-item">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-down">
										<label class="radio-label way-item-child-label">
											<span class="radio-down-name">Самостоятельный вывоз из Шушар, Пушкинская, 25, к.7</span>
											<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, Шушары, ул. Пушкинская, 25 к7. Товар будет собран и подготовлен для Вас на следующий рабочий день после согласования заказа к 15 часам.</span>
											<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
										</label>
									</div>
									<p class="way-cost">0 р.</p>
								</div>
								<div class="way-item-child-item">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-down">
										<label class="radio-label way-item-child-label">
											<span class="radio-down-name">Самостоятельный вывоз с Непокорённых, 17</span>
											<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, пр. Непокорённых, 17. Товар будет собран и подготовлен для Вас на следующий рабочий день после согласования заказа к 15 часам.</span>
											<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
										</label>
									</div>
									<p class="way-cost">0 р.</p>
								</div>
								<div class="way-item-child-item">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-down">
										<label class="radio-label way-item-child-label">
											<span class="radio-down-name">Самостоятельный вывоз со Стачек, 81-2</span>
											<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, пр. Стачек, 81, кор.2. Товар будет собран и подготовлен для Вас на следующий рабочий день после согласования заказа к 15 часам.</span>
											<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
										</label>
									</div>
									<p class="way-cost">0 р.</p>
								</div>
								<div class="way-item-child-item">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-down">
										<label class="radio-label way-item-child-label">
											<span class="radio-down-name">Самостоятельный вывоз с Пражская 8 к1</span>
											<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, ул. Пражская 8 к 1 Товар соберут и отложат для Вас сразу после оплаты.</span>
											<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
										</label>
									</div>
									<p class="way-cost">0 р.</p>
								</div>
								<div class="way-item-child-item">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-down">
										<label class="radio-label way-item-child-label">
											<span class="radio-down-name">Самостоятельный вывоз с Планерной 47 к1</span>
											<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, ул. Планерная, 47 к1. Товар будет собран и подготовлен для Вас на следующий рабочий день после согласования заказа к 15 часам.</span>
											<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
										</label>
									</div>
									<p class="way-cost">0 р.</p>
								</div>
							</div>
						</div>
						<div class="way-item">
							<div class="way-item-name">
								<div class="way-item-el">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-up">
										<label class="radio-label">Почта России (вес заказа - до 10 кг)</label>
									</div>
									<div class="way-arrow"><? require('assets/svg/arrow-r.php'); ?></div>
								</div>
								<p class="way-cost">366 р.</p>
							</div>
							<div class="way-item-child">
								<div class="way-item-child-item">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-down">
										<label class="radio-label way-item-child-label">
											<span class="radio-down-name">Самостоятельный вывоз из Шушар, Пушкинская, 25, к.7</span>
											<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, Шушары, ул. Пушкинская, 25 к7. Товар будет собран и подготовлен для Вас на следующий рабочий день после согласования заказа к 15 часам.</span>
											<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
										</label>
									</div>
									<p class="way-cost">0 р.</p>
								</div>
								<div class="way-item-child-item">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-down">
										<label class="radio-label way-item-child-label">
											<span class="radio-down-name">Самостоятельный вывоз с Непокорённых, 17</span>
											<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, пр. Непокорённых, 17. Товар будет собран и подготовлен для Вас на следующий рабочий день после согласования заказа к 15 часам.</span>
											<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
										</label>
									</div>
									<p class="way-cost">0 р.</p>
								</div>
								<div class="way-item-child-item">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-down">
										<label class="radio-label way-item-child-label">
											<span class="radio-down-name">Самостоятельный вывоз со Стачек, 81-2</span>
											<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, пр. Стачек, 81, кор.2. Товар будет собран и подготовлен для Вас на следующий рабочий день после согласования заказа к 15 часам.</span>
											<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
										</label>
									</div>
									<p class="way-cost">0 р.</p>
								</div>
								<div class="way-item-child-item">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-down">
										<label class="radio-label way-item-child-label">
											<span class="radio-down-name">Самостоятельный вывоз с Пражская 8 к1</span>
											<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, ул. Пражская 8 к 1 Товар соберут и отложат для Вас сразу после оплаты.</span>
											<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
										</label>
									</div>
									<p class="way-cost">0 р.</p>
								</div>
								<div class="way-item-child-item">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-down">
										<label class="radio-label way-item-child-label">
											<span class="radio-down-name">Самостоятельный вывоз с Планерной 47 к1</span>
											<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, ул. Планерная, 47 к1. Товар будет собран и подготовлен для Вас на следующий рабочий день после согласования заказа к 15 часам.</span>
											<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
										</label>
									</div>
									<p class="way-cost">0 р.</p>
								</div>
							</div>
						</div>
						<div class="way-item">
							<div class="way-item-name">
								<div class="way-item-el">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-up">
										<label class="radio-label">EMS-почта (вес заказа - до 30 кг)</label>
									</div>
									<div class="way-arrow"><? require('assets/svg/arrow-r.php'); ?></div>
								</div>
								<p class="way-cost">366 р.</p>
							</div>
							<div class="way-item-child">
								<div class="way-item-child-item">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-down">
										<label class="radio-label way-item-child-label">
											<span class="radio-down-name">Самостоятельный вывоз из Шушар, Пушкинская, 25, к.7</span>
											<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, Шушары, ул. Пушкинская, 25 к7. Товар будет собран и подготовлен для Вас на следующий рабочий день после согласования заказа к 15 часам.</span>
											<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
										</label>
									</div>
									<p class="way-cost">0 р.</p>
								</div>
								<div class="way-item-child-item">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-down">
										<label class="radio-label way-item-child-label">
											<span class="radio-down-name">Самостоятельный вывоз с Непокорённых, 17</span>
											<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, пр. Непокорённых, 17. Товар будет собран и подготовлен для Вас на следующий рабочий день после согласования заказа к 15 часам.</span>
											<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
										</label>
									</div>
									<p class="way-cost">0 р.</p>
								</div>
								<div class="way-item-child-item">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-down">
										<label class="radio-label way-item-child-label">
											<span class="radio-down-name">Самостоятельный вывоз со Стачек, 81-2</span>
											<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, пр. Стачек, 81, кор.2. Товар будет собран и подготовлен для Вас на следующий рабочий день после согласования заказа к 15 часам.</span>
											<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
										</label>
									</div>
									<p class="way-cost">0 р.</p>
								</div>
								<div class="way-item-child-item">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-down">
										<label class="radio-label way-item-child-label">
											<span class="radio-down-name">Самостоятельный вывоз с Пражская 8 к1</span>
											<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, ул. Пражская 8 к 1 Товар соберут и отложат для Вас сразу после оплаты.</span>
											<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
										</label>
									</div>
									<p class="way-cost">0 р.</p>
								</div>
								<div class="way-item-child-item">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-down">
										<label class="radio-label way-item-child-label">
											<span class="radio-down-name">Самостоятельный вывоз с Планерной 47 к1</span>
											<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, ул. Планерная, 47 к1. Товар будет собран и подготовлен для Вас на следующий рабочий день после согласования заказа к 15 часам.</span>
											<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
										</label>
									</div>
									<p class="way-cost">0 р.</p>
								</div>
							</div>
						</div>
						<div class="way-item">
							<div class="way-item-name">
								<div class="way-item-el">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-up">
										<label class="radio-label">Транспортная компания</label>
									</div>
									<div class="way-arrow"><? require('assets/svg/arrow-r.php'); ?></div>
								</div>
								<p class="way-cost">По запросу</p>
							</div>
							<div class="way-item-child">
								<div class="way-item-child-item">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-down">
										<label class="radio-label way-item-child-label">
											<span class="radio-down-name">Самостоятельный вывоз из Шушар, Пушкинская, 25, к.7</span>
											<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, Шушары, ул. Пушкинская, 25 к7. Товар будет собран и подготовлен для Вас на следующий рабочий день после согласования заказа к 15 часам.</span>
											<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
										</label>
									</div>
									<p class="way-cost">0 р.</p>
								</div>
								<div class="way-item-child-item">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-down">
										<label class="radio-label way-item-child-label">
											<span class="radio-down-name">Самостоятельный вывоз с Непокорённых, 17</span>
											<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, пр. Непокорённых, 17. Товар будет собран и подготовлен для Вас на следующий рабочий день после согласования заказа к 15 часам.</span>
											<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
										</label>
									</div>
									<p class="way-cost">0 р.</p>
								</div>
								<div class="way-item-child-item">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-down">
										<label class="radio-label way-item-child-label">
											<span class="radio-down-name">Самостоятельный вывоз со Стачек, 81-2</span>
											<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, пр. Стачек, 81, кор.2. Товар будет собран и подготовлен для Вас на следующий рабочий день после согласования заказа к 15 часам.</span>
											<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
										</label>
									</div>
									<p class="way-cost">0 р.</p>
								</div>
								<div class="way-item-child-item">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-down">
										<label class="radio-label way-item-child-label">
											<span class="radio-down-name">Самостоятельный вывоз с Пражская 8 к1</span>
											<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, ул. Пражская 8 к 1 Товар соберут и отложат для Вас сразу после оплаты.</span>
											<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
										</label>
									</div>
									<p class="way-cost">0 р.</p>
								</div>
								<div class="way-item-child-item">
									<div class="way-item-radio radio-block">
										<input type="radio" class="radio way-radio-down">
										<label class="radio-label way-item-child-label">
											<span class="radio-down-name">Самостоятельный вывоз с Планерной 47 к1</span>
											<span class="radio-down-txt">Забрать товар можно в пункте выдачи по адресу город Санкт-Петербург, ул. Планерная, 47 к1. Товар будет собран и подготовлен для Вас на следующий рабочий день после согласования заказа к 15 часам.</span>
											<span class="radio-down-link"><a href="/" class="standart-btn discount-btn">Магазин на карте<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a></span>
										</label>
									</div>
									<p class="way-cost">0 р.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="cart-white radio-only">
					<h2 class="basket-h2">Способ оплаты</h2>
					<div class="payment-checkout">
						<input id="online-payment" type="radio" class="radio" checked="true">
						<label for="online-payment" class="radio-label way-item-child-label">
							<span class="radio-down-name">Онлайн-оплата</span>
							<span class="radio-down-txt">Оплата банковской картой Visa, Mastercard, МИР.
							Через платёжные терминалы, банковским платежом, Яндекс.Деньгами, WebMoney, Qiwi кошельком.</span>
						</label>
					</div>
					<div class="payment-checkout payment-checkout-item">
						<div class="payment-checkout-flex">
							<input id="lic-payment" type="radio" class="radio">
							<label for="lic-payment" class="radio-label way-item-child-label">
								<span class="radio-down-name">Через Личный кабинет Сбербанка России</span>
								<span class="radio-down-txt">Перевод оплаты онлайн через Личный кабинет Сберегательного банка РФ</span>
							</label>
						</div>
						<div class="payment-checkout-txt">
							<p class="warning payment-checkout-title">Обратите внимание!</p>
							<p>За переводы денежных средств через систему CбербанкОнлайн <b>взимается комиссия в размере 1%</b> (один процент) от суммы перевода. При оплате за товар через Личный кабинет Сберегательного банка РФ просим при выборе получателя платежа игнорировать регион «Ставропольский край г. Ставрополь» - данные <b>РЕКВИЗИТЫ ЯВЛЯЮТСЯ КОРРЕКТНЫМИ!</b></p>
						</div>
					</div>
					<div class="payment-checkout">
						<input id="account-payment" type="radio" class="radio">
						<label for="account-payment" class="radio-label way-item-child-label">
							<span class="radio-down-name">Оплата по счету</span>
							<span class="radio-down-txt">Оплата в отделениях банков РФ по платёжному поручению</span>
						</label>
					</div>
				</div>
				<div class="checkout-end">
					<div class="checkout-end-text">
						<p class="checkout-end-txt">Комментарии к заказу:</p>
						<textarea name="comment" class="checkout-end-textarea" placeholder="Введите текст"></textarea>
					</div>
					<div class="checkout-end-items">
						<div class="checkout-end-item">
							<div class="checkout-end-item-input">
								<input id="sms" type="checkbox" class="checkout-end-item-check">
								<label for="sms" class="checkout-end-item-label"></label>
							</div>
							<div class="checkout-end-item-txt">
								<p class="checkout-end-item-name">Уведомлять меня о статусах моих заказов по СМС</p>
								<p>Сервис SMS уведомлений предоставляется "как есть".
								 Мы не принимаем на себя никакой ответственности за задержку или недоставку SMS сообщений.</p>
							</div>
						</div>
						<div class="checkout-end-item">
							<div class="checkout-end-item-input">
								<input id="count" type="checkbox" class="checkout-end-item-check">
								<label for="count" class="checkout-end-item-label"></label>
							</div>
							<div class="checkout-end-item-txt">
								<p class="checkout-end-item-name">Списать баллы при оплате</p>
								<p class="checkout-end-item-count"><span>Доступно баллов:</span>0</p>
								<p>Подробнее о дисконтных программах магазина "База все для УАЗА", можно прочитать в <span class="txt-link"><a href="">разделе "Дисконт"</a></span>.</p>
							</div>
						</div>
					</div>
					<div class="checkout-btn-end">
						<button id="checkout-btn" type="submit" class="btn-standart checkout-btn" disabled="disabled">Оформить заказ</button>
						<div class="agreement-block">
							<div class="agreement-rel">
								<input type="checkbox" id="agreement">
								<label for="agreement" id="agreement-label" class="bcg-contain"></label>
							</div>
							<label for="agreement-label" class="agreement-txt">Нажимая кнопку «Оформить заказ», я принимаю политику конфиденциальности</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</article>
</main>

<?php 
	echo "<script src='assets/js/cart.js'></script>";
	echo "<script src='assets/js/checkout.js'></script>";
	require_once "footer.php"; 
?>