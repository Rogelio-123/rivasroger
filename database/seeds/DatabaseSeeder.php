<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(PermissionsSeeder::class);
        $this->call(CategoryProductsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProvidersTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(CredentialsSeeder::class);
        // $this->call(SalesTableSeeder::class);
    }
}
