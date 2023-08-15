<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class parentModel extends Model
{
    protected $table = 'parents';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'id', 'firstname', 'lastname', 'nic', 'addressline1', 'addressline2', 'city', 'province', 'country', 'email', 'contactno', 'mobileno', 'status', 'deleted_at', 'created_at', 'updated_at'
	];
}
