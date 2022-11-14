@extends('layouts.app')
@section('content')



    <style>
        body {
            /*overflow-y: hidden; !* Hide vertical scrollbar *!*/
            overflow-x: hidden; /* Hide horizontal scrollbar */
        }
    </style>

    <div style="margin-left: -250px">
        <div class="content-wrapper" STYLE="height: 150%; width: 164%;">

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">

                        </div>

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
                            <div class="card card" style="background-color: #f4f6f9">
                                <div class="card-header">
                                    <h3 class="card-title"><b>ADD ALL CLOTHES</b></h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form method="post" action="{{route('gents/store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"> Select Gender </label>
                                                    <select name="gender" class="form-control">
                                                        <option>male</option>
                                                        <option>female</option>
                                                        <option>Child</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"> Select Category </label>
                                                    <select name="category" class="form-control">
                                                        <option>Shirts</option>
                                                        <option>Dress</option>
                                                        <option>Jeans</option>
                                                        <option>Swimwear</option>
                                                        <option>Sleepwear</option>
                                                        <option>Sportswear</option>
                                                        <option>Jumpsuits</option>
                                                        <option>Blazers</option>
                                                        <option>Jackets</option>
                                                        <option>Shoes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Product Image:</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="product_image" class="form-control"
                                                               id="customFile" value="{{old('product_image')}}">
                                                        <label class="custom-file-label" for="customFile">Upload
                                                            Image</label>
                                                        <span
                                                            style="color: red">@error('product_image'){{$message}}@enderror</span>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <label for="exampleInputEmail1">Product Name: </label>
                                            <input type="text" name="product_name" class="form-control"
                                                   id="exampleInputName" placeholder="Enter Product Name"
                                                   value="{{old('product_name')}}">
                                            <span
                                                style="color: red">@error('product_name'){{$message}}@enderror</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label for="exampleInputEmail1">Product Price: </label>
                                                    <input type="text" name="product_price" class="form-control"
                                                           id="exampleInputName" placeholder="Enter Product Price"
                                                           value="{{old('product_price')}}">
                                                    <span
                                                        style="color: red">@error('product_price'){{$message}}@enderror</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label for="exampleInputEmail1">Product Size: </label>
                                                    <input type="text" name="product_size" class="form-control"
                                                           id="exampleInputName" placeholder="Enter Product Size"
                                                           value="{{old('product_size')}}">
                                                    <span
                                                        style="color: red">@error('product_size'){{$message}}@enderror</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Description</label>
                                            <textarea rows="4" type="text" name="product_description" class="form-control"
                                                      id="exampleInputName"
                                                      placeholder="Enter Description Name">{{old('product_description')}}</textarea>
                                            <span style="color: red">@error('product_description'){{$message}}@enderror</span>
                                        </div>
                                    </div>


                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn" style="background-color: #fd7e14">Submit
                                        </button>
                                        <a href="{{route('gents/show')}}">
                                            <button type="button" class="btn btn" style="background-color: #fd7e14">
                                                Back
                                            </button>
                                        </a>

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


