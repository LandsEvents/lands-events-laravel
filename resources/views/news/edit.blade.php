<form action="{{ route('news.update', $article->id) }}" method="post">
    @csrf
    <input type="text" name="news_title" placeholder="artikel" value=" {{ $article->news_title }}">
    @error('news_title')
    {{ $message }}
    @enderror
    <input type="text" name="body" {{ $article->body }}>
    @error('body')
    {{ $message }}
    @enderror
    <input type="number" name="event_id" {{ $article->event_id }}>
    @error('event_id')
    {{ $message }}
    @enderror
    <button type="submit">Bewerken</button>
</form>
