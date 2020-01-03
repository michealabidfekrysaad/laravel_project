@extends('/layouts/app')
@section('content')
    

<form class="w-75 mx-auto" method="POST" action="{{route('posts.store')}}">
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
    <div class="form-group">
      <label for="exampleInputEmail1">Title:</label>
      <input type="text" name="title" value="" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">description</label>
      <input type="text" name="description" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-success">Create</button>
  </form>

  @endsection