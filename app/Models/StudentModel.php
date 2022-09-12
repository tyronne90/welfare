<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'students';
    protected $fillable = [
        'name',
        'age'
    ];

    public function samples(){
        return $this->belongsTo('App\Models\StudentModel', 'id', 'id');
    }
}
