<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login | CMS</title>

    <!-- Bootstrap -->
    <link href="{!! asset('public/theme/vendors/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{!! asset('public/theme/vendors/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{!! asset('public/theme/vendors/nprogress/nprogress.css') !!}" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="{!! asset('public/theme/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') !!}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{!! asset('public/theme/build/css/custom.min.css') !!}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
           @if(Session::has('coc'))
          <div class="alert alert-danger">
            <button class="close" data-dismiss="alert">*</button>
            <strong>{{session('coc')}}</strong>
          </div>
          @endif
            <form method="post" action="{{url('islogged')}}">
              <h1>Login Form</h1>
              @csrf
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required="" />
              </div>
              <div>
                <input type="submit" class="btn btn-default submit" value="Log in">
              </div>

              <div class="clearfix"></div>

              
            </form>
          </section>
          </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
