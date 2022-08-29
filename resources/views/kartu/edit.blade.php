@extends('template.layout')

@section('content')

<br><br><br>
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Data Barang
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Waduh!</strong>Kesalahan input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('barangsip.update', $barangku->id)}}" method="post" id="myform">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="namabarang">NAMA BARANG</label>
                    <input type="text" class="form-control" value="{{$barangku->namabarang}}" name="namabarang">
                </div>
                <div class="form-group">
                    <label for="namabarang">STOK AWAL</label>
                    <input type="text" class="form-control" name="stokawal">
                </div>
                <div class="form-group">
                    <label for="namabarang">HARGA BARANG</label>
                    <input type="text" class="form-control" name="hargabarang" placeholder="Rp">
                </div>
                <div class="form-group">
                    <label for="namabarang">BARANG KELUAR</label>
                    <input type="text" class="form-control" name="barangkeluar">
                </div>
                <div class="form-group">
                    <label for="namabarang">STOK AKHIR</label>
                    <input type="text" class="form-control" name="stokakhir">
                </div>
                <button type="submit" class="btn btn-success">Tambah</button>
                <a href="{{route('barangsip.index')}}" class="btn btn-primary">Kembali</a>
            </form>
            </div>
        </div>
    </div>
</div>
<br><br><br>
    
@endsection