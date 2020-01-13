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
                     'password'          => '$2y$10$B7Gyt3w3LcYNG5IXRQWT4uXa7O3asOsckj5cuosOpI9seaiAmASuy', // password
                    
                     //'remember_token'    => Str::random(10),
                 ]
                 
             ]
          );

          DB::table('professeurs')->insert(
            [
                 [
                     'name_prof'              => 'Moustapha Ndour',
                     'matiere'              => 'Réseau',
                     'grade'              => 'Docteur'
                 ],
                 [
                    'name_prof'              => 'Moussa Mbaye',
                     'matiere'              => 'Algorithme',
                     'grade'              => 'Ingenieur'
                 ],
                 [
                    'name_prof'              => 'Saliou Faye',
                     'matiere'              => 'Java',
                     'grade'              => 'Technicien'
                ]
             ]
          );

          
    }
}
