@extends('admin.master')
@section('content')
<main>
    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
           <a href="{{url('admin/category/create')}}" class="btn btn-info"> Add Category</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Category name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Category name</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                @foreach ( $categorys as $category )
                        <tr>
                            <td>{{$category->name}}</td>
                            <td style="display:inline-flex;"><a class="btn btn-info" href="{{url('admin/category/'.$category->id.'/edit')}}">Edit</a>
                                <form method="post" action="{{url('admin/category/').'/'.$category->id}}">
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