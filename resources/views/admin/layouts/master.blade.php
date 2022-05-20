<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">


@include('admin.layouts.head')

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
      data-menu="vertical-menu-modern" data-col="">

@include('admin.layouts.header')
@include('admin.layouts.sidebar')

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-wrapper container-xxl p-0">
        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>

@include('admin.layouts.footer')
<!-- End Page Wrapper -->
@include('admin.layouts.scripts')

</body>
</html>


