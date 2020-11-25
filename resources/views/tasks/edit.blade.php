@extends('layout')
@section('content')
    @include('errors')
    <div class="container">
        <h3>Edit task # - {{$task->id}}</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {!! Form::open(['route'=>['tasks.update',$task->id],'method'=>'PUT']) !!}
                    <div class="form-group">
                        <input type="text" name="title" value="{{$task->title}}" class="form-control"></div>
                    <br>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$task->description}} </textarea>
                    <br>
                    <button class="btn btn-warning">Submit</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
