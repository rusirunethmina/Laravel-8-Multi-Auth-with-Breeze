@extends('admin.admin_layout')

@section('content')

    <div class="content_wrapper">
        <!-- page content -->
        <div class="registration_page center_container">
            <div class="center_content">
                <div class="logo">
                    <img src="panel/assets/images/logo.png" alt="" class="img-fluid">
                </div>
                <form action=" " method="post">

                    <div class="form-group icon_parent">
                        <label for="uname">Username</label>
                        <input id="name" type="text" class="form-control" name="name" value=" " required
                            autocomplete="name" autofocus placeholder="Full Name">

                        <span class="icon_soon_bottom_right"><i class="fas fa-user"></i></span>
                    </div>
                    <div class="form-group icon_parent">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" class="form-control" name="email" value=" " required
                            autocomplete="email" placeholder="Email Address">


                        <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>
                    </div>
                    <div class="form-group icon_parent">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control" name="password" required
                            autocomplete="new-password" placeholder="Password">


                        <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                    </div>
                    <div class="form-group icon_parent">
                        <label for="rtpassword">Re-type Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password" placeholder="Confirm Password">
                        <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                    </div>
                    <div class="form-group">
                        <a class="registration" href=" ">Already have an account</a><br>
                        <button type="submit" class="btn btn-blue">Signup</button>
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
