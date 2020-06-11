@extends('master')

@section('content')
 <section class="content-header">
      <h1>
        All Contact
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
      <p><strong>View All Contact</strong></p>
      <table class="table table-striped table-hover table-bordered">
        <thead>
          <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
          </tr>
        </thead>
        <tbody>
          @foreach($contact as $key=>$con)
          <tr>
            <td>{{++$key}}</td>
            <td>{{$con->name}}</td>
            <td>{{$con->email}}</td>
            <td>{{$con->message}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    </section>



    
    <!-- /.content -->
 @endsection

 

