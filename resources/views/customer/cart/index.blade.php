@extends('layouts.shop')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Shopping Cart</h1>
        </div><!-- /.col -->
        
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

<section class="content">
    <div class="container-fluid">

        <table class="table table-bordered table-striped">
            <tr>
                <th>Booking ID</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            
            @if(count($bookings))
            @foreach($bookings as $b)
            <tr>
                <td>{{ $b->id }}</td>
                <td>{{ $b->product_name }}</td>
                <td>{{ $b->quantity }}</td>
                <td>{{ $b->amount }}</td>
                <td>{{ $b->created_at }}</td>
                <td><a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Remove</a>
                    <form action="{{ route('products.products.destroy', $b->id) }}" method="post">
                    @method('DELETE')
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                </td>
            </tr>
            @endforeach
            <tr><td colspan="6">
                    <div class="btn btn-primary" onclick="window.alert('Thank you for shopping with us! The payment process will be initiated soon.')">
                    Proceed to checkout
                    </div>
            </td></tr>
            @else
            <tr><td colspan="6">Shopping Cart is empty!</td></tr>
            @endif
        </table>
    </div>
</div>
@endsection