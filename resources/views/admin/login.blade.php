<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Login | Adminox - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      content="A fully featured admin theme which can be used to build CRM, CMS, etc."
      name="description"
    />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/admin/images/favicon.ico')}}" />

    <!-- App css -->
    <link href="{{asset('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet"/>
    <link href="{{asset('assets/admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link
      href="{{asset('assets/admin/css/app.min.css')}}"
      rel="stylesheet"
      type="text/css"
      id="app-stylesheet"
    />
  </head>

  <body
    class="authentication-bg bg-primary authentication-bg-pattern d-flex align-items-center pb-0 vh-100"
  >

    <div class="account-pages w-100 mt-5 mb-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card mb-0">
              <div class="card-body p-4">
                <div class="account-box">
                  <div class="account-logo-box">
                    <div class="text-center">
                      <a href="{{route('admin.dashboard')}}">
                        <img
                          src="{{asset('assets/admin/images/logo-dark.png')}}"
                          alt=""
                          height="30"
                        />
                      </a>
                    </div>
                    <h5 class="text-uppercase mb-1 mt-4">Sign In</h5>
                    <p class="mb-0">Login to your Admin account</p>
                  </div>

                  <div class="account-content mt-4">
                    <form class="form-horizontal" action="#">
                      <div class="form-group row">
                        <div class="col-12">
                          <label for="emailaddress">Email address</label>
                          <input
                            class="form-control"
                            type="email"
                            id="emailaddress"
                            required=""
                            placeholder="john@deo.com"
                          />
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-12">
                          <a
                            href="{{route('admin.password.reset')}}"
                            class="text-muted float-right"
                            ><small>Forgot your password?</small></a
                          >
                          <label for="password">Password</label>
                          <input
                            class="form-control"
                            type="password"
                            required=""
                            id="password"
                            placeholder="Enter your password"
                          />
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-12">
                          <div class="checkbox checkbox-success">
                            <input id="remember" type="checkbox" checked="" />
                            <label for="remember"> Remember me </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group row text-center mt-2">
                        <div class="col-12">
                          <a
                            class="btn btn-md btn-block btn-primary waves-effect waves-light"
                            type="submit"
                            href="{{route('admin.dashboard')}}"
                          >
                            Sign In
                        </a>
                        </div>
                      </div>
                    </form>


                  </div>
                </div>
              </div>
            </div>
            <!-- end card-body -->
          </div>
          <!-- end card -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </div>
    <!-- end page -->

    <!-- Vendor js -->
    <script src="{{asset('assets/admin/js/vendor.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets/admin/js/app.min.js')}}"></script>
  </body>
</html>
