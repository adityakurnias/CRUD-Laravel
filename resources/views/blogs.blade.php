<x-layout>
  <x-slot:judul>{{ $page }}</x-slot:judul>

    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 justify-center items-center mx-auto max-w-screen-lg">
    @foreach ($Posts as $Post)
        <article class="mb-3 p-4 bg-white shadow-md rounded-md">
            <a href="/blog/{{ $Post['slug'] }}">
                <h2 class="text-3xl font-bold">{{ $Post['Judul'] }}</h2>
            </a>
            <span class="text-gray-500 italic font-light">
                <a href="#" class="text-blue-700">{{ $Post['Penulis'] }}</a> | 99 February 2077
            </span>
            <p>{{ Str::limit($Post['Isi'], 100) }}</p>
            <a href="/blog/{{ $Post['slug'] }}" class="text-blue-500">Read more &raquo;</a>
        </article>
    @endforeach
    </div>
</x-layout>
