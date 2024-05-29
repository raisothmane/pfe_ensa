<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <style>
        .question {
            display: none;
        }
        .question.active {
            display: block;
        }
        .progress-bar {
            width: 100%;
            background-color: #f3f3f3;
            border: 1px solid #ccc;
            margin: 20px 0;
        }
        .progress-bar-inner {
            height: 20px;
            width: 0;
            background-color: #4caf50;
        }
        .progress-text {
            text-align: center;
            margin: 10px 0;
            font-size: 16px;
        }
        .timer {
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<h1>Quiz</h1>
<div class="progress-bar">
    <div class="progress-bar-inner" id="progress-bar-inner"></div>
</div>
<div class="progress-text" id="progress-text">1 of {{ count($questions) }} questions</div>
<div class="timer" id="timer">30s</div>
<form method="POST" action="{{ route('quiz.submit') }}" id="quiz-form">
    @csrf
    @foreach($questions as $index => $question)
        <div class="question" id="question-{{ $index }}">
            <h3>{{ $question->text }}</h3>
            @foreach($answers[$question->id] as $answer)
                <div>
                    <input type="radio" name="selected_answers[{{ $question->id }}]" value="{{ $answer->id }}">
                    <label>{{ $answer->text }}</label>
                </div>
            @endforeach
            @if($index < count($questions) - 1)
                <button type="button" class="next-btn" data-next="{{ $index + 1 }}">Next</button>
            @endif
            @if($index == count($questions) - 1)
                <button type="submit" class="btn btn-primary">Finish</button>
            @endif
        </div>
    @endforeach
</form>

<script src="{{ asset('js/app.js') }}">

</script>
</body>
</html>
