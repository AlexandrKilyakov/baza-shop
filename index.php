<?php 
	require_once "header.php";
	echo "<link rel='stylesheet' href='assets/css/style.css'>";
	echo "<link rel='stylesheet' href='assets/libs/slider/standart/style.css'>";
	echo "<link rel='stylesheet' href='assets/libs/slider/step/style.css'>";
?>

<section id="slider-baner" class="p-tb-64">
	<article class="container">
		<div class="slider-baner-wrap slider-wrap">
			<div class="slider-standart slider-baner-slider">
				<div class="slide-standart bcg-cover slider-baner-slide p-tb-64" style="background-image: url(assets/img/helicopter.png);">
					<h1 class="slider-baner-title">Запчасти УАЗ: интернет-магазин</h1>
					<p class="slider-baner-txt">Вы можете заказать в нашем интернет-магазине практически любые запчасти для УАЗ, а также детали для тюнинга УАЗ и офф-роуда ведущих российских и зарубежных производителей.</p>
				</div>
				<div class="slide-standart bcg-cover slider-baner-slide p-tb-64" style="background-image: url(assets/img/helicopter.png);">
					<h2 class="slider-baner-title">Официальный дилер автомобильных заводов-производителей: УАЗ, ЗМЗ, АвтоДеталь-Сервис, ПЕКАР</h2>
				</div>
				<div class="slide-standart bcg-cover slider-baner-slide p-tb-64" style="background-image: url(assets/img/helicopter.png);">
					<h2 class="slider-baner-title">Осуществляем доставку по всей России</h2>
				</div>
			</div>
			<div class="slider-nav slider-baner-btn">
				<div class="slider-btn-left"><? require('assets/svg/arrow-wl.php'); ?></div>
				<div class="slider-btn-right"><? require('assets/svg/arrow-wr.php'); ?></div>
			</div>
			<div class="slider-timer"></div>
		</div>
	</article>
</section>

