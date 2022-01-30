//
var priceVal = document.getElementById("price-val").innerText;
console.log(priceVal);


$('#increment').click(function add() {
    var $qtde = $("#quantity");
    var a = $qtde.text();

    a++;
    // console.log(a);

    $('#decrement').attr("disable", !a);
    $qtde.text(a);
});

// $("#decrement").attr("disabled", !$("#quantity").text());

$('#decrement').click(function minust() {
    var $qtde = $("#quantity");
    var b = $qtde.text();

    // console.log(b)
    if (b > 1) {
        b--;
        $qtde.text(b);
    } else {
        // $("#decrement").attr("disabled", true);
    }
});


$(document).ready(function() {
    function updatePrice(){
        var price = parseInt($("#quantity").text());
        var total = price * priceVal;
        // var total = total.toFixed(2);
        $("#total-price").text(total);
    }

    $(document).on("click", "input", updatePrice);
});

// $('#increment').click(function add() {
//     var $qtde = $("#quantity");
//     var a = $qtde.val();
//
//     a++;
//     console.log(a);
//
//     $("#quantity").text(a);
//
//     $('#decrement').attr("disable", !a);
//     $qtde.val(a);
// });
//
// $("#decrement").attr("disabled", !$("#quantity").val());
//
// $('#decrement').click(function minust() {
//     var $qtde = $("#quantity");
//     var b = $qtde.val();
//
//     console.log(b)
//     if (b >= 1) {
//         b--;
//         $qtde.val(b);
//     } else {
//         $("#decrement").attr("disabled", true);
//     }
//     $('#decrement').text(b);
// });
//
// $(document).ready(function() {
//    function updatePrice(){
//        var price = parseInt($("#quantity").val());
//        var total = price * 20;
//        // var total = total.toFixed(2);
//        $("#total-price").text(total);
//    }
//
//    $(document).on("click", "input", updatePrice);
// });

function divClickMore(num){
// var data = document.getElementById("data-uid").innerText;
//     console.log(num)

    location.href = "view.php?uid="+num;
};