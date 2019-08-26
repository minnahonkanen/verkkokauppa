$(document).ready(function() {

    $("#btn-sort-a").click(function() {
        $('.cake').sort(function(a, b) {
            if (a.textContent < b.textContent) {
                return -1;
            } else if (a.textContent > b.textContent) {
                return 1;
            } else {
                return 0;
            }
        }).appendTo('#cakesDiv');
    });

    $("#btn-sort-b").click(function() {
        $('.cake').sort(function(a, b) {
            if ($(a).find(".product-number").text() < $(b).find(".product-number").text()) {
                return -1;
            } else if ($(a).find(".product-number").text() > $(b).find(".product-number").text()) {
                return 1;
            } else {
                return 0;
            }
        }).appendTo('#cakesDiv');
    });

});
