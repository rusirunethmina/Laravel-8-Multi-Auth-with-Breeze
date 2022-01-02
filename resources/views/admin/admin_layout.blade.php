<!DOCTYPE html>
<html lang="en">

 @include('admin.inc.head')


<body id="page-top">
    <!-- preloader -->
    <div class="preloader">
        <img src="{{ asset('panel/assets/images/preloader.gif') }}" alt="">
    </div>

    <!-- wrapper -->
    <div class="wrapper">

        @yield('content')

    </div>
    <!--/ wrapper -->



 @include('admin.inc.script')


</body>

</html>