<section id="catalog-items" class="p-tb-64">
	<article class="container">
		<div class="catalog-items-up">
			<h2 class="catalog-items-h2 standart-h2">Каталог товаров</h2>
			<a href="/" class="standart-btn">Перейти в каталог<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a>
		</div>
		<div class="catalog-items-down">
			<a href="/" class="catalog-item catalog-std">
				<img src="assets/img/engine.png" alt="" class="catalog-item-ava">
				<div class="catalog-item-title flex-fit">
					<p class="catalog-item-num">01/</p>
					<p class="pcatalog-item-text">Двигатели</p>
				</div>
				<div class="catalog-std-btn">Посмотреть подкатегории<span class="catalog-std-btn-arrow"><? require('assets/svg/arrow-wr.php'); ?></span></div>
			</a>
			<a href="/" class="catalog-item catalog-std">
				<img src="assets/img/cooling.png" alt="" class="catalog-item-ava">
				<div class="catalog-item-title flex-fit">
					<p class="catalog-item-num">02/</p>
					<p class="pcatalog-item-text">Питание, охлаждение, впуск</p>
				</div>
				<div class="catalog-std-btn">Посмотреть подкатегории<span class="catalog-std-btn-arrow"><? require('assets/svg/arrow-wr.php'); ?></span></div>
			</a>
			<a href="/" class="catalog-item catalog-std">
				<img src="assets/img/transmission.png" alt="" class="catalog-item-ava">
				<div class="catalog-item-title flex-fit">
					<p class="catalog-item-num">03/</p>
					<p class="pcatalog-item-text">Трансмиссия</p>
				</div>
				<div class="catalog-std-btn">Посмотреть подкатегории<span class="catalog-std-btn-arrow"><? require('assets/svg/arrow-wr.php'); ?></span></div>
			</a>
			<a href="/" class="catalog-item catalog-std">
				<img src="assets/img/chassis-2.jpg" alt="" class="catalog-item-ava">
				<div class="catalog-item-title flex-fit">
					<p class="catalog-item-num">04/</p>
					<p class="pcatalog-item-text">Ходовая часть</p>
				</div>
				<div class="catalog-std-btn">Посмотреть подкатегории<span class="catalog-std-btn-arrow"><? require('assets/svg/arrow-wr.php'); ?></span></div>
			</a>
			<a href="/" class="catalog-item catalog-std">
				<img src="assets/img/control-systems.png" alt="" class="catalog-item-ava">
				<div class="catalog-item-title flex-fit">
					<p class="catalog-item-num">05/</p>
					<p class="pcatalog-item-text">Системы управления</p>
				</div>
				<div class="catalog-std-btn">Посмотреть подкатегории<span class="catalog-std-btn-arrow"><? require('assets/svg/arrow-wr.php'); ?></span></div>
			</a>
			<a href="/" class="catalog-item catalog-std">
				<img src="assets/img/electrical-equipment.png" alt="" class="catalog-item-ava">
				<div class="catalog-item-title flex-fit">
					<p class="catalog-item-num">06/</p>
					<p class="pcatalog-item-text">Электрооборудование</p>
				</div>
				<div class="catalog-std-btn">Посмотреть подкатегории<span class="catalog-std-btn-arrow"><? require('assets/svg/arrow-wr.php'); ?></span></div>
			</a>
			<a href="/" class="catalog-item catalog-std">
				<img src="assets/img/frame.png" alt="" class="catalog-item-ava">
				<div class="catalog-item-title flex-fit">
					<p class="catalog-item-num">07/</p>
					<p class="pcatalog-item-text">Кузовные детали.<br>Кузова УАЗ. Рама.</p>
				</div>
				<div class="catalog-std-btn">Посмотреть подкатегории<span class="catalog-std-btn-arrow"><? require('assets/svg/arrow-wr.php'); ?></span></div>
			</a>
			<a href="/" class="catalog-item catalog-std">
				<img src="assets/img/disks.png" alt="" class="catalog-item-ava">
				<div class="catalog-item-title flex-fit">
					<p class="catalog-item-num">08/</p>
					<p class="pcatalog-item-text">Диски колёсные и шины</p>
				</div>
				<div class="catalog-std-btn">Посмотреть подкатегории<span class="catalog-std-btn-arrow"><? require('assets/svg/arrow-wr.php'); ?></span></div>
			</a>
			<a href="/" class="catalog-item catalog-std">
				<img src="assets/img/off-road-equipment.png" alt="" class="catalog-item-ava">
				<div class="catalog-item-title flex-fit">
					<p class="catalog-item-num">09/</p>
					<p class="pcatalog-item-text">Дополнительное<br>и внедорожное оборудование, аксессуары</p>
				</div>
				<div class="catalog-std-btn">Посмотреть подкатегории<span class="catalog-std-btn-arrow"><? require('assets/svg/arrow-wr.php'); ?></span></div>
			</a>
			<a href="/" class="catalog-item catalog-std">
				<img src="assets/img/essential-goods.png" alt="" class="catalog-item-ava">
				<div class="catalog-item-title flex-fit">
					<p class="catalog-item-num">10/</p>
					<p class="pcatalog-item-text">Товары первой необходимости</p>
				</div>
				<div class="catalog-std-btn">Посмотреть подкатегории<span class="catalog-std-btn-arrow"><? require('assets/svg/arrow-wr.php'); ?></span></div>
			</a>
		</div>
	</article>
</section>

<section id="program" class="p-tb-64 bcg-light">
	<article class="container">
		<div class="program-item">
			<div class="program-pro">
				<div class="program-pro-txt">-1%</div>
				<div class="program-pro-txt">-7%</div>
			</div>
			<div class="program-text">
				<h2 class="fake-h1 program-title">Дисконтная программа «Знак почета»</h2>
				<p class="program-txt">Зарегистрированный пользователь нашего магазина BAZASHOP.RU получает скидки на все автозапчасти УАЗ и внедорожное оборудование, приобретаемые в нашем интернет-магазине (bazashop.ru) в размере от 1% до 7%.</p>
				<a href="/" class="standart-btn">Подробнее о программе<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a>
			</div>
		</div>
	</article>
