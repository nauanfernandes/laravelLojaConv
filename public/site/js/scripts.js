/*!
* Start Bootstrap - Shop Homepage v5.0.6 (https://startbootstrap.com/template/shop-homepage)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-shop-homepage/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

window.addEventListener("scroll", function() {
    var whatsappButton = document.querySelector(".whatsapp-button");
    var distanceFromTop = window.pageYOffset || document.documentElement.scrollTop;

    if (distanceFromTop > 200) {
        whatsappButton.classList.add("show");
    } else {
        whatsappButton.classList.remove("show");
    }
});
