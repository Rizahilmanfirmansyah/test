@extends('kartu.layout')

@section('content')

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 50rem;">
            <div class="card-header">
                <div class="card-header" style="background-color: white;">
                    <div class="row">
                        <div class="col-2">
                            <img src="https://www.smkn11bdg.sch.id/src/images/11.png" alt="" style="width:100px; height:120px">
                        </div>
                        <div class="col-8 text-center"><br><br>
                            <h3>KARTU INDONESIA<br>MAJU</h3>
                        </div>
                        <div class="col-2">
                            <img src="https://www.smkn11bdg.sch.id/src/images/11.png"  alt="" style="width:100px; height:120px;">
                        </div>
                    </div>
            </div>
            <div class="card-body">
                <form action="{{route('kartusip.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="namabarang">NOMOR KARTU</label>
                        <input type="text" class="form-control" name="nomorkartu">
                    </div>
                    <div class="form-group">
                        <label for="namabarang">NAMA</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="namabarang">ALAMAT</label>
                        <input type="text" class="form-control" name="alamat" >
                    </div>
                    <div class="form-group">
                        <label for="namabarang">LAHIR</label>
                        <input type="text" class="form-control" name="lahir">
                    </div>
                    <div class="form-group">
                        <label for="namabarang">NIK</label>
                        <input type="text" class="form-control" name="nik">
                    </div>
                    <div class="form-group">
                        <label for="namabarang">FASILITAS</label>
                        <input type="text" class="form-control" name="fasilitas">
                    </div>
                    <button type="submit" class="btn btn-success">Tambah</button>
                    <a href="{{route('kartusip.index')}}" class="btn btn-primary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection