<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RumpunsTableSeeder::class);
        $this->call(JabatansTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RoleUsersTableSeeder::class);
        $this->call(BidangTableSeeder::class);
        $this->call(LevelsTableSeeder::class);
        $this->call(LingkupTableSeeder::class);
        $this->call(PartisipasiTableSeeder::class);
        $this->call(PendidikansTableSeeder::class);
        $this->call(JurusansTableSeeder::class);
        $this->call(JenisSertifikatsTableSeeder::class);
        $this->call(BidangUjianSeeder::class);
        $this->call(TipeUjianSeeder::class);
        
    }
}
