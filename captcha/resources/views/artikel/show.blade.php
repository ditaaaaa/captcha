@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">List Artikel</div>

					<div class="card-body">

						<div class="form-group row">
							<label class="col-md-4 col-from-label text-md-right">ID</label>
							<label class="col-md-8 col-from-label text-md-left">{!! $Artikel->id !!}</label>
						</div>

						<div class="form-group row">
							<label class="col-md-4 col-from-label text-md-right">Judul</label>
							<label class="col-md-8 col-from-label text-md-left">{!! $Artikel->judul !!}</label>
						</div>

						<div class="form-group row">
							<label class="col-md-4 col-from-label text-md-right">Isi</label>
							<label class="col-md-8 col-from-label text-md-left">{!! $Artikel->isi !!}</label>
						</div>

						<div class="form-group row">
							<label class="col-md-4 col-from-label text-md-right">User Id</label>
							<label class="col-md-8 col-from-label text-md-left">{!! $Artikel->users_id !!}</label>
						</div>

						<div class="form-group row">
							<label class="col-md-4 col-from-label text-md-right">Create</label>
							<label class="col-md-8 col-from-label text-md-left">{!! $Artikel->created_at !!}</label>
						</div>

						<div class="form-group row">
							<label class="col-md-4 col-from-label text-md-right">Update</label>
							<label class="col-md-8 col-from-label text-md-left">{!! $Artikel->updated_at !!}</label>
						</div>

						<div class="form-group row">
							<label class="col-md-4 col-from-label text-md-right">Kategori Artikel</label>
							<label class="col-md-8 col-from-label text-md-left">{!! $Artikel->kategori_artikel_id !!}</label>
						</div>

						<div class="from-group row mb-0">
							<div class="col-md-6 offset-md-4">
								<a href="{!! route('artikel.index') !!}" class="btn btn-primary">
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