<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Post {
    public static function all() {
        return [
            [
                'Id' => 1,
                'slug' => 'artikel-1',
                'Judul' => 'Judul 1',
                'Penulis' => 'Adit',
                'Isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem minus doloremque adipisci harum est ipsa sapiente, eum cupiditate minima nihil unde. Possimus facere consequuntur iste quam. Dolorum laboriosam aperiam qui.'
            ],
            [
                'Id' => 2,
                'slug' => 'artikel-2',
                'Judul' => 'Judul 2',
                'Penulis' => 'Adit',
                'Isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam eveniet harum sapiente blanditiis. Aspernatur enim, eos mollitia at dolorem provident est. Repellat illo quaerat unde optio odit, maxime tenetur?'
            ]
        ];
    }

    public static function find($slug): array {
        $Post = Arr::first(static::all(), fn($Post) => $Post['slug'] == $slug);

        if (! $Post) {
            abort(404);
        }

        return $Post;
    }
};
