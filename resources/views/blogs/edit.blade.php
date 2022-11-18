@extends('blogs.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Blogs</div>
  <div class="card-body">
      
      <form action="{{ url('blogs/' .$blogs->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$blogs->id}}" id="id" />
        <label>Title</label></br>
        <input type="text" name="title" id="title" value="{{$blogs->title}}" class="form-control"></br>
        <label>Description</label></br>
        <input type="description" name="description" id="description" value="{{$blogs->description}}" class="form-control"></br>
        <label>ThumbnailImage</label></br>
        <input type="thumbnailimage" name="thumbnailimage" id="thumbnailimage" value="{{$blogs->thumbnailimage}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop