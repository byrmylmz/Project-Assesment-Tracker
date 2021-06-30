<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function projects()
    {
        return $this->belongsTo(Project::class);
    }

    public function people()
    {
        return $this->belongsTo(Person::class);
    }
}
