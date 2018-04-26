<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $table= 'users_manage';
    protected $guarded = [];
    protected $model;
    public function __construct(){
        $this->model = new member();
    }
    public function user_manage(){
    	$member = member::where('level',1)->get()->toArray();
    	dd($member);
    } 
    public function update_member(){
    	$member = member::find(11);
    	$member->name = 'son';
    	$member->save();
    }
    public function insert(){

    }
}
