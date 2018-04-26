@if ($errors->any())
    <div class="alert alert-danger">
      <strong>Thông báo</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        <strong>Thông báo </strong> {{ Session::get('success') }}
    </div>
@endif
