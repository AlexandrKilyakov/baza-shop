function formClick(check, radio, input, textarea, value) {
	check.addEventListener('change', function() {
		if(radio.checked) {
			radio.checked = false;
			for(let i = 0; i < input.length; i++) {
				input[i].disabled = value;
			}
			for(let i = 0; i < textarea.length; i++) {
				textarea[i].disabled = value;
			}
		}
	});
}

function childHide(child) {
	child.style.height = '0';
	let timer = setInterval(function() {
		if(child.offsetHeight < 3) {
			clearInterval(timer);
			if(!child.classList.contains('way-item-child-hide'))
				child.classList.add('way-item-child-hide');
		}
	}, 100);
}

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

document.addEventListener("DOMContentLoaded", function() {
	const address_checkout = document.querySelector('#address-checkout');
	const address_new = document.querySelector('#address-new');
	const input = document.querySelectorAll('.address-new-items .address-new-form-table input');
	const textarea = document.querySelectorAll('.address-new-items .address-new-form-table textarea');
	const way_items = document.querySelector('.way-items');
	const way_item = way_items.querySelectorAll('.way-item');
	const radio_down = way_items.querySelectorAll('.way-radio-down');
	const check_input = document.querySelectorAll('.checkout-end-item-input');

	const child_height = [];

	if(address_checkout && address_new) {
		formClick(address_checkout, address_new, input, textarea, true);
		formClick(address_new, address_checkout, input, textarea, false);
	}

	if(way_item) {
		radioClick(way_items, '.way-radio-up');
		for(let o = 0; o < way_item.length; o++) {
			radioClick(way_item[o], '.way-radio-down');
		}
		for(let i = 0; i < way_item.length; i++) {
			let arrow = way_item[i].querySelectorAll('.way-arrow');
			let child = way_item[i].querySelector('.way-item-child');
			if(arrow && child) {
				child_height[i] = child.offsetHeight;

				for(let j = 0; j < arrow.length; j++) {
					arrow[j].addEventListener('click', function() {
						if(child.offsetHeight > 2) {
							if(way_item[i].querySelector('.way-arrow-up')) {
								way_item[i].querySelector('.way-arrow-up').classList.remove('way-arrow-up')
							}
							childHide(child);
						} else {								
							if(way_item[i].querySelector('.way-arrow-up'))
								way_item[i].querySelector('.way-arrow-up').classList.remove('way-arrow-up')
							if(!arrow[j].classList.contains('way-arrow-up'))
								arrow[j].classList.add('way-arrow-up');
							for(let l = 0; l < way_items.querySelectorAll('.way-item-child').length; l++) {
								if(way_items.querySelectorAll('.way-item-child')[l] != child)
									childHide(way_items.querySelectorAll('.way-item-child')[l]);
							}
							child.classList.remove('way-item-child-hide');
							child.style.height = `${child_height[i]}px`;
						}
					});
				}
				childHide(child);
			}
		}
	}

	if(check_input) {
		for(let i = 0; i < check_input.length; i++) {
			let checkbox = check_input[i].querySelector('input[type="checkbox"]');
			let label = check_input[i].querySelector('.checkout-end-item-label');
			label.addEventListener('click', function() {
				if(label.classList.contains('item-label-active')) {
					checkbox.checked = false;
					label.classList.remove('item-label-active');
				} else {
					checkbox.checked = true;
					label.classList.add('item-label-active');
				}
			});
		}
		for(let i = 0; i < check_input.length; i++) {
			check_input[i].querySelector('.checkout-end-item-label').click();
			check_input[i].querySelector('.checkout-end-item-label').click();
		}
	}
});