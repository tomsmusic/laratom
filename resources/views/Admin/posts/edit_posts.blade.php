
@extends('layouts/admin_lay')
@section('content')
 
    


<form method="post" action="{{route('admin.posts.update',$post->id)}}" enctype="multipart/form-data" >
@csrf
@method('PUT')
  <input type="hidden" name="_token" value="{{csrf_token()}}" >
  <div class="form-group">
   <div class="row">
   
      <label class="col-md-3"  for="exampleFormControlInput1">Title</label>
      <div class="col-md-6">
      <input  name="title" type="text" class="form-control" id="exampleFormControlInput1" value="{{$post->Title}}">
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
                <option value="{{$c->id}}"
                   @if($c->id == $post->catagory_id )
                   selected
                   @endif  
                >{{$c->title}}</option>
                @endforeach
        </select>
    </div>
  </div>
  </div>

  <div class="form-group">
  <div class="row">
    <label class="col-md-3" for="exampleFormControlInput1">Author</label>
    <div class="col-md-6">
    <input input  name="author" type="text" class="form-control" id="exampleFormControlInput1" value="{{$post->author}}">
  </div>
  </div>
  </div>

  <div class="form-group">
    <div class="row">
         <label class="col-md-3" >Image</label>
         <div class="col-md-9">  
            <input name="image" type="file">
         </div>
        
        @if($post->image)
            <div class="col-md-3"> </div>
            <div class="col-md-9">
               <image src="{{asset('storage/posts/'.$post->image)}}" style="width:150px;">
            </div>
            
        @endif
    </div>
  </div>

  <div class="form-group">
  <div class="row">
    <label class="col-md-3" for="exampleFormControlTextarea1">Example textarea</label>
    <div input class="col-md-6">
    <textarea class="form-control" id="exampleFormControlTextarea1" name="post" rows="3">{{$post->Post}}</textarea>
</div>
</div>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary mb-2">Save</button>

</form>
 
@endsection