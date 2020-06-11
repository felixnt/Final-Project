@extends('master')

@section('content')
 <section class="content-header">
      <h1>
        All Diet Plan
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
      <p><strong>View All Diet Plan</strong></p>
      <table class="table table-striped table-hover table-bordered">
        <thead>
          <tr>
            <th>Picture</th>
            <th>DID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Writer</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $post)
          <tr>
            <td><img src="{{url('/images')}}/{{$post->picture}}" width="50"></td>
            <td>{{$post->did}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->desc}}</td>
            <td>{{$post->writer}}</td>
            <td><a href="{{url('editDp')}}/{{$post->did}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a><a href="{{url('deleteDp')}}/{{$post->did}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    </section>



    
    <!-- /.content -->
 @endsection

 

