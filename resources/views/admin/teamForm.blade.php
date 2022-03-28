@extends('admin.master')
@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Team Information</h3></div>
                    <div class="card-body">
                        <form method="post" action="{{url('admin/team')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" name="name" type="text" placeholder="Name" />
                                        <label for="inputFirstName">Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" name="image" id="inputLastName" type="file"/>
                                        <label for="inputLastName">image</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="position" type="text" name="position" />
                                <label for="position">Position</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="shortdes" type="text" name="description" row="30" col="25" /></textarea>
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