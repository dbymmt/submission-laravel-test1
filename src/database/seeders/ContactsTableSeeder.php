<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Contact;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $categories = Category::all();
        
        // Contact::factory(35)->create([
        //     'category_id' => $categories->random()->id
        // ]);
        Contact::factory(5)->create();
    }
}
