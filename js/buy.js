var acc = document.getElementsByClassName("accordionB");
var cart = {};
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "flex") {
            panel.style.display = "none";
        } else {
            panel.style.display = "flex";
        }
    });
}
$(".btnB").on('click', addToCard)
function addToCard() {
    var id = $(this).attr('data-id');
    if (cart[id] === undefined) {
        cart[id]= 1;
    } else {
        cart[id]++;
    }
    card();
    saveCard();
}

function saveCard() {
    localStorage.setItem('cart', JSON.stringify(cart));
}

function card() {

    var out = "";
    for (var key in cart) {
        out += 'Name products ' + ' - '+ key + ' '   +' - ' + 'count - ' + cart[key]  + '<br>';
    }
    $('.mini-card').html(out);
}

function loadCart() {
    if (localStorage.getItem('cart')) {
        cart = JSON.parse(localStorage.getItem('cart'))
    card();
    }
}

$(document).ready(function () {
    loadCart ()
})