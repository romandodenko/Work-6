"use strict"

window.onload = function () {

  //  Паралакс эффект , лучше применять в тот момент когда нужно наложить параллакс на элементы. Не забыть подключить файл из папки resources - parallax

if (document.body.clientWidth >= 1024) {
  let scene = document.getElementById('scene');
  let parallaxInstance = new Parallax(scene);
}

}