@extends('template')

@section('content')

    <h3>Data Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />
    {{-- action mengarah ke pegawai/store untuk dilakukan routing --}}
    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label"> </label>
            </div>
            <div class="col-6">
                <input type="text" name="nama" required="required" class="form-control">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label"> </label>
            </div>
            <div class="col-6">
                <input type="text" name="jabatan" required="required" class="form-control">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label"> </label>
            </div>
            <div class="col-6">
                <input type="number" name="umur" required="required" class="form-control">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label"> </label>
            </div>
            <div class="col-6">
                <textarea name="alamat" required="required"></textarea class="form-control">
            </div>
        </div>

        <input type="submit" value="Simpan Data" class ="btn btn-succes">
    </form>

@endsection
