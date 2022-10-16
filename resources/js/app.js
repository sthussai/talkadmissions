require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {
    animate_shrink_navbar()
    };

function animate_shrink_navbar() {
if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "20px 10px 10px";
    document.getElementById("logo").style.fontSize = "25px";
    document.getElementById("navbar").style.opacity = "1.0";
} else {
    document.getElementById("navbar").style.padding = "20px 10px 10px";
    document.getElementById("navbar").style.opacity = "0.9";
    document.getElementById("logo").style.fontSize = "35px";
}
}
      