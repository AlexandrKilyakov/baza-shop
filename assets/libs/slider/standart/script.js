function getTranslateX(el) {
  let style = window.getComputedStyle(el);
  let matrix = new WebKitCSSMatrix(style.transform);
  return matrix.m41/parseInt(el.offsetWidth)*100;
}

function handleGesture(slider) {
    if (touchendX < touchstartX) {
        slider.querySelector('.slider-btn-right').click();
    }

    else if (touchendX > touchstartX) {
        slider.querySelector('.slider-btn-left').click();
    }
}

function timerGo(slider) {
	if(!slider.querySelector('.slider-timer').classList.contains('slider-timer-going'))
		slider.querySelector('.slider-timer').classList.add('slider-timer-going');
}

function timerStop(slider) {
	if(slider.querySelector('.slider-timer').classList.contains('slider-timer-going'))
		slider.querySelector('.slider-timer').classList.remove('slider-timer-going');
}

document.addEventListener('DOMContentLoaded', function() {
	const sliders = document.querySelectorAll('.slider-wrap');
	let must = true;

	for(let i = 0; i < sliders.length; i++) {

		// Разрешаем делать шаг слайдеру
		sliders[i].querySelectorAll('.slide-standart')[0].addEventListener('transitionend', function() {
			must = true;
			timerGo(sliders[i]);
		}, false);

		// Таймер завершил свое дело
		sliders[i].querySelector('.slider-timer').addEventListener('transitionend', function() {
			timerStop(sliders[i]);
			sliders[i].querySelector('.slider-btn-right').click();
		}, false);

		// клик на левую кнопку
		sliders[i].querySelector('.slider-btn-left').addEventListener('click', function() {
			if(must) {
				timerStop(sliders[i]);
				must = false;
				let slide = sliders[i].querySelectorAll('.slide-standart');
				let x = getTranslateX(slide[0]);
				if(x == 0) x = -(slide.length - 1) * 100;
				else x += 100;
				for(let j = 0; j < slide.length; j++) {
					slide[j].style.transform = `translateX(${x}%)`;
				}
			}
		});

		// клик на правую кнопку
		sliders[i].querySelector('.slider-btn-right').addEventListener('click', function() {
			if(must) {
				timerStop(sliders[i]);
				must = false;
				let slide = sliders[i].querySelectorAll('.slide-standart');
				let x = getTranslateX(slide[0]);
				if(x == -(slide.length - 1) * 100) x = 0;
				else x -= 100;
				for(let j = 0; j < slide.length; j++) {
					slide[j].style.transform = `translateX(${x}%)`;
				}
			}
		});

		// Swipe start
		sliders[i].addEventListener('touchstart', function (event) {
		    touchstartX = event.changedTouches[0].screenX;
		}, false);

		// Swipe end
		sliders[i].addEventListener('touchend', function (event) {
		    touchendX = event.changedTouches[0].screenX;
		    handleGesture(sliders[i]);
		}, false);

		// Запускаем таймер
		setTimeout(function() {
			timerGo(sliders[i]);
		}, 100);
	}
});