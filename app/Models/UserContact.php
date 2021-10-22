<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserContact extends Model
{
    use HasFactory;

    protected $table = 'user_contacts';
    protected $fillable = ['user_id', 'street', 'postal_code', 'phone', 'bank_account'];
};