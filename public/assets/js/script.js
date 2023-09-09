var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").classList.remove('show');
    }
    else{
        document.getElementById("navbar").classList.add('show');
    }
    prevScrollpos = currentScrollPos;
}