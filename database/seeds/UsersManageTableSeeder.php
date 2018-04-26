<?php

use Illuminate\Database\Seeder;

class UsersManageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_manage')->insert(
          [
              [
                'name' => str_random(10),
                'email' => str_random(10).'@gmail.com',
                'password' => bcrypt('secret'),
                'level' => 1,
                'created_at' => new \DateTime()
              ],
              [
                'name' => str_random(10),
                'email' => str_random(10).'@gmail.com',
                'password' => bcrypt('secret'),
                'level' => 2,
                'created_at' => new \DateTime()
              ],
              [
                'name' => str_random(10),
                'email' => str_random(10).'@gmail.com',
                'password' => bcrypt('secret'),
                'level' => 2,
                'created_at' => new \DateTime()
              ],
              [
                'name' => str_random(10),
                'email' => str_random(10).'@gmail.com',
                'password' => bcrypt('secret'),
                'level' => 2,
                'created_at' => new \DateTime()
              ]
          ]
      );
    }
}
