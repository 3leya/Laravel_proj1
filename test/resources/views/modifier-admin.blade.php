@extends('theme')
@section('here')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">

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

            <form action="/ModifAdmin" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$data->id}}">

                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Nom</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="{{$data->nom}}" name="nom" id="example-text-input" placeholder="Entrez votre nom" oninput="this.value = this.value.replace(/\d/g, '')">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="example-search-input" class="col-md-2 col-form-label">login</label>
                    <div class="col-md-10">
                        <input class="form-control" type="search" value="{{$data->login}}"
                            id="example-search-input" name="login" placeholder="Enter login">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                    <div class="col-md-10">
                        <input class="form-control" type="email" value="{{$data->email}}" placeholder="Enter Email"
                            id="example-email-input" name="email">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="example-password-input" class="col-md-2 col-form-label">Password</label>
                    <div class="col-md-10">
                        <input class="form-control" type="password" value="{{$data->password}}"  placeholder="Enter Password"
                            id="example-password-input" name="password">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>

        </div>
    </div>
@endsection
