<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Company;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@mail.ru',
            'admin' => true
        ]);
//        foreach ($this->companies() as $company) {
//            Company::factory()->create([
//                'name' => $company['name'],
//                'address' => $company['address']
//            ]);
//        }
    }

    private function companies(): array
    {
        return [
            [
                'name' => 'ТОЧКА 1',
                'address' => 'Леонтьевский переулок 6с1 Москва 125009',
            ],
            [
                'name' => 'ТОЧКА 2',
                'address' => 'Тверской бульвар 11с1 Москва 123104',
            ],
            [
                'name' => 'ТОЧКА 3',
                'address' => 'Малая Никитская улица 6/2с5 Москва 121069',
            ],
        ];
    }
}
