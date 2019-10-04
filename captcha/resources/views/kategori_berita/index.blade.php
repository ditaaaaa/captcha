@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Kategori Berita</div>

                <div class="card-body">
                    <a href="{!! route('kategori_berita.create') !!}" class="btn btn-primary">Tambah Data</a>

                    <table border="1">
                        <tr>
                            <td>Id</td>
                            <td>User Id</td>
                            <td>Nama</td>
                            <td>Create_at</td>
                            <td>Update_at</td>
                            <td>Aksi</td>
                        </tr>
                        @foreach($listkategoriberita as $berita)
                        <tr>
                            <td>{!!$berita->id!!}</td>
                            <td>{!!$berita->users_id!!}</td>
                            <td>{!!$berita->nama!!}</td>
                            <td>{!!$berita->created_at!!}</td>
                            <td>{!!$berita->updated_at!!}</td>
                            <td>
                                <a href="{!! route('kategori_berita.show', [$berita->id]) !!}" class="btn btn-sm btn-success">
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
