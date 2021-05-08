const { createNewQuestion } = require("./question_constructor");

class Question {
    constructor(id, type, points, element) {
        this.id = id;
        this.type = type;
        this.points = points;
        this.element = element;
    }
}

const questionsElement = $("#questions");
const addQuestionButton = $("#add-question");
const typeSelector = $("#type-selector");
const questionPoints = $("#question-points");
const questions = [];

$(document).ready(function () {
    addQuestionButton.on("click", function (event) {
        const selected = typeSelector.children("option:selected").val();

        if (selected !== "null") {
            const id = questions.length + 1;
            const question = new Question(id, selected, questionPoints.val(), createNewQuestion(id, selected));
            questions.push(question);

            questionsElement.empty();

            for (const question of questions) {
                questionsElement.append(question.element);
            }

            typeSelector.val("null")
            questionPoints.val("");
            questionsElement.show();
        }
    })

    if (questionsElement.children().length === 1) {
        questionsElement.hide();
    }
});
