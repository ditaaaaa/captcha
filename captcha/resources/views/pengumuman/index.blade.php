@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Pengumuman</div>

                <div class="card-body">
                    <a href="{!! route('pengumuman.create') !!}" class="btn btn-primary">Tambah Data</a>

                    <table border="1">
                        <tr>
                            <td>Id</td>
                            <td>Judul</td>
                            <td>Isi</td>
                            <td>User Id</td>
                            <td>Create</td>
                            <td>Update</td>
                            <td>Kategori</td>
                            <td>Aksi</td>
                        </tr>
                        @foreach($listpengumuman as $pengumuman)
                        <tr>
                            <td>{!!$pengumuman->id!!}</td>
                            <td>{!!$pengumuman->judul!!}</td>
                            <td>{!!$pengumuman->isi!!}</td>
                            <td>{!!$pengumuman->users_id!!}</td>
                            <td>{!!$pengumuman->created_at!!}</td>
                            <td>{!!$pengumuman->updated_at!!}</td>
                            <td>{!!$pengumuman->kategori_pengumuman_id!!}</td>
                            <td>
                                <a href="{!! route('pengumuman.show', [$pengumuman->id]) !!}" class="btn btn-sm btn-success">
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
 