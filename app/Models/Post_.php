<?php

namespace App\Models;

class Post_
{
    private static $blog_posts = [
        [
            'title'     => 'Judul Post Pertama',
            'slug'      => 'judul-post-pertama',
            'author'    => 'Redwan Sarif',
            'body'      => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae optio facere molestiae nobis! Ipsa quas tempora laboriosam doloremque. Placeat facere amet veritatis doloribus. Recusandae vero similique laborum, officia totam at incidunt non quo atque dolorem eveniet illo hic libero, tempore iure voluptate error fugit! Reprehenderit ut, veniam inventore necessitatibus nisi ipsa ducimus laudantium corrupti laboriosam. Perferendis autem ut, ea earum suscipit nulla ullam est tempora odio. Aliquid, voluptatem tenetur vero obcaecati aspernatur officiis qui facere fugit quisquam soluta iste. Alias?'
        ],
        [
            'title'     => 'Judul Post Kedua',
            'slug'      => 'judul-post-kedua',
            'author'    => 'XOXO',
            'body'      => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus libero fuga molestiae labore accusamus enim, at, cum quibusdam corrupti optio quia animi dolorum! Quis dicta earum veritatis cupiditate dolor beatae officia voluptate alias enim ratione minus, ad error sit molestias tempore maiores eaque quibusdam harum quas nemo? Earum fugiat in dolorem enim provident quae, doloribus inventore quo praesentium sapiente similique repudiandae maxime rerum tempora illo labore temporibus sequi cum facilis consequatur? Iste ea aliquid excepturi tempore cupiditate illum soluta libero, quod eveniet tempora ullam officia nobis eos! Soluta a sapiente, eum culpa id, earum ratione asperiores sed nostrum sunt repellendus.'
        ],
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