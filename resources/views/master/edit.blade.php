@extends('master.master')
@section('title','Create')
@section('content')    

    <div class="container w-50 mt-5">
        <h1 class="text-center text-danger">I am Update Page</h1>
        <form action="{{route('post.update',$post->id)}}" method="POST">
            @method('PUT')
          @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Enter FirstName</label>
              <input type="text" name="firstname" class="form-control @error ('firstname') is-invalid @enderror" id="exampleInputEmail1" value="{{$post->firstname?? @old('firstname')}}">
             @error('firstname') <div class="invalid-feedback">{{$message}}</div>  @enderror
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Enter LastName</label>
              <input type="text" name="lastname" class="form-control @error ('lastname') is-invalid @enderror" id="exampleInputPassword1" value="{{$post->lastname?? @old ('lastname')}}">
            @error('lastname') <div class="invalid-feedback">{{$message}}</div>  @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Enter Email</label>
                <input type="email" name="email" class="form-control @error ('email') is-invalid @enderror" id="exampleInputPassword1" value="{{$post->email?? @old ('email')}}">
              @error('email') <div class="invalid-feedback">{{$message}}</div>  @enderror
            </div>
           
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
    </div>




@endsection