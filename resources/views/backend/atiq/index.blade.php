@extends('backend.layout.master')
@section('title')
    About Atiq - Index
@endsection
@section('content')

  <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6 offset-3">
            <h1>About Atiq</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">About Atiq</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row offset-1">
          <!-- left column -->
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">About Atiq</h3>
                @if ($atiqCount < 1)
              
                <a href="{{route('atiq.create')}}" class="float-right btn btn-outline-dark btn-sm mb-2"><i class="fas fa-plus-square"></i></a>
                      
                @endif
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('backend.sessionMsg')
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Logo</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>File</th>
                    <th>Action</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                 
                  
                   
                            
                   
                   
                  <tr>
                    <td>#1</td>
                    <td> <img src="{{(!empty($atiq->logo))?URL::to('storage/'.$atiq->logo):URL::to('image/no_image.png')}}" alt="" style="max-width:250px"></td>
                 <td>{{@$atiq->title}}</td>
                 <td>{!!@$atiq->desc!!}</td>
                 <td><a href="{{(!empty($atiq->file))?URL::to('storage/'.$atiq->file):URL::to('image/no_image.png')}}">{{@$atiq->file}}</a></td>
                   <td>
                   @if ($atiqCount > 0)
               
                      <a href="{{route('atiq.edit',[$atiq])}}"><button class="btn btn-outline-info btn-sm"><i class="fas fa-pen-square"></i></button></a>
                    
                      <form action="{{route('atiq.destroy',[$atiq])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                         
                         
                    @endif
                    </td>
                   
                  </tr>
                
    

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Logo</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>File</th>
                    <th>Action</th>
                  
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
        
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection