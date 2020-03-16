<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from qbgrow.com/magen/iot-admin/app/table-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Feb 2020 01:59:07 GMT -->
<!-- ####### HEAD  -->
@include('includes.head')

<body>
    <!-- ##### SIDEBAR LOGO ##### -->
    <div class="kt-sideleft-header">
        <div class="kt-logo">
            <a href="/">GreenerBrains</a>
        </div>
        <div id="ktDate" class="kt-date-today"></div>
        <div class="input-group kt-input-search">
            <input type="text" class="form-control" placeholder="Search..." />
            <span class="input-group-btn mg-0">
                <button class="btn"><i class="fa fa-search"></i></button>
            </span>
        </div>
        <!-- input-group -->
    </div>
    <!-- kt-sideleft-header -->

    <!-- ##### SIDEBAR MENU ##### -->
    @include('includes.sidebar')

    <!-- ##### HEAD PANEL ##### -->
    @include('includes.header')

    <div class="kt-breadcrumb">
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="/">GreenerBrains</a>
            {{-- <a class="breadcrumb-item" href="index.html">Tables</a>
                <span class="breadcrumb-item active">Basic Tables</span> --}}
        </nav>
    </div>
    <!-- kt-breadcrumb -->

    <!-- ##### MAIN PANEL ##### -->
    <div class="kt-mainpanel">
        <!-- ##### BODY #### -->
        @yield('content')

        <!-- ###### FOOTER ###### -->
        @include('includes.footer')
    </div>
    <!-- kt-mainpanel -->

    <script src="{{ asset('lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{
                asset('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')
            }}"></script>
    <script src="{{ asset('lib/moment/moment.js') }}"></script>
    <script src="{{ asset('lib/highlightjs/highlight.pack.js') }}"></script>
    <!-- <script src="{{ asset('lib/medium-editor/medium-editor.js') }}"></script>
        <script src="{{ asset('lib/summernote/summernote-bs4.min.js') }}"></script> -->

    <script src="{{ asset('js/magen-iot-admin.js') }}"></script>
    <script src="{{ asset('js/api.js') }}"></script>
    <script src="{{ asset('js/sweetalert2@9.js') }}"></script>
</body>
<script>
    if (!API.isLoggedIn()) {
        window.location.href = "/admin/auth/login";
    }

</script>
<!-- Mirrored from qbgrow.com/magen/iot-admin/app/table-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Feb 2020 01:59:07 GMT -->
</html>
