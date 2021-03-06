<!DOCTYPE html>
<html lang="en">
    <!-- Mirrored from qbgrow.com/magen/iot-admin/app/page-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Feb 2020 01:59:21 GMT -->
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Twitter -->
        <meta name="twitter:site" content="@vueghost" />
        <meta name="twitter:creator" content="@vueghost" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="GreenerBrains" />
        <meta
            name="twitter:description"
            content="GreenerBrains admin registration."
        />
        <meta name="twitter:image" content="/img/magen-iot-admin-social.png" />

        <!-- Facebook -->
        <meta property="og:url" content="http://vueghost.com/magen-iot-admin" />
        <meta property="og:title" content="Bracket" />
        <meta
            property="og:description"
            content="GreenerBrains admin registration."
        />

        <meta property="og:image" content="/img/magen-iot-admin-social.png" />
        <meta
            property="og:image:secure_url"
            content="/img/magen-iot-admin-social.png"
        />
        <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="600" />

        <!-- Meta -->
        <meta name="description" content="GreenerBrains admin registration." />
        <meta name="author" content="vueghost" />

        <title>magen-iot-admin Responsive Bootstrap 4 Admin Template</title>

        <!-- vendor css -->
        <link
            href="{{ asset('lib/font-awesome/css/font-awesome.css') }}"
            rel="stylesheet"
        />
        <link
            href="{{ asset('lib/Ionicons/css/ionicons.css') }}"
            rel="stylesheet"
        />
        <link
            href="{{
                asset('lib/perfect-scrollbar/css/perfect-scrollbar.css')
            }}"
            rel="stylesheet"
        />

        <!-- magen-iot-admin CSS -->
        <link rel="stylesheet" href="{{ asset('css/magen-iot-admin.css') }}" />
    </head>

    <body>
        <div class="signpanel-wrapper">
            <div class="signbox signup">
                <div class="signbox-header">
                    <h4>GreenerBrains</h4>
                    <p class="mg-b-0">Admin BackEnd</p>
                    <p
                        class="mg-b-0 hidden"
                        style="color: red;"
                        id="error-password-mismatch"
                    >
                        Passwords mismatch!
                    </p>
                    <p
                        class="mg-b-0 hidden"
                        style="color: red;"
                        id="error-submission"
                    >
                        Error submitting form!
                    </p>
                </div>

                <!-- signbox-header -->
                <div class="signbox-body">
                    <form id="regiter-form">
                        <div class="form-group">
                            <label class="form-control-label">Name:</label>
                            <input
                                type="text"
                                name="name"
                                id="name"
                                class="form-control"
                                placeholder="Name"
                                required
                            />
                            <input
                                class="hidden"
                                name="user-type"
                                id="user-type"
                                value="admin"
                                required
                            />
                        </div>
                        <!-- form-group -->
                        <div class="form-group">
                            <label class="form-control-label">Email:</label>
                            <input
                                type="email"
                                name="email"
                                id="email"
                                class="form-control"
                                placeholder="Email"
                                required
                            />
                        </div>
                        <!-- form-group -->

                        <div class="row row-xs">
                            <div class="col-sm">
                                <div class="form-group">
                                    <label class="form-control-label"
                                        >Password:</label
                                    >
                                    <input
                                        type="password"
                                        name="password"
                                        id="password"
                                        class="form-control"
                                        placeholder="password"
                                        required
                                    />
                                </div>
                                <!-- form-group -->
                            </div>
                            <!-- col -->
                            <div class="col-sm">
                                <div class="form-group">
                                    <label class="form-control-label"
                                        >Confirm Password:</label
                                    >
                                    <input
                                        type="password"
                                        name="confirm-password"
                                        id="confirm-password"
                                        class="form-control"
                                        placeholder="Retype password"
                                    />
                                </div>
                                <!-- form-group -->
                            </div>
                            <!-- col -->
                        </div>
                        <!-- row -->

                        <div class="form-group mg-b-20 tx-12">
                            By clicking Sign Up button below you agree to our
                            <a href="#">Terms of Use</a> and our
                            <a href="#">Privacy Policy</a>
                        </div>

                        <button type="submit" class="btn btn-dark btn-block">
                            Sign Up
                        </button>
                        <div class="tx-center bd pd-10 mg-t-40">
                            Already a member?
                            <a href="/admin/auth/login">Sign In</a>
                        </div>
                    </form>
                </div>
                <!-- signbox-body -->
            </div>
            <!-- signbox -->
        </div>
        <!-- signpanel-wrapper -->

        <script src="{{ asset('lib/jquery/jquery.js') }}"></script>
        <script src="{{ asset('lib/popper.js/popper.js') }}"></script>
        <script src="{{ asset('lib/bootstrap/bootstrap.js') }}"></script>
        <script src="{{ asset('js/api.js') }}"></script>
        <script src="{{ asset('js/createuser.js') }}"></script>
    </body>

    <!-- Mirrored from qbgrow.com/magen/iot-admin/app/page-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Feb 2020 01:59:21 GMT -->
</html>
