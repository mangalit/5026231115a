@extends('template')

@section('content')

    <h3>Edit Sepeda</h3>

    <a href="/sepeda"> Kembali</a>

    <br />
    <br />

    @foreach ($sepeda as $s)
        <form action="/sepeda/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $s->id }}"> <br />

            <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Merk </label>
            </div>
            <div class="col-6">
                <input type="text" required="required" name="merk" value="{{ $s->merk }}"> <br />
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Harga (Rp) </label>
            </div>
            <div class="col-6">
                <input type="number" required="required" name="harga" value="{{ $s->harga }}"> <br />
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Tersedia </label>
            </div>
            <div class="col-6">
                <input type="text" required="required" name="tersedia" value="{{ $s->tersedia }}"> <br />
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Berat (kg) </label>
            </div>
            <div class="col-6">
                <input type="number" required="required" name="berat_kg" value="{{ $s->berat_kg }}"> <br />
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
        </form>
    @endforeach
@endsection
