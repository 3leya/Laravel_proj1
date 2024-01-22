@extends('theme')
@section('here')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18"></h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <form action="/ajout-client" method="post">
                        @csrf

                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Nom</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ old('nom') }}"  placeholder="Enter Nom"
                                       id="example-text-input" name="nom">
                                @error('nom')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="example-search-input" class="col-md-2 col-form-label">Login</label>
                            <div class="col-md-10">
                                <input class="form-control" type="search" value="{{ old('login') }}"  placeholder="Enter Login"
                                       id="example-search-input" name="login">
                                @error('login')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                                <input class="form-control" type="email" value="{{ old('email') }}"
                                       placeholder="Enter Email" id="example-email-input" name="email">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="example-password-input" class="col-md-2 col-form-label">Password</label>
                            <div class="col-md-10">
                                <input class="form-control" type="password" value="" placeholder="Enter Password"
                                       id="example-password-input" name="password">
                                @error('password')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Ajouter</button>

                    </form>

                    @if(session('alert'))
                        <div class="alert alert-success">
                            {{ session('alert')['message'] }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
