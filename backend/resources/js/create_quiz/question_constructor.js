const createAnswerVariant = () => {
    const parent = document.createElement("div");
    $(parent).addClass(["question-answer-variant", "d-flex"]);

    $(parent).append(`
        <div class="radio-btn d-flex justify-content-center align-items-center">
            <i class="fa fa-check" aria-hidden="true"></i>
        </div>
    `);

    $(parent).append(`
        <input type="text" class="answer-input" placeholder="Answer text...">
    `);

    $(parent).append(`
        <button class="app-raised-button red ripple">
            <i class="fa fa-trash" aria-hidden="true"></i>
        </button>
    `);

    return parent;
};

const createNewQuestion = (index) => {
    const parent = document.createElement("div");
    $(parent).addClass(["question-constructor","mt-3"]);

    const questionTitle = document.createElement("div");
    $(questionTitle).addClass(["question-title", "d-flex", "justify-content-center", "align-items-center", "mb-3"]);

    $(questionTitle).append(`<div class="question-number">${index}</div>`);
    $(questionTitle).append(`
       <textarea
        name="Question input"
        rows="2"
        class="question-input"
        placeholder="Type a question..."
       ></textarea>
    `);

    $(parent).append(questionTitle);
    $(parent).append(createAnswerVariant());
    $(parent).append(`
        <div class="d-flex mt-2">
            <button class="app-raised-button green ripple ml-auto">
                <i class="fa fa-plus" aria-hidden="true"></i>
            </button>
        </div>
    `);

    return parent;
};

module.exports = {
    createNewQuestion,
}
