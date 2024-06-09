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
                    <span class="about">Leaderboard :</span>
                </div>
            </h3>
            <p class="   description font-bold">
            quiz game's leaderboard lets you check your score and compare it with friends by selecting a category. See how you rank, track progress, and fuel healthy competition in a fun and educational way.
            </p>
            <div class="mt-8"> <!-- Reduced margin-top from mt-16 to mt-8 -->

                <form action="{{ route('leaderboard.index') }}" method="GET" class="flex items-center justify-between mt-2"> <!-- Reduced margin-top from mt-4 to mt-2 -->
                    <div class="button_container mt-6">
                        <div class="button left_button ">   
                            <div class="form-group mr-4">
                                <label for="large" class="block mb-1 text-base text-gray-900 dark:text-dark font-bold ml-4"> <!-- Reduced margin-bottom from mb-3 to mb-1 -->
                                    Choose Category 
                                </label>
                                <select id="large" class="selectn1 block w-full px-4 py-3 text-base text-orange-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-amber-300 dark:border-orange-900 dark:placeholder-gray-400 dark:text-orange-900 font-bold dark:focus:ring-blue-500 dark:focus:border-blue-500" name="category_id">
                                    <option selected>Choose Category</option>
                                    @foreach($categories as $category)  
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="button right_button btn">View Leaderboard</button>
                </form>
                
            </div>
        </div>
       
        </div>
       
       
    <div>
    @if($selectedCategoryId)
      
    <table class="mt-6 p-12 textsection section min-w-full bg-white w-full">
    <thead>
        <tr>
            <th colspan="3" class="py-2 px-4 border-gray-300 text-center">Top 10 Players in {{ $categories->find($selectedCategoryId)->name }}</th>
        </tr>
        <tr>
            <th class="py-2 px-4 border-b-2 border-gray-300 text-center">Rank</th>
            <th class="py-2 px-4 border-b-2 border-gray-300 text-center">Player</th>
            <th class="py-2 px-4 border-b-2 border-gray-300 text-center">Score</th>
        </tr>
    </thead>
    <tbody class=" font-bold ">
        @foreach($leaderboard as $index => $score)
            <tr class="{{ $index === 0 ? 'bg-amber-300' : '' }}">
                <td class="py-2 px-4 border-b border-gray-200 text-center">{{ $index + 1 }}</td>
                <td class="py-2 px-4 border-b border-gray-200 text-center">{{ $score->user->username }}</td>
                @if($index === 0)
                <td class="py-2 px-4 border-b border-gray-200 text-center ">
                    <div class="flex items-center justify-end">
                        <span class="mr-2">{{ $score->score }}</span>
                            <svg width="25px" height="25px" viewBox="-3.5 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M9.73795 18.8436L12.9511 20.6987L6.42625 32L4.55349 27.8233L9.73795 18.8436Z" fill="#CE4444"></path>
                                    <path d="M9.73795 18.8436L6.52483 16.9885L0 28.2898L4.55349 27.8233L9.73795 18.8436Z" fill="#983535"></path>
                                    <path d="M14.322 18.8436L11.1088 20.6987L17.6337 32L19.5064 27.8233L14.322 18.8436Z" fill="#983535"></path>
                                    <path d="M14.322 18.8436L17.5351 16.9885L24.0599 28.2898L19.5064 27.8233L14.322 18.8436Z" fill="#CE4444"></path>
                                    <path d="M22.9936 11.0622C22.9936 17.1716 18.0409 22.1243 11.9314 22.1243C5.82194 22.1243 0.869249 17.1716 0.869249 11.0622C0.869249 4.9527 5.82194 0 11.9314 0C18.0409 0 22.9936 4.9527 22.9936 11.0622Z" fill="url(#paint0_linear_103_1801)"></path>
                                    <path d="M20.5665 11.0621C20.5665 15.8311 16.7004 19.6972 11.9315 19.6972C7.16247 19.6972 3.29645 15.8311 3.29645 11.0621C3.29645 6.29315 7.16247 2.42713 11.9315 2.42713C16.7004 2.42713 20.5665 6.29315 20.5665 11.0621Z" fill="#A88300"></path>
                                    <path d="M21.0477 11.984C21.0477 16.7641 17.1727 20.6391 12.3926 20.6391C7.61251 20.6391 3.73748 16.7641 3.73748 11.984C3.73748 7.20389 7.61251 3.32887 12.3926 3.32887C17.1727 3.32887 21.0477 7.20389 21.0477 11.984Z" fill="#C28B37"></path>
                                    <path d="M20.5868 11.0621C20.5868 15.8422 16.7118 19.7172 11.9317 19.7172C7.15159 19.7172 3.27656 15.8422 3.27656 11.0621C3.27656 6.28205 7.15159 2.40702 11.9317 2.40702C16.7118 2.40702 20.5868 6.28205 20.5868 11.0621Z" fill="#C09525"></path>
                                    <path d="M11.9781 5.04096L13.8451 8.77502L17.5792 9.24178L15.0151 12.117L15.7122 16.2431L11.9781 14.3761L8.24404 16.2431L8.94729 12.117L6.37701 9.24178L10.1111 8.77502L11.9781 5.04096Z" fill="url(#paint1_linear_103_1801)"></path>
                                    <defs>
                                        <linearGradient id="paint0_linear_103_1801" x1="11.1804" y1="4.03192" x2="12.6813" y2="31.965" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FFC600"></stop>
                                            <stop offset="1" stop-color="#FFDE69"></stop>
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_103_1801" x1="11.9783" y1="5.04096" x2="11.9783" y2="16.2431" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FFFCDD"></stop>
                                            <stop offset="1" stop-color="#FFE896"></stop>
                                        </linearGradient>
                                    </defs>
                                </g>
                            </svg>
                        
                        @else
                        <td class="py-2 px-2 border-b border-gray-200  ">
                    
                        <span class="ml-56 px-4">{{ $score->score }}</span>
                    </div>
                </td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>


        @endif
    </div>
</div>

  </div>
 
  
</body>


</html>
<!-- <div class="container">
    <h1>Leaderboard</h1>
    
    <form action="{{ route('leaderboard.index') }}" method="GET">
        <div class="form-group">
            <label for="category_id">Select Category:</label>
            <select name="category_id" id="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $selectedCategoryId == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">View Leaderboard</button>
    </form>

    @if($selectedCategoryId)
        <h2>Top 10 Players in {{ $categories->find($selectedCategoryId)->name }}</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Player</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
                @foreach($leaderboard as $index => $score)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $score->user->username }}</td> 
                        <td>{{ $score->score }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div> -->




    <!-- @if($selectedCategoryId)
        <h2>Top 10 Players in {{ $categories->find($selectedCategoryId)->name }}</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Player</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
                @foreach($leaderboard as $index => $score)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $score->user->username }}</td> 
                        <td>{{ $score->score }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif -->