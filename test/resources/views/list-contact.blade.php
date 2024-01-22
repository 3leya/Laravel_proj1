@extends('theme')
@section('here')
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                                   
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title"></h4>
                                        <p class="card-title-desc">
                                        </p>
        
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                
                                                <th>Nom</th>
                                                <th>Email</th>
                                                <th>Message</th>
                                                <th>Sujet</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>


                                            @foreach ($data as $item)




                                            <tr>

                                                <td>{{$item->nom;}}</td>
                                                <td>{{$item->email;}}</td>
                                                <td>{{$item->message;}}</td>
                                                <td>{{$item->sujet;}}</td>
                                                <td>
                                                    <a href="/SuppContact/{{$item->id;}}" class="btn btn-outline-danger">Supprimer</a>
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
           