<?php

namespace App\Models\master;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
	public $timestamps = false;
	protected $fillable = [
		'title','desc'
	];

}
