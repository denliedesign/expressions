function downToBottom() {
    gsap.to(window, {duration: 5, ease: 'power2.inOut', scrollTo: '#bottom'});
}

// script.js

document.addEventListener("DOMContentLoaded", function() {
    // Select the modal element by its ID
    var modal = new bootstrap.Modal(document.getElementById('summerModal'));

    // Use Bootstrap's native JavaScript methods to show the modal
    modal.show();
});
