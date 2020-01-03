@extends('/layouts/app')

@section('content')
    
<div class="w-75 text-center mx-auto  mt-5">
  <a href="{{route('posts.create')}}" class="btn btn-danger mb-2">add new record</a>
</div>
<table class="table">
  
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Created By</th>
      <th scope="col">title</th>
      <th scope="col">slug</th>
      <th scope="col">content</th>
      <th scope="col">date</th>
      <th scope="col" class="text-center">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $index => $value)  
    <tr>
    <th scope="row">{{$value['id']}}</th>
    {{-- <td>{{request()->user()->posts->find(7)}}</td>
    <td>{{$value->user->id}}</td> --}}
        <td>{{$value->user->name}}</td>
        <td>{{$value['title']}}</td>
        <td >{{$value['slug']}}</td>
        <td >{{$value['description']}}</td>
        
        <td>{{$value['created_at']->format('Y-m-d')}}</td>
    
        <td class="text-center">
          <a href="{{ route('posts.edit',['post' => $value['id']]) }}" class="btn btn-info">update</a>
          <a href="posts/{{$value['id']}}"  class="btn btn-success">Show</a>
          
          
          <form class="d-inline" action="/posts/{{$value['id']}}" method="POST">
            {{ csrf_field() }}
            
            <button type="submit"  onclick="return confirm('Are you sure?')" class="btn btn-danger">delete</button>
            <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          </form>
          

        </td>

      </tr>
      @endforeach
    

  </tbody>
</table>
@endsection

