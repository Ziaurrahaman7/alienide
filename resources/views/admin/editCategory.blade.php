@extends('admin.master')
@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Category Information</h3></div>
                    <div class="card-body">
                        <form method="post"  action="{{url('admin/category/'.$category->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row mb-3">
                                {{-- <input type="hidden" name="id" value="{{$banar->id}}"> --}}
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" value="{{$category->name}}" name="name" type="text" placeholder="Category Name" />
                                        <label for="inputFirstName">Category Name</label>
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