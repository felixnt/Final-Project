@extends('master')

@section('content')
 <section class="content-header">
      <h1>
        Add Post
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    @if(Session::has('message'))
    <div class="col-sm-12">
    	<div class="alert alert-success alert-dismissable">
    		{{ session::get('message') }}
    		<a class="close" data-dismiss="alert">&times;</a>
    	</div>
    </div>
    @endif

      <form method="post" action="{{url('addMenu')}}">
      	{{ csrf_field() }}
      	<input type="hidden" name="tbl" value="{{encrypt('foods')}}">
      	
      	<div class="form-group">
          <input type="file"  accept="image/*" name="picture" id="file"  onchange="loadFile(event)" style="display: none;"></p>
      <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
      <p><img id="output" width="200" /></p>
        </div>

        <div class="form-group">
      		<label>Title</label>
      		<input type="text" name="title" class="form-control">
      	</div>

      	<div class="form-group">
      		<label>Ingredients</label>
          <textarea name="ingredient" class="form-control" rows="10"></textarea> 
      	</div>
      	
        <div class="form-group">
          <label>Step</label>
          <textarea name="step" class="form-control" rows="10"></textarea> 
        </div>

      <div class="form-group">
        <label>Category</label>
        <select class="form-control" name="category">
          @foreach($cats as $cat)
          <option>{{$cat->title}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
      	<button class="btn btn-success">Add</button>
      </div>
      	
      </form>

    </section>
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
    var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
	};
    </script>
  
     <script src="/ckeditor/ckeditor.js"></script>

     <script>
    CKEDITOR.replace('step', {});
    CKEDITOR.replace('ingredient', {});
    </script>



    
    <!-- /.content -->
 @endsection

 

