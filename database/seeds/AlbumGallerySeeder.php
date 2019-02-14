<?php

use Illuminate\Database\Seeder;

class AlbumGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Web\Album::class, 10)->create()->each(function ($album) {
            $i = rand(5, 15);
            for ($j = 1; $j < $i; $j++) {
                $album->gallery()->save(factory(App\Models\Web\Gallery::class)->make());
            }
        });
    }
}
