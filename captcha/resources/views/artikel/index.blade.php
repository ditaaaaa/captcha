@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Artikel</div>

                <div class="card-body">
                    <a href="{!! route('artikel.create') !!}" class="btn btn-primary">Tambah Data</a>

                    <table border="1">
                        <tr>
                            <td>Id</td>
                            <td>Judul</td>
                            <td>Isi</td>
                            <td>Kategori</td>
                            <td>User Id</td>
                            <td>Create</td>
                            <td>Aksi</td>
                        </tr>
                        @foreach($listartikel as $artikel)
                        <tr>
                            <td>{!!$artikel->id!!}</td>
                            <td>{!!$artikel->judul!!}</td>
                            <td>{!!$artikel->isi!!}</td>
                            <td>{!!$artikel->kategori!!}</td>
                            <td>{!!$artikel->users_id!!}</td>
                            <td>{!!$artikel->created_at!!}</td>
                            <td>
                                <a href="{!! route('artikel.show', [$artikel->id]) !!}" class="btn btn-sm btn-success">
                                    Lihat
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