</section>

<section id="special-offers" class="p-tb-64 bcg-light slider-step-block">
	<article class="special-offers-fon">
		<div class="container special-offers-title flex-start">
			<div class="special-offers-left">
				<h2 class="special-offers-h2 standart-h2">Спецпредложения</h2>
				<a href="/" class="standart-btn">Посмотреть все<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a>
			</div>
			<div class="special-offers-right">				
				<div class="slider-nav">
					<div class="slider-btn-left"><? require('assets/svg/arrow-wl.php'); ?></div>
					<div class="slider-btn-right"><? require('assets/svg/arrow-wr.php'); ?></div>
				</div>
			</div>
		</div>
	</article>
	<article class="container">
		<div class="slider-steps flex-start">
			<a href="/" class="slider-step special-offers-item">
				<div class="special-offers-title-abs flex-c-sb">
					<div class="special-offers-title-left">Спецпредложение</div>
					<div class="special-offers-title-right">-10%</div>
				</div>
				<div class="special-offers-ava bcg-cover" style="background-image: url(assets/img/pad.png);"></div>
				<div class="special-offers-har">
					<div class="special-offers-count">
						<div class="special-offers-count-now">54 р.</div>
						<div class="special-offers-count-old">60 р.</div>
					</div>
					<div class="special-offers-code">Код: 34318</div>
				</div>
				<p class="special-offers-txt">Прокладка трубки подачи масла<br>на турбокомпрессор ГАЗель Бизнес дв.Cummins ISF 2.8 (медное кольцо) / # 5291706F (Cummins)</p>
			</a>
			<a href="/" class="slider-step special-offers-item">
				<div class="special-offers-title-abs flex-c-sb">
					<div class="special-offers-title-left">Спецпредложение</div>
					<div class="special-offers-title-right">-10%</div>
				</div>
				<div class="special-offers-ava bcg-cover" style="background-image: url(assets/img/pad.png);"></div>
				<div class="special-offers-har">
					<div class="special-offers-count">
						<div class="special-offers-count-now">54 р.</div>
						<div class="special-offers-count-old">60 р.</div>
					</div>
					<div class="special-offers-code">Код: 34318</div>
				</div>
				<p class="special-offers-txt">Прокладка трубки подачи масла<br>на турбокомпрессор ГАЗель Бизнес дв.Cummins ISF 2.8 (медное кольцо) / # 5291706F (Cummins)</p>
			</a>
			<a href="/" class="slider-step special-offers-item">
				<div class="special-offers-title-abs flex-c-sb">
					<div class="special-offers-title-left">Спецпредложение</div>
					<div class="special-offers-title-right">-10%</div>
				</div>
				<div class="special-offers-ava bcg-cover" style="background-image: url(assets/img/pad.png);"></div>
				<div class="special-offers-har">
					<div class="special-offers-count">
						<div class="special-offers-count-now">54 р.</div>
						<div class="special-offers-count-old">60 р.</div>
					</div>
					<div class="special-offers-code">Код: 34318</div>
				</div>
				<p class="special-offers-txt">Прокладка трубки подачи масла<br>на турбокомпрессор ГАЗель Бизнес дв.Cummins ISF 2.8 (медное кольцо) / # 5291706F (Cummins)</p>
			</a>
			<a href="/" class="slider-step special-offers-item">
				<div class="special-offers-title-abs flex-c-sb">
					<div class="special-offers-title-left">Спецпредложение</div>
					<div class="special-offers-title-right">-10%</div>
				</div>
				<div class="special-offers-ava bcg-cover" style="background-image: url(assets/img/pad.png);"></div>
				<div class="special-offers-har">
					<div class="special-offers-count">
						<div class="special-offers-count-now">54 р.</div>
						<div class="special-offers-count-old">60 р.</div>
					</div>
					<div class="special-offers-code">Код: 34318</div>
				</div>
				<p class="special-offers-txt">Прокладка трубки подачи масла<br>на турбокомпрессор ГАЗель Бизнес дв.Cummins ISF 2.8 (медное кольцо) / # 5291706F (Cummins)</p>
			</a>
			<a href="/" class="slider-step special-offers-item">
				<div class="special-offers-title-abs flex-c-sb">
					<div class="special-offers-title-left">Спецпредложение</div>
					<div class="special-offers-title-right">-10%</div>
				</div>
				<div class="special-offers-ava bcg-cover" style="background-image: url(assets/img/pad.png);"></div>
				<div class="special-offers-har">
					<div class="special-offers-count">
						<div class="special-offers-count-now">54 р.</div>
						<div class="special-offers-count-old">60 р.</div>
					</div>
					<div class="special-offers-code">Код: 34318</div>
				</div>
				<p class="special-offers-txt">Прокладка трубки подачи масла<br>на турбокомпрессор ГАЗель Бизнес дв.Cummins ISF 2.8 (медное кольцо) / # 5291706F (Cummins)</p>
			</a>
			<a href="/" class="slider-step special-offers-item">
				<div class="special-offers-title-abs flex-c-sb">
					<div class="special-offers-title-left">Спецпредложение</div>
					<div class="special-offers-title-right">-10%</div>
				</div>
				<div class="special-offers-ava bcg-cover" style="background-image: url(assets/img/pad.png);"></div>
				<div class="special-offers-har">
					<div class="special-offers-count">
						<div class="special-offers-count-now">54 р.</div>
						<div class="special-offers-count-old">60 р.</div>
					</div>
					<div class="special-offers-code">Код: 34318</div>
				</div>
				<p class="special-offers-txt">Прокладка трубки подачи масла<br>на турбокомпрессор ГАЗель Бизнес дв.Cummins ISF 2.8 (медное кольцо) / # 5291706F (Cummins)</p>
			</a>
			<a href="/" class="slider-step special-offers-item">
				<div class="special-offers-title-abs flex-c-sb">
					<div class="special-offers-title-left">Спецпредложение</div>
					<div class="special-offers-title-right">-10%</div>
				</div>
				<div class="special-offers-ava bcg-cover" style="background-image: url(assets/img/pad.png);"></div>
				<div class="special-offers-har">
					<div class="special-offers-count">
						<div class="special-offers-count-now">54 р.</div>
						<div class="special-offers-count-old">60 р.</div>
					</div>
					<div class="special-offers-code">Код: 34318</div>
				</div>
				<p class="special-offers-txt">Прокладка трубки подачи масла<br>на турбокомпрессор ГАЗель Бизнес дв.Cummins ISF 2.8 (медное кольцо) / # 5291706F (Cummins)</p>
			</a>
			<a href="/" class="slider-step special-offers-item">
				<div class="special-offers-title-abs flex-c-sb">
					<div class="special-offers-title-left">Спецпредложение</div>
					<div class="special-offers-title-right">-10%</div>
				</div>
				<div class="special-offers-ava bcg-cover" style="background-image: url(assets/img/pad.png);"></div>
				<div class="special-offers-har">
					<div class="special-offers-count">
						<div class="special-offers-count-now">54 р.</div>
						<div class="special-offers-count-old">60 р.</div>
					</div>
					<div class="special-offers-code">Код: 34318</div>
				</div>
				<p class="special-offers-txt">Прокладка трубки подачи масла<br>на турбокомпрессор ГАЗель Бизнес дв.Cummins ISF 2.8 (медное кольцо) / # 5291706F (Cummins)</p>
			</a>
			<a href="/" class="slider-step special-offers-item">
				<div class="special-offers-title-abs flex-c-sb">
					<div class="special-offers-title-left">Спецпредложение</div>
					<div class="special-offers-title-right">-10%</div>
				</div>
				<div class="special-offers-ava bcg-cover" style="background-image: url(assets/img/pad.png);"></div>
				<div class="special-offers-har">
					<div class="special-offers-count">
						<div class="special-offers-count-now">54 р.</div>
						<div class="special-offers-count-old">60 р.</div>
					</div>
					<div class="special-offers-code">Код: 34318</div>
				</div>
				<p class="special-offers-txt">Прокладка трубки подачи масла<br>на турбокомпрессор ГАЗель Бизнес дв.Cummins ISF 2.8 (медное кольцо) / # 5291706F (Cummins)</p>
			</a>
		</div>
	</article>
