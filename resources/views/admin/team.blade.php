@extends('admin.master')
@section('content')
<main>
    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
           <a href="{{url('admin/team/create')}}" class="btn btn-info"> Add team</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                @foreach ( $teams as $team )
                        <tr>
                            <td>{{$team->name}}</td>
                            <td>{{$team->position}}</td>
                            <td> <img style="width:70px;" src="{{asset('uploads')}}/{{$team->image}}" alt=""> </td>
                            <td>{{$team->description}}</td>
                            <td style="display:inline-flex;"><a class="btn btn-info" href="{{url('admin/team/'.$team->id.'/edit')}}">Edit</a>
                                <form method="post" action="{{url('admin/team/').'/'.$team->id}}">
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