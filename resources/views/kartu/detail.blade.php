@extends('kartu.layout')


@section('content')

<br><br><br><br>
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 50rem;">
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
                @foreach ($kartur as $item)
                <table class="table">
                    <tr>
                        <td>NOMOR KARTU</td>
                        <td>:</td>
                        <td>{{$item->nomorkartu}}</td>
                    </tr>
                    <tr>
                        <td>NAMA </td>
                        <td>:</td>
                        <td>{{$item->nama}}</td>
                    </tr>
                    <tr>
                        <td>ALAMAT</td>
                        <td>:</td>
                        <td>{{$item->alamat}}</td>
                    </tr>
                    <tr>
                        <td>LAHIR</td>
                        <td>:</td>
                        <td>{{$item->lahir}}</td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td>{{$item->nik}}</td>
                    </tr>
                    <tr>
                        <td>FASILITAS</td>
                        <td>:</td>
                        <td>{{$item->fasilitas}}</td>
                    </tr>
                </table>
                @endforeach
                <br>
                <div class="d-flex justify-content-center">
                <a href="{{route('kartusip.index')}}" class="btn btn-success">Kembali</a>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center">
{{ $kartur->links()}}
<br>
</div>
<br><br>


    
@endsection