@extends('admin.master')
@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Work/service Information</h3></div>
                    <div class="card-body">
                        <form method="post" action="{{url('admin/work')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" name="title" type="text" placeholder="Title" />
                                        <label for="inputFirstName">Title</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" name="image" id="inputLastName" type="file"/>
                                        <label for="inputLastName">work image</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="clientname" name="client_name" type="text" placeholder="client_name" />
                                        <label for="inputFirstName">Client_name</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                       <select class="form-select" name="active" id="">
                                           <option value="1">Active</option>
                                           <option value="0">In Active</option>
                                       </select>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                       <select class="form-select" name="category_id" id="">
                                        <option value="0">Category Select</option>
                                           @foreach ($categorys as $category)
                                             <option value="{{$category->id}}">{{$category->name}}</option>
                                           @endforeach
                                       </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="shortdes" type="text" name="description" row="40" col="35" /></textarea>
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