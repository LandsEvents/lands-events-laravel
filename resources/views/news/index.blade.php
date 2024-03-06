<h1>news</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }} <br> <br>
    </div>
@endif

@foreach ($articles as $article)
    <h2>{{ $article->news_title }}</h2>

    <a href="{{ route('news.edit', $article->id) }}">Bewerken</a>

    <form action="{{ route('news.destroy', $article->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
        {{ $article->news_title }}
        {{ $article->body }}
        {{ $article->event_id }}
    </form>
@endforeach
