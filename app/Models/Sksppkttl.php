<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sksppkttl extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = 'skppkttl';
    protected $guarded = ['created_at', 'updated_at'];

    public function Filesk(){
		return $this->belongsTo(Filesk::class);
	}
}
