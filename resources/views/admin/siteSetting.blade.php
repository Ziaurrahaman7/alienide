@extends('admin.master')
@section('content')
<main>
    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
           <a href="{{url('admin/siteSetting/create')}}" class="btn btn-info"> Add siteSettings</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Meta</th>
                            <th>Logo</th>
                            <th>Favicon</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>FaceBook</th>
                            <th>Youtube</th>
                            <th>Otherlink</th>
                            <th>Copyright</th>
                            <th>Map</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Meta</th>
                            <th>Logo</th>
                            <th>Favicon</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>FaceBook</th>
                            <th>Youtube</th>
                            <th>Otherlink</th>
                            <th>Copyright</th>
                            <th>Map</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                @foreach ( $siteSettings as $siteSetting )
                        <tr>
                            <td>{{$siteSetting->meta}}</td>
                            <td> <img style="width:70px;" src="{{asset('uploads')}}/{{$siteSetting->logo}}" alt=""> </td>
                            <td> <img style="width:70px;" src="{{asset('uploads')}}/{{$siteSetting->favicon}}" alt=""> </td>
                            <td>{{$siteSetting->email}}</td>
                            <td>{{$siteSetting->phone}}</td>
                            <td>{{$siteSetting->address}}</td>
                            <td>{{$siteSetting->facebook}}</td>
                            <td>{{$siteSetting->youtube}}</td>
                            <td>{{$siteSetting->otherlink}}</td>
                            <td>{{$siteSetting->copyright}}</td>
                            <td>{{$siteSetting->map}}</td>
                            <td style="display:inline-flex;"><a class="btn btn-info" href="{{url('admin/siteSetting/'.$siteSetting->id.'/edit')}}">Edit</a>
                                <form method="post" action="{{url('admin/siteSetting/').'/'.$siteSetting->id}}">
                                    @csrf
                                    @method('delete')
                                    <button style="margin-left:5px;" class="btn btn-danger" type="submit">Delete</button>
                                </form>
                               </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection