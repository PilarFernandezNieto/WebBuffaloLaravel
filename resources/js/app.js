import "./bootstrap";
import $ from "jquery";
window.$ = $;

$(document).ready(function () {
    $(document).on("click", ".pinchaAqui", function () {
        $(".audiostyle").toggleClass("hidden");
    });
});
