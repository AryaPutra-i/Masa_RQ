@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Daftar Murid</h2>
            <div class="row">
                @foreach($siswa as $siswa)
                    <div class="col-md-4">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3>{{ $siswa->nama }}</h3>
                            </div>
                            <div class="card-body">
                                <p>NIP: {{ $siswa->nis }}</p>
                                <p>Mapel: {{ $siswa->kelas }}</p>
                                <p>Alamat: {{ $siswa->alamat }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection