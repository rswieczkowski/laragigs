<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use App\Models\User;
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
//         User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'j.doe@gmail.com'
        ]) ;

         Listing::factory(30)->create([
             'user_id' => $user->id
         ]);

//         Listing::create([
//             'title'=>'Laravel Senior Developer',
//             'tags'=>'laravel, javascript',
//             'company'=>'Acme Corp',
//             'location'=>'Boston, MA',
//             'email'=>'email@email.com',
//             'website'=>'https://www.acme.com',
//             'description'=>'This is some description for Laravel Senior Developer'
//         ]);
//
//        Listing::create([
//            'title'=>'Full-Stack Engineer',
//            'tags'=>'laravel, backend, api',
//            'company'=>'Stark Industries',
//            'location'=>'New York, MA',
//            'email'=>'email2@email.com',
//            'website'=>'https://www.starkindustries.com',
//            'description'=>'This is some description for Full-Stack Engineer listing'
//        ]);



    }
}
