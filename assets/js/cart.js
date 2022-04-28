document.addEventListener("DOMContentLoaded", function() {
	const btn_left = document.querySelectorAll('.left-nav-arrow');
	const minus = document.querySelectorAll('.btn-minus');
	const plus = document.querySelectorAll('.btn-plus');
	const checkout_btn = document.querySelector('#checkout-btn');
	const agreement = document.querySelector('#agreement');
	const dis_close = document.querySelector('#discount-close');

	if(dis_close) {
		dis_close.addEventListener('click', function() {
			dis_close.parentElement.classList.add('hide');
		});
	}

	if(agreement) {
		agreement.addEventListener('click', function() {
			if(checkout_btn.disabled)
				checkout_btn.disabled = false;
			else checkout_btn.disabled = true;
		});
	}

	if(btn_left) {
		for(let i = 0; i < btn_left.length; i++) {
			btn_left[i].addEventListener('click', function() {
				let child = btn_left[i].parentElement.parentElement.querySelector('.left-nav-child');
				if(child.classList.contains('hide')) {
					child.classList.remove('hide');
					if(btn_left[i].classList.contains('up-arrow'))
						btn_left[i].classList.remove('up-arrow');
				} else {
					child.classList.add('hide');
					if(!btn_left[i].classList.contains('up-arrow'))
						btn_left[i].classList.add('up-arrow');
				}
			});
		}
	}

	if(minus) {
		for(let i = 0; i < minus.length; i++) {
			minus[i].addEventListener('click', function() {
				let input = minus[i].parentElement.querySelector('input[type="number"]');
				let value = +input.value;
				if(value > 1)
					value--;
				else value = 1;
				input.value = value;
			});
		}
	}

	if(plus) {
		for(let i = 0; i < plus.length; i++) {
			plus[i].addEventListener('click', function() {
				let input = plus[i].parentElement.querySelector('input[type="number"]');
				let value = +input.value;
				if(value > 0)
					value++;
				else value = 1;
				input.value = value;
			});
		}
	}
});