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

    <div class="col-sm-6">
      <form method="post" action="{{url('addFc')}}">
      	{{ csrf_field() }}
      	<input type="hidden" name="tbl" value="{{encrypt('foodcats')}}">

        <div class="form-group">
      		<label>Title</label>
      		<input type="text" name="title" class="form-control">
      	</div>

      <div class="form-group">
      	<button class="btn btn-success">Add</button>
      </div>
    </div>

     <div class="col-sm-6">
      <p><strong>View All Category</strong></p>
      <table class="table table-striped table-hover table-bordered">
        <thead>
          <tr>
            <th>SN</th>
            <th>Title</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $key=>$cats)
          <tr>
            <td>{{++$key}}</td>
            <td>{{$cats->title}}</td>
            <td><a href="{{url('editFc')}}/{{$cats->fcid}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a><a href="{{url('deleteFc')}}/{{$cats->fcid}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
      	
      </form>

    </section>
    <!-- /.content -->
 @endsection

 

