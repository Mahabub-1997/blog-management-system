
<!doctype html>
<html lang="en" class="minimal-theme">


<!-- Mirrored from codervent.com/skodash/demo/tabular-menu/ltr/authentication-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 May 2022 06:15:36 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('adminAsset')}}/assets/images/favicon-32x32.png" type="image/png" />
    <!-- Bootstrap CSS -->
    <link href="{{asset('adminAsset')}}/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/css/style.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{asset('adminAsset')}}/assets/css/pace.min.css" rel="stylesheet" />

    <title>Skodash - Bootstrap 5 Admin Template</title>
</head>

<body>

<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="row">
        <div class="col-xl-9 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="mb-0">User Registration</h5>
                        </div>
                        <hr/>
                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Your Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="inputEnterYourName" placeholder="Enter Your Name">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Email Address</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" id="inputEmailAddress2" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputChoosePassword2" class="col-sm-3 col-form-label"> Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" class="form-control" id="inputChoosePassword2" placeholder="Choose Password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Confirm Password</label>
                            <div class="col-sm-9">
                                <input type="password"  name="password_confirmation" class="form-control" id="inputConfirmPassword2" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary px-5">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<!--plugins-->
<script src="{{asset('adminAsset')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('adminAsset')}}/assets/js/pace.min.js"></script>


</body>


<!-- Mirrored from codervent.com/skodash/demo/tabular-menu/ltr/authentication-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 May 2022 06:15:36 GMT -->
</html>

