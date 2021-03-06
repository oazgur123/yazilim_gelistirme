@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Ad Soyad') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Posta Adresi') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="ogrenci_no" class="col-md-4 col-form-label text-md-end">{{ __('????renci Numaras??') }}</label>

                            <div class="col-md-6">
                                <input id="ogrenci_no" type="text" class="form-control @error('ogrenci_no') is-invalid @enderror" name="ogrenci_no" min="9" max="9" value="{{ old('ogrenci_no') }}"  autocomplete="ogrenci_no" autofocus required>

                                @error('ogrenci_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="tc" class="col-md-4 col-form-label text-md-end">{{ __('TC veya Pasaport') }}</label>

                            <div class="col-md-6">
                                <input id="tc" type="text" class="form-control @error('tc') is-invalid @enderror" name="tc" min="11" max="11" value="{{ old('tc') }}"  autocomplete="ogrenci_no" autofocus required>

                                @error('tc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="sinif" class="col-md-4 col-form-label text-md-end">{{ __('S??n??f') }}</label>

                            <div class="col-md-6">
                                <input id="sinif" type="number" class="form-control @error('sinif') is-invalid @enderror" name="sinif" min="1" max="4" value="{{ old('sinif') }}"  autocomplete="ogrenci_no" autofocus required>

                                @error('sinif')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="ogrenci_fakulte" class="col-md-4 col-form-label text-md-end">{{ __('Fak??lte') }}</label>

                            <div class="col-md-6">
                                <select id="ogrenci_fakulte" class="form-select  @error('ogrenci_fakulte') is-invalid @enderror" name="ogrenci_fakulte"  value="{{ old('ogrenci_fakulte') }}"  autocomplete="ogrenci_fakulte" autofocus required>
                                 <option selected>Fak??lte Se??iniz</option>
                                 <option value="Teknoloji">Teknoloji</option>
                                 <option value="M??hendislik">M??hendislik</option>
                                 <option value="??leti??im">??leti??im</option>
                               </select>
                                @error('ogrenci_fakulte')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="ogrenci_bolum" class="col-md-4 col-form-label text-md-end">{{ __('B??l??m??n??z') }}</label>

                            <div class="col-md-6">
                                <select id="ogrenci_bolum" class="form-select  @error('ogrenci_no') is-invalid @enderror" name="ogrenci_bolum"  value="{{ old('ogrenci_bolum') }}"  autocomplete="ogrenci_bolum" autofocus required>
                                 <option selected>B??l??m Se??iniz</option>
                                 <option value="Bili??im Sistemleri">Bili??im Sistemleri</option>
                                 <option value="Enerji M??hendisli??i">Enerji M??hendisli??i</option>
                                 <option value="Makine M??hendisli??i">Makine M??hendisli??i</option>
                               </select>
                                @error('ogrenci_bolum')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="telefon_no" class="col-md-4 col-form-label text-md-end">{{ __('Telefon Numaras??') }}</label>

                            <div class="col-md-6">
                                <input id="telefon_no" type="text" class="form-control @error('ogrenci_no') is-invalid @enderror" name="telefon_no" min="10" max="10" value="{{ old('telefon_no') }}"  autocomplete="telefon_no" autofocus required>

                                @error('telefon_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="dogum" class="col-md-4 col-form-label text-md-end">{{ __('Do??um G??n??n??z') }}</label>

                            <div class="col-md-6">
                                <input id="dogum" type="date" class="form-control @error('dogum') is-invalid @enderror" name="dogum"  value="{{ old('dogum') }}"  autocomplete="dogum" autofocus required>

                                @error('dogum')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>








                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('??ifre') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('??ifre Onaylama') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
