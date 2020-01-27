<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                 [
                     'name'              => 'racky',
                     'email'             => 'racky.wele@gmail.com',
                     'email_verified_at' => now(),
                     'password'          => '$2y$10$bgG9rG2HSTvK/qUWh70JeecLDFA.RgrRE9sW2NPZVfv7OKeT9/DLy', // password
                     'roles'             => 'admin',
                     'remember_token'    => Str::random(10),
                 ],
                 [
                    'name'              => 'Elmounir',
                    'email'             => 'mounir@gmail.com',
                    'email_verified_at' => now(),
                    'password'          => '$2y$10$bgG9rG2HSTvK/qUWh70JeecLDFA.RgrRE9sW2NPZVfv7OKeT9/DLy', // password
                    'roles'             => 'eleve',
                    'remember_token'    => Str::random(10),
                ]
            ]
         );
         
                // [
                  //  'name_prof'              => 'Moussa Mbaye',
                    // 'matiere'              => 'Algorithme',
                     //'grade'              => 'Ingenieur'
                // ],
                 //[
                    //'name_prof'              => 'Saliou Faye',
                     //'matiere'              => 'Java',
                     //'grade'              => 'Technicien'
                //]
             
          

          
    }
}
