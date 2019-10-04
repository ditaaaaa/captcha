@csrf

   <div class="form-group row">
        <label for="judul" class="col-md-4 col-form-label text-md-right">{{ __('Judul') }}</label>

            <div class="col-md-6">
                <input id="judul" type="judul" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" required autocomplete="judul" autofocus>

                    @error('judul')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                                </span>
                    @enderror
            </div>
    </div>

 <div class="form-group row">
        <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

            <div class="col-md-6">
                <input id="users_id" type="hidden" class="form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{ Auth::user()->id}}" required autocomplete="users_id" autofocus>

                    @error('users_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                                </span>
                    @enderror
            </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
             <button type="submit" class="btn btn-primary">
                 {{ __('Simpan Data') }}
             </button>
             <a href = "{!! route('kategori_artikel.index') !!}" class="btn btn-danger">
                {{ __('Batal') }}
            </a>
            
        </div>
    </div>