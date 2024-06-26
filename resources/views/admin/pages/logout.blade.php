@extends('layouts.admin-pages')

@section('title', $pageTitle)

@section('pageContent')

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card mb-0">

                <div class="card-body p-4">

                    <div class="text-center account-box">
                        <div class="account-logo-box">
                            <div class="text-center">
                                <a href="{{ route('admin.login') }}">
                                    <img src="{{ asset('assets/admin/images/logo-dark.png') }}" alt="" height="30">
                                </a>
                            </div>
                        </div>

                        <div class="my-4">
                            <div class="checkmark">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 161.2 161.2"
                                    enable-background="new 0 0 161.2 161.2" xml:space="preserve">
                                    <path class="path" fill="none" stroke="#32c861" stroke-miterlimit="10" d="M425.9,52.1L425.9,52.1c-2.2-2.6-6-2.6-8.3-0.1l-42.7,46.2l-14.3-16.4
                                        c-2.3-2.7-6.2-2.7-8.6-0.1c-1.9,2.1-2,5.6-0.1,7.7l17.6,20.3c0.2,0.3,0.4,0.6,0.6,0.9c1.8,2,4.4,2.5,6.6,1.4c0.7-0.3,1.4-0.8,2-1.5
                                        c0.3-0.3,0.5-0.6,0.7-0.9l46.3-50.1C427.7,57.5,427.7,54.2,425.9,52.1z" />
                                    <circle class="path" fill="none" stroke="#32c861" stroke-width="4"
                                        stroke-miterlimit="10" cx="80.6" cy="80.6" r="62.1" />
                                    <polyline class="path" fill="none" stroke="#32c861" stroke-width="6"
                                        stroke-linecap="round" stroke-miterlimit="10"
                                        points="113,52.8
                                    74.1,108.4 48.2,86.4 " />

                                    <circle class="spin" fill="none" stroke="#32c861" stroke-width="4"
                                        stroke-miterlimit="10" stroke-dasharray="12.2175,12.2175" cx="80.6"
                                        cy="80.6" r="73.9" />

                                </svg>

                            </div>
                        </div>

                        <h3>See You Again !</h3>

                        <p class="text-muted font-13 mt-2 mb-0"> You are now successfully sign out. Back to <a
                                href="{{ route('admin.login') }}" class="text-primary mr-1"><b>Sign In</b></a></p>

                    </div>
                </div>

            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>

@endsection
