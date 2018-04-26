@extends('admin.master')
@section('title','Danh sách thành viên')
@section('content')
  <table class="table table-bordered table-hover">
      <thead>
          <tr>
              <th>STT</th>
              <th>Thành Viên</th>
              <th>Quyền</th>
              <th class="text-center" colspan="2"><a class="btn btn-success btn-sm" href="{{ route('add')}}" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Thêm</a></th>
          </tr>
      </thead>
      <tbody>
        @foreach($list as $item)
          <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{!! $item->email !!}</td>
              <td>
                  @if($item->level == 1)
                      Admin
                  @else
                      Memmeber
                  @endif
              </td>
              <td class="text-center" width="50px"><a class="btn btn-warning btn-sm" href="{{ route('edit',['id'=> $item->id]) }}" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa</a></td>
              <td class="text-center" width="50px"><a class="btn btn-danger btn-sm" href="{{ route('delete',['id' => $item->id]) }}" role="button"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</a></td>
          </tr>
        @endforeach
      </tbody>
  </table>
@endsection
