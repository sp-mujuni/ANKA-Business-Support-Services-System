@extends('layouts.shop')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Products</h1>
        </div><!-- /.col -->
        
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
        <table class="table table-bordered table-striped">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Rate</th>
                <th>Action</th>

            </tr>
            @foreach($products as $pr)
            <tr>
                <td>{{ $pr->name }}</td>
                <td>{{ $pr->description }}</td>
                <td>{{ $pr->rate }}</td>
                <td><a href="#" class="btn btn-info">Book</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection