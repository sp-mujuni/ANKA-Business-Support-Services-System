@extends('layouts.shop')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Booking form</h1>
        </div><!-- /.col -->
        
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

<section class="content">
<div class="container-fluid">
    <form method="post" action="{{ route('products.products.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <div class="row">
                <label class="col-md-3">Customer Name</label>
                <div class="col-md-6"><input type="text" name="cust_name" value="{{ Auth::user()->name }}" class="form-control"></div>
                <div class="clearfix"></div>
            </div>
            <br>
            <div class="row">
                <label class="col-md-3">Product Name</label>
                <div class="col-md-6"><input type="text" name="prod_name" placeholder="Type it here" class="form-control"></div>
                <div class="clearfix"></div>
            </div>
            <br>
            <div class="row">
                <label class="col-md-3">Quantity</label>
                <div class="col-md-6"><input type="number" name="quantity" class="form-control"></div>
                <div class="clearfix"></div>
            </div>
        </div> 
        <div class="form-group" onclick="window.alert('Product has been added to your Cart')">
            <input type="submit" class="btn btn-primary" value="Confirm">
        </div>  
    </form>    
</div>
</section>
@endsection