<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribusi extends Model
{
    use HasFactory;

    public $incrementign = false;
    protected $table = 'distribusi';
    protected $guarded = ['created_at', 'updated_at'];

    public function belongsToUndangan(){
    	return $this->belongsTo(Undangan::class);
    }

    public function belongsToUmum(){
    	return $this->belongsTo(SuratMasuk::class);
    }

    public function belongsToDivisi(){
    	return $this->belongsTo(Divisi::class);
    }
}
