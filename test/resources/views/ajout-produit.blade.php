@extends('theme')
@section('here')
    <!-- Commencer le titre de la page -->
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
    <!-- Fin du titre de la page -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- Afficher les messages de succès ou d'erreur ici -->
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

                    <!-- Afficher les erreurs de validation -->
                    @if($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/ajout-produit" method="post" enctype="multipart/form-data">
                        @csrf

                        <!-- Champ pour l'ID (s'il s'agit d'une édition) -->
                        <input type="hidden" name="id" value="{{ $data->id ?? '' }}">

                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Nom</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ old('nom', $data->nom ?? '') }}" id="example-text-input" placeholder="Entrer le Nom" name="nom">
                                @error('nom')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="example-textarea-input" class="col-md-2 col-form-label">Description</label>
                            <div class="col-md-10">
                                <textarea class="form-control" id="example-textarea-input" rows="3" placeholder="Entrer la Description" name="description">{{ old('description', $data->description ?? '') }}</textarea>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="example-textarea-input" class="col-md-2 col-form-label">Categorie</label>
                            <div class="col-md-10">
                                <textarea class="form-control" id="example-textarea-input" rows="3" placeholder="Entrer la Categorie" name="categorie">{{ old('categorie', $data->categorie ?? '') }}</textarea>
                                @error('categorie')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="example-number-input" class="col-md-2 col-form-label">Prix</label>
                            <div class="col-md-10">
                                <input class="form-control" type="number" value="{{ old('prix', $data->prix ?? '') }}" id="example-number-input" placeholder="Entrer le Prix" name="prix">
                                @error('prix')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="example-number-input" class="col-md-2 col-form-label">Quantité en stock</label>
                            <div class="col-md-10">
                                <input class="form-control" type="number" value="{{ old('quantite', $data->quantite ?? '') }}" id="example-number-input" placeholder="Entrer la Quantité en stock" name="quantite">
                                @error('quantite')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="example-file-input" class="col-md-2 col-form-label">Image</label>
                            <div class="col-md-10">
                                <input class="form-control" type="file" name="image" id="example-file-input">
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        

                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
