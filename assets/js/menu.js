function radioClick(el, child) {
	let radio_down = el.querySelectorAll(child);
	if(radio_down) {
		for(let i = 0; i < radio_down.length; i++) {
			radio_down[i].addEventListener('click', function() {
				for(let j = 0; j < radio_down.length; j++) {
					if(i != j) {
						radio_down[j].checked = false;
					}
				}
			});
		}
	}
}

document.addEventListener('DOMContentLoaded', function() {
	const arrow_lvl = document.querySelectorAll('.arrow-lvl-1')
	const arrow_sort_nav = document.querySelectorAll('.arrow-sort-nav');
	const burger_show = document.querySelector('#catalog-deactive');
	const back_catalog = document.querySelectorAll('.back-catalog');
	const burger_hide = document.querySelector('#catalog-active');
	const btn_catalog = document.querySelector('#btn-catalog');
	const catalog = document.querySelector('#tuttoo_catalog');
	const filter_item = document.querySelectorAll('.header-filter-item');
	const filter_close = document.querySelectorAll('.filter-close');
	const timers = document.querySelectorAll('.slider-timer')
	const nav_hide = document.querySelector('#nav-btn-close');
	const nav_show = document.querySelector('#nav-btn-show');
	const nav = document.querySelector('#menu-nav');
	const radio = document.querySelectorAll('input[type="radio"]');
	const radio_only = document.querySelectorAll('.radio-only');

	document.querySelector('#ru_ru').addEventListener('click', function() {
		document.querySelector('#ru_ru').classList.add('hide');
		document.querySelector('#ru_en').classList.remove('hide');
	});
	document.querySelector('#ru_en').addEventListener('click', function() {
		document.querySelector('#ru_en').classList.add('hide');
		document.querySelector('#ru_ru').classList.remove('hide');
	});

	if(radio_only) {
		for(let i = 0; i < radio_only.length; i++) {
			radioClick(radio_only[i], 'input[type="radio"]');
		}
	}

	catalog.style.top = `${document.querySelector('#btn-catalog').offsetHeight + document.querySelector('#btn-catalog').offsetTop + 8}px`;

	nav_show.addEventListener('click', function() {
		if(nav.style.right != '0px') {
			nav.style.right = '0px';
		}
	});

	nav_hide.addEventListener('click', function() {
		if(nav.style.right != '-100%') {
			nav.style.right = '-100%';
		}
	});

	btn_catalog.addEventListener('click', function() {
		if(catalog.classList.contains('hide')) {
			catalog.classList.remove('hide');
			burger_show.classList.add('hide');
			burger_hide.classList.remove('hide');
			document.addEventListener('click', docClick);
			if(timers) {
				for(let i = 0; i < timers.length; i++) {
					if(timers[i].classList.contains('slider-timer-going'))
						timers[i].classList.remove('slider-timer-going');
				}
			}
		} else {
			catalog.classList.add('hide');
			burger_show.classList.remove('hide');
			burger_hide.classList.add('hide');
			document.removeEventListener('click', docClick);
			if(timers) {
				for(let i = 0; i < timers.length; i++) {
					if(!timers[i].classList.contains('slider-timer-going'))
						timers[i].classList.add('slider-timer-going');
				}
			}
			if(document.querySelector('.show-catalog-child'))
				document.querySelector('.show-catalog-child').classList.remove('show-catalog-child');
		}
	});

	for(let i = 0; i < filter_item.length; i++) {
		filter_item[i].addEventListener('click', function() {
			filter_item[i].querySelector('form.header-filter-list button').click();
		});
	}

	if(filter_close) {
		for(let i = 0; i < filter_close.length; i++) {
			filter_close[i].addEventListener('click', function() {
				const url = new URL(document.location);
				const searchParams = url.searchParams;
				searchParams.delete("filter");
				window.location.href = url;
			});
		}
	}

	if(arrow_sort_nav) {
		for(let i = 0; i < arrow_sort_nav.length; i++) {
			arrow_sort_nav[i].addEventListener('click', function() {
				if(arrow_sort_nav[i].classList.contains('rotate-180')) 
					arrow_sort_nav[i].classList.remove('rotate-180');
				else arrow_sort_nav[i].classList.add('rotate-180');
			});
		}
	}

	for(let i = 0; i < back_catalog.length; i++) {
		back_catalog[i].addEventListener('click', function() {
			if(back_catalog[i].parentElement.classList.contains('show-catalog-child'))
				back_catalog[i].parentElement.classList.remove('show-catalog-child');
		});
	}

	for(let i = 0; i < arrow_lvl.length; i++) {
		arrow_lvl[i].addEventListener('click', function() {
			if(!arrow_lvl[i].parentElement.parentElement.querySelector('.catalog-block-item-child').classList.contains('show-catalog-child'))
				arrow_lvl[i].parentElement.parentElement.querySelector('.catalog-block-item-child').classList.add('show-catalog-child');
		});
	}

	// Клик вне каталога и кнопки его вызова
	function docClick(e) {
		let result ='';
		for(let i = 0; i < (e.target.classList).length; i++) {
			result += `.${e.target.classList[i]}`;
		}
		if(!e.composedPath().includes(btn_catalog) && !e.composedPath().includes(catalog) && !catalog.classList.contains('hide')) {
			btn_catalog.click();
		}
	}

	if(radio) {
		for(let i = 0; i < radio.length; i++) {
			radio[i].addEventListener('change', function() {
				const items = radio[i].parentElement.querySelectorAll('input[type="radio"]');
				for(let j = 0; j < items.length; j++) {
					items[j].checked = false;
				}
				radio[i].checked = true;
			});
		}
	}
});