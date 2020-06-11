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
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          @foreach($subscribe as $key=>$sub)
          <tr>
            <td>{{++$key}}</td>
            <td>{{$sub->email}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    </section>



    
    <!-- /.content -->
 @endsection

 

