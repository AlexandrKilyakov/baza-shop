<?php 
	require_once "header.php";
	echo "<link rel='stylesheet' href='assets/css/catalog.css'>";
?>

<? require('components/filter/template.php'); ?>

<section id="show-catalog" class="p-tb-64">
	<article class="container">
		<h1 class="show-catalog-title">
			<?
				// фильтруем каталог
				for($i = 0; $i < count($filter_id); $i++) {
					$catalog = getCatalog($catalog, $filter_id[$i]);
					$catalog = getCatalogChild($catalog, $filter_id[$i]);
				}

				// Записываем категорию каталога (родительский элемент)
				$categories = $catalog['name'] ? $catalog['name'] : 'Товары первой необходимости';

				echo $categories;

				// Если есть фильтр по авто (выбран), то дописываем его
				if($_GET['filter']) {
					echo ' на ' . $filter[$_GET['filter']]['name'];
				}

				$get_filter = '';

				// Получаем дочерние эллементы
				$catalog = getCatalog($catalog, $filter_id[count($filter_id) - 1]);

				// формируем основу для get пораметра, который бцдет записан в ссылках каталога
				for($i = 0; $i < count($filter_id); $i++) {
					$get_filter .= '.' . strval($filter_id[$i]);
				}

				// Избавляемся от первой точки
				$get_filter = ltrim($get_filter, '.');
			?>	
		</h1>
		<div class="show-catalog-flex">
			<div class="show-catalog-nav">
				<!-- Выводим первый уровень -->
				<? for($i = 0; $i < count($catalog); $i++) { ?>
					<div class="show-catalog-nav-item now-lvl-1">
						<a href="<?=addGet('catalog_id', $get_filter.'.'.$i); ?>" class="flex-c-s mb-24">
							<? if($catalog[$i]['code']) { ?>
							<p class="show-catalog-nav-code"><?=$catalog[$i]['code'] ?></p>
							<? } ?>
							<p class="show-catalog-nav-name lvl-name-1"><?=$catalog[$i]['name'] ?></p>
							<? if($catalog[$i]['count']) { ?>
							<p class="show-catalog-nav-count">(<?=$catalog[$i]['count'] ?>)</p>
							<? } ?>
							<? if($catalog[$i]['child']) { ?>
							<div class="catalog-now-arrow now-lvl-1-arrow"><? require('assets/svg/arrow-down.php'); ?></div>
							<? } ?>
						</a>

						<!-- Выводим второй уровень -->
						<? if($catalog[$i]['child']) { ?>
							<? for($j = 0; $j < count($catalog[$i]['child']); $j++) { ?>
							<div class="show-catalog-nav-item now-lvl-2">
								<a href="<?=addGet('catalog_id', $get_filter.'.'.$i.'.'.$j); ?>" class="flex-c-s mb-24">
									<? if($catalog[$i]['child'][$j]['code']) { ?>
									<p class="show-catalog-nav-code"><?=$catalog[$i]['child'][$j]['code'] ?></p>
									<? } ?>
									<p class="show-catalog-nav-name lvl-name-2"><?=$catalog[$i]['child'][$j]['name'] ?></p>
									<? if($catalog[$i]['child'][$j]['count']) { ?>
									<p class="show-catalog-nav-count">(<?=$catalog[$i]['child'][$j]['count'] ?>)</p>
									<? } ?>
									<? if($catalog[$i]['child'][$j]['child']) { ?>
									<div class="catalog-now-arrow now-lvl-2-arrow"><? require('assets/svg/arrow-down.php'); ?></div>
									<? } ?>
								</a>

								<!-- Выводим третий уровень -->
								<? if($catalog[$i]['child'][$j]['child']) { ?>
									<? for($n = 0; $n < count($catalog[$i]['child'][$j]['child']); $n++) { ?>
									<a href="<?=addGet('catalog_id', $get_filter.'.'.$i.'.'.$j.'.'.$n); ?>" class="show-catalog-nav-item now-lvl-3 flex-c-s mb-24">
										<? if($catalog[$i]['child'][$j]['child'][$n]['code']) { ?>
										<p class="show-catalog-nav-code"><?=$catalog[$i]['child'][$j]['child'][$n]['code'] ?></p>
										<? } ?>
										<p class="show-catalog-nav-name lvl-name-3"><?=$catalog[$i]['child'][$j]['child'][$n]['name'] ?></p>
										<? if($catalog[$i]['child'][$j]['child'][$n]['count']) { ?>
										<p class="show-catalog-nav-count">(<?=$catalog[$i]['child'][$j]['child'][$n]['count'] ?>)</p>
										<? } ?>
									</a>
									<? } ?>
								<? } ?>
							</div>
							<? } ?>
						<? } ?>
					</div>
				<? } ?>
			</div>
			<div class="show-catalog-right">
				<div class="show-catalog-items">
					<!-- Показывает карточки каталога в зависимости от положения в основном каталоге -->
					<? if(count($filter_id) == 1) { ?> <!-- Картачки для первого уровня (с картинкой) -->
						<? for($i = 0; $i < count($catalog); $i++) { ?>
							<div class="show-catalog-item-full catalog-std">
								<? if($catalog[$i]['code']) { ?>
								<p class="show-catalog-item-code"><?=$catalog[$i]['code'] ?></p>
								<? } ?>
								<p class="show-catalog-item-name"><?=$catalog[$i]['name'] ?></p>
								<img src="assets/img/engine.png" alt="" class="show-catalog-item-ava">
								<a href="" class="catalog-std-btn">Посмотреть товары 
									<? if($catalog[$i]['count']) { ?>
									<span>(<?=$catalog[$i]['count'] ?>)</span>
									<? } ?>
									<span class="catalog-std-btn-arrow"><? require('assets/svg/arrow-wr.php'); ?></span>
								</a>
							</div>
						<? } ?>
					<? } else { ?><!-- Картачки для второго уровня (с стрелочкой) -->
						<? for($i = 0; $i < count($catalog); $i++) { ?>
							<a href="<?=$catalog[$i]['link'] ?>" class="show-catalog-item-mini flex-c-sb">
								<div class="show-catalog-item-txt flex-c-sb">
									<p class="show-catalog-mini-name"><?=$catalog[$i]['name'] ?></p>
									<? if($catalog[$i]['count']) { ?>
									<p class="show-catalog-item-count">(<?=$catalog[$i]['count'] ?>)</p>
									<? } ?>
								</div>
								<div class="btn-arrow-right"><? require('assets/svg/arrow-wr.php'); ?></div>
							</a>
						<? } ?>
					<? } ?>
				</div>
				<h2 class="show-catalog-h2">Все товары категории «<?=$categories;?>»</h2> <!-- Выводим название категории -->
				<? if($_GET['filter']) { ?>
				<div class="show-filter-now flex-fit">
					<p class="show-filter-title fake-h3">Отображаются запчати для:</p>
					<div class="show-catalog-filter flex-fit">
						<? require($filter[$_GET['filter']]['ava']); ?>
						<p class="show-catalog-filter-txt"><?=$filter[$_GET['filter']]['name']; ?></p>
						<div class="mini-burger filter-close">
							<div class="burger-line close-line close-line-left bcg-red"></div>
							<div class="burger-line close-line close-line-right bcg-red"></div>
						</div>
					</div>
				</div>
				<? } ?>

				<div class="show-catalog-items-end">
					<div class="show-catalog-sort flex-fit">
						<p class="fake-h3 catalog-sort-title">Сортировать по:</p>
						<div class="catalog-sort flex-fit">
							<div class="arrow-sort-nav"><? require('assets/svg/arrow-path.php'); ?></div>
							<form method="get">
								<select class="select-list" name="sort">
									<option value="name">названию</option>
									<option value="cost">цене</option>
									<option value="rating">рейтингу</option>
								</select>
							</form>
						</div>
					</div>
					<div class="show-nav-list">
						<div class="btn-std btn-left"><? require('assets/svg/arrow-wl.php'); ?></div>
						<div class="list-number">
							<p class="nav-list nav-list-active">1</p>
							<p class="nav-list">2</p>
							<p class="nav-list">3</p>
							<p class="nav-list">4</p>
							<p class="nav-list">5</p>
							<p class="nav-list">6</p>
							<p class="nav-list">7</p>
							<p class="nav-list">8</p>
							<p class="nav-list">9</p>
							<p class="nav-list">10</p>
							<p class="nav-list">11</p>
							<p class="nav-list">12</p>
							<p class="nav-list">13</p>
							<p class="nav-list list-more">...</p>
							<p class="nav-list">98</p>
						</div>
						<div class="btn-std btn-right"><? require('assets/svg/arrow-wr.php'); ?></div>
					</div>
				</div>

				<div class="bs-items">
					<!--  временно недоступен  -->
					<div class="bs-item">
						<div class="bcg-cover bs-item-ava" style="background-image: url(assets/img/baza1.png);">
							<div class="ava-lupa">
								<? require('assets/svg/lupa.php'); ?>
							</div>
						</div>
						<div class="bs-item-up flex-c-sb">
							<p class="bs-status">временно недоступен</p>
							<div class="rating-mini">
								<span class="active"></span>	
								<span class="active"></span>    
								<span class="active"></span>  
								<span></span>    
								<span></span>
							</div>
						</div>
						<div class="bs-info flex-c-sb">
							<p class="bs-cost">395 р.</p>
							<p class="bs-code">Код: 13484</p>
						</div>
						<p class="bs-descr">МАСЛО МОТОРНОЕ Mobil ULTRA (Esso Ultra 10W40) (полусинтетика) 1л / Esso_Ultra_10W40_1Л в России</p>
						<div class="bs-btn flex-c-sb">
							<div class="bs-zakaz full-btn">Заказать</div>
							<div class="bs-colocol full-btn-light">Уведомить о поступлении</div>
						</div>
					</div>
					<!--  в наличии + Суперцена -->
					<div class="bs-item">
						<div class="bcg-cover bs-item-ava" style="background-image: url(assets/img/baza1.png);">
							<p class="super">Суперцена</p>
							<div class="ava-lupa">
								<? require('assets/svg/lupa.php'); ?>
							</div>
						</div>
						<div class="bs-item-up flex-c-sb">
							<p class="bs-status stock">в наличии</p>
							<div class="rating-mini">
								<span class="active"></span>	
								<span class="active"></span>    
								<span class="active"></span>  
								<span></span>    
								<span></span>
							</div>
						</div>
						<div class="bs-info flex-c-sb">
							<p class="bs-cost">395 р.</p>
							<p class="bs-code">Код: 13484</p>
						</div>
						<p class="bs-descr">МАСЛО МОТОРНОЕ Mobil ULTRA (Esso Ultra 10W40) (полусинтетика) 1л / Esso_Ultra_10W40_1Л в России</p>
						<div class="bs-btn flex-c-sb">
							<div class="bs-stock full-btn">В корзину</div>
						</div>
					</div>
					<!--  временно недоступен  -->
					<div class="bs-item">
						<div class="bcg-cover bs-item-ava" style="background-image: url(assets/img/baza1.png);">
							<div class="ava-lupa">
								<? require('assets/svg/lupa.php'); ?>
							</div>
						</div>
						<div class="bs-item-up flex-c-sb">
							<p class="bs-status">временно недоступен</p>
							<div class="rating-mini">
								<span class="active"></span>	
								<span class="active"></span>    
								<span class="active"></span>  
								<span></span>    
								<span></span>
							</div>
						</div>
						<div class="bs-info flex-c-sb">
							<p class="bs-cost">395 р.</p>
							<p class="bs-code">Код: 13484</p>
						</div>
						<p class="bs-descr">МАСЛО МОТОРНОЕ Mobil ULTRA (Esso Ultra 10W40) (полусинтетика) 1л / Esso_Ultra_10W40_1Л в России</p>
						<div class="bs-btn flex-c-sb">
							<div class="bs-zakaz full-btn">Заказать</div>
							<div class="bs-colocol full-btn-light">Уведомить о поступлении</div>
						</div>
					</div>
					<!--  в наличии  -->
					<div class="bs-item">
						<div class="bcg-cover bs-item-ava" style="background-image: url(assets/img/baza1.png);">
							<div class="ava-lupa">
								<? require('assets/svg/lupa.php'); ?>
							</div>
						</div>
						<div class="bs-item-up flex-c-sb">
							<p class="bs-status stock">в наличии</p>
							<div class="rating-mini">
								<span class="active"></span>	
								<span class="active"></span>    
								<span class="active"></span>  
								<span></span>    
								<span></span>
							</div>
						</div>
						<div class="bs-info flex-c-sb">
							<p class="bs-cost">395 р.</p>
							<p class="bs-code">Код: 13484</p>
						</div>
						<p class="bs-descr">МАСЛО МОТОРНОЕ Mobil ULTRA (Esso Ultra 10W40) (полусинтетика) 1л / Esso_Ultra_10W40_1Л в России</p>
						<div class="bs-btn flex-c-sb">
							<div class="bs-stock full-btn">В корзину</div>
						</div>
					</div>
					<!--  временно недоступен  -->
					<div class="bs-item">
						<div class="bcg-cover bs-item-ava" style="background-image: url(assets/img/baza1.png);">
							<div class="ava-lupa">
								<? require('assets/svg/lupa.php'); ?>
							</div>
						</div>
						<div class="bs-item-up flex-c-sb">
							<p class="bs-status">временно недоступен</p>
							<div class="rating-mini">
								<span class="active"></span>	
								<span class="active"></span>    
								<span class="active"></span>  
								<span></span>    
								<span></span>
							</div>
						</div>
						<div class="bs-info flex-c-sb">
							<p class="bs-cost">395 р.</p>
							<p class="bs-code">Код: 13484</p>
						</div>
						<p class="bs-descr">МАСЛО МОТОРНОЕ Mobil ULTRA (Esso Ultra 10W40) (полусинтетика) 1л / Esso_Ultra_10W40_1Л в России</p>
						<div class="bs-btn flex-c-sb">
							<div class="bs-zakaz full-btn">Заказать</div>
							<div class="bs-colocol full-btn-light">Уведомить о поступлении</div>
						</div>
					</div>
					<!--  в наличии  -->
					<div class="bs-item">
						<div class="bcg-cover bs-item-ava" style="background-image: url(assets/img/baza1.png);">
							<div class="ava-lupa">
								<? require('assets/svg/lupa.php'); ?>
							</div>
						</div>
						<div class="bs-item-up flex-c-sb">
							<p class="bs-status stock">в наличии</p>
							<div class="rating-mini">
								<span class="active"></span>	
								<span class="active"></span>    
								<span class="active"></span>  
								<span></span>    
								<span></span>
							</div>
						</div>
						<div class="bs-info flex-c-sb">
							<p class="bs-cost">395 р.</p>
							<p class="bs-code">Код: 13484</p>
						</div>
						<p class="bs-descr">МАСЛО МОТОРНОЕ Mobil ULTRA (Esso Ultra 10W40) (полусинтетика) 1л / Esso_Ultra_10W40_1Л в России</p>
						<div class="bs-btn flex-c-sb">
							<div class="bs-stock full-btn">В корзину</div>
						</div>
					</div>
					<!--  временно недоступен  -->
					<div class="bs-item">
						<div class="bcg-cover bs-item-ava" style="background-image: url(assets/img/baza1.png);">
							<div class="ava-lupa">
								<? require('assets/svg/lupa.php'); ?>
							</div>
						</div>
						<div class="bs-item-up flex-c-sb">
							<p class="bs-status">временно недоступен</p>
							<div class="rating-mini">
								<span class="active"></span>	
								<span class="active"></span>    
								<span class="active"></span>  
								<span></span>    
								<span></span>
							</div>
						</div>
						<div class="bs-info flex-c-sb">
							<p class="bs-cost">395 р.</p>
							<p class="bs-code">Код: 13484</p>
						</div>
						<p class="bs-descr">МАСЛО МОТОРНОЕ Mobil ULTRA (Esso Ultra 10W40) (полусинтетика) 1л / Esso_Ultra_10W40_1Л в России</p>
						<div class="bs-btn flex-c-sb">
							<div class="bs-zakaz full-btn">Заказать</div>
							<div class="bs-colocol full-btn-light">Уведомить о поступлении</div>
						</div>
					</div>
					<!--  в наличии  -->
					<div class="bs-item">
						<div class="bcg-cover bs-item-ava" style="background-image: url(assets/img/baza1.png);">
							<div class="ava-lupa">
								<? require('assets/svg/lupa.php'); ?>
							</div>
						</div>
						<div class="bs-item-up flex-c-sb">
							<p class="bs-status stock">в наличии</p>
							<div class="rating-mini">
								<span class="active"></span>	
								<span class="active"></span>    
								<span class="active"></span>  
								<span></span>    
								<span></span>
							</div>
						</div>
						<div class="bs-info flex-c-sb">
							<p class="bs-cost">395 р.</p>
							<p class="bs-code">Код: 13484</p>
						</div>
						<p class="bs-descr">МАСЛО МОТОРНОЕ Mobil ULTRA (Esso Ultra 10W40) (полусинтетика) 1л / Esso_Ultra_10W40_1Л в России</p>
						<div class="bs-btn flex-c-sb">
							<div class="bs-stock full-btn">В корзину</div>
						</div>
					</div>
					<!--  временно недоступен  -->
					<div class="bs-item">
						<div class="bcg-cover bs-item-ava" style="background-image: url(assets/img/baza1.png);">
							<div class="ava-lupa">
								<? require('assets/svg/lupa.php'); ?>
							</div>
						</div>
						<div class="bs-item-up flex-c-sb">
							<p class="bs-status">временно недоступен</p>
							<div class="rating-mini">
								<span class="active"></span>	
								<span class="active"></span>    
								<span class="active"></span>  
								<span></span>    
								<span></span>
							</div>
						</div>
						<div class="bs-info flex-c-sb">
							<p class="bs-cost">395 р.</p>
							<p class="bs-code">Код: 13484</p>
						</div>
						<p class="bs-descr">МАСЛО МОТОРНОЕ Mobil ULTRA (Esso Ultra 10W40) (полусинтетика) 1л / Esso_Ultra_10W40_1Л в России</p>
						<div class="bs-btn flex-c-sb">
							<div class="bs-zakaz full-btn">Заказать</div>
							<div class="bs-colocol full-btn-light">Уведомить о поступлении</div>
						</div>
					</div>
					<!--  в наличии  -->
					<div class="bs-item">
						<div class="bcg-cover bs-item-ava" style="background-image: url(assets/img/baza1.png);">
							<div class="ava-lupa">
								<? require('assets/svg/lupa.php'); ?>
							</div>
						</div>
						<div class="bs-item-up flex-c-sb">
							<p class="bs-status stock">в наличии</p>
							<div class="rating-mini">
								<span class="active"></span>	
								<span class="active"></span>    
								<span class="active"></span>  
								<span></span>    
								<span></span>
							</div>
						</div>
						<div class="bs-info flex-c-sb">
							<p class="bs-cost">395 р.</p>
							<p class="bs-code">Код: 13484</p>
						</div>
						<p class="bs-descr">МАСЛО МОТОРНОЕ Mobil ULTRA (Esso Ultra 10W40) (полусинтетика) 1л / Esso_Ultra_10W40_1Л в России</p>
						<div class="bs-btn flex-c-sb">
							<div class="bs-stock full-btn">В корзину</div>
						</div>
					</div>
					<!--  временно недоступен  -->
					<div class="bs-item">
						<div class="bcg-cover bs-item-ava" style="background-image: url(assets/img/baza1.png);">
							<div class="ava-lupa">
								<? require('assets/svg/lupa.php'); ?>
							</div>
						</div>
						<div class="bs-item-up flex-c-sb">
							<p class="bs-status">временно недоступен</p>
							<div class="rating-mini">
								<span class="active"></span>	
								<span class="active"></span>    
								<span class="active"></span>  
								<span></span>    
								<span></span>
							</div>
						</div>
						<div class="bs-info flex-c-sb">
							<p class="bs-cost">395 р.</p>
							<p class="bs-code">Код: 13484</p>
						</div>
						<p class="bs-descr">МАСЛО МОТОРНОЕ Mobil ULTRA (Esso Ultra 10W40) (полусинтетика) 1л / Esso_Ultra_10W40_1Л в России</p>
						<div class="bs-btn flex-c-sb">
							<div class="bs-zakaz full-btn">Заказать</div>
							<div class="bs-colocol full-btn-light">Уведомить о поступлении</div>
						</div>
					</div>
					<!--  в наличии  -->
					<div class="bs-item">
						<div class="bcg-cover bs-item-ava" style="background-image: url(assets/img/baza1.png);">
							<div class="ava-lupa">
								<? require('assets/svg/lupa.php'); ?>
							</div>
						</div>
						<div class="bs-item-up flex-c-sb">
							<p class="bs-status stock">в наличии</p>
							<div class="rating-mini">
								<span class="active"></span>	
								<span class="active"></span>    
								<span class="active"></span>  
								<span></span>    
								<span></span>
							</div>
						</div>
						<div class="bs-info flex-c-sb">
							<p class="bs-cost">395 р.</p>
							<p class="bs-code">Код: 13484</p>
						</div>
						<p class="bs-descr">МАСЛО МОТОРНОЕ Mobil ULTRA (Esso Ultra 10W40) (полусинтетика) 1л / Esso_Ultra_10W40_1Л в России</p>
						<div class="bs-btn flex-c-sb">
							<div class="bs-stock full-btn">В корзину</div>
						</div>
					</div>
				</div>

				<div class="show-nav-list">
					<div class="btn-std btn-left"><? require('assets/svg/arrow-wl.php'); ?></div>
					<div class="list-number">
						<p class="nav-list nav-list-active">1</p>
						<p class="nav-list">2</p>
						<p class="nav-list">3</p>
						<p class="nav-list">4</p>
						<p class="nav-list">5</p>
						<p class="nav-list">6</p>
						<p class="nav-list">7</p>
						<p class="nav-list">8</p>
						<p class="nav-list">9</p>
						<p class="nav-list">10</p>
						<p class="nav-list">11</p>
						<p class="nav-list">12</p>
						<p class="nav-list">13</p>
						<p class="nav-list list-more">...</p>
						<p class="nav-list">98</p>
					</div>
					<div class="btn-std btn-right"><? require('assets/svg/arrow-wr.php'); ?></div>
				</div>
			</div>
		</div>
	</article>
</section>

<?php 
	require_once "footer.php";
?>