@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">List Pengumuman</div>

					<div class="card-body">

						<div class="form-group row">
							<label class="col-md-4 col-from-label text-md-right">ID</label>
							<label class="col-md-8 col-from-label text-md-left">{!! $Pengumuman->id !!}</label>
						</div>

						<div class="form-group row">
							<label class="col-md-4 col-from-label text-md-right">Judul</label>
							<label class="col-md-8 col-from-label text-md-left">{!! $Pengumuman->judul !!}</label>
						</div>

						<div class="form-group row">
							<label class="col-md-4 col-from-label text-md-right">Isi</label>
							<label class="col-md-8 col-from-label text-md-left">{!! $Pengumuman->isi !!}</label>
						</div>

						<div class="form-group row">
							<label class="col-md-4 col-from-label text-md-right">User Id</label>
							<label class="col-md-8 col-from-label text-md-left">{!! $Pengumuman->users_id !!}</label>
						</div>

						<div class="form-group row">
							<label class="col-md-4 col-from-label text-md-right">Create</label>
							<label class="col-md-8 col-from-label text-md-left">{!! $Pengumuman->created_at !!}</label>
						</div>

						<div class="form-group row">
							<label class="col-md-4 col-from-label text-md-right">Update</label>
							<label class="col-md-8 col-from-label text-md-left">{!! $Pengumuman->updated_at !!}</label>
						</div>

						<div class="form-group row">
							<label class="col-md-4 col-from-label text-md-right">Kategori Pengumuman</label>
							<label class="col-md-8 col-from-label text-md-left">{!! $Pengumuman->kategori_pengumuman_id !!}</label>
						</div>

						<div class="from-group row mb-0">
							<div class="col-md-6 offset-md-4">
								<a href="{!! route('pengumuman.index') !!}" class="btn btn-primary">
									Back
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection