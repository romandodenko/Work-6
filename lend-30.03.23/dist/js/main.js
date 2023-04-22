"use strict"

window.onload = function () {

  document.addEventListener("click", function (e) {

  const elementInteractive = e.target;

  if (elementInteractive.closest(".melhores-item__button")) { // Открытие и закрытие платежек
    if (!elementInteractive.closest(".melhores-item__button").classList.contains("active")) {
      elementInteractive.closest(".melhores-item__button").classList.add("active");
      let wrapperPays = elementInteractive.closest(".melhores-item__wrapper-pays");
      let pays = wrapperPays.querySelector(".melhores-item__pays");
      gsap.to(pays, {
        height: "auto",
      });
    } else {
      elementInteractive.closest(".melhores-item__button").classList.remove("active");
      let wrapperPays = elementInteractive.closest(".melhores-item__wrapper-pays");
      let pays = wrapperPays.querySelector(".melhores-item__pays");
      let paysItem = pays.querySelector(".melhores-item__pay");
      let paysItemHeight = paysItem.scrollHeight;
      gsap.to(pays, {
        height: paysItemHeight,
      });
    }
  }
})
// Ставим в кнопку число платежек

document.querySelectorAll(".melhores-item").forEach(function(e) {
  let payNum = e.querySelectorAll(".hidden-pay").length;
  e.querySelector(".melhores-item__button-num").innerHTML = `+ ${payNum}`;
})

// Скрипт для проверки , поддерживает ли браузер webp 

function testWebP(callback) {
  var webP = new Image();

  webP.onload = webP.onerror = function () {
    callback(webP.height == 2);
  };

  webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
}

testWebP(function (support) {
  if (support == true) {
    document.querySelector('body').classList.add('webp');
  } else {
    document.querySelector('body').classList.add('no-webp');
  }
});

  // Слайдер

const footbalSliderInit = document.querySelector(".footbal-slider");

if (footbalSliderInit) {
  const footbalSlider = new Swiper('.footbal-slider', {
    observer: true,
    observeParents: true,
    watchOverflow: true,
    slidesPerView: "auto",
    direction: 'horizontal',
    breakpoints: {
      320: {
        spaceBetween: 10,
      }
    },
  });
}

// const swiper = new Swiper('.hero__swiper', {
//   loop: true,
//   // loopAdditionalSlides: 3, // Добавляет количество слайдов которые будут склонированы после создания цикла
//   // centeredSlides: true, // центрирует активный слайд по центру а не слева
//   observer: true,
//   observeParents: true,
//   watchOverflow: true,
//   slidesPerView: 1,
//   spaceBetween: 32,
//   // effect: "fade", анимация перелистывания слайдера
//   // slidesPerGroup: 1, 
//   // centeredSlides: true, // активный слайд будет в центре
//   // autoHeight: true,
//   direction: 'horizontal',
//   // speed: 500, // Автовоспроизведение
//   // autoplay: {
//   // delay: 5000,
//   // disableOnInteraction: false,
//   // waitForTransition: false, если нужно чтобы слайды листались когда пользователь уходит со страницы
//   // },
//   // grid: { // если нужно сделать слайдер не в 1 строку
//   //   rows: 2,
//   // },
//   // thumbs: { // Читаем ниже что даёт эта настройка
//   //   swiper: thumbsSwiper,
//   // },
//   pagination: {
//     el: '.hero__pagination',
//     clickable: true,
//     // dynamicBullets: true, // Если много кружков пагинации
//     // dynamicMainBullets: 3, // Показывает количество отображаемых кружков пагинаии при включеном dynamicBullets
//   },
//   navigation: {
//     nextEl: '.hero__button-next',
//     prevEl: '.hero__button-prev',
//   },
//   // scrollbar: {
//   //   el: '.hero__scrollbar',
//   //   draggable: true, // позволяет сделать полосу прокрутки перетаскиваемой
//   // },
//   // breakpoints: {
//   //   320: {
//   //     slidesPerView: 2,
//   //     spaceBetween: 20
//   //   },
//   //   480: {
//   //     slidesPerView: 3,
//   //     spaceBetween: 30
//   //   },
//   //   640: {
//   //     slidesPerView: 4,
//   //     spaceBetween: 40
//   //   }
//   // },
//   // on: {
//   // slideChange () {
//   // Событие будет запущено при изменении текущего активного слайда
//   // },
//   // slideChangeTransitionEnd () {
//   // Событие будет запущено после анимации другого слайда (следующего или предыдущего).
//   // },
//   // slideChangeTransitionStart() {
//   // Событие будет запущено в начале анимации для другого слайда (следующего или предыдущего). Т.е при клике на кнопку или пагинацию или перелистывание
//   // },
//   //   slideNextTransitionStart() {
//   // То же, что и "slideChangeTransitionStart", но только для направления "вперед"
//   //   },
//   //   slidePrevTransitionStart() {
//   // То же, что и "slideChangeTransitionStart", но только для направления "назад"
//   //   },
//   //   afterInit() {
//   // Событие будет запущено сразу после инициализации т.е при загрузке страницы сразу все заработает
//   //   }
//   // }
// });



// Обычная разметка слайдера

// <div class="swiper">
//   <div class="swiper-wrapper">
//     <div class="swiper-slide">Slide 1</div>
//     <div class="swiper-slide">Slide 2</div>
//     <div class="swiper-slide">Slide 3</div>
//   </div>
//   <div class="swiper-pagination"></div>

//   <div class="swiper-button-prev"></div>
//   <div class="swiper-button-next"></div>

//   <div class="swiper-scrollbar"></div>
// </div>

// Разметка слайдера с thumb. Этот слайдер выглядит как обычный слайдер в карточках товара в интернет магазине. Т.е один верхний слайдер с большой картинкой, и снизу под ним маленький слайдер с маленькими картинками. Так вот, каталог свайпер это основной, а thumbs свайпер второй слайдер. Инициализируем два слайдера, первому слайдеру пишем консту thumbsSwiper(можно и поменять) а второму слайдеру пишем в настройках thumb, другими словами связываем их. и все, всё работает

/* <div class="wrapper">
<div class="swiper catalog__swiper catalog-swiper">
  <div class="swiper-wrapper catalog-swiper__wrapper">
    <div class="swiper-slide catalog-swiper__slide">
      <img src="./img/01.jpg" alt="">
    </div>
    <div class="swiper-slide catalog-swiper__slide">
      <img src="./img/02.jpg" alt="">
    </div>
    <div class="swiper-slide catalog-swiper__slide">
      <img src="./img/03.jpg" alt="">
    </div>
    <div class="swiper-slide catalog-swiper__slide">
      <img src="./img/04.jpg" alt="">
    </div>

  </div>
</div>
<div class="swiper__thumbs swiper thumbs-swiper">
  <div class="swiper-wrapper thumbs-swiper__wrapper">
    <div class="swiper-slide thumbs-swiper__slide">
      <img src="./img/01.jpg" alt="">
    </div>
    <div class="swiper-slide catalog-swiper__slide">
      <img src="./img/02.jpg" alt="">
    </div>
    <div class="swiper-slide catalog-swiper__slide">
      <img src="./img/03.jpg" alt="">
    </div>
    <div class="swiper-slide catalog-swiper__slide">
      <img src="./img/04.jpg" alt="">
    </div>
  </div>
</div>
</div> */

  // Динамические адаптив

function DynamicAdapt(type) {
  this.type = type;
}

DynamicAdapt.prototype.init = function () {
  const _this = this;
  // массив объектов
  this.оbjects = [];
  this.daClassname = "_dynamic_adapt_";
  // массив DOM-элементов
  this.nodes = document.querySelectorAll("[data-da]");

  // наполнение оbjects объктами
  for (let i = 0; i < this.nodes.length; i++) {
    const node = this.nodes[i];
    const data = node.dataset.da.trim();
    const dataArray = data.split(",");
    const оbject = {};
    оbject.element = node;
    оbject.parent = node.parentNode;
    оbject.destination = document.querySelector(dataArray[0].trim());
    оbject.breakpoint = dataArray[1] ? dataArray[1].trim() : "767";
    оbject.place = dataArray[2] ? dataArray[2].trim() : "last";
    оbject.index = this.indexInParent(оbject.parent, оbject.element);
    this.оbjects.push(оbject);
  }

  this.arraySort(this.оbjects);

  // массив уникальных медиа-запросов
  this.mediaQueries = Array.prototype.map.call(this.оbjects, function (item) {
    return '(' + this.type + "-width: " + item.breakpoint + "px)," + item.breakpoint;
  }, this);
  this.mediaQueries = Array.prototype.filter.call(this.mediaQueries, function (item, index, self) {
    return Array.prototype.indexOf.call(self, item) === index;
  });

  // навешивание слушателя на медиа-запрос
  // и вызов обработчика при первом запуске
  for (let i = 0; i < this.mediaQueries.length; i++) {
    const media = this.mediaQueries[i];
    const mediaSplit = String.prototype.split.call(media, ',');
    const matchMedia = window.matchMedia(mediaSplit[0]);
    const mediaBreakpoint = mediaSplit[1];

    // массив объектов с подходящим брейкпоинтом
    const оbjectsFilter = Array.prototype.filter.call(this.оbjects, function (item) {
      return item.breakpoint === mediaBreakpoint;
    });
    matchMedia.addListener(function () {
      _this.mediaHandler(matchMedia, оbjectsFilter);
    });
    this.mediaHandler(matchMedia, оbjectsFilter);
  }
};

DynamicAdapt.prototype.mediaHandler = function (matchMedia, оbjects) {
  if (matchMedia.matches) {
    for (let i = 0; i < оbjects.length; i++) {
      const оbject = оbjects[i];
      оbject.index = this.indexInParent(оbject.parent, оbject.element);
      this.moveTo(оbject.place, оbject.element, оbject.destination);
    }
  } else {
    for (let i = 0; i < оbjects.length; i++) {
      const оbject = оbjects[i];
      if (оbject.element.classList.contains(this.daClassname)) {
        this.moveBack(оbject.parent, оbject.element, оbject.index);
      }
    }
  }
};

// Функция перемещения
DynamicAdapt.prototype.moveTo = function (place, element, destination) {
  element.classList.add(this.daClassname);
  if (place === 'last' || place >= destination.children.length) {
    destination.insertAdjacentElement('beforeend', element);
    return;
  }
  if (place === 'first') {
    destination.insertAdjacentElement('afterbegin', element);
    return;
  }
  destination.children[place].insertAdjacentElement('beforebegin', element);
}

// Функция возврата
DynamicAdapt.prototype.moveBack = function (parent, element, index) {
  element.classList.remove(this.daClassname);
  if (parent.children[index] !== undefined) {
    parent.children[index].insertAdjacentElement('beforebegin', element);
  } else {
    parent.insertAdjacentElement('beforeend', element);
  }
}

// Функция получения индекса внутри родителя
DynamicAdapt.prototype.indexInParent = function (parent, element) {
  const array = Array.prototype.slice.call(parent.children);
  return Array.prototype.indexOf.call(array, element);
};

// Функция сортировки массива по breakpoint и place 
// по возрастанию для this.type = min
// по убыванию для this.type = max
DynamicAdapt.prototype.arraySort = function (arr) {
  if (this.type === "min") {
    Array.prototype.sort.call(arr, function (a, b) {
      if (a.breakpoint === b.breakpoint) {
        if (a.place === b.place) {
          return 0;
        }

        if (a.place === "first" || b.place === "last") {
          return -1;
        }

        if (a.place === "last" || b.place === "first") {
          return 1;
        }

        return a.place - b.place;
      }

      return a.breakpoint - b.breakpoint;
    });
  } else {
    Array.prototype.sort.call(arr, function (a, b) {
      if (a.breakpoint === b.breakpoint) {
        if (a.place === b.place) {
          return 0;
        }

        if (a.place === "first" || b.place === "last") {
          return 1;
        }

        if (a.place === "last" || b.place === "first") {
          return -1;
        }

        return b.place - a.place;
      }

      return b.breakpoint - a.breakpoint;
    });
    return;
  }
};

const da = new DynamicAdapt("max");
da.init();


}