@extends('layouts.app')

@section('title')
    News
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
        @foreach ($news as $n)
            <div class="news">
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
                <div class="news-content">
                    <h2>{{ $n->title }}</h2>
                    <p>
                    {!! $n->content !!}
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
    </div>
</div>
@stop()
@section('footer')
    <footer>
        <p>Fédération Suisse des Professionnels de la Mécanique Rue du Collège 25 | 2043 BOUDEVILLIERS | <a href="mailto:info@fspm.ch">info@fspm.ch</a></p>
    </footer>
@stop()
