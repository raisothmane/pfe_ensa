<x-app-layout>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <h1 class="text-center font-bold">Add Answer</h1>
    
    <form class="max-w-sm mx-auto mt-12" action="{{ route('admin.answers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-black" for="question_id">Question</label>
            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " name="question_id" id="question_id" class="form-control">
                @foreach($questions as $question)
                <option value="{{ $question->id }}">{{ $question->text }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="text">Answer</label>
            <textarea  rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "name="text" id="text"  > </textarea>
        </div>
        <div class="form-group">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-black" for="is_correct">Is Correct</label>
            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " name="is_correct" id="is_correct" class="form-control">
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>
        <button type="submit" class="mt-10  focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Add Answer</button>
    </form>
</div>
</x-app-layout>