</section>

<section id="promotions-news" class="p-tb-64 slider-step-block">
	<article class="container promotions-news-title special-offers-title flex-start">
		<div class="special-offers-left">
			<h2 class="special-offers-h2 standart-h2">Акции и новости</h2>
			<a href="/" class="standart-btn">Все акции<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a>
		</div>
		<div class="special-offers-right">				
			<div class="slider-nav">
				<div class="slider-btn-left"><? require('assets/svg/arrow-wl.php'); ?></div>
				<div class="slider-btn-right"><? require('assets/svg/arrow-wr.php'); ?></div>
			</div>
		</div>
	</article>
	<article class="container promotions-news-slider">
		<div class="slider-steps flex-start">
			<div class="slider-step promotions-news-item">
				<div class="promotions-news-descr">
					<div class="promotions-news-descr-up">
						<p class="promotions-news-date">15.02.2022</p>
						<h3 class="promotions-news-h3">Скидка 10% комплекты шкворней MetalPart по всей России</h3>
					</div>
					<a href="/" class="standart-btn promotions-news-btn">Подробнее<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a>
				</div>
				<img src="assets/img/promotions-and-news-1.png" class="promotions-news-ava">
			</div>
			<div class="slider-step promotions-news-item">
				<div class="promotions-news-descr">
					<div class="promotions-news-descr-up">
						<p class="promotions-news-date">15.02.2022</p>
						<h3 class="promotions-news-h3">Скидка 10% комплекты шкворней MetalPart по всей России</h3>
					</div>
					<a href="/" class="standart-btn promotions-news-btn">Подробнее<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a>
				</div>
				<img src="assets/img/promotions-and-news-1.png" class="promotions-news-ava">
			</div>
			<div class="slider-step promotions-news-item">
				<div class="promotions-news-descr">
					<div class="promotions-news-descr-up">
						<p class="promotions-news-date">15.02.2022</p>
						<h3 class="promotions-news-h3">Скидка 10% комплекты шкворней MetalPart по всей России</h3>
					</div>
					<a href="/" class="standart-btn promotions-news-btn">Подробнее<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a>
				</div>
				<img src="assets/img/promotions-and-news-1.png" class="promotions-news-ava">
			</div>
			<div class="slider-step promotions-news-item">
				<div class="promotions-news-descr">
					<div class="promotions-news-descr-up">
						<p class="promotions-news-date">15.02.2022</p>
						<h3 class="promotions-news-h3">Скидка 10% комплекты шкворней MetalPart по всей России</h3>
					</div>
					<a href="/" class="standart-btn promotions-news-btn">Подробнее<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a>
				</div>
				<img src="assets/img/promotions-and-news-1.png" class="promotions-news-ava">
			</div>
			<div class="slider-step promotions-news-item">
				<div class="promotions-news-descr">
					<div class="promotions-news-descr-up">
						<p class="promotions-news-date">15.02.2022</p>
						<h3 class="promotions-news-h3">Скидка 10% комплекты шкворней MetalPart по всей России</h3>
					</div>
					<a href="/" class="standart-btn promotions-news-btn">Подробнее<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a>
				</div>
				<img src="assets/img/promotions-and-news-1.png" class="promotions-news-ava">
			</div>
			<div class="slider-step promotions-news-item">
				<div class="promotions-news-descr">
					<div class="promotions-news-descr-up">
						<p class="promotions-news-date">15.02.2022</p>
						<h3 class="promotions-news-h3">Скидка 10% комплекты шкворней MetalPart по всей России</h3>
					</div>
					<a href="/" class="standart-btn promotions-news-btn">Подробнее<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a>
				</div>
				<img src="assets/img/promotions-and-news-1.png" class="promotions-news-ava">
			</div>
			<div class="slider-step promotions-news-item">
				<div class="promotions-news-descr">
					<div class="promotions-news-descr-up">
						<p class="promotions-news-date">15.02.2022</p>
						<h3 class="promotions-news-h3">Скидка 10% комплекты шкворней MetalPart по всей России</h3>
					</div>
					<a href="/" class="standart-btn promotions-news-btn">Подробнее<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a>
				</div>
				<img src="assets/img/promotions-and-news-1.png" class="promotions-news-ava">
			</div>
			<div class="slider-step promotions-news-item">
				<div class="promotions-news-descr">
					<div class="promotions-news-descr-up">
						<p class="promotions-news-date">15.02.2022</p>
						<h3 class="promotions-news-h3">Скидка 10% комплекты шкворней MetalPart по всей России</h3>
					</div>
					<a href="/" class="standart-btn promotions-news-btn">Подробнее<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a>
				</div>
				<img src="assets/img/promotions-and-news-1.png" class="promotions-news-ava">
			</div>
			<div class="slider-step promotions-news-item">
				<div class="promotions-news-descr">
					<div class="promotions-news-descr-up">
						<p class="promotions-news-date">15.02.2022</p>
						<h3 class="promotions-news-h3">Скидка 10% комплекты шкворней MetalPart по всей России</h3>
					</div>
					<a href="/" class="standart-btn promotions-news-btn">Подробнее<span class="standart-btn-arrow"><? require('assets/svg/arrow-r.php'); ?></span></a>
				</div>
				<img src="assets/img/promotions-and-news-1.png" class="promotions-news-ava">
			</div>
		</div>
	</article>
