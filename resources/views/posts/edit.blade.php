@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('posts.update', 1) }}">
    {{-- <form method="POST" action="{{ url('/posts') }}"> --}}
    {{-- <form method="POST" action="{{ route('posts.store') }}"> --}}
        
    @csrf   {{-- This (@csrf) should be included in any form --}}
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input name="title" type="text" class="form-control" value="">
    </div>
    
    <div class="mb-3">
        <label  class="form-label">Description</label>
        <textarea name="description" class="form-control"  rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label  class="form-label">Post Creator</label>
        <select name="post_creator" class="form-control">
            <option value="1">Khaled</option>
            <option value="2">Ahmed</option>
        </select>
    </div>

    <button class="btn btn-primary">Update</button>
</form>

@endsection