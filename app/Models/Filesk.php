<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filesk extends Model
{
	use HasFactory;

	public $incrementing = false;
	protected $table = 'file_surat_keluar';
	protected $guarded = ['created_at', 'updated_at'];

	public function hasOneSkbws()
	{
		return $this->hasOne(Skbws::class);
	}

	public function hasOneSkppd()
	{
		return $this->hasOne(Sksppd::class);
	}

	public function hasOneSksppdttl()
	{
		return $this->hasOne(Sksppdttl::class);
	}

	public function hasOneSksatker()
	{
		return $this->hasOne(Sksatker::class);
	}

	public function hasOneSksppkttl()
	{
		return $this->hasOne(Sksppkttl::class);
	}
}
