<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Result</title>
</head>
<body>
<h1>Quiz Results</h1>
    <p>You got {{ $correctCount }} out of {{ $totalQuestions }} questions correct!</p>
    <p>Score: {{ $scorePercentage }}%</p>
</body>
</html>
