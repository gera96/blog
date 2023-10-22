<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'user_id' => '1',
                'name' => 'Laravel',
                'slug' => 'laravel',
                'is_published' => '1',
            ],
            [
                'user_id' => '1',
                'name' => 'WordPress',
                'slug' => 'wordPress',
                'is_published' => '1',
            ],
            [
                'user_id' => '1',
                'name' => 'Python',
                'slug' => 'python',
                'is_published' => '1',
            ],
            [
                'user_id' => '1',
                'name' => 'Javascript',
                'slug' => 'javascript',
                'is_published' => '1',
            ],
            [
                'user_id' => '1',
                'name' => 'Django',
                'slug' => 'django',
                'is_published' => '1',
            ]
        ]);
    }
}
