@extends('admin.master')
@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Banar Information</h3></div>
                    <div class="card-body">
                        <form action="{{url('admin/banar/store')}}">
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
                                        <label for="inputLastName">Banar image</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="shortdes" type="text" name="short_description" row="10" col="15" /></textarea>
                                <label for="inputEmail">Short Description</label>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="button_txt" name="button_txt" type="text" placeholder="button_txt" />
                                        <label for="button_txt">Button Text</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                       <select class="form-select" name="active" id="">
                                           <option value="1">Active</option>
                                           <option value="0">In Active</option>
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