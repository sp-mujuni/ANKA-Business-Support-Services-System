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
            @if(count($products))
            @foreach($products as $pr)
            <tr>
                <td>{{ $pr->proname }}</td>
                <td>{{ $pr->prodescription }}</td>
                <td>{{ $pr->prorate }}</td>
                <td><a href="{{ route('products.products.create', $pr->proname) }}" class="btn btn-primary">Book</a></td>
            </tr>
            @endforeach
            @else
            <tr><td colspan="6">The product stock is either empty or sold out!</td></tr>
            @endif
        </table>
    </div>
</section>
@endsection