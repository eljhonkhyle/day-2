@extends('layouts.page')
 
@section('content')
<form action="{{ route('task.update',  $task->id) }}" method="post">
@method('PUT')   
@csrf
<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="row">
    <div class="col-lg-12">
        <input type="text" class="form-control" name="task_name" placeholder="Enter Task" value="{{$task->task_name}}">
    </div>
    <div class="col-lg-12">
        <textarea name="description" class="form-control" cols="30" rows="5" placeholder="Description">
            {{$task->description}}
        </textarea>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</div>

</form>