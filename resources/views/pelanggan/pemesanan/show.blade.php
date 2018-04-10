@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 mb-3">
            <div class="card mb-3" style="max-width: 20rem;">
                <div class="card-header">Profil</div>
                <div class="card-body">
                    <div style="text-align: center">
                        <img src="" style="width: 100px;height: 100px;border-radius: 50%;" />
                        <h4 class="card-title">
                            {{$pelanggan['nama_pelanggan']}}
                        </h4>
                        <p class="card-text">
                            {{$pelanggan['email_pelanggan']}}
                        </p>
                    </div>
                </div>
            </div>
            <ul class="list-group">
                <a href="{{URL('pelanggan')}}" class="list-group-item list-group-item-action">Dashboard</a>
                <a href="{{URL('pelanggan/reservasi')}}" class="list-group-item list-group-item-action">Reservasi</a>
                <a href="{{URL('pelanggan/pemesanan')}}" class="list-group-item list-group-item-action active">Pemesanan</a>
                <a href="{{URL('pelanggan/pengaturan')}}" class="list-group-item list-group-item-action">Pengaturan</a>
                <a href="{{URL('pelanggan/logout')}}" class="list-group-item list-group-item-action">Logout</a>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Detil Pemesanan</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{URL('pelanggan/pemesanan/create')}}" class="btn btn-success">Pesan</a>


                    <table class="table table-bordered mt-3">
                        <thead>
                            <tr>
                                <th scope="col">Nama Hidangan</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Total Harga Hidangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($detil_pemesanan as $detil_pemesanan)
                            <tr>
                                <td>{{$detil_pemesanan->nama_hidangan}}</td>
                                <td>{{$detil_pemesanan->jenis_hidangan}}</td>
                                <td>{{$detil_pemesanan->harga_hidangan}}</td>
                                <td>{{$detil_pemesanan->jumlah_hidangan}}</td>
                                <td>{{$detil_pemesanan->total_harga_hidangan}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
