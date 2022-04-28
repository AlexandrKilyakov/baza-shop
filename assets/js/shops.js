function hideBlock() {
	if(document.querySelector('.show-adress-block'))
		document.querySelector('.show-adress-block').classList.remove('show-adress-block');
	if(document.querySelector('.arr-up'))
		document.querySelector('.arr-up').classList.remove('arr-up');
}

document.addEventListener('DOMContentLoaded', function() {
	const btn = document.querySelectorAll('.btn-adress');

	if(btn) {
		for(let i = 0; i < btn.length; i++) {
			btn[i].addEventListener('click', function() {
				let tmp = btn[i].parentElement.parentElement.querySelector('.show-adress');
				if(tmp) {
					if(!tmp.classList.contains('show-adress-block')) {
						hideBlock();
						if(!btn[i].querySelector('.arrow').classList.contains('arr-up'))
							btn[i].querySelector('.arrow').classList.add('arr-up');
						tmp.style.marginLeft = `-${btn[i].parentElement.offsetLeft}px`;
						tmp.classList.add('show-adress-block');
					} else {
						hideBlock();
					}
				}
			});
		}
	}
});