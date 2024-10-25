<h1>
    <a href="/" class="text-3xl font-bold underline">
        Blog Posts
    </a>
</h1>

@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif

@if (count($posts) > 0)
    <ul class="list-disc list-inside">
        @foreach ($posts as $post)
            <li class="my-2">
                <a href="{{ route('posts.show', $post->id) }}" class="text-blue-500 hover:underline">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>
@else
    <p class="text-gray-500">No posts found.</p>
@endif

<a href="{{ route('posts.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    Create a new post
</a>
