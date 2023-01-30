@extends('layout.main')

@section('title', 'Form Tambah Data Mahasiswa')

@section('container')
    <div class="container" >
        <div class="row">
            <div class="col-8">
                <h2 class="mt-3">Form Tambah Data Film</h2>

                <form method="post" action="/films">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" 
                        placeholder="Masukkan Nama" name="nama" value="{{old('nama')}}">
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pencipta">Pencipta</label>
                        <input type="text" class="form-control  @error('pencipta') is-invalid @enderror" id="pencipta" 
                        placeholder="Masukkan Pencipta" name="pencipta" value="{{old('pencipta')}}">
                        @error('pencipta')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="negara">Negara</label>
                        <input type="text" class="form-control @error('negara') is-invalid @enderror" id="negara" 
                        placeholder="Masukkan Negara" name="negara" value="{{old('negara')}}">
                        @error('negara')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" 
                        placeholder="Masukkan Tanggal" name="tanggal" value="{{old('tanggal')}}">
                        @error('tanggal')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror  
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data!</button>
                </form>

            </div>
        </div>
    </div>
@endsection