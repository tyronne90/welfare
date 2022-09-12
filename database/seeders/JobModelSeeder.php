<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobModelSeeder extends Seeder
{
    protected $primaryKey = 'job_id';
    protected $table = 'job';
    protected $fillable = ['job_title'];

    public function run()
    {
        JobModel::factory(5)->create();
    }
}
