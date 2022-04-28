<?php 
	// Псевдо БД (4 уровня)
	$catalog = array(
		array(
			'name' => 'Двигатели',
			'link' => '/catalog.php',
			'child' => array(
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
			),
		),
		array(
			'name' => 'Трансмиссия',
			'link' => '/catalog.php',
			'child' => array(
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
			),
		),
		array(
			'name' => 'Питание, охлаждение, выпуск',
			'link' => '/catalog.php',
			'child' => array(
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
			),
		),
		array(
			'name' => 'Ходовая часть',
			'link' => '/catalog.php',
			'child' => array(
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
			),
		),
		array(
			'name' => 'Системы управления',
			'link' => '/catalog.php',
			'child' => array(
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
			),
		),
		array(
			'name' => 'Электрооборудование',
			'link' => '/catalog.php',
			'child' => array(
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
			),
		),
		array(
			'name' => 'Диски колёсные и шины',
			'link' => '/catalog.php',
			'child' => array(
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
			),
		),
		array(
			'name' => 'Кузовные детали. Кузова УАЗ. Рама.',
			'link' => '/catalog.php',
			'child' => array(
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
			),
		),
		array(
			'name' => 'Дополнительное и внедорожное оборудование, аксессуары',
			'link' => '/catalog.php',
			'child' => array(
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Двигатели в сборе',
					'link' => '/catalog.php',
					'code' => '1000',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Двигатели для автомобилей ГАЗ',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Двигатели для автомобилей УАЗ',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Блок цилиндров',
					'link' => '/catalog.php',
					'code' => '1002',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Блоки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Втулки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Заглушки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Краны блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны подъема двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки двигателя',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки цепи',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладка крышки толкателей',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка крышки цепи',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладка передней крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнитель гильзы',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Шпильки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Штуцеры',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Подвеска двигателя',
					'link' => '/catalog.php',
					'code' => '1001',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты крепления для монтажа двигателей',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подвески двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны задней подушки двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Кронштейны передней опоры двигателя',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Подушки двигателя',
							'link' => '/catalog.php',
						),
					),
				),
				array(
					'name' => 'Головка блока цилиндров',
					'link' => '/catalog.php',
					'code' => '1003',
					'count' => '9999',
					'child' => array(
						array(
							'name' => 'Болты',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Болты головки',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Болты крышки',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Гайки головки блока цилиндров',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Головки Блока Цилиндров в сборе',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Головки Блока Цилиндров двигателей Andoria',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей ЗМЗ',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ ГАЗель',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Головки Блока Цилиндров двигателей УМЗ УАЗ',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Заглушки и пробки',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крепление, шпильки, штифты головки блока',
							'link' => '/catalog.php',
						),
						array(
							'name' => 'Крышки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Крышки задние',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Крышки передние',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Прокладки',
							'link' => '/catalog.php',
							'child' => array(
								array(
									'name' => 'Прокладки головки блока',
									'link' => '/catalog.php',
								),
								array(
									'name' => 'Прокладки крышек головки блока',
									'link' => '/catalog.php',
								),
							),
						),
						array(
							'name' => 'Уплотнительные кольца, втулки',
							'link' => '/catalog.php',
						),
					),
				),
			),
		),
	);

	// Фильтр (авто)
	$filter = array(
		'patriot' => array(
						'name' => 'Патриот',
						'ava' => 'assets/svg/patriot.php'
					),
		'hunter' => array(
						'name' => 'Хантер',
						'ava' => 'assets/svg/hunter.php',
					),
		'uaz-profi' => array(
						'name' => 'УАЗ Профи',
						'ava' => 'assets/svg/uaz-profi.php',
					),
		'simbir' => array(
						'name' => 'Симбир',
						'ava' => 'assets/svg/simbir.php',
					),
		'uaz-469' => array(
						'name' => 'УАЗ 469',
						'ava' => 'assets/svg/uaz-469.php',
					),
		'loaf' => array(
						'name' => 'Буханка',
						'ava' => 'assets/svg/loaf.php',
					),
		'gazelle' => array(
						'name' => 'Газель',
						'ava' => 'assets/svg/gazelle.php',
					),
		'gazelle-next' => array(
						'name' => 'Газель NEXT',
						'ava' => 'assets/svg/gazelle-next.php',
					),
		'vaz' => array(
						'name' => 'ВАЗ',
						'ava' => 'assets/svg/vaz.php',
					),
	);

	// Формируем ссылку с get параметром (добавляем к уже имеющимся)
	function addGet($key, $value) {
		$url = $_SERVER['REQUEST_URI'];
		$have = strpos($url, '?');

		if($have === false) {
			$url .= '?' . $key . '=' . $value;
		} else {
			if(strpos($url, $key) !== false) {
				$arr = explode('?', $url)[1];
				$arr = explode('&', $arr);
				
				$new_url = explode('?', $url)[0];
				
				for($i = 0; $i < count($arr); $i++) {
					if(strpos($arr[$i], $key) === false) {
						if(strpos($new_url, '?') === false) {
							$new_url .= '?' . $arr[$i];
						} else {
							$new_url .= '&' . $arr[$i];
						}
					} else {
						if(strpos($new_url, '?') === false) {
							$new_url .= '?' . $key . '=' . $value;
						} else {
							$new_url .= '&' . $key . '=' . $value;
						}
					}
				}
				$url = $new_url;
			} else {
				$url .= '&' . $key . '=' . $value;
			}
		}

		return $url;
	}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex, nofollow" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/fonts/roboto/roboto.css">
	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<title>База все для УАЗа</title>
