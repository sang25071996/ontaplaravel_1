<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class AjaxController extends Controller
{
    public function getajax()
    {
        $data = DB::table('users_manage')->select('email')->get();
        //dd($data);
        foreach($data as $item){
          echo $item->email ."-";
        }
    }

}
