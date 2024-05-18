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
                                <a href="{{route('admin.login')}}">
                                    <img src="{{asset('assets/admin/images/logo-dark.png')}}" alt="" height="30" />
                                </a>
                            </div>
                        </div>

                        <div class="account-content mt-4">
                            <div class="text-center mb-3">
                                <div class="mb-3">
                                    <img src="{{asset('assets/images/users/avatar-5.jpg')}}"
                                        class="rounded-circle img-thumbnail avatar-lg" alt="thumbnail" />
                                </div>

                                <p class="text-muted mb-0 font-13">
                                    Enter your password to access the admin.
                                </p>
                            </div>

                            <form class="form-horizontal" action="#">
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" id="password"
                                            placeholder="Enter your password" />
                                    </div>
                                </div>

                                <div class="form-group row text-center mt-2">
                                    <div class="col-12">
                                        <button class="btn btn-md btn-block btn-primary waves-effect waves-light"
                                            type="submit">
                                            Log In
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <div class="clearfix"></div>

                            <div class="row mt-3">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted mb-0">
                                        Not you? return<a href="{{route('admin.login')}}" class="text-dark ml-1"><b>Sign In</b></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end card-body -->
    </div>

@endsection
