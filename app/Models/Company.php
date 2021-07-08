<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable=[
        'company_name',
        'company_owner',
        'company_email',
        'company_phone',
        'company_status',
        'users_id',
    ];
}
