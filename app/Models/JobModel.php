<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'job_id';
    protected $table = 'job';
    protected $fillable = ['job_title'];

    public function samples(){
        return $this->belongsTo('App\Models\JobModel', 'job_id', 'job_id');
    }
}
