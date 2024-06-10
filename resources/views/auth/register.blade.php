



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

    
<div class="quiz-container">
<img src="{{ asset('img/quiz_time.png')}}" alt="Quiz Time" class="quiz-img">


<div class="bg-gray-100   mt-6 p-12 textsection question-box section">
    
<form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('username')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex  justify-start  items-start mt-20">
            
        
            

            <a class="group text-orange-900 transition-all duration-300 ease-in-out absolute bottom-10" href="{{ route('login') }}">
            <span class="bg-left-bottom bg-gradient-to-r from-orange-900 to-orange-900  bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out font-bold">   {{ __('Already registered?') }} </span>
            </a>
        
            <button class="next-btn mb-6 button registerbtn btn ">
            <svg  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="add-user-left-6" transform="translate(-2 -2)"> <path id="secondary" fill="rgb(252 211 77)" d="M12,13h2a7,7,0,0,1,7,7h0a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1H5a7,7,0,0,1,7-7Z"></path> <path id="primary" d="M11,3.41A5.11,5.11,0,0,1,13,3a5,5,0,1,1-4.59,7" fill="none" stroke="#7C2D12" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path> <path id="primary-2" data-name="primary" d="M7,5H3M5,7V3m9,10H12a7,7,0,0,0-7,7H5a1,1,0,0,0,1,1H20a1,1,0,0,0,1-1h0A7,7,0,0,0,14,13Z" fill="none" stroke="#7C2D12" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path> </g> </g></svg>
                {{ __('Register') }}
                </button>
          
        </div>
    </form>


                </div>
                
                





       
 

  

</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>














