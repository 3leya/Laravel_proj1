@extends('theme')
@section('here')

                        <!-- start page title -->
                        <div class="row"
                    
                        >
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
        
                                       
        
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                
                                                <th>Nom</th>
                                                <th>Description</th>
                                                <th>Categorie</th>
                                                <th>Image</th>
                                                <th>Quantite</th>
                                                <th>Prix</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>


                                            @foreach ($dataa as $item)




                                            <tr>

                                                <td>{{$item->nom}}</td>
                                                <td>{{$item->description}}</td>
                                                <td>{{$item->categorie}}</td>
                                                <td><img src="/uploads/{{$item->image}}" style="width: 40%"></td>
                                                <td>{{$item->quantite}}</td>
                                                <td>{{$item->prix}}</td>
                                                <td>

                                                    <a href="/modifier-produit/{{$item->id;}}" class="btn btn-primary">Modifier</a>
                                                    <a href="/SuppProduit/{{$item->id;}}" class="btn btn-outline-danger">Supprimer</a>
                                                </td>
                                   
                                            </tr>
                                            @Endforeach
                                                
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
@endsection