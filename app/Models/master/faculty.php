<?php

namespace App\Models\master;

use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
	public $timestamps = false;
	protected $fillable = [
		'title','desc'
	];

}
