<!DOCTYPE html>
<html lang="en">
<head>
@vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mk_charts.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,500&display=swap" rel="stylesheet">
    <style>
         
         #topLoader { width: 256px; height: 256px; margin-bottom: 32px; }
        #container { width: 940px; padding: 10px; margin-left: auto; margin-right: auto; }
        #animateButton { width: 256px; }
    </style>

</head>
<body class="h-full flex flex-col items-center w-full" style="background-image: url('{{ asset('img/bg.png')}}');">
    <a href="{{ route('quiz.index') }}" class=" button gobackbtn btn">
    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M11 9L8 12M8 12L11 15M8 12H16M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#7C2D12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>

<span class="hidden sm:block">Go Back </span></a>
   



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
        <div class="bg-gray-100  mt-6 p-12 textsection question-box section ">
            <h3 class="title_card"> 
                <div class="title_content">
                  <svg  width="56px" height="56px" version="1.1" id="Uploaded to svgrepo.com" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.64"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .avocado_een{fill:#231F20;} .avocado_drie{fill:#7C2D12;} .avocado_zes{fill:#FCD34D;} .st0{fill:#E0A838;} .st1{fill:#EAD13F;} .st2{fill:#788287;} .st3{fill:#DBD2C1;} .st4{fill:#3D3935;} .st5{fill:#6F9B45;} .st6{fill:#CC4121;} .st7{fill:#E598A3;} .st8{fill:#D36781;} .st9{fill:#8D3E93;} .st10{fill:#BF63C1;} .st11{fill:#A3AEB5;} .st12{fill:#AF9480;} .st13{fill:#0E608E;} .st14{fill:#248EBC;} .st15{fill:#D1712A;} .st16{fill:#C3CC6A;} </style> <g> <path class="avocado_zes" d="M1.521,11.518l10.163-4.209l4.209,10.163L5.73,21.68L1.521,11.518z M20.316,7.308l-3.234,7.808 l1.379,3.33l7.808,3.234l4.209-10.163L20.316,7.308z"></path> <polygon class="avocado_drie" points="21.567,25.944 17.082,15.116 20.316,7.308 18.469,6.543 16,12.503 13.531,6.543 11.684,7.308 15.893,17.471 13.538,18.446 10.433,25.944 12.28,26.709 16,17.729 19.72,26.709 "></polygon> <path class="avocado_een" d="M23.293,14.494l-2.772-1.148l1.148-2.772l2.772,1.148L23.293,14.494z M26.065,15.642 l-2.772-1.148l-1.148,2.772l2.772,1.148L26.065,15.642z M11.479,13.346l-1.148-2.772l-2.772,1.148l1.148,2.772L11.479,13.346z M8.707,14.494l-2.772,1.148l1.148,2.772l2.772-1.148L8.707,14.494z M26.54,22.333l-7.154-2.963l2.835,6.845l-2.772,1.148 L16,19.035l-3.449,8.327l-2.772-1.148l2.835-6.845L5.46,22.333L0.868,11.247l12.934-5.358L16,11.196l2.198-5.307l12.934,5.358 L26.54,22.333z M16.541,12.503l0.541,1.307l2.581-6.231l-0.924-0.383L16.541,12.503z M10.62,19.114l-0.765-1.848l2.772-1.148 l0.765,1.848L15.24,17.2l-0.765-1.848l-1.848,0.765l-1.148-2.772l1.848-0.765l-1.148-2.772l-1.848,0.765L9.565,8.727L6.794,9.875 l0.765,1.848l-2.772,1.148l-0.765-1.848l-1.848,0.765l0.765,1.848l1.848-0.765l1.148,2.772l-1.848,0.765l1.148,2.772l1.848-0.765 l0.765,1.848L10.62,19.114z M15.227,18.288l-1.307,0.541l-2.835,6.845l0.924,0.383L15.227,18.288z M20.914,25.674L13.261,7.196 l-0.924,0.383l7.654,18.478L20.914,25.674z M24.151,20.262l0.765-1.848l1.848,0.765l1.148-2.772l-1.848-0.765l1.148-2.772 l1.848,0.765l0.765-1.848l-1.848-0.765l-0.765,1.848l-2.772-1.148l0.765-1.848l-2.772-1.148l-0.765,1.848l-1.848-0.765 l-1.148,2.772l1.848,0.765l-1.148,2.772l-1.611-0.667l0.944,2.279l0.667-1.611l2.772,1.148l-0.765,1.848L24.151,20.262z"></path> </g> </g></svg>
                    <span class="about">Result :</span>
                </div>
            </h3>
            <p class="    description font-bold">
                Congratulations <span class="text-orange-900 font-bold">     
                    {{Auth::user()->username}} </span> ! You have completed the quiz
            </p>
            <span class="about ">Score overview :</span>
            <div class="flex justify-between items-center ">
                

           <p class="mr-6 font-bold">You got {{ $correctCount }} out of {{ $totalQuestions }} questions correct!</p>
           

              <div class="mkCharts" data-percent="{{ $scorePercentage }}"></div>
           </div>
          
        </div>
        </div>
      
       
  
</div>

  </div>
 
  
</body>
<script src="{{ asset('js/mk_charts.js') }}"></script>

</html>

<!-- <p>You got {{ $correctCount }} out of {{ $totalQuestions }} questions correct!</p>
<p>Score: {{ $scorePercentage }}%</p> -->