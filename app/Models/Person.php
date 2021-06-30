<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $fillable=[
        'person_name',
        'person_entitle',
        'person_phone_number',
        'person_status',
        'person_nor',
        'users_id',
    ];


    public function evaluations()
    {
        return $this->hasMany(Evaluation::class,'people_id');
    }
}
