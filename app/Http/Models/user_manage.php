<?php
  namespace App\Http\Models;
  use DB;
  class User_Manage{
    static public function user_index(){
        $danhsach = DB::table('users_manage')->select('id','email','level')->get();
        return $danhsach;
    }
    static public function user_insert($array){
    	DB::table('users_manage')->insert($array);
    }
    static public function user_delete($id)
    {
    	DB::table('users_manage')->where('id',$id)->delete();
    }
    static public function user_update($id,$array)
    {
        DB::table('users_manage')->where('id',$id)->update($array);
    }
  }
?>
