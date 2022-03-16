<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $tags = ["polemico", "divertente", "abitudini quotidiane"];

        foreach ($tags as $tag) {
            $newTag = new Tag();
            $newTag->name = $tag;

            $newTag->save();
        }

    }
}
