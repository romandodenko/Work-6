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