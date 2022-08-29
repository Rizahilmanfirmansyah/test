@extends('kartu.layout')

@section('content')

<br>
<div class="d-flex justify-content-center">
<div class="card" style="width: 70rem;">
<div class="container">
    <div class="text-center">
        <br><br>
        <h3>KARTU INDONESIA MAJU</h3>
    </div>
        <br>
        <a href="{{route('kartusip.create')}}" class="btn btn-success">Tambah Kartu</a>
        <br><br>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NOMOR KARTU</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>LAHIR</th>
                    <th>NIK</th>
                    <th>FASILITAS</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            @foreach ($kartur as $key=>$kartu)
            <tbody>
                <tr>
                    <td>{{$kartu->id}}</td>
                    <td>{{$kartu->nomorkartu}}</td>
                    <td>{{$kartu->nama}}</td>
                    <td>{{$kartu->alamat}}</td>
                    <td>{{$kartu->lahir}}</td>
                    <td>{{$kartu->nik}}</td>
                    <td>{{$kartu->fasilitas}}</td>
                    <td>
                        <form action="{{route('kartusip.destroy', $kartu->id)}}" method="post">
                            
                            {{-- <a href="{{route('kartusip.edit', $kartu->id)}}" class="btn btn-success bi bi-pencil"></a> --}}

                            <a href="{{route('kartusip.show', $kartu->id)}}" class="btn btn-primary bi bi-card-text"> Print</a>

                            @csrf
                            @method('DELETE')

                            {{-- <button type="submit" class="btn btn-danger bi bi-trash"></button> --}}

                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
</div>
</div>
<script>
    
</script>
    
@endsection
