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
      <form method="post" action="{{url('updateMenu')}}/{{$maindata->fcid}}">
      	{{ csrf_field() }}
      	<input type="hidden" name="tbl" value="{{encrypt('foodcats')}}">
      	<input type="hidden" name="fcid" value="{{$maindata->fcid}}">

        <div class="col-sm-6">
        <div class="form-group">
      		<label>Title</label>
      		<input type="text" name="title" value="{{$maindata->title}}" class="form-control">
      	</div>

      <div class="form-group">
      	<button class="btn btn-success">Update</button>
      </div>
      	</div>
      </form>
    
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
          @foreach($data as $key=>$up)
          <tr>
            <td>{{++$key}}</td>
            <td>{{$up->title}}</td>
            <td><a href="{{url('editFc')}}/{{$up->fcid}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a><a href="{{url('deleteFc')}}/{{$up->fcid}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    </section>
    <!-- /.content -->
 @endsection

 

