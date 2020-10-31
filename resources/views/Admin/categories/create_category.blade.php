
@extends('layouts/admin_lay')
@section('content')
 
<form method="post" action="{{route('cat.categories.store')}}" >
  <input type="hidden" name="_token" value="{{csrf_token()}}" >
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <div class="col-md-6">
    <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>
  </div>
  
  <div class="form-group">
    <button type="submit" class="btn btn-primary mb-2">Add</button>

</form>
   
 
@endsection