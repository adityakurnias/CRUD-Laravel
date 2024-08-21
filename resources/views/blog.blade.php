<x-layout>
    <x-slot:judul>{{ $page }}</x-slot:judul>

    <div class="">
        <article class="mb-3 p-4 ">
            <h2 class="text-3xl font-bold">{{ $Post['Judul'] }}</h2>
            <span class="text-gray-500 italic font-light">
                <a href="#" class="text-blue-700">{{ $Post['Penulis'] }}</a> | 99 February 2077
            </span>
            <p>{{ $Post['Isi'] }}</p>
            <a href="/blogs" class="text-blue-500">&laquo; Back</a>
        </article>
    </div>
  </x-layout>
