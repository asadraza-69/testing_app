<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory()
        // ->count(25)->hasCustomer(1)
        // ->create();
        
        User::factory()
        ->count(25)
        ->has(Customer::factory()->hasInvoices(10))
        ->create();
        
    }
}
