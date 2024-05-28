<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
</head>
<body>
<h1>Quiz</h1>
    <form method="POST" action="{{ route('quiz.submit') }}">
        @csrf
        @foreach($questions as $question)
            <div class="question">
                <h3>{{ $question->text }}</h3>
                @foreach($answers[$question->id] as $answer)
                    <div>
                        <input type="radio" name="selected_answers[{{ $question->id }}]" value="{{ $answer->id }}">
                        <label>{{ $answer->text }}</label>
                    </div>
                @endforeach
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Finish</button>
    </form>
</body>
</html>
