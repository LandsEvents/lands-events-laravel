<form action="{{ route('news.store') }}" method="post">
    @csrf
    <input type="text" name="news_title" placeholder="name">
    @error('news_title')
    {{ $message }}
    @enderror
    <input type="text" name="body">
    @error('body')
    {{ $message }}
    @enderror
    <input type="" name="event_id">
    @error('number')
    {{ $message }}
    @enderror
    <button type="submit">Aanmaken</button>
</form>
