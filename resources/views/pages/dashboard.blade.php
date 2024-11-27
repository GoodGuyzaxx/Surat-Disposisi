@extends('layout.admin.dashboard')

@section('content')
    <!-- Content -->
    <div class="page-heading">
        <h3>Selamat Datang kembali Staff </h3>
    </div>
    <div class="page-content">
        <section class="row">
            <!-- Bagian Sambutan -->
            <div class="col-12 mb-4">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <h4 class="text-dark welcome-message">Selamat Datang di Home Anda!</h4>
                        <p class="text-muted">Berikut adalah ringkasan aktivitas dan statistik profil Anda</p>
                    </div>
                </div>
            </div>

            <!-- Bagian Statistik -->
{{--            <div class="col-12 col-lg-9">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-6 col-lg-3 col-md-6">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body px-3 py-4-5">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-4">--}}
{{--                                        <div class="stats-icon purple">--}}
{{--                                            <i class="iconly-boldShow"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-8">--}}
{{--                                        <h6 class="text-muted font-semibold">Profile Views</h6>--}}
{{--                                        <h6 class="font-extrabold mb-0">112.000</h6>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-6 col-lg-3 col-md-6">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body px-3 py-4-5">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-4">--}}
{{--                                        <div class="stats-icon blue">--}}
{{--                                            <i class="iconly-boldProfile"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-8">--}}
{{--                                        <h6 class="text-muted font-semibold">Followers</h6>--}}
{{--                                        <h6 class="font-extrabold mb-0">183.000</h6>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-6 col-lg-3 col-md-6">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body px-3 py-4-5">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-4">--}}
{{--                                        <div class="stats-icon green">--}}
{{--                                            <i class="iconly-boldAdd-User"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-8">--}}
{{--                                        <h6 class="text-muted font-semibold">Following</h6>--}}
{{--                                        <h6 class="font-extrabold mb-0">80.000</h6>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-6 col-lg-3 col-md-6">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body px-3 py-4-5">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-4">--}}
{{--                                        <div class="stats-icon red">--}}
{{--                                            <i class="iconly-boldBookmark"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-8">--}}
{{--                                        <h6 class="text-muted font-semibold">Saved Post</h6>--}}
{{--                                        <h6 class="font-extrabold mb-0">112</h6>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </section>
    </div>
@endsection
