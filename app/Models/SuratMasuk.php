<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = 'smumum';
    protected $guarded = ['created_at', 'updated_at'];

    public function Distribusi(){
    	return $this->hasMany(Distribusi::class);
    }
}
