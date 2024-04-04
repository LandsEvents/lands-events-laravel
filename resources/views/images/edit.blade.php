<form action="{{ route('images.update', $image->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="image_title" placeholder="image_title" value=" {{ $image->image_title }}">
    @error('image_title')
    {{ $message }}
    @enderror
    <input type="text" name="description" {{ $image->description }}>
    @error('description')
    {{ $message }}
    @enderror
    <input type="number" name="event_id" {{ $image->event_id }}>
    @error('event_id')
    {{ $message }}
    @enderror
    <input type="number" name="album_id" {{ $image->album_id }}>
    @error('album_id')
    {{ $message }}
    @enderror
    <input type="file" name="image" value=" {{ $image->image }}">
    <button type="submit">Bewerken</button>
</form>
