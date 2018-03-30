@extends('layouts.app')

@section('title')
    Accueil
@stop()
@section('content')
    <div class="banner">
        <div class="opacity">
            <h1>Fédération Suisse <br> des Professionnels de la Mécanique</h1>
            <span class="cut-banner"></span>
            <h2>Slogan ...</h2>
            <div class="div-btn">
                <a href="/register" class="btn btn-incription">Devenir membre</a>
                <a href="/login" class="btn btn-connexion">Accés membre</a>
            </div>
        </div>
    </div>
    <div class="allnews">
        @foreach ($news as $n)
            <div class="news">
                @if ($n->image != 'null')
                    <div class="news-banner" style="background-image:url({{ asset('images/news/'.$n->image)}});">
                        <span class="news-auteur">{{ $n->user->name }}</span>
                        <span class="news-date">
                            <span class="date-mois">
                                {{ $n->created_at->format('M')}}.
                            </span>
                            <span class="date-jour">
                                {{ $n->created_at->format('d')}}
                            </span>
                        </span>
                        <span class="news-heure">
                            Posté à {{ $n->created_at->format('h:m:s') }}
                        </span>
                    </div>
                @endif
                <div class="news-content">
                    <h2>{{ $n->title }}</h2>
                    <p>
                    {{ $n->content }}
                    </p>
                    <div class="tags">
                        @foreach ($n->tags as $tag)
                           <a href="/tag/{{$tag->slug}}" class="tag">#{{$tag->name}}</a>
                        @endforeach
                    </div>
                </div>
                <div class="news-footer">
                    <a href="/post/{{ $n->slug }}" class="footer-link">Voir la news</a>
                </div>
            </div>  
        @endforeach
        <a href="/post" class="btn btn-news">
            voir toutes les news
        </a>
    </div>
@stop()