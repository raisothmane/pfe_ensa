<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,500&display=swap" rel="stylesheet">
    
</head>
<body class="h-full flex flex-col items-center" style="background-image: url('{{ asset('img/bg.png')}}');">

<div class="quiz-container">
    <img src="{{ asset('img/quiz_time.png')}}" alt="Quiz Time" class="quiz-img">
    @php
        $d = 100;
        $o = -0.5 * $d;
        $sw = 0.1 * $d;
        $r = 0.5 * ($d - $sw);
    @endphp

    <div class="countdown" id="svgtimer" >
        <svg viewBox="{{ implode(' ', [$o, $o, $d, $d]) }}" stroke-width="{{ $sw }}">
            <circle r="{{ $r }}"></circle>
            <circle r="{{ $r }}" pathLength="1"></circle>
        </svg>
    </div>

    

    <form method="POST" action="{{ route('quiz.submit') }}" id="quiz-form">
        @csrf
        @foreach($questions as $index => $question)
            <div class="question" id="question-{{ $index }}">
                <div class="bg-gray-100 h-48 w-96 mt-6 p-12 textsection question-box">
                    <h3 class="textn1">{{ $question->text }}</h3>
                </div>
                <div class="mt-8 card">
                    <div class="content">
                        @foreach($answers[$question->id] as $answer)
                            @php
                                $answerId = 'answer-' . $question->id . '-' . $answer->id;
                            @endphp
                            <div class="card">
                                <div class="content w-96 mt-4">
                                    <input type="radio" id="{{ $answerId }}" name="selected_answers[{{ $question->id }}]" value="{{ $answer->id }}">
                                    <label for="{{ $answerId }}" class="box first">
                                        <div class="plan">
                                            <span class="yearly text-center">{{ $answer->text }}</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mt-8 flex justify-center">
                    @if($index < count($questions) - 1)
                        <button onclick="$('#resetButton').click()" type="button" id="nextbtn" class="next-btn text-white font-bold bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 rounded-lg text-sm px-5 py-2.5 text-center ml-auto w-32 flex justify-end items-center" data-next="{{ $index + 1 }}">
                            <span>Next</span>
                            <svg class="ml-2 w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                            </svg>
                        </button>
                    @endif
                    @if($index == count($questions) - 1)
                        <button type="submit" class="finish-btn text-white bg-gradient-to-r font-bold from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 rounded-lg text-sm px-5 py-2.5 text-center ml-auto w-32 flex justify-end items-center">Finish
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
</svg>
                        </button>
                    @endif
                </div>
                
            </div>
        @endforeach
        <div class="progress-bar mt-6 justify-center items-center ml-2 h-6">
    <div class="progress-bar-inner" id="progress-bar-inner">
        <div class="rounded-full">
            <div id="progress-bar-text" class="h-6 bg-orange-400 text-xs font-medium text-blue-100 p-0.5 leading-none rounded-full center-text"></div>
        </div>
    </div>
</div>

      
       
    <div class="progress-text text-white hidden " id="progress-text"></div>
    <div class="timer text-white hidden" id="timer"></div>
</div>
    </form>
<button class="hidden" id="resetButton" onclick="resetButton()" >Reset Timer</button>
  
<script src="{{ asset('js/app.js') }}"></script>
<script>
  
 



    </script>
</body>
</html>
