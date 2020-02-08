@extends('layouts.cms')

@section('content')
<div class="container p-2">
   <!-- Info boxes -->
   <div class="row">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><i class="fas fa-graduation-cap"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total Addmission</span>
            <span class="info-box-number">
             2720
            
          </span>
      </div>
      <!-- /.info-box-content -->
  </div>
  <!-- /.info-box -->
</div>
<!-- /.col -->
<div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-danger elevation-1"><i class="far fa-money-bill-alt"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">TOTAL AMOUNT</span>
        <span class="info-box-number">41,410</span>
    </div>
    <!-- /.info-box-content -->
</div>
<!-- /.info-box -->
</div>
<!-- /.col -->

<!-- fix for small devices only -->
<div class="clearfix hidden-md-up"></div>

<div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-male"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Total male students</span>
        <span class="info-box-number">760</span>
    </div>
    <!-- /.info-box-content -->
</div>
<!-- /.info-box -->
</div>
<!-- /.col -->
<div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-female"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Total female students</span>
        <span class="info-box-number">2,000</span>
    </div>
    <!-- /.info-box-content -->
</div>
<!-- /.info-box -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
@endsection
