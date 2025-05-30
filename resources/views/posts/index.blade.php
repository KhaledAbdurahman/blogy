@extends('layouts.app')
@section('content')

    <div class="text-center">
        <a href="{{ route('posts.create') }}" class="btn btn-success">Create Post</a>
    </div>


    <!-- The Table of Contents -->
    <table class="table table-striped">

      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Posted By</th>
          <th scope="col">Posted At</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>

      <tbody>

        @foreach ($posts as $post)
            <tr>
                <td>{{$post['id']}}</td>
                <td>{{$post['title']}}</td>
                <td>{{$post['posted_by']}}</td>
                <td>{{$post['created_at']}}</td>

                <td>
                <a href="{{ route('posts.show', $post['id']) }}" class="btn btn-info">View</a>
                <a href="{{ route('posts.edit', $post['id']) }}" class="btn btn-primary">Edit</a>

                <form style="display: inline" method="POST" action="{{ route('posts.destroy', $post['id']) }}">
                  @csrf
                  @method('DELETE')
                  {{-- <input type="hidden" name="_method" value="DELETE"> --}}
                  {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}

                  <button ype="submit" class="btn btn-danger">Delete</button>
                </form>

                </td>

            </tr>
        @endforeach


      </tbody>

    </table>

    <!---->

@endsection