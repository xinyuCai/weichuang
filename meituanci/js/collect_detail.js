$(document).on("pageinit", function() {
    $("#left").on("tap", function () {
        history.go(-1);
    });
    $("#header #home").on("tap", function () {
        location.href = "welcome";
    });
});