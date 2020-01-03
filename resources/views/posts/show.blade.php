@extends('/layouts/app')
@section('content')


<div class="card mt-5 w-75 mx-auto">
    <div class="card-header">
      post info is : 
    </div>
    <div class="card-body">
      <h4 class="card-title">Title: {{$post['title']}}</h4>
      <p class="card-text">Description is:</p>
      <p class="card-text">{{$post['description']}}</p>
      <a href="{{ route('posts.index')}}" class="btn btn-outline-info mt-2">Go Back To Table</a>

    </div>
  </div>
@endsection