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
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="/ModifProduit" method="post" id="myForm" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data->id }}">

                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Nom</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $data->nom }}" id="example-text-input"
                                    placeholder="Enter Nom" name="nom">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="example-textarea-input" class="col-md-2 col-form-label">Description</label>
                            <div class="col-md-10">
                                <textarea class="form-control" id="example-textarea-input" rows="3"
                                    placeholder="Enter Description" name="description">{{ $data->description }}</textarea>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Catégorie</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $data->categorie }}" id="example-text-input"
                                    placeholder="Enter categorie" name="categorie">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="example-file-input" class="col-md-2 col-form-label">Image</label>
                            <div class="col-md-10">
                                <input class="form-control" type="file" id="example-file-input" name="image">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Quantité</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $data->quantite }}" id="example-text-input"
                                    placeholder="Enter quantité" name="quantite">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Prix</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $data->prix }}" id="example-text-input"
                                    placeholder="Enter prix" name="prix">
                            </div>
                        </div>

                        <!-- ... (other form fields) ... -->

                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
      // Add this script to your Blade template
      document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('myForm').addEventListener('submit', function (e) {
                // The alert has been removed, and you will rely on the redirect message
            });
        });
    </script>
@endsection
