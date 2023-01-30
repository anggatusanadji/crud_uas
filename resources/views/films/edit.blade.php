@extends('layout.main')

@section('title', 'Form Ubah Data Mahasiswa')

@section('container')
    <div class="container" >
        <div class="row">
            <div class="col-8">
                <h2 class="mt-3">Form Ubah Data Film</h2>

                <form method="post" action="/films/{{ $film->id }}">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" 
                        placeholder="Masukkan Nama" name="nama" value="{{ $film->nama }}">
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pencipta">Pencipta</label>
                        <input type="text" class="form-control  @error('pencipta') is-invalid @enderror" id="pencipta" 
                        placeholder="Masukkan Pencipta" name="pencipta" value="{{ $film->pencipta }}">
                        @error('pencipta')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="negara">Negara</label>
                        <input type="text" class="form-control @error('negara') is-invalid @enderror" id="negara" 
                        placeholder="Masukkan Negara" name="negara" value="{{ $film->negara }}">
                        @error('negara')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" 
                        placeholder="Masukkan Tanggal" name="tanggal" value="{{ $film->tanggal }}">
                        @error('tanggal')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror  
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah Data!</button>
                </form>

            </div>
        </div>
    </div>
@endsection