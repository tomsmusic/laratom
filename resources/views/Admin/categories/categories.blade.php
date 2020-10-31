
@extends('layouts/admin_lay')
@section('content')

<p>
<a href="{{route('cat.categories.create')}}" type="button" class="btn btn-info">Add New Category</a>
</p>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($category as $c)
    <tr>
      <th scope="row">1</th>
      <td>{{$c->title}}</td>
      
      <td>
        <a href="{{route('cat.categories.edit',$c->id)}}"  class="btn btn-info">Edit</a>
        <a  href="javascript:void(0)"  onclick="$(this).parent().find('form').submit()"  type="button" class="btn btn-danger">Delete</a>
        <form method="post" action="{{route('cat.categories.destroy',$c->id)}}"> 
          @csrf 
          @method('delete')
          

        </form>
      </td>
    </tr>  
    @endforeach
  </tbody>

</table>

 
@endsection