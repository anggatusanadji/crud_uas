@extends('layout.main')

@section('title', 'Detail Film')

@section('container')
    <div class="container" >
        <div class="row">
            <div class="col-6">
                <h2 class="mt-3">Detail Film</h2>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $film->nama }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $film->pencipta }}</h6>
                        <p class="card-text">{{ $film->negara }}</p>
                        <p class="card-text">{{ $film->tanggal }}</p>
                        
                        <a href="{{ $film->id }}/edit" class="btn btn-primary">Edit</a>

                        <form action="{{ $film->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                        <a href="/films" class="card-link">Kembali</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection