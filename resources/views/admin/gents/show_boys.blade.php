@extends('layouts.app')
@section('content')
    <style>
        #zoom-placeholder {
            position: fixed;
            bottom: 50px;
            right: 10px;
            z-index: 100;
            width: 250px;
            height: 250px;
        }
    </style>
    <style>
        h3::first-letter {
            font-size: 250%;
            color: #FFC100;
            font-weight: 900;

        }
    </style>
    <style>
        body {
            /*overflow-y: hidden; !* Hide vertical scrollbar *!*/
            overflow-x: hidden; /* Hide horizontal scrollbar */
        }
    </style>
    <br>
    <div style="width: 1145px; padding-left: 40px">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
    </div>
    <div class="row">
        <div class="container">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                        <h3 class="card-title">S<b style="font-size: 30px">HOW GENTS CLOTHES</b></h3>


                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">


                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>

                                <th>Id</th>
                                <th>Gender</th>
                                <th>Image</th>
                                <th>Product Price</th>
                                <th>Product Size</th>
                                <th>Action</th>


                            </tr>
                            </thead>
                            <tbody>

                                                        @foreach($value as $data)
                                                            <tr>

                                                                <td>{{$loop->iteration}}</td>
                                                                <td>{{$data->gender}}</td>
                                                                <td>
                                                                    <img src="{{asset('storage/admin/gents/image/'.$data->product_image)}}"
                                                                         height="70px" width="70px"
                                                                         alt="user">
                                                                </td>
                                                                <td>{{$data->product_price}}</td>
                                                                <td>{{$data->product_size}}</td>


                                                                <td>
{{--                                                                    <a href="" class="btn btn-sm btn-warning"><i class="fa fas-solid fa-pen"></i></a>--}}
                                                                    <a href="{{route('gents/clothes/destroy',$data->id)}}" class="btn btn-sm btn-danger"><i class="fa fas-solid fa-trash"></i></a>
                                                                </td>

                                                            </tr>
                                                        @endforeach


                            </tbody>
                        </table>

                    </div>

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
        </div>

    </div>




@endsection



