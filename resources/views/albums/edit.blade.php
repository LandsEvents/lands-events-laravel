<form action="{{ route('albums.update', $album->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="name" value=" {{ $album->name }}">
    @error('name')
    {{ $message }}
    @enderror
    <input type="text" name="location" placeholder="location" value=" {{ $album->location }}">
    @error('location')
    {{ $message }}
    @enderror
    <input type="date" name="date" {{ $album->date }}>
    @error('date')
    {{ $message }}
    @enderror
    <input type="file" name="image" value=" {{ $album->thumbnail }}">
    <button type="submit">Bewerken</button>
</form>
