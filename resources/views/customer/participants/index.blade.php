@extends('layouts.shop')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Participants</h1>
        </div><!-- /.col -->
        
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
        <table class="table table-bordered table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date of Birth</th>
            </tr>
            @foreach($participants as $p)
            <tr>
                <td>{{ $p->participant_id }}</td>
                <td>{{ $p->parname }}</td>
                <td>{{ $p->dateOfBirth }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection