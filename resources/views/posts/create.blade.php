<h1>Create a new post</h1>

@if (session('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline">{{ session('error') }}</span>
    </div>
@endif

<form method="post" action="{{ route('posts.store') }}" class="space-y-4">
    @csrf

    <div>
        <label for="title" class="block text-sm font-medium text-gray-700">Title:</label>
        <input type="text" id="title" name="title"
            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
    </div>

    <div>
        <label for="content" class="block text-sm font-medium text-gray-700">Content:</label>
        <textarea id="content" name="content" rows="4"
            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
    </div>

    <div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Create
        </button>
    </div>

</form>
