
@extends('layouts/admin_lay')
@section('content')
 
<form method="post" action="{{route('admin.posts.store')}}" enctype="multipart/form-data" >
  <input type="hidden" name="_token" value="{{csrf_token()}}" >
  <div class="form-group">
   <div class="row">
      <label class="col-md-3" for="exampleFormControlInput1">Title</label>
      <div class="col-md-6" >
      <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
     </div>
   </div>
  </div>

  <div class="form-group">
  <div class="row">
    <label class="col-md-3" for="exampleFormControlInput1">Category</label>
    <div class="col-md-6">
        <select name="category_id" class="form-control" >
                 <option value="" >Choose Category</option>
                @foreach($category as $c)
                <option value="{{$c->id}}">{{$c->title}}</option>
                @endforeach
        </select>
    </div>
  </div>
  </div>

  <div class="form-group">
  <div class="row">
    <label class="col-md-3" for="exampleFormControlInput1">Author</label>
    <div class="col-md-6" >
    <input input  name="author" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
  </div>
  </div>
  <div class="form-group">
    <div class="row">
      <label class="col-md-3" >Image</label>
      <div class="col-md-6">  <input name="image" type="file"></div>
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="form-group">
  <div class="row">
    <label class="col-md-3" for="exampleFormControlTextarea1">Example textarea</label>
    <div input class="col-md-6">
    <textarea class="form-control" id="exampleFormControlTextarea1" name="post" rows="3"></textarea>
</div>
</div>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary mb-2">Add</button>

</form>
   
 
@endsection