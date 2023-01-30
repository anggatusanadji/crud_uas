@extends('layout.main')

@section('title', 'Daftar Film')

@section('container')
    <div class="container" >
        <div class="row">
            <div class="col-10">
                <h2 class="mt-3">Daftar Film</h2>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>                        
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Pencipta</th>
                            <th scope="col">Negara</th>
                            <th scope="col">Tanggal rilis</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($film as $flm)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $flm->nama }}</td>
                            <td>{{ $flm->pencipta }}</td>
                            <td>{{ $flm->negara }}</td>
                            <td>{{ $flm->tanggal }}</td>
                            <td>
                                <a href="" class="badge badge-success">edit</a>
                                <a href="" class="badge badge-danger">delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection