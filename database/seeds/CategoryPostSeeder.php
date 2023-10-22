<?php

use App\Models\CategoryPost;
use Illuminate\Database\Seeder;

class CategoryPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CategoryPost::class, 100)->create();
    }
}
