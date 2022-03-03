<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();
        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
           'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'excerpt' => 'Mi Familia dolor sit amet, consectetur adipiscing elit. Vivamus vestibulum, nunc eu lobortis pharetra, metus purus tristique eros, sed efficitur augue sapien et lacus.',
            'body' => 'Mi Familia dolor sit amet, consectetur adipiscing elit. Vivamus vestibulum, nunc eu lobortis pharetra, metus purus tristique eros, sed efficitur augue sapien et lacus. Praesent sed ultricies felis. Duis ligula mauris, consequat et mattis vitae, congue ac tortor. Integer hendrerit arcu in risus pellentesque, ac fringilla odio euismod. Quisque tincidunt, enim quis accumsan semper, elit neque aliquet lacus, vel pharetra nulla sem sit amet ligula. Praesent consectetur quam pharetra ex molestie maximus. Nam gravida euismod leo, sit amet interdum eros facilisis rhoncus. Morbi ac eleifend risus. Duis in dictum sapien. Duis fermentum eu leo ut lobortis. Donec non ipsum felis. Duis libero nunc, efficitur vitae efficitur a, condimentum at libero. Donec ac urna vel magna lobortis laoreet.',
            'slug' => 'my-family-post'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'excerpt' => 'Work laoreet, magna vitae egestas suscipit, lectus dolor lobortis magna, nec gravida diam tellus aliquet sem.',
            'body' => 'Work laoreet, magna vitae egestas suscipit, lectus dolor lobortis magna, nec gravida diam tellus aliquet sem. Quisque semper tristique risus in elementum. Praesent nec pellentesque quam, non semper dolor. Curabitur a efficitur orci, ac semper nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris sit amet finibus felis, nec consectetur urna. In ullamcorper imperdiet nibh. Suspendisse mattis, nibh a dictum iaculis, elit sem mattis eros, eget rutrum magna ante ut tellus. Nullam dapibus orci nunc, ut tempus nunc maximus sit amet. Proin mollis eget arcu commodo mattis. Nullam in ullamcorper leo, id porta diam.',
            'slug' => 'my-work-post'
        ]);
    }
}
