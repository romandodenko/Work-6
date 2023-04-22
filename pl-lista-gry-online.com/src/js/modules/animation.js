// Гриншок - плавный скролл страницы и скроллтриггер

// не забыть подключить библиотеку, из папки animates, gsap и все файлы

gsap.registerPlugin(ScrollTrigger, ScrollSmoother)

// if (document.body.clientWidth >= 1024) { // отключаем работу плавного скролла и скролл триггера
if (ScrollTrigger.isTouch !== 1) { // работает только на устройствах которые не tach

	ScrollSmoother.create({
		wrapper: '.wrapper', // оболочка
		content: '.content', // контент который будет плавно скролиться, не забыть прописать will-change: transform;
		smooth: 1.5, // скорость
		effects: true // возможность влиять на скорость скрола у отдельных элементов data-speed=".6"
	})

	gsap.fromTo('.hero-section', {
		opacity: 1
	}, { // первые {} - код который до выполнения анимации, вторые {} - код во время выполнения анимации
		opacity: 0,
		scrollTrigger: {
			trigger: '.hero-section', // когда в поле зрения появляется этот элемент, начинается анимация
			start: 'center', // когда начинается анимация( в данном примере анимация начинается когда достигает половины блока trigger)
			end: '820', // когда заканчивается анимация
			scrub: true // чтобы анимация возвращалась к значениям до анимации
		}
	})

	let itemsL = gsap.utils.toArray('.gallery__left .gallery__item') // если таких элементов много, то это нужно для того чтобы при достижение определенного элемента начиналась анимация

	itemsL.forEach(item => {
		gsap.fromTo(item, {
			opacity: 0,
			x: -50
		}, {
			opacity: 1,
			x: 0,
			scrollTrigger: {
				trigger: item,
				start: '-850',
				end: '-100',
				scrub: true
			}
		})
	})

	let itemsR = gsap.utils.toArray('.gallery__right .gallery__item')

	itemsR.forEach(item => {
		gsap.fromTo(item, {
			opacity: 0,
			x: 50
		}, {
			opacity: 1,
			x: 0,
			scrollTrigger: {
				trigger: item,
				start: '-750',
				end: 'top',
				scrub: true
			}
		})
	})

}

// Если , на странице где используется плавный скролл gsap'a есть аккордеон, то делаем так. onComplete: () => ScrollTrigger.refresh() расчитывает по новой высоту страницы.

// if (elementInteractive.closest(".menu-restaraunt__item")) { // Открытие и закрытие бургера

//   const menuResItem = elementInteractive.closest(".menu-restaraunt__item");

//   const menuResItemBottom = elementInteractive.closest(".menu-restaraunt__item").querySelector(".menu-restaraunt__bottom");

//   if (!menuResItem.classList.contains("active")) {

//     menuResItem.classList.add("active");

//     gsap.to(menuResItemBottom, {
//       height: "auto",
//       onComplete: () => ScrollTrigger.refresh()
//      });

//   } else if(menuResItem.classList.contains("active")){

//     menuResItem.classList.remove("active");

//     gsap.to(menuResItemBottom, {
//       height: 0,
//       onComplete: () => ScrollTrigger.refresh()
//      });
//   }

// }

// ------------------------------------------------------------------------------------------------------------------------------------------------

// Гриншок 

// не забыть подключить библиотеку, из папки animates, gsap 

// const openBtn = document.querySelector(".open-btn")
// const collapseBtn = document.querySelector(".collapse-btn")
// let productList = gsap.timeline({
//   paused: true
// })

// productList
//   .to(".product-hidden", {
//     duration: .4,
//     opacity: 1,
//     visibility: "visible",
//     display: "flex"
//   })

// openBtn.addEventListener("click", () => {
//   collapseBtn.classList.add("collapse-btn-active")
//   openBtn.classList.add("open-btn-disabled")
//   productList.timeScale(1).play()
// })

// collapseBtn.addEventListener("click", () => {
//   collapseBtn.classList.remove("collapse-btn-active")
//   openBtn.classList.remove("open-btn-disabled")
//   productList.timeScale(2).reverse()
// })

// ------------------------------------------------------------------------------------------------------------------------------------------------

// AOS

// не забыть подключить библиотеку, из папки animates, aos все файлы

// AOS.init({
//   duration: 900,
// });

// ------------------------------------------------------------------------------------------------------------------------------------------------

// Плавный скролл 

// не забыть подключить библиотеку, из папки animates, smooth-scroll-page, smooth-scroll.js

// SmoothScroll({
// 	animationTime: 1000, // [ms]
// 	stepSize: 160, // [px]

// 	// Acceleration
// 	accelerationDelta: 400, // 50
// 	accelerationMax: 3, // 3

// 	// Keyboard Settings
// 	keyboardSupport: true, // option
// 	arrowScroll: 40, // [px]

// 	// Pulse (less tweakable)
// 	// ratio of "tail" to "acceleration"
// 	pulseAlgorithm: true,
// 	pulseScale: 4,
// 	pulseNormalize: 1,

// 	// Other
// 	touchpadSupport: false, // ignore touchpad by default
// 	fixedBackground: true,
// 	excluded: ''
// })

// Плавный скролл butty

// не забыть подключить библиотеку, из папки animates, smooth-scroll-page, butty.js

// const options = {
//   wrapperId: 'scrolles', // блок, в котором будет происходить плавный скролл
//   wrapperDamper: 0.10, // время
//   cancelOnTouch: true // Хз))
// };

// butter.init(options);