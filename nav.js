$(document).ready(function() {
$("td #navbar ul").hide();
$("td #navbar li span").click(function() {
    $("td #navbar ul:visible").slideUp("normal");
    if (($(this).next().is("ul")) && (!$(this).next().is(":visible"))) {
        $(this).next().slideDown("normal");
    }
});
});