<form action="{{ route('events.update', $event->id) }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="name" value=" {{ $event->name }}">
    @error('name')
    {{ $message }}
    @enderror
    <input type="datetime-local" name="begin_date" {{ $event->begin_date }}>
    @error('begin_date')
    {{ $message }}
    @enderror
    <input type="datetime-local" name="end_date" {{ $event->end_date }}>
    @error('end_date')
    {{ $message }}
    @enderror
    <textarea name="description" id="" cols="30" rows="10" {{ $event->description }} placeholder="description"></textarea>
    @error('description')
    {{ $message }}
    @enderror
    <input type="text" name="category" placeholder="category" value=" {{ $event->category }}">
    @error('category')
    {{ $message }}
    @enderror
    <input type="text" name="location" placeholder="location" value=" {{ $event->location }}">
    @error('location')
    {{ $message }}
    @enderror
    <input type="number" name="price" placeholder="price" {{ $event->price }}>
    @error('price')
    {{ $message }}
    @enderror
    <button type="submit">Bewerken</button>
</form>
