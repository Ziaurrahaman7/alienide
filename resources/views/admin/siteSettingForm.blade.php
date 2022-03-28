@extends('admin.master')
@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add siteSetting Information</h3></div>
                    <div class="card-body">
                        <form method="post" action="{{url('admin/siteSetting')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" name="meta" type="text" placeholder="Meta title" />
                                        <label for="inputFirstName">Meta Title</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" name="logo" id="inputLastName" type="file"/>
                                        <label for="inputLastName">Logo</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" name="favicon" id="favicon" type="file"/>
                                        <label for="favicon">Favicon</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" name="email" id="email" type="email"/>
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" name="phone" id="phone" type="number"/>
                                        <label for="phone">Phone</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="address" type="text" name="address" row="10" col="15" /></textarea>
                                <label for="inputEmail">Address</label>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="facebook" name="facebook" type="url" placeholder="Facebook Link" />
                                        <label for="facebook">Facebook</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="youtube" name="youtube" type="url" placeholder="Youtube Link" />
                                        <label for="youtube">Youtube Link</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="youtube" name="otherlink" type="url" placeholder="Otherlink" />
                                        <label for="otherlink">Otherlink</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="copyright" name="copyright" type="text" placeholder="copyright" />
                                        <label for="copyright">Copyright</label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="map" name="map" type="text" placeholder="map" />
                                        <label for="map">Map</label>
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