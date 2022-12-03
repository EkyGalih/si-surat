<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skbws extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = 'skbws';
    protected $guarded = ['created_at', 'updated_at'];

    public function belongsToFilesk(){
    	return $this->belongsTo(Filesk::class);
    }
}
