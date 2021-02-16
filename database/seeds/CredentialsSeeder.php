<?php

use App\Credential;
use Illuminate\Database\Seeder;

class CredentialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rivas = ['Rivas1', 'Rivas2', 'Rivas3'];

        foreach ($rivas as $value) {
            Credential::create([
                'name' => $value,
            ]);
        }
    }
}
