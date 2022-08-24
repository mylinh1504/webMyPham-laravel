<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.head')

</head>
<body class="hold-transition login-page">

    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>Đăng Ký</b></a>
      </div>
      <!-- /.login-logo -->
      <div class="card" >
        <div class="card-body login-card-body" >
          <p class="login-box-msg">Register to start your session</p>
            @include('admin.alert')
          <form action="" method="post">
            <div class="input-group mb-3">
              <input type="text" name="name" class="form-control" placeholder="Nhập tên của bạn">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class=" fa fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
                <input type="email" name="email" class="form-control" placeholder=" Nhập email của bạn">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope fas fa-envelope"></span>
                  </div>
                </div>
              </div>
            <div class="input-group mb-3">
              <input type="password" name="password" class="form-control" placeholder="Nhập password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" name="confirmpassword" class="form-control" placeholder=" Nhập lại password">
                <div class="input-group-append">
                  <div class="input-group-text">   
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" name="remember" id="remember">
                  <label for="remember">
                    Nhớ mật khẩu
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Đăng Kí</button>
              </div>
            <div class="row">
                <p>Bạn đã có tài khoản?</p>
                <a href="{{ route('login') }}">đăng nhập</a>
            </div>
            </div>
            @csrf
          </form>
        </div>
      </div>
    </div>
  <!-- /.login-box -->
  @include('admin.footer')
  </body>