<?php

/**
 * Created by PhpStorm.
 * User: Ermin
 * Date: 10.01.2017
 * Time: 14:39
 */

use Illuminate\Database\Eloquent\Model;
class newPost extends Model{

    protected $fillable = array('titel', 'category','description', 'image', 'preis', 'state', 'zip', 'address',  'nummer', 'email', 'name');


    protected $table = 'category';

}