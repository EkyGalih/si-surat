<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = 'divisi';
    protected $guarded = ['created_at', 'updated_at'];

    public function hasManyUser(){
        return $this->hasMany(User::class);
    }

    public function hasManyDistribusi(){
    	return $this->hasMany(Distribusi::class);
    }
}
