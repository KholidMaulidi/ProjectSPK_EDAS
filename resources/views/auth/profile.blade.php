@extends('index')

@section('plugins_css')
    <link rel="stylesheet" href="{{ asset('assets/css/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-social.css') }}">
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>

        </div>
        <div class="section-body">
            <h2 class="section-title">Hi,

                {{ Auth::user()->name }} !

            </h2>


            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <img alt="image" src="../assets/images/profile/user-1.jpg"
                                class="rounded-circle profile-widget-picture">

                        </div>
                        <div class="profile-widget-description">
                            <div class="profile-widget-name">{{ Auth::user()->name }}
                                <div class="text-muted d-inline font-weight-normal">
                                    <div class="slash"></div> {{ Auth::user()->role }}
                                </div>
                            </div>
                            {{ Auth::user()->name }} is a superhero name in Indonesia, especially in my family. He is not a
                            fictional character but an original hero in my family, a hero for his children and for his wife.
                            So, I use the name as a user in this template. Not a tribute, I'm just bored with'John
                            Doe'.
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <form method="post" class="needs-validation" novalidate="">

                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label> Name</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->name }}"
                                            required="">
                                        <div class="invalid-feedback">
                                            Please fill your name
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-md-7 col-12">
                                        <label>Email</label>
                                        <input type="email" class="form-control" value="{{ Auth::user()->email }}"
                                            required="">
                                        <div class="invalid-feedback">
                                            Please fill in the email
                                        </div>
                                    </div>
                                    <div class="form-group col-md-5 col-12">
                                        <label>Posisi</label>
                                        <input type="tel" class="form-control" value="{{ Auth::user()->role }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label>Bio</label>
                                        <textarea class="form-control" style="height:100px"?> {{ Auth::user()->name }}  is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group mb-0 col-12">

                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="{{ asset('assets/js/summernote-bs4.js') }}"></script>
@endsection
