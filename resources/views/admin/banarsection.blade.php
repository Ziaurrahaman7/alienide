@extends('admin.master')
@section('content')
<main>
    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
           <a href="{{url('admin/banar/create')}}" class="btn btn-info"> Add Banar</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Banar</th>
                            <th>short_description</th>
                            <th>Status</th>
                            <th>button text</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Banar</th>
                            <th>short_description</th>
                            <th>Status</th>
                            <th>button text</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                @foreach ( $banars as $banar )
                        <tr>
                            <td>{{$banar->title}}</td>
                            <td> <img style="width:70px;" src="{{asset('uploads')}}/{{$banar->image}}" alt=""> </td>
                            <td>{{$banar->short_description}}</td>
                            <td>{{$banar->active}}</td>
                            <td>{{$banar->button_txt}}</td>
                            <td style="display:inline-flex;"><a class="btn btn-info" href="{{url('admin/banar/'.$banar->id.'/edit')}}">Edit</a>
                                <form method="post" action="{{url('admin/banar/').'/'.$banar->id}}">
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