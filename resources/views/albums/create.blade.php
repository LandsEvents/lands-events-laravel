<form action="{{ route('albums.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="name">
    @error('name')
    {{ $message }}
    @enderror
    <input type="text" name="location" placeholder="location">
    @error('location')
    {{ $message }}
    @enderror
    <input type="date" name="date">
    @error('date')
    {{ $message }}
    @enderror
    <button type="submit">Aanmaken</button>
</form>
