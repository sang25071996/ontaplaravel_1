<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Khóa học lập trình ReactJS tại QuocTuan.Info">
    <meta name="author" content="Vũ Quốc Tuấn">
    <link rel="shortcut icon" href="https://quoctuan.info/public/favicon.ico" type="image/x-icon" />
    <title>@yield('title','trang chủ')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="{{ asset('public/admin/template/css/bootstrap.min.css') }}" >
    <link type="text/css" rel="stylesheet" href="{{ asset('public/admin/template/css/navbar.css') }}" >
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-light bg-faded rounded navbar-toggleable-md">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#containerNavbar" aria-controls="containerNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="https://google.com/">google</a>
            <div class="collapse navbar-collapse" id="containerNavbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="trang-chu.html">Trang Chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="the-loai.html">Thể Loại</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="san-pham.html">Sản Phẩm</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Nhập từ khóa">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                </form>
            </div>
        </nav>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                @include('admin.blocks.message')
                @yield('content')
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('public/admin/template/js/jquery-3.1.1.slim.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/admin/template/js/jquery-3.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/admin/template/js/tether.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/admin/template/js/bootstrap.min.js') }}"></script>
</body>
</html>
