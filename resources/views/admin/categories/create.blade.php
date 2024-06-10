<x-app-layout>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <h1 class="text-center font-bold">Create Category</h1>
    <form class="max-w-sm mx-auto mt-12" action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-black" for="name">Name</label>
            <input   type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500" id="name" name="name">
        </div>
        <button type="submit" class="mt-6 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Create</button>
    </form>
    </div>
            </div>
        </div>
    </div>



                  
                
    
   
     
    
</x-app-layout>