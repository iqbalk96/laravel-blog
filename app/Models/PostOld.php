<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Bang Iqbal",
            "image" => "https://kopi.dev/static/29c7e361449d99b9f6849599d02b24ea/company-using-react.png",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam assumenda minus deserunt. Voluptate ullam est animi error illo modi voluptatum ut, minima quis, totam eveniet maiores quod numquam vitae architecto ab temporibus? Facere aspernatur ducimus, cum sed in reprehenderit laborum nemo provident, veniam aperiam sequi temporibus sunt molestias ipsam quaerat totam minima, nobis quia alias. In voluptatem rerum deleniti cum non minus neque assumenda odio vitae ea, ad, voluptate, exercitationem eos similique? Dolore nobis vel aperiam quaerat est. Cumque, officia?"
        ],
        [
            "title" => "Judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Kak Karin",
            "image" => "https://codebrisk.com/assets/images/posts/1625808060_laravel-banner1.webp",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit quod possimus perferendis maxime? Inventore optio voluptates mollitia et delectus temporibus totam adipisci excepturi officia voluptatem laborum id, voluptatum iusto eos illum quos nihil quod ut aliquam consequatur nobis odio, rerum molestias suscipit? Eum tenetur repudiandae autem libero aut corrupti asperiores quam quos ipsam dolore, magni est laborum explicabo quas sapiente voluptatem nisi aliquid ducimus? Sequi, ullam vitae enim fugiat fugit ducimus. Necessitatibus accusantium dolore nisi laudantium alias, voluptates similique, consectetur recusandae labore adipisci molestiae repellendus veniam voluptatibus id obcaecati eius ducimus suscipit earum illo error esse! Maiores aliquam blanditiis iure!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
