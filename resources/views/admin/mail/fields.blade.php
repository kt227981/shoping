@extends('layouts.app')
@section('content')

    <style>
        h3::first-letter {
            font-size: 200%;
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



    <div style="margin-left: -250px">
        <div class="content-wrapper"  STYLE="height: 150%; width: 164%;">

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="card card-orange">
                                <div class="card-header">
                                    <h3 class="card-title">M<b style="font-size: 30px">ail</b></h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form method="post" action="{{route('mail.update',$mail->id)}}">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1"> Name</label>
                                                <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Enter Name" value="{{$mail['name']}}">
                                                <span style="color: red">@error('name'){{$message}}@enderror</span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1"> Email</label>
                                                <input type="text" name="email" class="form-control" id="exampleInputName" placeholder="Enter Email" value="{{$mail['email']}}">
                                                <span style="color: red">@error('email'){{$message}}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Subject</label>
                                            <textarea rows="4" type="text" name="subject" class="form-control" id="exampleInputName" placeholder="Enter Subject">{{$mail['subject']}}</textarea>
                                            <span style="color: red">@error('subject'){{$message}}@enderror</span>
                                        </div>
                                            </div>
                                            <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Message</label>
                                            <textarea rows="4" type="text" name="message" class="form-control" id="exampleInputName" placeholder="Enter message">{{$mail['message']}}</textarea>
                                            <span style="color: red">@error('message'){{$message}}@enderror</span>
                                        </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Reply</label>
                                            <textarea rows="4" type="text" name="reply" class="form-control" id="exampleInputName" placeholder="Enter Reply">{{$mail['reply']}}</textarea>
                                            <span style="color: red">@error('reply'){{$message}}@enderror</span>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn" style="background-color: #fd7e14">Submit</button>
                                        <a href="{{route('mail.show')}}"><button type="button" class="btn btn" style="background-color: #fd7e14">Back</button></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
