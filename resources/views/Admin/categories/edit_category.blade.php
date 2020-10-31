
@extends('layouts/admin_lay')
@section('content')
 
    
<form method="POST" action="{{route('cat.categories.update',$category->id)}}">
@csrf
@method('PUT')
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <div class="col-md-6">
    <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="{{$category->title}}">
  </div>
  </div>

    <button type="submit" class="btn btn-primary mb-2">Save</button>

</form>

</table>
 
@endsection