</head>
<body>

<header>
	<section class="nav-items">
		<article class="container flex-c-sb nav-items-top">
			<div class="nav-left flex-fit">
				<ul class="nav-lang">
					<li id="ru_ru" class="lang-active flex-fit">
						<img src="assets/svg/rus.svg" alt="" class="lang-img">
						<p class="lang-txt">Rus</p>
					</li>
					<li id="ru_en" class="lang-active flex-fit hide">
						<img src="assets/svg/eng.svg" alt="" class="lang-img">
						<p class="lang-txt">En</p>
					</li>
				</ul>
				<div class="nav-locations flex-fit">
					<? require('assets/svg/icon-loc.php'); ?>
					<select class="nav-locations-txt" name="region">
						<option>Санкт-Петербург</option>
						<option>Москва</option>
						<option>Сочи</option>
					</select>
				</div>
			</div>
			<div id="nav-btn-show">
				<div class="burger">
					<div class="burger-line line-yel"></div>
					<div class="burger-line line-yel"></div>
					<div class="burger-line line-yel"></div>
				</div>
			</div>
			<div id="menu-nav" class="nav-right">
				<nav>
					<div id="nav-btn-close">
						<div class="burger">
							<div class="burger-line line-yel close-line close-line-left"></div>
							<div class="burger-line line-yel close-line close-line-right"></div>
						</div>
					</div>
					<a href="/" class="nav-item">Автокаталог</a>
					<a href="/" class="nav-item">О нас</a>
					<a href="/" class="nav-item">Новости</a>
					<a href="/" class="nav-item">Информация</a>
					<a href="/" class="nav-item">Тех. раздел</a>
					<a href="/" class="nav-item">Отзывы</a>
					<a href="/" class="nav-item">Контакты</a>
				</nav>
			</div>
		</article>
	</section>
	<section class="header-elements">
		<article class="container flex-c-sb header-items">
			<a href="/" class="header-logo"><? require('assets/svg/logo.php'); ?></a>
			<div id="btn-catalog" class="btn-standart">
				<p class="catalog-text">Каталог</p>
				<div id="catalog-deactive" class="burger">
					<div class="burger-line"></div>
					<div class="burger-line"></div>
					<div class="burger-line"></div>
				</div>
				<div id="catalog-active" class="burger hide">
					<div class="burger-line close-line close-line-left"></div>
					<div class="burger-line close-line close-line-right"></div>
				</div>
			</div>
			<div class="header-end flex-c-sb">
				<div class="header-search flex-c-sb">
					<div class="header-search-input">
						<div class="header-search-btn">
							<!-- Выводи блок, в зависимости от наличий фильтра -->
							<? if($_GET['filter']) { ?>
							<div class="header-search-filter flex-fit">
								<? require($filter[$_GET['filter']]['ava']); ?>
								<div class="mini-burger filter-close">
									<div class="burger-line close-line close-line-left bcg-red"></div>
									<div class="burger-line close-line close-line-right bcg-red"></div>
								</div>	
							</div>
							<? } else { ?>
							<div class="header-search-all"><? require('assets/svg/icon-serch.php'); ?></div>
							<? } ?>
						</div>
						<form action="" method="GET" id="search-header">
							<input type="text" class="input-search" placeholder="Введите название или код запчасти">
						</form>
					</div>
					<button type="submit" id="btn-search" class="btn-standart">Найти</button>
				</div>
				<div class="icon-menu">
					<div id="favorites" class="icon-menu-item">
						<div class="icon-menu-logo"><? require('assets/svg/icon-like.php'); ?></div>
						<p class="icon-menu-txt">Избранное</p>
					</div>
					<div id="basket" class="icon-menu-item">
						<div class="icon-menu-logo">
							<? require('assets/svg/icon-basket.php'); ?>
							<div class="basket-num">0</div>
						</div>
						<p class="icon-menu-txt">Корзина</p>
					</div>
					<div id="come-in" class="icon-menu-item">
						<div class="icon-menu-logo"><? require('assets/svg/icon-man.php'); ?></div>
						<p class="icon-menu-txt">Войти</p>
					</div>
				</div>
			</div>
			<!-- Какталог тута -->
			<div id="tuttoo_catalog" class="catalog-block-items hide">
				<div class="catalog-block-fon"></div>
				<div class="catalog-block-items-main">
					<!-- Заполняем каталог -->
					<? for($i = 0; $i < count($catalog); $i++) { ?>
					<div class="catalog-block-item-element flex-fit">
						<div class="catalog-block-item-nav">
							<a href="<?=$catalog[$i]['link']; ?>?catalog_id=<?=$i?>" class="catalog-block-item-title"><?=$catalog[$i]['name']; ?></a>
							<? if($catalog[$i]['child']) { ?>
							<div class="arrow-lvl-1 catalog-child-arrow"><? require('assets/svg/arrow-down.php'); ?></div>
							<? } ?>
						</div>

						<!-- Level 2 -->
						<? if($catalog[$i]['child']) { ?>
						<div class="catalog-block-item-child">
							<p class="back-catalog"><?=$catalog[$i]['name']; ?></p>
							<? for($j = 0; $j < count($catalog[$i]['child']); $j++) { ?>
							<div class="catalog-block-item-child-element flex-c-sb">
								<div class="catalog-child-nav">
									<a href="<?=$catalog[$i]['child'][$j]['link']; ?>?catalog_id=<?=$i.'.'.$j?>" class="catalog-child-title"><?=$catalog[$i]['child'][$j]['name']; ?></a>
								</div>
								<div class="catalog-child-count">(<?=$catalog[$i]['child'][$j]['count']; ?>)</div>
						
								<!-- Level 3 -->
								<? if($catalog[$i]['child'][$j]['child']) { ?>
								<div class="catalog-child-arrow"><? require('assets/svg/arrow-down.php'); ?></div>
								<div class="level-3 flex-col-center">
									<? for($k = 0; $k < count($catalog[$i]['child'][$j]['child']); $k++) { ?>
									<div class="level-3-element flex-fit">
										<div class="catalog-child-nav">
											<a href="<?=$catalog[$i]['child'][$j]['child'][$k]['link']; ?>?catalog_id=<?=$i.'.'.$j.'.'.$k?>" class="catalog-child-title"><?=$catalog[$i]['child'][$j]['child'][$k]['name']; ?></a>
										</div>
										<div class="catalog-child-count">(<?=$catalog[$i]['child'][$j]['child'][$k]['count']; ?>)</div>
						
										<!-- Level 4 -->
										<? if($catalog[$i]['child'][$j]['child'][$k]['child']) { ?>
										<div class="catalog-child-arrow"><? require('assets/svg/arrow-down.php'); ?></div>
										<div class="level-4 flex-col-center">
											<? for($t = 0; $t < count($catalog[$i]['child'][$j]['child'][$k]['child']); $t++) { ?>
											<div class="level-3-element flex-fit">
												<div class="catalog-child-nav">
													<a href="<?=$catalog[$i]['child'][$j]['child'][$k]['child'][$t]['link']; ?>?catalog_id=<?=$i.'.'.$j.'.'.$k.'.'.$t?>" class="catalog-child-title"><?=$catalog[$i]['child'][$j]['child'][$k]['child'][$t]['name']; ?></a>
												</div>
												<div class="catalog-child-count">(<?=$catalog[$i]['child'][$j]['child'][$k]['child'][$t]['count']; ?>)</div>
											</div>
											<? } ?>
										</div>
										<? } ?>

									</div>
									<? } ?>
								</div>
								<? } ?>

							</div>
							<? } ?>
						</div>
						<? } ?>

					</div>
					<? } ?>
				</div>
			</div>
		</article>
		<!-- Показываем фильтр, если он не выбран -->
		<? if(!$_GET['filter']) { ?>
		<article class="container flex-c-sb header-filter-items">
			<div class="header-filter-item">
				<div class="header-filter-name flex-fit">
					<div class="header-filter-logo"><? require('assets/svg/patriot.php'); ?></div>
					<div class="header-filter-txt">Патриот</div>
				</div>
				<form class="flex-col-center header-filter-list" method="GET">
					<label class="filter-list-item">УАЗ 3163 PATRIOT, 2363 PICKUP, 2360 CARGO</label>
					<button type="submit" name="filter" value="patriot" class="filter-list-item color-yel">Показать запчасти</button>
				</form>
			</div>
			<div class="header-filter-item">
				<div class="header-filter-name flex-fit">
					<div class="header-filter-logo"><? require('assets/svg/hunter.php'); ?></div>
					<div class="header-filter-txt">Хантер</div>
				</div>
				<form class="flex-col-center header-filter-list" method="GET">
					<label class="filter-list-item">УАЗ 315195 HUNTER, 315196, 315148, 315123</label>
					<button type="submit" name="filter" value="hunter" class="filter-list-item color-yel">Показать запчасти</button>
				</form>
			</div>
			<div class="header-filter-item">
				<div class="header-filter-name flex-fit">
					<div class="header-filter-logo"><? require('assets/svg/uaz-profi.php'); ?></div>
					<div class="header-filter-txt">УАЗ Профи</div>
				</div>
				<form class="flex-col-center header-filter-list" method="GET">
					<label class="filter-list-item">УАЗ PROFI</label>
					<button type="submit" name="filter" value="uaz-profi" class="filter-list-item color-yel">Показать запчасти</button>
				</form>
			</div>
			<div class="header-filter-item">
				<div class="header-filter-name flex-fit">
					<div class="header-filter-logo"><? require('assets/svg/simbir.php'); ?></div>
					<div class="header-filter-txt">Симбир</div>
				</div>
				<form class="flex-col-center header-filter-list" method="GET">
					<label class="filter-list-item">УАЗ 3160, 3162 SIMBIR</label>
					<button type="submit" name="filter" value="simbir" class="filter-list-item color-yel">Показать запчасти</button>
				</form>
			</div>
			<div class="header-filter-item">
				<div class="header-filter-name flex-fit">
					<div class="header-filter-logo"><? require('assets/svg/uaz-469.php'); ?></div>
					<div class="header-filter-txt">УАЗ 469</div>
				</div>
				<form class="flex-col-center header-filter-list" method="GET">
					<label class="filter-list-item">УАЗ 469, 3151, 31512, 31514, 31519 ЛЮКС</label>
					<button type="submit" name="filter" value="uaz-469" class="filter-list-item color-yel">Показать запчасти</button>
				</form>
			</div>
			<div class="header-filter-item">
				<div class="header-filter-name flex-fit">
					<div class="header-filter-logo"><? require('assets/svg/loaf.php'); ?></div>
					<div class="header-filter-txt">Буханка</div>
				</div>
				<form class="flex-col-center header-filter-list" method="GET">
					<label class="filter-list-item">УАЗ 451, 452, 3741, 3909, 3962, 2206, 39094, 3303, 33036</label>
					<button type="submit" name="filter" value="loaf" class="filter-list-item color-yel">Показать запчасти</button>
				</form>
			</div>
			<div class="header-filter-item">
				<div class="header-filter-name flex-fit">
					<div class="header-filter-logo"><? require('assets/svg/gazelle.php'); ?></div>
					<div class="header-filter-txt">Газель</div>
				</div>
				<form class="flex-col-center header-filter-list" method="GET">
					<label class="filter-list-item">Газель</label>
					<button type="submit" name="filter" value="gazelle" class="filter-list-item color-yel">Показать запчасти</button>
				</form>
			</div>
			<div class="header-filter-item">
				<div class="header-filter-name flex-fit">
					<div class="header-filter-logo"><? require('assets/svg/gazelle-next.php'); ?></div>
					<div class="header-filter-txt">Газель NEXT</div>
				</div>
				<form class="flex-col-center header-filter-list" method="GET">
					<label class="filter-list-item">Газель NEXT</label>
					<button type="submit" name="filter" value="gazelle-next" class="filter-list-item color-yel">Показать запчасти</button>
				</form>
			</div>
			<div class="header-filter-item">
				<div class="header-filter-name flex-fit">
					<div class="header-filter-logo"><? require('assets/svg/vaz.php'); ?></div>
					<div class="header-filter-txt">ВАЗ</div>
				</div>
				<form class="flex-col-center header-filter-list" method="GET">
					<label class="filter-list-item">ВАЗ</label>
					<button type="submit" name="filter" value="vaz" class="filter-list-item color-yel">Показать запчасти</button>
				</form>
			</div>
		</article>
		<? } ?>
	</section>
</header>