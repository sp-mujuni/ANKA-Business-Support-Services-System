@extends('layouts.adminlayout')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Participants' Products</h1>
        </div><!-- /.col -->
        
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
        <table class="table table-bordered table-striped">
            <tr>
                <th>Product Name</th>
                <th>Stock Size</th>
            </tr>
            @foreach($products as $pr)
            <tr>
                <td>{{ $pr->proname }}</td>
                
                <td>{{ $pr->stocksize }}</td>
            </tr>
            @endforeach

        </table>
    </div>
</div>
@endsection