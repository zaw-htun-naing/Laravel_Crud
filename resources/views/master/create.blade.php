@extends('master.master')
@section('title','Create')
@section('content')    

    <div class="container w-50 mt-5">
      <div class="card">
        <div class="card-title">
          <div class="row pt-3 px-3"><div class="col-md-3"><a href="{{route('post.index')}}" class="btn btn-secondary float-left"> << Back </a></div>
        <div class="col-md-9"><h1 class="text-center">Post Create</h1></div></div>
          
          
        </div>
        <div class="card-body">
          <form action="{{route('post.store')}}" method="POST">
            @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Enter FirstName</label>
                <input type="text" name="firstname" class="form-control @error ('firstname') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{@old('firstname')}}">
               @error('firstname') <div class="invalid-feedback">{{$message}}</div>      @enderror
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Enter LastName</label>
                <input type="text" name="lastname" class="form-control @error ('lastname') is-invalid @enderror" id="exampleInputPassword1" value="{{ @old('lastname')}}">
              @error('lastname') <div class="invalid-feedback">{{$message}}</div>      @enderror
              </div>
              <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Enter Email</label>
                  <input type="email" name="email" class="form-control @error ('email') is-invalid @enderror" id="exampleInputPassword1" value="{{@old('email')}}">
               @error('email') <div class="invalid-feedback">{{$message}}</div>      @enderror
                </div>
             
              <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
      </div>
        
    </div>




@endsection