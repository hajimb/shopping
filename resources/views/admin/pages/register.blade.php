@extends('layouts.admin-pages')

@section('title', $pageTitle)

@section('pageContent')

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card mb-0">

                <div class="card-body p-4">

                    <div class="account-box">
                        <div class="account-logo-box">
                            <div class="text-center">
                                <a href="{{ route('admin.login') }}">
                                    <img src="{{ asset('assets/admin/images/logo-dark.png') }}" alt="" height="30">
                                </a>
                            </div>
                            <h5 class="text-uppercase mb-1 mt-4">Register</h5>
                            <p class="mb-0">Get access to our admin panel</p>
                        </div>

                        <div class="account-content mt-4">
                            <form class="form-horizontal" action="#">

                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="username">Full Name</label>
                                        <input class="form-control" type="email" id="username" required=""
                                            placeholder="Michael Zenaty">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" type="email" id="emailaddress" required=""
                                            placeholder="john@deo.com">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12">
                                        <a href="page-recoverpw.html" class="text-muted float-right"><small>Forgot your
                                                password?</small></a>
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" id="password"
                                            placeholder="Enter your password">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-12">

                                        <div class="checkbox checkbox-success">
                                            <input id="remember" type="checkbox" checked="">
                                            <label for="remember">
                                                I accept <a href="#">Terms and Conditions</a>
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row text-center mt-2">
                                    <div class="col-12">
                                        <button class="btn btn-md btn-block btn-primary waves-effect waves-light"
                                            type="submit">Sign Up Free</button>
                                    </div>
                                </div>

                            </form>


                            <div class="row mt-4 pt-2">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Already have an account? <a href="{{ route('admin.login') }}"
                                            class="text-dark ml-1"><b>Sign In</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>

@endsection
