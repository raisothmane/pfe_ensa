$(document).ready(function() {
    $('#start-quiz').click(function() {
        var selectedCategory = $('input[name="category"]:checked').val();

        if (!selectedCategory) {
            alert('Please select a category.');
            return;
        }

        $.ajax({
            url: '/get-questions',
            method: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                category_id: selectedCategory
            },
            success: function(response) {
                var questions = response.questions;
                var quizForm = $('#quiz-form');
                quizForm.empty();
                
                questions.forEach(function(question, index) {
                    var questionHtml = `
                        <div class="question" data-question-id="${question.id}">
                            <h2 class="question-text">${question.text}</h2>
                            <ul class="question-answers">
                    `;
                    question.answers.forEach(function(answer) {
                        questionHtml += `
                            <li>
                                <input type="radio" name="question_${question.id}" value="${answer.id}" id="answer_${answer.id}">
                                <label class="question-answer" for="answer_${answer.id}">${answer.text}</label>
                            </li>
                        `;
                    });
                    questionHtml += `
                            </ul>
                        </div>
                    `;
                    quizForm.append(questionHtml);
                });

                $('#quiz-section').show();
                $('#submit-quiz').show();
                $('#category-form').hide();
            },
            error: function(error) {
                console.log(error);
            }
        });
    });

    $('#submit-quiz').click(function() {
        var answers = {};
        $('#quiz-form .question').each(function() {
            var questionId = $(this).data('question-id');
            var selectedAnswer = $(this).find('input[type="radio"]:checked').val();
            answers[questionId] = selectedAnswer;
        });

        $.ajax({
            url: '/calculate-score',
            method: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                answers: answers
            },
            success: function(response) {
                // Handle the display of the result
                alert('You scored ' + response.correct + ' out of ' + response.total);
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
});
