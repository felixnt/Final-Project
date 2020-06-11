@extends('master')

@section('content')
 <section class="content-header">
      <h1>
        Update Menu
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
      <form method="post" action="{{url('updateMenu')}}/{{$maindata->fid}}">
      	{{ csrf_field() }}
      	<input type="hidden" name="tbl" value="{{encrypt('foods')}}">
      	<input type="hidden" name="fid" value="{{$maindata->fid}}">

      	<div class="form-group">
          <input type="file"  accept="image/*" name="picture" id="file"  onchange="loadFile(event)" style="display: none;"></p>
      <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
        <p><img id="output" width="200" /></p>
        <img src="{{url('/images')}}/{{$maindata->picture}}" width="200">
        </div> 

      

        <div class="form-group">
      		<label>Title</label>
      		<input type="text" name="title" value="{{$maindata->title}}" class="form-control">
      	</div>
      	
        <div class="form-group">
          <label>Ingredient</label>
          <textarea name="ingredient" class="form-control" rows="10">{{$maindata->ingredient}}</textarea> 
        </div>

         <div class="form-group">
          <label>Step</label>
          <textarea name="step" class="form-control" rows="10">{{$maindata->step}}</textarea> 
        </div>

      <div class="form-group">
        <label>Category</label>
        <select class="form-control" name="category" value="{{$maindata->category}}">
          <option>food</option>
          <option>drink</option>
          <option>snack</option>
        </select>
      </div>

      <div class="form-group">
      	<button class="btn btn-success">Update</button>
      </div>
      	
      </form>
    
    <div>
      <p><strong>View All Menu</strong></p>
      <table class="table table-striped table-hover table-bordered">
        <thead>
          <tr>
            <th>Picture</th>
            <th>FID</th>
            <th>Title</th>
            <th>Ingredient</th>
            <th>Step</th>
            <th>Category</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $up)
          <tr>
            <td>{{$up->picture}}</td>
            <td>{{$up->fid}}</td>
            <td>{{$up->title}}</td>
            <td>{{$up->ingredient}}</td>
            <td>{{$up->step}}</td>
            <td>{{$up->category}}</td>
            <td><a href="{{url('editMenu')}}/{{$up->fid}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a><a href="{{url('deleteMenu')}}/{{$up->fid}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

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

 

