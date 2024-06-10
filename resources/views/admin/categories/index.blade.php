<x-app-layout>



<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  
                <h1 class="text-center font-bold">Categories</h1>
    <a href="{{ route('admin.categories.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 ">Add Category</a>
    <table class="table-auto w-full text-center mt-6 ">
        <thead>
            <tr>
                <th class="px-4 py-2 border">ID</th>
                <th class="px-4 py-2 border">Name</th>
                <th class="px-4 py-2 border">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td class="px-4 py-2 border">{{ $category->id }}</td>
                <td class="px-4 py-2 border">{{ $category->name }}</td>
                <td class="px-4 py-2 border">
                    <a href="{{ route('admin.categories.edit', $category->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                    <form action="{{ route('admin.categories.delete', $category->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1.5 px-2 rounded" onclick="return confirm('Are you sure you want to delete this categorie?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">

{{ $categories->links() }} 
</div>  

                   
                </div>
            </div>
        </div>
    
    </div>
</x-app-layout>