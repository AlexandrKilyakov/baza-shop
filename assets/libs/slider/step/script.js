function getStepTranslateX(el) {
  let style = window.getComputedStyle(el);
  let matrix = new WebKitCSSMatrix(style.transform);
  return matrix.m41;
}

function getMarginRight(el) {
	let n = window.getComputedStyle(el, null).getPropertyValue("margin-right");
	let temp = '';

	for(let i = 0; i < n.length; i++) {
		if(+(n[i]) || n[i] == '0') {
			temp = `${temp}${n[i]}`;
		}
	}


	return +temp;
}

function handleGestureStep(slider) {
    if (touchendX < touchstartX) {
        slider.querySelector('.slider-btn-right').click();
    }

    else if (touchendX > touchstartX) {
        slider.querySelector('.slider-btn-left').click();
    }
}

document.addEventListener('DOMContentLoaded', function() {
	const sliders = document.querySelectorAll('.slider-step-block');
	let must = true;
	let marginRight = 0;

	for(let i = 0; i < sliders.length; i++) {

		// Разрешаем делать шаг слайдеру
		if(sliders[i].querySelector('.slider-step')) {
			sliders[i].querySelector('.slider-step').addEventListener('transitionend', function() {
				must = true;
			}, false);

			marginRight = getMarginRight(sliders[i].querySelector('.slider-step'));

			// клик на левую кнопку
			sliders[i].querySelector('.slider-btn-left').addEventListener('click', function() {
				if(must) {
					must = false;
					let slide = sliders[i].querySelectorAll('.slider-step');
					let x = getStepTranslateX(slide[0]);
					if(x == 0) x = -(slide.length - 1) * (slide[0].offsetWidth + marginRight);
					else x +=  slide[0].offsetWidth + marginRight;
					for(let j = 0; j < slide.length; j++) {
						slide[j].style.transform = `translateX(${x}px)`;
					}
				}
			});

			// клик на правую кнопку
			sliders[i].querySelector('.slider-btn-right').addEventListener('click', function() {
				if(must) {
					must = false;
					let slide = sliders[i].querySelectorAll('.slider-step');
					let x = getStepTranslateX(slide[0]);
					if(x == -(slide.length - 1) * (slide[0].offsetWidth + marginRight)) x = 0;
					else x -= slide[0].offsetWidth + marginRight;
					for(let j = 0; j < slide.length; j++) {
						slide[j].style.transform = `translateX(${x}px)`;
					}
				}
			});

			// Swipe start
			sliders[i].querySelector('.slider-steps').addEventListener('touchstart', function (event) {
			    touchstartX = event.changedTouches[0].screenX;
			}, false);

			// Swipe end
			sliders[i].querySelector('.slider-steps').addEventListener('touchend', function (event) {
			    touchendX = event.changedTouches[0].screenX;
			    handleGestureStep(sliders[i]);
			}, false);
		}
	}
});