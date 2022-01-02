@extends('admin.admin_layout')

@section('content')

    <!-- contnet wrapper -->
    <div class="content_wrapper">
        <!-- page content -->
        <div class="login_page center_container">
            <div class="center_content">
                <div class="logo">
                    <img src="{{ asset('panel/assets/images/logo.png') }}" alt="" class="img-fluid">
                </div>
                <form action=" " class="d-block" method="post">

                    <div class="form-group icon_parent">
                        <label for="password">Email</label>
                        <input id="email" type="email" class="form-control" name="email" value=" " required
                            autocomplete="email" autofocus placeholder="Email Address">
                        <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>

                    </div>
                    <div class="form-group icon_parent">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control" name="password" required
                            autocomplete="current-password" placeholder="Password">

                        <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                    </div>
                    <div class="form-group">
                        <label class="chech_container">Remember me
                            <input type="checkbox" name="remember" id="remember">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="form-group">
                        <a class="registration" href=" ">Create new account</a><br>
                        <a href=" " class="text-white">I forgot my password</a>
                        <button type="submit" class="btn btn-blue">Login</button>
                    </div>
                </form>
                <div class="footer">
                    <p>Copyright &copy; 2020 <a href="https://easylearningbd.com/">easy Learning</a>. All rights reserved.
                    </p>
                </div>

            </div>
        </div>
    </div>
    <!--/ content wrapper -->

@endsection
