<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VideoContent;

class VideoContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker\Factory::create();
        $video = VideoContent::create([
            'name' => 'Super Admin',
            'title' => 'admin@mail.com',
            'description' => Hash::make('admin123'),
            'video' => 'USA',
            'videoname' => 1,
            'video_path' => 1,
            'category_id' => 'Male',
        ]);
    }
}
