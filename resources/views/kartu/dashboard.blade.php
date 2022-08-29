@extends('kartu.layout')

@section('content')

<br><br><br><br>
<div class="container">
    <div class="d-flex justify-content-center text-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                JUMLAH DATA KARTU INDONESIA MAJU
            </div>
            <div class="card-body">
                {{$kartur}}
            </div>
        </div>
    </div>
</div>





    
@endsection