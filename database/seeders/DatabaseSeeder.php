<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name'      => 'Redwan Sarif',
            'username'  => 'wanrif',
            'email'     => 'redwan@gmail.com',
            'password'  => bcrypt('12345'),
        ]);
        
        // User::create([
        //     'name'      => 'Syakira',
        //     'email'     => 'kira@gmail.com',
        //     'password'  => bcrypt('12345'),
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title'     => 'Judul Pertama',
        //     'slug'      => 'judul-pertama',
        //     'excerpt'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, eos nihil. Rem, blanditiis omnis nisi nulla, necessitatibus',
        //     'body'      => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, eos nihil. Rem, blanditiis omnis nisi nulla, necessitatibus, animi ea delectus iusto dicta et nihil eligendi molestias fugit vel autem perspiciatis molestiae deserunt veniam cupiditate quia. Consectetur rem quibusdam in, est eligendi enim reiciendis pariatur iure illum, corrupti quidem quasi unde atque dignissimos aut libero, ipsum praesentium earum esse nulla ex impedit eveniet. Tempora vel adipisci, ab perferendis aspernatur, voluptatibus iure provident sapiente a quod aperiam tempore fuga unde maiores aut obcaecati sit consectetur magni cum rerum. Ipsa culpa fugiat aliquam aspernatur? Voluptatem suscipit eius, repellat assumenda nostrum illo dolorem omnis?',
        //     'category_id' => 1,
        //     'user_id'   => 1,
        // ]);

        // Post::create([
        //     'title'     => 'Judul Ke Dua',
        //     'slug'      => 'judul-ke-dua',
        //     'excerpt'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, eos nihil. Rem, blanditiis omnis nisi nulla, necessitatibus',
        //     'body'      => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, eos nihil. Rem, blanditiis omnis nisi nulla, necessitatibus, animi ea delectus iusto dicta et nihil eligendi molestias fugit vel autem perspiciatis molestiae deserunt veniam cupiditate quia. Consectetur rem quibusdam in, est eligendi enim reiciendis pariatur iure illum, corrupti quidem quasi unde atque dignissimos aut libero, ipsum praesentium earum esse nulla ex impedit eveniet. Tempora vel adipisci, ab perferendis aspernatur, voluptatibus iure provident sapiente a quod aperiam tempore fuga unde maiores aut obcaecati sit consectetur magni cum rerum. Ipsa culpa fugiat aliquam aspernatur? Voluptatem suscipit eius, repellat assumenda nostrum illo dolorem omnis?',
        //     'category_id' => 1,
        //     'user_id'   => 1,
        // ]);

        // Post::create([
        //     'title'     => 'Judul Ke Tiga',
        //     'slug'      => 'judul-ke-tiga',
        //     'excerpt'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, eos nihil. Rem, blanditiis omnis nisi nulla, necessitatibus',
        //     'body'      => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, eos nihil. Rem, blanditiis omnis nisi nulla, necessitatibus, animi ea delectus iusto dicta et nihil eligendi molestias fugit vel autem perspiciatis molestiae deserunt veniam cupiditate quia. Consectetur rem quibusdam in, est eligendi enim reiciendis pariatur iure illum, corrupti quidem quasi unde atque dignissimos aut libero, ipsum praesentium earum esse nulla ex impedit eveniet. Tempora vel adipisci, ab perferendis aspernatur, voluptatibus iure provident sapiente a quod aperiam tempore fuga unde maiores aut obcaecati sit consectetur magni cum rerum. Ipsa culpa fugiat aliquam aspernatur? Voluptatem suscipit eius, repellat assumenda nostrum illo dolorem omnis?',
        //     'category_id' => 2,
        //     'user_id'   => 1,
        // ]);

        // Post::create([
        //     'title'     => 'Judul Ke Empat',
        //     'slug'      => 'judul-ke-empat',
        //     'excerpt'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, eos nihil. Rem, blanditiis omnis nisi nulla, necessitatibus',
        //     'body'      => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, eos nihil. Rem, blanditiis omnis nisi nulla, necessitatibus, animi ea delectus iusto dicta et nihil eligendi molestias fugit vel autem perspiciatis molestiae deserunt veniam cupiditate quia. Consectetur rem quibusdam in, est eligendi enim reiciendis pariatur iure illum, corrupti quidem quasi unde atque dignissimos aut libero, ipsum praesentium earum esse nulla ex impedit eveniet. Tempora vel adipisci, ab perferendis aspernatur, voluptatibus iure provident sapiente a quod aperiam tempore fuga unde maiores aut obcaecati sit consectetur magni cum rerum. Ipsa culpa fugiat aliquam aspernatur? Voluptatem suscipit eius, repellat assumenda nostrum illo dolorem omnis?',
        //     'category_id' => 2,
        //     'user_id'   => 2,
        // ]);

    }
}