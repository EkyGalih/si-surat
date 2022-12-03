<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sksatker extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = 'sksatker';
    protected $guarded = ['created_at', 'updated_at'];

     public function Filesk(){
    	return $this->belongsTo(Filesk::class);
    }
}
