<form action="{{ route('events.store') }}" method="post">
    @csrf
    <input type="text" name="name">
    <input type="date" name="begin_date">
    <input type="date" name="end_date">
    <input type="time" name="time">
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <input type="text" name="category">
    <input type="text" name="location">
    <input type="text" name="price">
    <button type="submit">Aanmaken</button>
</form>
