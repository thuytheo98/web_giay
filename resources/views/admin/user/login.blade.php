<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('/')}}/admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <title>Đăng nhập</title>
</head>
<body>
    @if(session('loi'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{session('loi')}}
        </div>
    @endif
    <div class="login" style="margin: auto;top: 0;left: 0;bottom: 0;right: 0;width: 30%" >
        <div class="header-login">
            <h3 style="text-align: center">Đăng nhập</h3>
        </div>
        <div class="main-login">
            <form action="" method="post">
                <div class="form-group">
                    <input class="form-control" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="password" name="password" type="password">
                </div>
                <div class="button-add-size">
                    <button class="btn btn-default" type="submit">Đăng nhập</button>
                </div>
                {{csrf_field()}}
            </form>
        </div>
    </div>
</body>
</html>





