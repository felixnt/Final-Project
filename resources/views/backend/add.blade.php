@extends('master')

@section('content')
 <section class="content-header">
      <h1>
        Add Menu Panel
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
      <form method="post" action="{{url('addMenu')}}" enctype="multipart/form-data">
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
      	</div>
      	
      	<div id="inGroup">
      	<div class="form-group inField">
      		<input type="text" name="ingredient[]" class="form-control ">
      		<a href="#" class="btn btn-warning addFieldi"><i class="fa fa-plus"></i></a>
      	</div>
      </div>

		<div class="form-group">
      		<label>Steps</label>
      	</div>

      <div id="stepGroup">
      	<div class="form-group stepField">
      		<input type="text" name="step[]" class="form-control ">
      		<a href="#" class="btn btn-warning addFields"><i class="fa fa-plus"></i></a>
      	</div>
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

    $('.addFieldi').click(function(){
    	var newField = $(document.createElement('div')).attr('class','form-group');
    	newField.after().html('<input type="text" name="ingredient[]" class="form-control"></div>');
    	newField.appendTo('#inGroup');
    })

 	$('.addFields').click(function(){
    	var newField = $(document.createElement('div')).attr('class','form-group');
    	newField.after().html('<input type="text" name="step[]" class="form-control"></div>');
    	newField.appendTo('#stepGroup');
    })

    </script>

    <style>
    	.inField{
    		position: relative;
    	}
    	.stepField{
    		position: relative;
    	}
    	.addFieldi{
    		position: absolute;
    		top: 0;
    		right: 0;

    	}
    	.addFields{
    		position: absolute;
    		top: 0;
    		right: 0;

    	}
    </style>
    <!-- /.content -->
 @endsection

 

