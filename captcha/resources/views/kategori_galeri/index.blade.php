@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Kategori Galeri</div>

                <div class="card-body">
                    <a href="{!! route('kategori_galeri.create') !!}" class="btn btn-primary">Tambah Data</a>

                    <table border="1">
                        <tr>
                            <td>Id</td>
                            <td>User Id</td>
                            <td>Nama</td>
                            <td>Create_at</td>
                            <td>Update_at</td>
                            <td>Aksi</td>
                        </tr>
                        @foreach($listkategorigaleri as $galeri)
                        <tr>
                            <td>{!!$galeri->id!!}</td>
                            <td>{!!$galeri->users_id!!}</td>
                            <td>{!!$galeri->nama!!}</td>
                            <td>{!!$galeri->created_at!!}</td>
                            <td>{!!$galeri->updated_at!!}</td>
                            <td>
                                <a href="{!! route('kategori_galeri.show', [$galeri->id]) !!}" class="btn btn-sm btn-success">
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
