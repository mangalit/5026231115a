@extends('template')

@section('content')
    <h3>Data Sepeda</h3>

    <a href="/sepeda/tambah" class="btn btn-info"> + Tambah Sepeda Baru</a>

	<form action="/sepeda/cari" method="GET" class="form-inline">
         <label class="form-label">Cari Data Sepeda :</label>
		<input type="text" name="cari" placeholder="Cari Sepeda .." class="form-control">
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>

    <br />

    <table class="table table-striped">
        <tr>
            <th>Merk Sepeda</th>
            <th>Harga (Rp)</th>
            <th>Tersedia</th>
            <th>Berat (kg)</th>
            <th>Opsi</th>
        </tr>
        @foreach ($sepeda as $s)
            <tr>
                <td>{{ $s->merk }}</td>
                <td>{{ $s->harga }}</td>
                <td>{{ $s->tersedia }}</td>
                <td>{{ $s->berat_kg }}</td>
                <td>
                    <a href="/sepeda/edit/{{ $s->id }}" class="btn btn-success">Edit</a>
                    <a href="/sepeda/hapus/{{ $s->id }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $sepeda->links() }} <!-- hanya bisa dipakai dengan paginate, saat get() harus dihapus-->

@endsection
