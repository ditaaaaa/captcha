@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Berita</div>

                <div class="card-body">
                    <a href="{!! route('galeri.create') !!}" class="btn btn-primary">Tambah Data</a>

                    <table border="1">
                        <tr>
                            <td>Id</td>
                            <td>nama</td>
                            <td>keterangan</td>
                            <td>path</td>
                            <td>User Id</td>
                            <td>Create</td>
                            <td>Update</td>
                            <td>Kategori</td>
                            <td>Aksi</td>
                        </tr>
                        @foreach($listgaleri as $galeri)
                        <tr>
                            <td>{!!$galeri->id!!}</td>
                            <td>{!!$galeri->nama!!}</td>
                            <td>{!!$galeri->keterangan!!}</td>
                            <td>{!!$galeri->path!!}</td>
                            <td>{!!$galeri->users_id!!}</td>
                            <td>{!!$galeri->created_at!!}</td>
                            <td>{!!$galeri->updated_at!!}</td>
                            <td>{!!$galeri->kategori_galeri_id!!}</td>
                            <td>
                                <a href="{!! route('galeri.show', [$galeri->id]) !!}" class="btn btn-sm btn-success">
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
 