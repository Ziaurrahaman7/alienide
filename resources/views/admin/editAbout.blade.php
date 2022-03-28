@extends('admin.master')
@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit about Information</h3></div>
                    <div class="card-body">
                        <form method="post"  action="{{url('admin/about/'.$about->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row mb-3">
                                {{-- <input type="hidden" name="id" value="{{$about->id}}"> --}}
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" value="{{$about->title}}" name="title" type="text" placeholder="Title" />
                                        <label for="inputFirstName">Title</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        
                                        <input class="form-control" value="{{$about->image}}" name="image" id="inputLastName" type="file"/>
                                        <label for="inputLastName">about image</label>
                                        <img style="width:70px;" src="{{asset('uploads')}}/{{$about->image}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="shortdes" type="text" name="description" row="10" col="15" />{{$about->description}}</textarea>
                                <label for="inputEmail">Description</label>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input class="btn btn-info" type="submit" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection