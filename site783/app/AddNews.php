<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AddNews extends Model 
{	

	public $timestamps = false;

	protected $table = 'news';

	protected $fillable = ['title', 'text', 'date'];

	public function comments()
	{

		return $this->hasMany('App\Comment','post_id');

	}

}
