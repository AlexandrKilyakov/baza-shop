document.addEventListener('DOMContentLoaded', function() {
	const ava = document.querySelectorAll('.product-mini-item');
	const full = document.querySelector('.product-full-img');

	if(ava) {
		for(let i = 0; i < ava.length; i++) {
			ava[i].querySelector('img').addEventListener('click', function() {
				if(document.querySelector('.mini-active'))
					document.querySelector('.mini-active').classList.remove('mini-active');
				full.src = ava[i].querySelector('img').src;
				ava[i].classList.add('mini-active');
			});
		}
	}
});