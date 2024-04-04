<form action="{{ route('images.store') }}" method="post">
    @csrf
    <input type="text" name="news_title" placeholder="image_title">
    @error('images_title')
    {{ $message }}
    @enderror
    <input type="text" name="description" placeholder="description">
    @error('description')
    {{ $message }}
    @enderror
    <input type="number" name="event_id" placeholder="event_id">
    @error('event_id')
    {{ $message }}
    @enderror
    <input type="number" name="album_id" placeholder="album_id">
    @error('album_id')
    {{ $message }}
    @enderror
    <input type="file" name="image">
    @error('image')
    {{ $message }}
    @enderror
    <button type="submit">Aanmaken</button>
</form>
