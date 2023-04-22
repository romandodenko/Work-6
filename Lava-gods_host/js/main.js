"use strict"

window.onload = function () {

  if (document.body.clientWidth >= 1024) {
    let scene = document.getElementById('scene');
    let parallaxInstance = new Parallax(scene);
  }

}