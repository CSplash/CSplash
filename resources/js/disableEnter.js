// Suppressing the enter key
$("input[name = edit_title]").keypress(function (e) {
    if (e.which === 13) {
        return false;
    }
});