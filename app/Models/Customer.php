<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table='customer';
    public $timestamps=true;
    protected $fillable=[
        'id', 'name', 'adress', 'phone_number', 'created_at', 'updated_at', 'category_id'
    ];

    protected $primaryKey='id';
}
