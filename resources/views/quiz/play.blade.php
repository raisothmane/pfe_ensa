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
<form method="POST" action="{{ route('logout') }}" >
        @csrf
        <form method="POST" action="{{ route('logout') }}" class="absolute top-4 right-4">
        @csrf
        <button   class=" button logoutbtn btn">
    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M22 6.62219V17.245C22 18.3579 21.2857 19.4708 20.1633 19.8754L15.0612 21.7977C14.7551 21.8988 14.449 22 14.0408 22C13.5306 22 12.9184 21.7977 12.4082 21.4942C12.2041 21.2918 11.898 21.0895 11.7959 20.8871H7.91837C6.38776 20.8871 5.06122 19.6731 5.06122 18.0544V17.0427C5.06122 16.638 5.36735 16.2333 5.87755 16.2333C6.38776 16.2333 6.69388 16.5368 6.69388 17.0427V18.0544C6.69388 18.7626 7.30612 19.2684 7.91837 19.2684H11.2857V4.69997H7.91837C7.20408 4.69997 6.69388 5.20582 6.69388 5.91401V6.9257C6.69388 7.33038 6.38776 7.73506 5.87755 7.73506C5.36735 7.73506 5.06122 7.33038 5.06122 6.9257V5.91401C5.06122 4.39646 6.28572 3.08125 7.91837 3.08125H11.7959C12 2.87891 12.2041 2.67657 12.4082 2.47423C13.2245 1.96838 14.1429 1.86721 15.0612 2.17072L20.1633 4.09295C21.1837 4.39646 22 5.50933 22 6.62219Z" fill="#7C2D12"></path> <path d="M4.85714 14.8169C4.65306 14.8169 4.44898 14.7158 4.34694 14.6146L2.30612 12.5912C2.20408 12.49 2.20408 12.3889 2.10204 12.3889C2.10204 12.2877 2 12.1865 2 12.0854C2 11.9842 2 11.883 2.10204 11.7819C2.10204 11.6807 2.20408 11.5795 2.30612 11.5795L4.34694 9.55612C4.65306 9.25261 5.16327 9.25261 5.46939 9.55612C5.77551 9.85963 5.77551 10.3655 5.46939 10.669L4.7551 11.3772H8.93878C9.34694 11.3772 9.7551 11.6807 9.7551 12.1865C9.7551 12.6924 9.34694 12.7936 8.93878 12.7936H4.65306L5.36735 13.5017C5.67347 13.8052 5.67347 14.3111 5.36735 14.6146C5.26531 14.7158 5.06122 14.8169 4.85714 14.8169Z" fill="#7C2D12"></path> </g></svg>

<span class="hidden sm:block">Logout </span></button>
    </form>
    </form>
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
                <div class="mt-16 flex justify-center">
                    @if($index < count($questions) - 1)
                        <button onclick="$('#resetButton').click()" type="button" id="nextbtn" class="next-btn mb-6 button right_button btn" data-next="{{ $index + 1 }}">
                            <span>Next</span>
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5061 3.43557C12.8178 3.16281 13.2917 3.19439 13.5644 3.50612L20.5644 11.5061C20.8119 11.7889 20.8119 12.2111 20.5644 12.4939L13.5644 20.4939C13.2917 20.8056 12.8178 20.8372 12.5061 20.5644C12.1944 20.2917 12.1628 19.8178 12.4356 19.5061L18.3472 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H18.3472L12.4356 4.49388C12.1628 4.18215 12.1944 3.70833 12.5061 3.43557Z" fill="#7C2D12"></path> </g></svg>
                        </button>
                    @endif
                    @if($index == count($questions) - 1)
                        <button type="submit" class="finish-btn mb-6 button right_button btn">Finish
                        <svg fill="#7C2D12" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 335.765 335.765" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <polygon points="311.757,41.803 107.573,245.96 23.986,162.364 0,186.393 107.573,293.962 335.765,65.795 "></polygon> </g> </g> </g></svg>
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
  

</body>
<script src="{{ asset('js/app.js') }}"></script>

</html>
