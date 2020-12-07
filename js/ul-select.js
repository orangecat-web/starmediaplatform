$("ul.list-unstyled").on("click", ".init", function() {
    $(this).closest("ul").children('li:not(.init)').toggle();
});

var allOptions = $("ul.list-unstyled").children('li:not(.init)');
$("ul.list-unstyled").on("click", "li:not(.init)", function() {
    allOptions.removeClass('selected');
    $(this).addClass('selected');
    $("ul.list-unstyled").children('.init').html($(this).html());
    allOptions.toggle();
});