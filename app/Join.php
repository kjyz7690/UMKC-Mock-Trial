<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Join extends Model {

	protected $table = 'interested';
    protected $fillable = array(
        'name',
        'email',
        'phone',
        'year',
        'comment');

}
