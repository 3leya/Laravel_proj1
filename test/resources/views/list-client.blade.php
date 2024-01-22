@extends('theme')
@section('here')
                       
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title"></h4>
                                        
        
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                
                                                <th>Nom</th>
                                                <th>Login</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>


                                            @foreach ($dataa as $item)




                                            <tr>

                                                <td>{{$item->nom;}}</td>
                                                <td>{{$item->login;}}</td>
                                                <td>{{$item->email;}}</td>
                                                <td>
                                                    <a href="/modifier-client/{{$item->id;}}" class="btn btn-primary">Modifier</a>
                                                    <a href="/SuppClient/{{$item->id;}}" class="btn btn-outline-danger">Supprimer</a>
                                                </td>

                                            </tr>
                                            @Endforeach
                                                
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
@endsection
                
           