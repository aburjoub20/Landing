@extends('backend.master')
@section('title')
    protfolio 
@endsection
@section('contant')

<div class="row">

<div class="col-md-12">
    <div class="card">
      <div class="card-header d-flex justify-content-end">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add Protfolio  </button>
      </div>
      <!-- Button trigger modal -->

      
      <!-- /.card-header -->
      <div class="card-body">
          
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Name</th>
              <th>Desc</th>
              <th style="width: 40px">Action</th>
            </tr>
          </thead>
          <tbody>
              @if($errors->any())
                  <div class="alert alert-danger">
                      <ul>
@foreach ($errors->any() as $error )
<li> {{$error}} </li>
@endforeach
                      </ul>
                  </div>
              @endif
            <tr>
              <td>1.</td>
              <td>name</td>
              <td>desc  </td>
              <td>action</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
      <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
          <li class="page-item"><a class="page-link" href="#">«</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">»</a></li>
        </ul>
      </div>
      @include('backend.protfolio.create')
    </div>
    <!-- /.card -->

    <!-- /.card -->
  </div>


</div>
  
@endsection
