<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('beranda', [
        "title" => "Kelurahan Mangkubumi | Beranda"
    ]);
});
Route::get('/profil', function () {
    return view('profil', [
        "title" => "Kelurahan Mangkubumi | Profil"
    ]);
});
Route::get('/berita', function () {
    $post_berita = [
        [
            "image" => "images/berita6.jpg",
            "title" => "Berita 1",
            "slug" => "berita-1",
            "author" => "Zibran",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque provident veniam fugiat perspiciatis maiores exercitationem eaque eveniet minima unde veritatis nisi ipsa quae, aliquam ducimus sunt ut quo numquam commodi? Laboriosam deleniti repellendus harum aperiam unde excepturi temporibus nostrum qui!"
        ],
        [
            "image" =>"images/berita4.jpg",
            "title" => "Berita 2",
            "slug" => "berita-2",
            "author" => "Habil",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque provident veniam fugiat perspiciatis maiores exercitationem eaque eveniet minima unde veritatis nisi ipsa quae, aliquam ducimus sunt ut quo numquam commodi? Laboriosam deleniti repellendus harum aperiam unde excepturi temporibus nostrum qui!"
        ],
        [
            "image" => "images/berita5.jpg",
            "title" => "Berita 3",
            "slug" => "berita-3",
            "author" => "Pramudya",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque provident veniam fugiat perspiciatis maiores exercitationem eaque eveniet minima unde veritatis nisi ipsa quae, aliquam ducimus sunt ut quo numquam commodi? Laboriosam deleniti repellendus harum aperiam unde excepturi temporibus nostrum qui!"
        ],
        [
            "image" => "images/berita4.jpg",
            "title" => "Berita 4",
            "slug" => "berita-4",
            "author" => "Zibran",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque provident veniam fugiat perspiciatis maiores exercitationem eaque eveniet minima unde veritatis nisi ipsa quae, aliquam ducimus sunt ut quo numquam commodi? Laboriosam deleniti repellendus harum aperiam unde excepturi temporibus nostrum qui!"
        ],
        [
            "image" => "images/berita5.jpg",
            "title" => "Berita 5",
            "slug" => "berita-5",
            "author" => "Pramudya",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque provident veniam fugiat perspiciatis maiores exercitationem eaque eveniet minima unde veritatis nisi ipsa quae, aliquam ducimus sunt ut quo numquam commodi? Laboriosam deleniti repellendus harum aperiam unde excepturi temporibus nostrum qui!"
        ],
        [
            "image" => "images/berita6.jpg",
            "title" => "Berita 6",
            "slug" => "berita-6",
            "author" => "Habil",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque provident veniam fugiat perspiciatis maiores exercitationem eaque eveniet minima unde veritatis nisi ipsa quae, aliquam ducimus sunt ut quo numquam commodi? Laboriosam deleniti repellendus harum aperiam unde excepturi temporibus nostrum qui!"
        ]
        ];

    return view('berita', [
        "title" => "Kelurahan Mangkubumi | Berita",
        "berita" => $post_berita
    ]);
});

// Halaman Single Post Berita
Route::get('berita/{slug}', function($slug){
    $post_berita = [
        [
            "image" => "images/berita6.jpg",
            "title" => "Berita 1",
            "slug" => "berita-1",
            "author" => "Zibran",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque provident veniam fugiat perspiciatis maiores exercitationem eaque eveniet minima unde veritatis nisi ipsa quae, aliquam ducimus sunt ut quo numquam commodi? Laboriosam deleniti repellendus harum aperiam unde excepturi temporibus nostrum qui!"
        ],
        [
            "image" =>"images/berita4.jpg",
            "title" => "Berita 2",
            "slug" => "berita-2",
            "author" => "Habil",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque provident veniam fugiat perspiciatis maiores exercitationem eaque eveniet minima unde veritatis nisi ipsa quae, aliquam ducimus sunt ut quo numquam commodi? Laboriosam deleniti repellendus harum aperiam unde excepturi temporibus nostrum qui!"
        ],
        [
            "image" => "images/berita5.jpg",
            "title" => "Berita 3",
            "slug" => "berita-3",
            "author" => "Pramudya",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque provident veniam fugiat perspiciatis maiores exercitationem eaque eveniet minima unde veritatis nisi ipsa quae, aliquam ducimus sunt ut quo numquam commodi? Laboriosam deleniti repellendus harum aperiam unde excepturi temporibus nostrum qui!"
        ],
        [
            "image" => "images/berita4.jpg",
            "title" => "Berita 4",
            "slug" => "berita-4",
            "author" => "Zibran",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque provident veniam fugiat perspiciatis maiores exercitationem eaque eveniet minima unde veritatis nisi ipsa quae, aliquam ducimus sunt ut quo numquam commodi? Laboriosam deleniti repellendus harum aperiam unde excepturi temporibus nostrum qui!"
        ],
        [
            "image" => "images/berita5.jpg",
            "title" => "Berita 5",
            "slug" => "berita-5",
            "author" => "Pramudya",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque provident veniam fugiat perspiciatis maiores exercitationem eaque eveniet minima unde veritatis nisi ipsa quae, aliquam ducimus sunt ut quo numquam commodi? Laboriosam deleniti repellendus harum aperiam unde excepturi temporibus nostrum qui!"
        ],
        [
            "image" => "images/berita6.jpg",
            "title" => "Berita 6",
            "slug" => "berita-6",
            "author" => "Habil",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque provident veniam fugiat perspiciatis maiores exercitationem eaque eveniet minima unde veritatis nisi ipsa quae, aliquam ducimus sunt ut quo numquam commodi? Laboriosam deleniti repellendus harum aperiam unde excepturi temporibus nostrum qui!"
        ]
        ];


        $new_post = [];
        foreach($post_berita as $post){
            if($post["slug"] === $slug){
                $new_post = $post;
            }
        }

    return view('post', [
        "title" => "Berita Tunggal",
        "post" => $new_post
    ]);
});

Route::get('/peta', function () {
    return view('peta', [
        "title" => "Kelurahan Mangkubumi | Peta"
    ]);
});
Route::get('/lembaga', function () {
    return view('lembaga', [
        "title" => "Kelurahan Mangkubumi | Lembaga"
    ]);
});
Route::get('/statistik', function () {
    return view('statistik', [
        "title" => "Kelurahan Mangkubumi | Statistik"
    ]);
});
Route::get('/galeri', function () {
    return view('galeri', [
        "title" => "Kelurahan Mangkubumi | Galeri"
    ]);
});
