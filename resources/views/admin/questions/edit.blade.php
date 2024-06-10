<x-app-layout>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  
                <h1 class="text-center font-bold">Edit Question</h1>
 
    <form class="max-w-sm mx-auto mt-12" action="{{ route('admin.questions.update', $question->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-black" for="category_id">Category</label>
            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " id="category_id" name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $question->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-black" for="text">Text</label>
            <textarea  rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " id="text" name="text" value="{{ $question->text }}"> {{ $question->text }} </textarea
            
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-black" for="correct_answer">Correct Answer ID</label>
            <input  type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500" id="correct_answer" name="correct_answer" value="{{ $question->correct_answer }}">
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-black"  for="difficulty">Difficulty</label>
            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " id="difficulty" name="difficulty">
                <option value="easy" {{ $question->difficulty == 'easy' ? 'selected' : '' }}>Easy</option>
                <option value="hard" {{ $question->difficulty == 'hard' ? 'selected' : '' }}>Hard</option>
            </select>
        </div>
        <button type="submit" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Update</button>
    </form>
    </div>
            </div>
        </div>
    </div>
</x-app-layout>