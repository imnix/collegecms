@extends('layouts.cms')

@section('content')
<div class="container pt-2">
 <div class="card">
  <div class="card-header">
    <h3 class="card-title"><span>Faculty List</span></h3>
    <button class="btn btn-secondary float-right" data-toggle="modal" data-target="#modal-faculty">Add new Faculty</button>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="idTblFaculty" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Sr No</th>
          <th>Faculty</th>
          <th>Action</th> 
        </tr>
      </thead>
      <tbody>
        @php
          $count =0;
        @endphp
        @foreach($faculties as $faculty)
        <tr>
          <td>{{++$count}}</td>
          <td>{{$faculty->title}}</td>
          <td><a class="btn" href="/" style="cursor: pointer;"><i class="fas fa-pencil-alt"></i></a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>

@include('components.modal-faculty')

@endsection

@section('js')
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script defer type="text/javascript">
 $(function () {
  $("#idTblFaculty").DataTable();
});
</script>
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@endsection
