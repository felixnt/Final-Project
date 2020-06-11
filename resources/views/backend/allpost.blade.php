@extends('master')

@section('content')
 <section class="content-header">
      <h1>
        All Post
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
          @foreach($data as $post)
          <tr>
            <td><img src="{{url('/images')}}/{{$post->picture}}" width="50"></td>
            <td>{{$post->fid}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->ingredient}}</td>
            <td>{{$post->step}}</td>
            <td>{{$post->category}}</td>
            <td><a href="{{url('editMenu')}}/{{$post->fid}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a><a href="{{url('deleteMenu')}}/{{$post->fid}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    </section>



    
    <!-- /.content -->
 @endsection

 

