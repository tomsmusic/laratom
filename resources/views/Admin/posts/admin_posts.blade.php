
@extends('layouts/admin_lay')
@section('content')

<p>
<a href="{{route('admin.posts.create')}}" type="button" class="btn btn-info">Add New Post</a>
</p>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @if(count($post))
  @foreach($post as $p)
    <tr>
      <th scope="row">1</th>
      <td>{{$p->Title}}</td>
      <td>{{$p->category->title}}</td>
      
      <td>
        <a href="{{route('admin.posts.edit',$p->id)}}"  class="btn btn-info">Edit</a>
        <a  href="javascript:void(0)"  onclick="$(this).parent().find('form').submit()"  type="button" class="btn btn-danger">Delete</a>
        <form method="post" action="{{route('admin.posts.destroy',$p->id)}}"> 
          @csrf 
          @method('delete')
          

        </form>
      </td>
    </tr>  
    @endforeach
    @else
    <tr><td>No post found</td></tr>
    @endif
  </tbody>

</table>

 
@endsection