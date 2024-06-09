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
<body class="h-full flex flex-col items-center w-full" style="background-image: url('{{ asset('img/bg.png')}}');">
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

<form id="quizForm" action="{{ route('quiz.start') }}" method="GET" onsubmit="return validateForm()">
<div class="bg-gray-100 h-96 mt-6 p-12 textsection question-box section">
    <h3 class="title_card"> 
        <div class="title_content">
            <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
            width="46px" height="46px" viewBox="0 0 160.979 160.979" xml:space="preserve">
                <g>
                    <path d="M160.979,58.223l-33.155-7.547L119.707,97.1c-7.807-5.347-16.788-9.657-26.555-12.136
                        c13.523-9.098,22.834-27.03,22.834-43.178c0-22.789-18.475-41.272-41.26-41.272c-22.792,0-41.272,18.478-41.272,41.272
                        c0,16.148,9.311,34.081,22.834,43.178C23.958,93.166,0,121.23,0,142.025c0,24.588,149.44,24.588,149.44,0
                        c0-6.321-2.234-13.312-6.224-20.216L160.979,58.223z M132.841,58.208l20.375,4.64l-16.033,57.403l-14.607-3.325L132.841,58.208z
                        M74.727,160.457l-20.935-20.935l17.622-42.6h-0.18l-6.848-7.849c3.319,1.193,6.766,1.899,10.346,1.899
                        c3.571,0,7.015-0.706,10.321-1.894l-6.845,7.837h-0.173l17.625,42.6L74.727,160.457z M137.171,139.242
                        c-1.517,6.662-7.131,10.644-14.054,9.067c-6.911-1.571-10.389-7.618-8.872-14.285c1.547-6.79,7.393-10.571,14.176-9.037
                        C135.216,126.534,138.59,132.423,137.171,139.242z"/>
                </g>
            </svg>
            <span class="about">About :</span>
        </div>
    </h3>
    <p class="   description font-bold">
    Welcome to QuizGame Challenge, the ultimate quiz game where you can choose your favorite category and challenge your friends to see who reigns supreme! Dive into a variety of topics ranging from history and science to pop culture and sports. Pick a category, invite your friends, and let the battle of wits begin! </p>
    <div class="button_container ">
        <div class="button left_button">
        <label for="large" class="block mb-3 text-base  text-gray-900 dark:text-dark font-bold ml-4  ">Choose Category </label>
  <select name="category" id="category" class="selectn1 block w-full px-4 py-3 text-base text-orange-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-amber-300 dark:border-orange-900 dark:placeholder-gray-400 dark:text-orange-900 font-bold  dark:focus:ring-blue-500 dark:focus:border-blue-500" name="category_id">
      <option selected>Choose Category</option>
  @foreach($categories as $category)  
  <option  value="{{ $category->id }}">{{ $category->name }}</option>
  @endforeach
  </select>
        </div>
        <button type="submit" class="button right_button btn">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M13.8876 9.9348C14.9625 10.8117 15.5 11.2501 15.5 12C15.5 12.7499 14.9625 13.1883 13.8876 14.0652C13.5909 14.3073 13.2966 14.5352 13.0261 14.7251C12.7888 14.8917 12.5201 15.064 12.2419 15.2332C11.1695 15.8853 10.6333 16.2114 10.1524 15.8504C9.6715 15.4894 9.62779 14.7336 9.54038 13.2222C9.51566 12.7947 9.5 12.3757 9.5 12C9.5 11.6243 9.51566 11.2053 9.54038 10.7778C9.62779 9.26636 9.6715 8.51061 10.1524 8.1496C10.6333 7.78859 11.1695 8.11466 12.2419 8.76679C12.5201 8.93597 12.7888 9.10831 13.0261 9.27492C13.2966 9.46483 13.5909 9.69274 13.8876 9.9348Z" stroke="#7C2D12" stroke-width="1.5"></path> <path d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7" stroke="#7C2D12" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>

<span>Play Now </span></button>
    </div>
</div>
                </div>
                
                





       
    </form>

    <div class="card">
    <div class="content w-96 mt-4">
    <a href="{{ route('leaderboard.index') }}" class="leaderboardbtn">
    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.096"></g><g id="SVGRepo_iconCarrier"> <path d="M16 4.00195C18.175 4.01406 19.3529 4.11051 20.1213 4.87889C21 5.75757 21 7.17179 21 10.0002V16.0002C21 18.8286 21 20.2429 20.1213 21.1215C19.2426 22.0002 17.8284 22.0002 15 22.0002H9C6.17157 22.0002 4.75736 22.0002 3.87868 21.1215C3 20.2429 3 18.8286 3 16.0002V10.0002C3 7.17179 3 5.75757 3.87868 4.87889C4.64706 4.11051 5.82497 4.01406 8 4.00195" stroke="#7C2D12" stroke-width="1.5"></path> <path d="M10.5 14L17 14" stroke="#7C2D12" stroke-width="1.5" stroke-linecap="round"></path> <path d="M7 14H7.5" stroke="#7C2D12" stroke-width="1.5" stroke-linecap="round"></path> <path d="M7 10.5H7.5" stroke="#7C2D12" stroke-width="1.5" stroke-linecap="round"></path> <path d="M7 17.5H7.5" stroke="#7C2D12" stroke-width="1.5" stroke-linecap="round"></path> <path d="M10.5 10.5H17" stroke="#7C2D12" stroke-width="1.5" stroke-linecap="round"></path> <path d="M10.5 17.5H17" stroke="#7C2D12" stroke-width="1.5" stroke-linecap="round"></path> <path d="M8 3.5C8 2.67157 8.67157 2 9.5 2H14.5C15.3284 2 16 2.67157 16 3.5V4.5C16 5.32843 15.3284 6 14.5 6H9.5C8.67157 6 8 5.32843 8 4.5V3.5Z" stroke="#7C2D12" stroke-width="1.5"></path> </g></svg>
    <span>Leaderboard </span>
</a>
    </div>
    </div>

</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
