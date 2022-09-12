<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StudentModel;

class StudentModelSeeder extends Seeder
{
    
    protected $primaryKey = 'id';
    protected $table = 'students';
    protected $fillable = ['name', 'age'];

    public function run()
    {
        StudentModel::factory(5)->create();
    }

}
