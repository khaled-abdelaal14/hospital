<?php

namespace Database\Seeders;

use App\Models\RayEmployee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RayEmployeeTableSeeder extends Seeder
{

    public function run()
    {
        $ray_employee = new RayEmployee();
        $ray_employee->name = 'خالد السيد';
        $ray_employee->email = 'r@gmail.com';
        $ray_employee->password = Hash::make('123456789');
        $ray_employee->save();
    }
}