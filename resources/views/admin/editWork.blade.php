@extends('admin.master')
@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add work Information</h3></div>
                    <div class="card-body">
                        <form method="post"  action="{{url('admin/work/'.$work->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row mb-3">
                                {{-- <input type="hidden" name="id" value="{{$work->id}}"> --}}
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" value="{{$work->title}}" name="title" type="text" placeholder="Title" />
                                        <label for="inputFirstName">Title</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        
                                        <input class="form-control" value="{{$work->image}}" name="image" id="inputLastName" type="file"/>
                                        <label for="inputLastName">work image</label>
                                        <img style="width:70px;" src="{{asset('uploads')}}/{{$work->image}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="shortdes" type="text" name="description" row="10" col="15" />{{$work->description}}</textarea>
                                <label for="inputEmail">Short Description</label>
                            </div>
                            <div class="row mb-3 mb-3">
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="button_txt" name="client_name" value="{{$work->client_name}}" type="text" placeholder="client_name" />
                                        <label for="button_txt">client_name</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                       <select class="form-select" name="category_id" id="">
                                        <option value="0">Category Select</option>
                                           @foreach ($categorys as $category)
                                             <option @if ( $work->category_id == $category->id) selected  @endif value="{{$category->id}}">{{$category->name}}</option>
                                           @endforeach
                                       </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                       <select class="form-select" name="active" id="">
                                           <option @if ( $work->active == 1) selected  @endif value="1">Active</option>
                                           <option  @if ( $work->active == 0) selected  @endif value="0">In Active</option>
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