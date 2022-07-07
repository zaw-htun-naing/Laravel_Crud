@extends('master.master')
@section('title','index')
@section('content')
        <div class="container mt-2">
            <table class="table table-info table-hover">
                <a href="{{route('post.create')}}" class="btn btn-primary btn-sm float-end mb-2">+Add New Post</a>
                <thead class="table-dark pt-2">
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                  @foreach($posts as $key=>$post)
                  <tr>
                    <th scope="row">{{++$key}}</th>
                    <td>{{$post['firstname']}}</td>
                    <td>{{$post['lastname']}}</td>
                    <td>{{$post['email']}}</td>
                    <td>
                        <form action="{{route('post.destroy',$post->id)}}" method="POST">
                            @csrf @method('DELETE')
                            <a href="{{route('post.edit',$post->id)}}" class="btn btn-primary btn-sm" type="button">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              @if ($posts->hasPages())
    <div class="pagination-wrapper">
         {{ $posts->links() }}
    </div>
@endif
        </div>
@endsection