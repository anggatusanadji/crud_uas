@extends('layout.main')

@section('title', 'Daftar Film')

@section('container')
    <div class="container" >
        <div class="row">
            <div class="col-6">
                <h2 class="mt-3">Daftar Film</h2>

                <a href="/films/create" class="btn btn-primary my-3">Tambah Data Film</a> 

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <ul class="list-group">
                    @foreach( $films as $film )
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $film->nama }}
                            <a href="/films/{{ $film->id }}" class="badge badge-info">detail</a>
                        </li> 
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection