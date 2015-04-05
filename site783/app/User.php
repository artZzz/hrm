<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model 
{	

	public $timestamps = false;

	protected $table = 'users';

	protected $fillable = ['fname', 'lname', 'login', 'email', 'pass', 'ageD', 'ageM', 'ageY', 'aducation', 'hobbies', 'image', 'hash', 'activated'];

}