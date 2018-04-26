@extends('admin.master')
@section('title','sửa thành viên')
@section('content')
  <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="card">
              <div class="card-header">
      				    	sửa
      				</div>
      				<div class="card-block">
      				      <form method="POST">
                      {{ csrf_field()}}
        						  	<div class="form-group">
        						    	<label for="txtUser">Thành Viên</label>
        						    	<input type="text" class="form-control" name="txtEmail" value="{{ old('txtEmail',$data->email) }}" placeholder="Nhập Thành Viên">
        						  	</div>
        						  	<div class="form-group">
        						    	<label for="txtPass">Mật Khẩu</label>
        						    	<input type="password" class="form-control" name="txtPass"  placeholder="Nhập Mật Khẩu">
        						  	</div>
        						  	<div class="form-group">
        							    <label for="sltLevel">Quyền</label>
        							    <select class="form-control" name="txtLevel">
        							      <option value="1" {{ old('txtLevel',$data->level) == 1 ? "selected" : "" }} >Quản Trị Viên</option>
        							      <option value="2" {{ old('txtLevel',$data->level) == 2 ? "selected" : "" }} >Thành Viên</option>
        							    </select>
        							  </div>
      							    <button type="submit" class="btn btn-primary">Sửa</button>
      						  </form>
      				  </div>
      		</div>
      </div>
  </div>
@endsection
