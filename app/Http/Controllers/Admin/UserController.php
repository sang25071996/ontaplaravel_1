<?php

namespace App\Http\Controllers\Admin;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\EditRequest;
use App\Http\Models\User_Manage;
use DateTime;

class UserController extends Controller
{
    public function index()
    {
      // $user_manage= new User_Manage;
      $data['list'] = User_Manage::user_index();
      //print_r($data);
      return view('admin.user.list',$data);
    }
    public function add()
    {
      return view('admin.user.add');
    }
    public function insert(Request $request)
    {
      $validateData = $request->validate(
        [
          'txtEmail' => 'required|unique:users_manage,email|max:255',
          'txtPass' => 'required',
        ],
        [
          'txtEmail.required' => 'Vui lòng nhập Email',
          'txtEmail.unique' => 'Email đã tồn tại',
          'txtEmail.max' => 'Email không được dài quá 255 kí tự',
          'txtPass.required' => 'Vui lòng nhập pass'
        ]
    );

      $data = array(

        'name' => 'sang',
        'email' => $request->txtEmail,
        'password' => $request->txtPass,
        'level' => $request->txtLevel,
        'created_at' => new DateTime()
      );
      User_Manage::user_insert($data);

      // $name = 'sang';
      // $email = $request->txtEmail;
      // $pass = $request->txtPass;
      // $level = $request->txtLevel;
      // $created = new DateTime();
      // DB::table('users_manage')->insert(
      //   [
      //     'name' => $name,
      //     'email' => $email,
      //     'password' => $pass,
      //     'level' => $level,
      //     'created_at' => $created
      //   ]
      // );
    return redirect()->route('list')->with('success','Bạn đã thêm thành công');
    }
    public function delete($id)
    {
        //$danhsach = new User_Manage();
      User_Manage::user_delete($id);
        return redirect()->route('list')->with('success','Bạn đã xóa thành công');
        return view('admin.user.');
    }
    public function edit($id)
    {
      $data = DB::table('users_manage')->select('email','level')->where('id',$id)->first();
        // dd($data);
        return view('admin.user.edit',['data' => $data]);
    }
    public function update($id,Request $request)
    {
      $validateData = $request->validate(
        [
          'txtEmail' => 'required|max:255'
        ],
        [
          'txtEmail.required' => 'Vui lòng nhập Email',
          'txtEmail.unique' => 'Email đã tồn tại',
          'txtEmail.max' => 'Email không được dài quá 255 kí tự'
        ]
    );
      $data = DB::table('users_manage')->select('password')->where('id',$id)->first();
      if(empty($request->txtPass))
      {
        $pass = $data->password;
      }else{
        $pass = bcrypt($request->txtPass);
      }
      $array = array(
        'name' => 'sang',
        'email' => $request->txtEmail,
        'password' => $request->txtPass,
        'level' => $request->txtLevel,
        'created_at' => new DateTime()
      );
      User_Manage::user_update($id,$array);
      return redirect()->route('list')->with('success','Bạn đã update thành công');
    }
    public function user_insert(Requests $request)
    {
      $check = $request->validate(
          [
            'txtEmail' => 'required|unique:users_manage,email|max:255',
            'txtPass' => 'required',
          ],
          [
            'txtEmail.required' => 'Vui lòng nhập Email',
            'txtEmail.unique' => 'Email đã tồn tại',
            'txtEmail.max' => 'Email không quá 255 kí tự',
            'txtPass.required' => 'Vui lòng nhập mật khẩu'
          ]
      );
      $data = array(
          'name' => 'sang',
          'email' => $request->txtEmail,
          'password' => $request->txtPass,
          'level' => $request->txtLevel,
          'create_at' => new DateTime()
      );
    }
}
