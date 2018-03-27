@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <ul class="list-group">
                <a href="home" class="list-group-item list-group-item-action active">Dashboard</a>
                <a href="pegawai" class="list-group-item list-group-item-action">Pegawai</a>
                <a href="dd" class="list-group-item list-group-item-action">Dapur</a>
                <a href="dd" class="list-group-item list-group-item-action">Gudang</a>
                <a href="dd" class="list-group-item list-group-item-action">Akuntansi</a>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
