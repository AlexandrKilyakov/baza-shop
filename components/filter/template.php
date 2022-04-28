<?
	// Проверяет наличие get параметра, для ариентации в массиве каталога (этот массив находится в файле header.phpб и называется - $catalog)
	if(isset($_GET['catalog_id'])) {
		$filter_id = array_map('intval', explode('.', $_GET['catalog_id'])); // Разбиваем его содержимое на массив
		if (strpos($_GET['catalog_id'], '.') === false) {
			$filter_id = array(intval($_GET['catalog_id'])); // Если разбить не вышло (по точке), то просто записываем единственное значение как массив
		}
	} else {
		$filter_id = array(0); // Если отсуствует get параметр, то просто записываем 0 как массив
	}

	// Капаемся в массиве, в поиске нужных значений
	function getCatalog($catalog, $i) {
		return $catalog[$i] ? $catalog[$i] : $catalog['child'];
	}

	// Ищем нужный разделб и возвращаем массив, если и так нужный раздел
	function getCatalogChild($catalog, $i) {
		return $catalog[$i] ? $catalog[$i] : $catalog;
	}
?>

<!-- Верхний фильтр -->
<section id="main-filter-catalog">
	<article class="container">
		<div class="main-filter-catalog-items flex-c-sb">
			<!-- Выводим фильтр через массив каталога -->
			<? for($i = 0; $i < count($catalog); $i++) { ?>
			<a href="<?=addGet('catalog_id', $i); ?>" class="main-filter-catalog-item <?echo (($filter_id[0] == $i) ? 'filter-catalog-active' : ''); ?>">
				<div class="main-filter-catalog-ava">
					<? require('assets/svg/filter-catalog-' . $i . '.php'); ?>
				</div>
				<p class="main-filter-catalog-link"><?echo (($catalog[$i]['name'] != 'Дополнительное и внедорожное оборудование, аксессуары') ? $catalog[$i]['name'] : 'Внедорожное оборудование'); ?></p>
			</a>
			<? } ?>
			<!-- Дописывем элемент, которого нет в массиве -->
			<a href="<?=addGet('catalog_id', 9);?>" class="main-filter-catalog-item <?echo (($filter_id[0] == 9) ? 'filter-catalog-active' : ''); ?>">
				<div class="main-filter-catalog-ava">
					<? require('assets/svg/filter-catalog-9.php'); ?>
				</div>
				<p class="main-filter-catalog-link">Товары первой необходимости</p>
			</a>
		</div>
	</article>
</section>