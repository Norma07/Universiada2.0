<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
<<<<<<< HEAD
     * Run the database seeds.
=======
     * Seed the application's database.
>>>>>>> f0fe922445c2344da58c72c0a2dbd64b1195f006
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        // $this->call(UsersTableSeeder::class);
=======
          // La creación de datos de roles debe ejecutarse primero
    $this->call(RoleTableSeeder::class);

    // Los usuarios necesitarán los roles previamente generados
    $this->call(UserTableSeeder::class);
>>>>>>> f0fe922445c2344da58c72c0a2dbd64b1195f006
    }
}
