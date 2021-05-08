const questionsElement = $("#questions");

$(document).ready(function () {
    if (questionsElement.children().length === 1) {
        questionsElement.hide();
    }
});
