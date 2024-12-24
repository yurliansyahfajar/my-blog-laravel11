<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-5 max-w-screen-md">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-gray-500 text-base">
            <a href="#">{{ $post['author'] }}</a> | {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">
            {{ $post['body'] }}
        </p>
        <a href="/posts" class="font-medium hover:underline text-blue-500">&laquo; Back to posts</a>
    </article>
</x-layout>
