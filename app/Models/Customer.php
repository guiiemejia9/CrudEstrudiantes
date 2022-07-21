<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table='customer';
    public $timestamps=false;
    protected $fillable=[
        'id', 'name', 'adress', 'phone_number', 'created_at', 'updated_at'
    ];

    protected $primaryKey='id';
}
