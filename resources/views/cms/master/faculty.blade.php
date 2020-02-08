@extends('layouts.cms')

@section('content')
<div class="container pt-2">
 <div class="card">
  <div class="card-header">
    <h3 class="card-title">Faculty List</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="idTblFaculty" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Rendering engine</th>
          <th>Browser</th>
          <th>Platform(s)</th>
          <th>Engine version</th>
          <th>CSS grade</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Trident</td>
          <td>Internet
            Explorer 4.0
          </td>
          <td>Win 95+</td>
          <td> 4</td>
          <td>X</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>
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
