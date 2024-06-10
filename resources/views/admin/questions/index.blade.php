
<x-app-layout>
<div class="min-w-[1150px] py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
    <h1 class="text-center font-bold">Questions</h1>
    <a href="{{ route('admin.questions.create') }}"
    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 
   " >Add Question
</a>
    <table  class="table-auto w-full text-center mt-6 border ">
        <thead>
            <tr>
                <th class="border">ID</th>
                <th class="border">Category</th>
                <th class="border">Text</th>
                <th class="border">Correct Answer ID</th>
                <th class="border">Difficulty</th>
                <th class="border">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($questions as $question)
            <tr class="">
                <td class="border">{{ $question->id }}</td>
                <td class="border">{{ $question->category->name }}</td>
                <td class="border">{{ $question->text }}</td>
                <td class="border">{{ $question->correct_answer }}</td>
                <td class="border">{{ $question->difficulty }}</td>
                <td class="border">
                    <a href="{{ route('admin.questions.edit', $question->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                    <form action="{{ route('admin.questions.delete', $question->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1.5 px-2 rounded" onclick="return confirm('Are you sure you want to delete this question?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
          
        </tbody>
    </table>
    <div class="mt-4">

        {{ $questions->links() }}
    </div>
</div>
</x-app-layout>