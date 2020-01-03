@extends('/layouts/app')
@section('content')
    

<form class="w-75 mx-auto" method="POST" action="{{route('posts.update',['post' => $post])}}">
  @csrf
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
  @method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">Title:</label>
      <input type="text" name="title" value="{{$post->title}}" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">description</label>
      <input type="text" name="description" value="{{$post->description}}" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
  </form>

  @endsection