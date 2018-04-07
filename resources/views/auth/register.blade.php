@extends('layouts.app')

@section('title')
    Devenir membre
@stop()
@section('class')
    class="fixed-scr"
@stop() 
@section('body')
    class="relative"
@stop()   
@section('content')
<div class="content">
    <div class="allnews">
        <div class="news">
            <div class="news-content">
                <h2>Devenir membre</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                
                    <div class="form-group row">
                        <label for="fldsex" class="col-md-4 col-form-label text-md-right">{{ __('Titre') }}</label>
                
                        <div class="form-raw">
                            <select name="fldsex">
                                <option value="-" selected="">-</option>
                                <option value="F">Madame</option>
                                <option value="H">Monsieur</option>
                            </select>
                
                            @if ($errors->has('fldsex'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('fldsex') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
                
                        <div class="form-raw">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                
                            @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>
                
                        <div class="form-raw">
                            <input id="prenom" type="text" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" name="prenom" value="{{ old('prenom') }}" required autofocus>
                
                            @if ($errors->has('prenom'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('prenom') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                
                    <div class="form-group row">
                        <label for="adresse" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>
                
                        <div class="form-raw">
                            <input id="adresse" type="adresse" class="form-control{{ $errors->has('adresse') ? ' is-invalid' : '' }}" name="adresse" value="{{ old('adresse') }}" required>
                            <input id="adresse" type="adresse" class="form-control{{ $errors->has('adresse') ? ' is-invalid' : '' }}" name="adresse" value="{{ old('adresse') }}" required>
                
                            @if ($errors->has('adresse'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('adresse') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="npa" class="col-md-4 col-form-label text-md-right">{{ __('NPA') }}</label>
                
                        <div class="form-raw">
                            <input id="npa" type="text" class="form-control{{ $errors->has('npa') ? ' is-invalid' : '' }}" name="npa" value="{{ old('npa') }}" required autofocus>
                
                            @if ($errors->has('npa'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('npa') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>
                
                        <div class="form-raw">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                
                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmation du mot de passe') }}</label>
                
                        <div class="form-raw">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>
                
                    <div class="form-group row mb-0">
                        <div class="form-raw offset-md-4">
                            <button type="submit">
                               S'enregister
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop()
@section('footer')
    <footer>
        <p>Fédération Suisse des Professionnels de la Mécanique Rue du Collège 25 | 2043 BOUDEVILLIERS | <a href="mailto:info@fspm.ch">info@fspm.ch</a></p>
    </footer>
@stop()