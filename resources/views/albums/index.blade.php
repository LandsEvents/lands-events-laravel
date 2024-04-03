<h1>Albums</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }} <br> <br>
    </div>
@endif

@foreach ($albums as $album)

    <img src="{{asset('storage/' . $album->thumbnail) }}" alt="image" style="width: 300px; height: 300px;">
    <h2>{{ $album->name }}</h2>

    <a href="{{ route('albums.edit', $album->id) }}">Bewerken</a>

    <form action="{{ route('albums.destroy', $event->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
        <p>{{ $album->name }}</p>
        <p>{{ $album->location }}</p>
        <p>{{ $album->date }}</p>

@endforeach
