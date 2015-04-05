<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model 
{	

	public $timestamps = false;

	protected $table = 'comments';

	protected $fillable = ['post_id', 'author', 'comment', 'date'];

	public function news()
	{

		return $this->belongsTo('App\AddNews');

	}

}
