@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.tags.create')}}">Add New Tag</a>
    <h1>Tags List</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    

    <div class="car">

        <div class="card-body">

            <table class="table table-striped">

                <thead>

                    <tr>

                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>

                    </tr>

                </thead>

                <tbody>

                    @foreach ($tags as $index => $tag)

                    <tr>

                        <td>{{$index + 1}}</td>
                        <td>{{$tag->name}}</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm " href="{{route('admin.tags.edit', $tag)}}">Edit</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.tags.destroy', $tag)}}" method="POST">
                                
                                @csrf
                                @method('delete')

                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>

                            </form>
                        </td>


                    </tr>
                        
                    @endforeach

                </tbody>

            </table>

        </div>
    </div>


@stop

