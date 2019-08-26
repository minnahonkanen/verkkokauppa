$(document).ready(function(){
    $("#searchfield").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#cakesDiv .cake").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
