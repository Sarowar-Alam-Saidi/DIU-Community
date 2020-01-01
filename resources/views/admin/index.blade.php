@extends('admin.layout.master')

@section('content')
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="{{ url('/backend/deshboard') }}">Dashboard</a></li>
</ol>
<div class="col-md-12">     
    <h1 style="text-align: center;">Welcome to DIU Community</h1>
</div><!--col-md-12 end-->
@endsection