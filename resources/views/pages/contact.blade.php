@extends('layouts.app')

@section('title')
    Accés membre
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
                <h2>Nous contacter</h2>
                <form action="/contact" method="POST">
                    @csrf
                    <label for="email">{{ __('Adresse E-mail') }}</label>

                    <div class="form-raw">
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <label for="password">{{ __('Nom') }}</label>

                    <div class="form-raw">
                        <input id="nom" type="text" name="nom" required>

                        @if ($errors->has('nom'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('nom') }}</strong>
                            </span>
                        @endif
                    </div>

                    <label for="password">{{ __('Prénom') }}</label>

                    <div class="form-raw">
                        <input id="prenom" type="text" name="prenom" required>

                        @if ($errors->has('prenom'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('prenom') }}</strong>
                            </span>
                        @endif
                    </div>

                    <label for="password">{{ __('Sujet') }}</label>

                    <div class="form-raw">
                        <input id="sujet" type="text" name="sujet" required>

                        @if ($errors->has('sujet'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('sujet') }}</strong>
                            </span>
                        @endif
                    </div>

                    <label for="password">{{ __('Message') }}</label>

                    <div class="form-raw">
                        <textarea name="message" id="message"></textarea>

                        @if ($errors->has('sujet'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('sujet') }}</strong>
                            </span>
                        @endif
                    </div>
                    <button type="submit">Contactez-nous</button>
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
