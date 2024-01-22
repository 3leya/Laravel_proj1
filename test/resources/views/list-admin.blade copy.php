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
                                            <li class=""></li>
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
        
                                        <h4 class="card-title">List Admin</h4>
                                        <p class="card-title-desc">
                                        </p>
        
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


                                            @foreach ($data as $item)




                                            <tr>

                                                <td>{{$item->nom;}}</td>
                                                <td>{{$item->login;}}</td>
                                                <td>{{$item->email;}}</td>
                                                <td>
                                                    <a href="/modifier-admin/{{$item->id;}}" class="btn btn-primary">Modifier</a>
                                                    <a href="/SuppAdmin/{{$item->id;}}" class="btn btn-outline-danger">Supprimer</a>
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
       