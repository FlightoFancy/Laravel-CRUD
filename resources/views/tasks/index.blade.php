@extends('layout')
@section('content')

    <div class="container">

        <h3>My tasks</h3>
        <a href="{{('tasks/create')}}" class="btn btn-success">Create</a>
        <div class="row">
            <div class="col-md-10 col-md-offset1">
                <table class="table">
                    <thead>
                    <tr>
                        <td>Id</td>
                        <td>Title</td>
                        <td>Actions</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->title}}</td>
                            <td>
                                <a href="{{route('tasks.show',$task->id)}}">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{route('tasks.edit',$task->id)}}">
                                    <i class="fas fa-edit"></i>
                                </a>
                                {!! Form::open(['method'=>'DELETE','route'=>['tasks.destroy',$task->id]])!!}
                                <button onclick="return confirm('Are you sure?')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
