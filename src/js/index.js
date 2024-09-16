import dropdown from "./modules/dropdownLanguage";
dropdown();

import customSelect from "./modules/customSelect";
customSelect();

import mobileMenu from "./modules/mobileMenu";
mobileMenu();

import phoneFormat from "./modules/phoneFormatter";
phoneFormat();

import modalFunctionality from "./modules/contactsModal";
modalFunctionality();

import initAccordion from "./modules/questionsAccordion";
import IMask from "imask";
initAccordion();

document.querySelectorAll('.phone-mask').forEach((e) => {
  const phoneMask = IMask( e, { mask: '+{7}(000)000-00-00' })
})

// map init
let center = [48.8866527839977,2.34310679732974];

function init() {
	let map = new ymaps.Map('map', {
		center: center,
		zoom: 17
	});

	map.controls.remove('geolocationControl'); // удаляем геолокацию
  map.controls.remove('searchControl'); // удаляем поиск
  map.controls.remove('trafficControl'); // удаляем контроль трафика
  map.controls.remove('typeSelector'); // удаляем тип
  map.controls.remove('fullscreenControl'); // удаляем кнопку перехода в полноэкранный режим
  map.controls.remove('zoomControl'); // удаляем контрол зуммирования
  map.controls.remove('rulerControl'); // удаляем контрол правил
  map.behaviors.disable(['scrollZoom']); // отключаем скролл карты (опционально)
}

ymaps.ready(init);
