@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Daftar Guru</h2>
            <div class="row">
                @foreach($guru as $guru)
                    <div class="col-md-4">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3>{{ $guru->nama }}</h3>
                            </div>
                            <div class="card-body">
                                <p>NIP: {{ $guru->nip }}</p>
                                <p>Mapel: {{ $guru->mapel }}</p>
                                <p>Alamat: {{ $guru->alamat }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection