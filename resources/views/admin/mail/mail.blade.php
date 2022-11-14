@extends('layouts.app')
@section('content')
    <style>
        h3::first-letter {
            font-size: 150%;
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

    <div style="width: 1145px; padding-left: 30px">
{{--        @include('flash_message')--}}
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
                        <div class="row">
                            <div class="section-title col-lg-10">
                                <h3>Mail</h3>
                            </div>

                        </div>
                        <div class="card-tools">


                        </div>
                    </div>

                    <div id="tblCustomers">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>

                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Check</th>
                                    <th>Action</th>



                                </tr>
                                </thead>
                                <tbody>

                                @foreach($mail as $value)
                                    <tr>

                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{$value->subject}}</td>
                                        <td>{{$value->message}}</td>
                                        <td>
                                            @if($value->check == 'Yes')
                                          <i class="fas fa-check" style="color: green"></i>
                                            @endif
                                        </td>

                                        <td>
                                            <a href="{{route('mail.edit',$value->id)}}" class="btn btn-sm btn-warning">SEND MAIL</a>
                                        </td>


                                    </tr>
                                @endforeach


                                </tbody>
                            </table>

                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
        </div>

    </div>



@endsection

