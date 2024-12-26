<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @foreach ($posts as $post)
        <article class="py-5 max-w-screen-md border-b border-gray-300">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            <div class="text-gray-500 text-base">
                By
                <a href="/authors/{{ $post->author->id }}" class="hover:underline">{{ $post->author->name }}</a>
                in
                <a href="#" class="hover:underline">
                    Web Programming
                </a>|
                {{ $post->created_at->diffForHumans() }}
            </div>
            <p class="my-4 font-light">
                {{ Str::limit($post['body'], 120) }}
            </p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium hover:underline text-blue-500">Read More &raquo;</a>
        </article>
    @endforeach
</x-layout>
