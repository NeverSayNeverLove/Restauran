<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
    protected $table="persons";
    public  function order()
    {
        return $this->hasMany('App\Order','user_id','id');
    }
    public  function Rate()
    {
        return $this->hasMany('App\Rate','user_id','id');
    }
    public  function Comment()
    {
        return $this->hasMany('App\Order','user_id','id');
    }
    //public  function Suggest()
    //{
        // return $this->hasMany('App\Suggest','user_id','id');
    //}
}
