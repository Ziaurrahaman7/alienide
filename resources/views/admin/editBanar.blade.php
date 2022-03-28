@extends('admin.master')
@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Banar Information</h3></div>
                    <div class="card-body">
                        <form method="post"  action="{{url('admin/banar/'.$banar->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row mb-3">
                                {{-- <input type="hidden" name="id" value="{{$banar->id}}"> --}}
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" value="{{$banar->title}}" name="title" type="text" placeholder="Title" />
                                        <label for="inputFirstName">Title</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        
                                        <input class="form-control" value="{{$banar->image}}" name="image" id="inputLastName" type="file"/>
                                        <label for="inputLastName">Banar image</label>
                                        <img style="width:70px;" src="{{asset('uploads')}}/{{$banar->image}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="shortdes" type="text" name="short_description" row="10" col="15" />{{$banar->short_description}}</textarea>
                                <label for="inputEmail">Short Description</label>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="button_txt" name="button_txt" value="{{$banar->button_txt}}" type="text" placeholder="button_txt" />
                                        <label for="button_txt">Button Text</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                       <select class="form-select" name="active" id="">
                                           <option @if ( $banar->active == 1) selected  @endif value="1">Active</option>
                                           <option  @if ( $banar->active == 0) selected  @endif value="0">In Active</option>
                                       </select>
                                    </div>
                                </div>
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