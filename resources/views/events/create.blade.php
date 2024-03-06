<form action="{{ route('events.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="name">
    @error('name')
    {{ $message }}
    @enderror
    <input type="datetime-local" name="begin_date">
    @error('begin_date')
    {{ $message }}
    @enderror
    <input type="datetime-local" name="end_date">
    @error('end_date')
    {{ $message }}
    @enderror
    <textarea name="description" id="" cols="30" rows="10" placeholder="description"></textarea>
    @error('description')
    {{ $message }}
    @enderror
    <input type="text" name="category" placeholder="category">
    @error('category')
    {{ $message }}
    @enderror
    <input type="text" name="location" placeholder="location">
    @error('location')
    {{ $message }}
    @enderror
    <input type="number" name="price" placeholder="price">
    @error('price')
    {{ $message }}
    @enderror
    <input type="file" name="image">
    @error('image')
    {{ $message }}
    @enderror
    <button type="submit">Aanmaken</button>
</form>
