@extends('layouts.page')
 
@section('content')
<form action="{{ route('task.store') }}" method="post">
    @csrf
    <div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="row">
    <div class="col-lg-12">
        <input type="text" class="form-control" name="task_name" placeholder="Enter Task">
    </div>
    <div class="col-lg-12">
        <textarea name="description" class="form-control" cols="30" rows="5" placeholder="Description"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</div>

</form>
<div class="row">
    <div class="col-12 text-center py-5">
        @if(Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif
        <h1>Task List</h1>
        <div class= "row">
            <div class= "col-8 mx-auto">
                <table class= "table">
    <tr>
        <td>Task name</td>
        <td>Description</td>
        <td>Action</td>
    </tr>
    @foreach($tasks as $task)
    <tr>
        <td>{{$task->task_name}}</td>
        <td>{{$task->description}}</td>
      <td>
        <a href="{{ route ('task.show', $task->id) }}" class="btn btn-success">Edit</a>
        <form action = "{{route('task.destroy', $task->id)}}" method="post">
        @method('DELETE')
        @csrf
        <button href="" class="btn btn-danger">Delete</a>
</form>
        </td>
    </tr>
    @endforeach
</table>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection