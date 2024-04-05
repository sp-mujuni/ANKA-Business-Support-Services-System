@extends('layouts.adminlayout')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Customer activity</h1>
        </div><!-- /.col -->
        
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
        <table class="table table-bordered table-striped">
            <tr>
                <th>Customer Name</th>
                <th>Product Name</th>
                <th>Quantity bought</th>
            </tr>
            @foreach($bookings as $bk)
            <tr>
                <td>{{ $bk->customer_name }}</td>
                <td>{{ $bk->product_name }}</td>
                <td>{{ $bk->quantity }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection