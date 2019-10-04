@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Kategori Pengumuman</div>

                <div class="card-body">
                    <a href="{!! route('kategori_pengumuman.create') !!}" class="btn btn-primary">Tambah Data</a>

                    <table border="1">
                        <tr>
                            <td>Id</td>
                            <td>User Id</td>
                            <td>Nama</td>
                            <td>Create_at</td>
                            <td>Update_at</td>
                            <td>Aksi</td>
                        </tr>
                        @foreach($listkategoripengumuman as $pengumuman)
                        <tr>
                            <td>{!!$pengumuman->id!!}</td>
                            <td>{!!$pengumuman->users_id!!}</td>
                            <td>{!!$pengumuman->nama!!}</td>
                            <td>{!!$pengumuman->created_at!!}</td>
                            <td>{!!$pengumuman->updated_at!!}</td>
                            <td>
                                <a href="{!! route('kategori_pengumuman.show', [$pengumuman->id]) !!}" class="btn btn-sm btn-success">
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