</section>

<section id="delivery" class="p-tb-64 bcg-light slider-step-block">
	<article class="special-offers-fon">
		<div class="container delivery-items">
			<h2 class="delivery-h2">Доставка</h2>
		</div>
	</article>
	<article class="container delivery-flex flex-c-sb">
		<div class="delivery-item-main catalog-std bcg-cover flex-col-center">
			<h3 class="delivery-h3 fake-h2">Самовывоз</h3>
			<p class="delivery-item-txt">У нас 6 магазинов розничной и оптовой торговли запчастями, во многих районах Санкт-Петербурга</p>
			<a href="" class="catalog-std-btn">Список магазинов<span class="catalog-std-btn-arrow"><? require('assets/svg/arrow-wr.php'); ?></span></a>
		</div>
		<div class="delivery-item-child">
			<div class="delivery-child-item bcg-contain delivery-item-up">
				<h3 class="delivery-child-h3 fake-h2">Доставка<br>по Санкт-Петербургу</h3>
				<p class="delivery-txt">Бесплатно при заказе от 10 000 рублей</p>
			</div>
			<div class="delivery-child-item bcg-contain delivery-item-down">
				<h3 class="delivery-child-h3 fake-h2">Доставка по России</h3>
				<p class="delivery-txt">Мы сотрудничаем со всеми транспортными компаниями</p>
			</div>
		</div>
	</article>
</section>

<?php 
	echo "<script src='assets/libs/slider/standart/script.js'></script>";
	echo "<script src='assets/libs/slider/step/script.js'></script>";
	require_once "footer.php";
?>