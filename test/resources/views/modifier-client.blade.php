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
                    <form action="/ModifClient" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data->id }}">

                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Nom</label>
                            <div class="col-md-10">
                                <input class="form-control @error('nom') is-invalid @enderror" type="text"
                                    value="{{ old('nom', $data->nom) }}" name="nom" id="example-text-input"
                                    placeholder="Enter nom">
                                @error('nom')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-search-input" class="col-md-2 col-form-label">Login</label>
                            <div class="col-md-10">
                                <input class="form-control @error('login') is-invalid @enderror" type="search"
                                    value="{{ old('login', $data->login) }}" id="example-search-input" name="login"
                                    placeholder="Enter login">
                                @error('login')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                                <input class="form-control @error('email') is-invalid @enderror" type="email"
                                    value="{{ old('email', $data->email) }}" placeholder="Enter Email"
                                    id="example-email-input" name="email">
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="example-password-input" class="col-md-2 col-form-label">Password</label>
                            <div class="col-md-10">
                                <input class="form-control @error('password') is-invalid @enderror" type="password"
                                    value="{{ old('password', $data->password) }}" placeholder="Enter Password"
                                    id="example-password-input" name="password">
                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </form>
                    <!-- end row -->
                </div>
            </div>
        </div>
    </div>
@endsection
