$(document).ready(function() {
    var counter = 0;
    counter = sessionStorage.getItem('counter');
    $(".count").append(counter);

    $(".buy").click(function() {
        counter++;
        $(".count").empty();
        $(".count").append(counter);
        sessionStorage.setItem('counter', counter);
    });

    $("#delete").click(function() {
        sessionStorage.removeItem('counter');
        counter = 0;
        $(".count").empty();
        $(".count").append(counter);
        sessionStorage.setItem('counter', counter);
    });
});
