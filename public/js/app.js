document.addEventListener('DOMContentLoaded', function() {
    let currentQuestion = 0;
    let timer;
    const questions = document.querySelectorAll('.question');
    const progressBarInner = document.getElementById('progress-bar-inner');
    const progressText = document.getElementById('progress-text');
    const timerElement = document.getElementById('timer');
    const totalQuestions = questions.length;
    const timeLimit = 30; // time limit per question in seconds

    const showQuestion = (index) => {
        questions.forEach((question, i) => {
            question.classList.toggle('active', i === index);
        });
        updateProgressBar(index);
        resetTimer();
    };

    const updateProgressBar = (index) => {
        const progress = Math.round(((index + 1) / totalQuestions) * 100);
        progressBarInner.style.width = progress + '%';
        progressText.textContent = `${index + 1} of ${totalQuestions} questions`;
    };

    const resetTimer = () => {
        clearInterval(timer);
        let timeRemaining = timeLimit;
        timerElement.textContent = `${timeRemaining}s`;

        timer = setInterval(() => {
            timeRemaining -= 1;
            timerElement.textContent = `${timeRemaining}s`;

            if (timeRemaining <= 0) {
                clearInterval(timer);
                markAsUnanswered();
                goToNextQuestion();
            }
        }, 1000);
    };

    const markAsUnanswered = () => {
        const currentQuestionElement = questions[currentQuestion];
        const selectedAnswer = currentQuestionElement.querySelector('input[type="radio"]:checked');
        if (!selectedAnswer) {
            const unansweredInput = document.createElement('input');
            unansweredInput.type = 'hidden';
            unansweredInput.name = `selected_answers[${currentQuestionElement.getAttribute('id').split('-')[1]}]`;
            unansweredInput.value = 'unanswered';
            document.getElementById('quiz-form').appendChild(unansweredInput);
        }
    };

    const goToNextQuestion = () => {
        if (currentQuestion < totalQuestions - 1) {
            markAsUnanswered();
            currentQuestion += 1;
            showQuestion(currentQuestion);
        }
    };

    showQuestion(currentQuestion);

    document.querySelectorAll('.next-btn').forEach(button => {
        button.addEventListener('click', function() {
            markAsUnanswered();
            const nextIndex = parseInt(this.getAttribute('data-next'));
            currentQuestion = nextIndex;
            showQuestion(nextIndex);
        });
    });

    document.querySelector('form').addEventListener('submit', function() {
        markAsUnanswered();
    });
});