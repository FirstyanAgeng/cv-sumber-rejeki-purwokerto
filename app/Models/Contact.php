<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contact';
    protected $fillable = [
        'name',
        'description',
        'image',
        'logo',
        'alamat',
        'email',
        'telepon_1',
        'telepon_2',
        'maps_embed'
    ];
}
