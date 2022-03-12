// var cart = {};
// function loadCart() {
//     if (localStorage.getItem('cart')) {
//         cart = JSON.parse(localStorage.getItem('cart'))
//         ShowCard();
//     } else {
//         $('.carts').html('Пусто')
//     }
// }
//
// function ShowCard() {
//     $.getJSON('goods.json',function (data) {
//         var goods = data;
//         var out = "";
//         for (var key in cart) {
//             out += `<img src="img/<?= $item["file"] ?>`
//         }
//     })
// }
//
// $(document).ready(function () {
//     loadCart();
// })