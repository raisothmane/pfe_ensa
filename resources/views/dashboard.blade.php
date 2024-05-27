<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   

                    @if (session('error'))
                        <div class="alert alert-danger bg-red-500 text-white p-4 mb-4">
                            {{ session('error') }}
                        </div>
                        <script>
                            setTimeout(function() {
                                document.querySelector('.alert').remove();
                            }, 3000);
                        </script>
                    @endif

                    {{ __("You're logged in!") }}
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
