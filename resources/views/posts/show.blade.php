@extends('/layouts/app')
@section('content')


<div class="card mt-5 w-75 mx-auto">
    <div class="card-header">
      post info is : 
    </div>
    <div class="card-body">
      <h4 class="card-title">Title:- {{$post['title']}}</h4>
      <h4 class="card-title">Description is:- </h4>
      <p class="card-title">{{$post['description']}}</p>
      

    </div>
  </div>
  
  

  <div class="card mt-5 w-75 mx-auto">
    <div class="card-header">
      post creator info is : 
    </div>
    <div class="card-body">
      <h4 class="card-title">Title:- {{$post->user->name}}</h4>
      <h4 class="card-title d-inline">Email is:- </h4><p class="d-inline">{{$post->user->email}}</p>
      <div>
      <h4 class="d-inline">Created_at:- </h4><P class="d-inline">{{$post->user->created_at->format('l jS \\of F Y h:i:s A')}}</P>
    </div>
    </div>
    <a href="{{ route('posts.index')}}" class="btn btn-outline-info mt-2">Go Back To Table</a>

  </div>
@endsection