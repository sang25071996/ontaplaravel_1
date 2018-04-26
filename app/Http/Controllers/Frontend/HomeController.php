<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\member;
use DateTime;
class HomeController extends Controller
{
	protected $model;
	public function __construct(){
		$this->model = new member;
	}
	public function manage(){
		$this->model->user_manage();
	}
    public function insert(){
    	$member->name = "sangnguyen";
    	$member->email = "sang546@gmail.com";
    	$member->password = bcrypt(12321);
    	$member->level = 3;
    	$member->created_at = new DateTime();

    	$this->model->save();
    }
    public function update($id)
    {
    	$this->model->update_member($id);
    }
}
