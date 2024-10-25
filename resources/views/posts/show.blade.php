<div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>

    <p class="text-gray-700 mb-6">{{ $post->content }}</p>

    <div class="flex items-center space-x-4 text-sm text-gray-500">
        <p>Created at: {{ $post->created_at->format('jS F Y') }}</p>
        <p>Updated at: {{ $post->updated_at->format('jS F Y') }}</p>
    </div>

    <a href="{{ route('posts.edit', $post->id) }}"
        class="mt-6 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Edit
    </a>
</div>
