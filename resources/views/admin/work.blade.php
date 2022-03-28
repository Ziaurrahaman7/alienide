@extends('admin.master')
@section('content')
<main>
    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
           <a href="{{url('admin/work/create')}}" class="btn btn-info"> Add Work</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Work Category</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>client_name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Work Category</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>client_name</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                @foreach ( $works as $work )
                        <tr>
                            <td>{{$work->title}}</td>
                            <td>{{$work->work_category}}</td>
                            <td>{{$work->description}}</td>
                            <td> <img style="width:70px;" src="{{asset('uploads')}}/{{$work->image}}" alt=""> </td>
                            <td>{{$work->active}}</td>
                            <td>{{$work->client_name}}</td>
                            <td style="display:inline-flex;"><a class="btn btn-info" href="{{url('admin/work/'.$work->id.'/edit')}}">Edit</a>
                                <form method="post" action="{{url('admin/work/').'/'.$work->id}}">
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