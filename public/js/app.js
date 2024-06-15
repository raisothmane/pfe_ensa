document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
        var containerLoader = document.querySelector(".containerloader");
        if (containerLoader) {
            containerLoader.style.transition = "opacity 1s";
            containerLoader.style.opacity = "0";

            // After the fade-out animation completes
            setTimeout(function() {
                containerLoader.style.display = "none";
            }, 500); // Wait for 1 second (same duration as the fade-out animation)
        }
    }, 500); // Wait for 1.5 seconds before starting the animation
});



document.addEventListener('DOMContentLoaded', function() {
    let currentQuestion = 0;
    let timer;
    const questions = document.querySelectorAll('.question');
    const progressBarInner = document.getElementById('progress-bar-inner');
    const progressBarText = document.getElementById('progress-bar-text');
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
      // add style text center
        progressBarInner.style.textAlign = 'center';    
        progressText.textContent = `${index + 1} of ${totalQuestions} questions`;
        progressBarText.textContent = `${progress}%`;
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
                if (currentQuestion === totalQuestions - 1) {
                    markAsUnanswered();
                    document.querySelector('form').submit();
                } else {
                    markAsUnanswered();
                    goToNextQuestion();
                }
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

    
function resetButton() {
    document.addEventListener('DOMContentLoaded', function() {
        var resetButton = document.getElementById('resetButton');
        var countdown = document.getElementById('svgtimer');

        resetButton.addEventListener('click', function() {
            // Reset the countdown animation

            countdown.style.animation = 'none';
            void countdown.offsetWidth; // Trigger reflow
            countdown.style.animation = null;
        });
    });
}

// Call the function to initialize the event listeners
resetButton();
  
function validateForm() {
    const category = document.getElementById('category').value;
    if (category === "Choose Category") {
        alert("You need to select a category to play.");
        return false;
    }
    return true;
}
function validateFormld() {
    const category = document.getElementById('categoryld').value;
    if (category === "Choose Category") {
        alert("You need to select a category to view Leaderboard.");
        return false;
    }
    return true;
}
