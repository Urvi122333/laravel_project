@extends('blogs.layout')
@section('content')
<div class="card">
  <div class="card-header">List Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Title : {{ $blogs->title }}</h5>
        <p class="card-text">Description : {{ $blogs->description }}</p>
        <p class="card-text">Author : {{ $blogs->author }}</p>
        <p class="card-text">Date : {{ $blogs->date }}</p>
        <p class="card-text">ThumbnailImage : {{ $blogs->thumbnailimage }}</p>
  </div>
      
    </hr>
  
  </div>
</div>